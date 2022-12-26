<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    // move to signup and login page
    public function create()
    {
        return view('user.register');
    }


    // store new user data
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate(
            [
                'first_name' => ['required', 'min:3'],
                'last_name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => 'required|confirmed|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            ],
            [
                'password.regex' => 'The password should have minimum eight characters,
            at least one letter, one number and one special character'
            ]
        );


        // Hash Password
        $formFields['password'] = Hash::make($formFields['password']);

        // Create user
        $user = new User();
        $user->name = ucfirst(strtolower($formFields['first_name'])) . ' ' . ucfirst(strtolower($formFields['last_name']));
        $user->email = strtolower($formFields['email']);
        $user->password = $formFields['password'];
        $user->save();

        // Create a Registration Event for Email Verification
        // event(new Registered($user));

        // Login
        auth()->login($user);

        return redirect()->intended('/')->with('success', 'account created successfully');
        // return redirect('/email/verify');
    }

    // logout controller
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/')->with('success', 'loged out successfully');
    }

    // login controller
    public function authenticate(Request $request)
    {
        $formFields = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => 'required'
            ]
        );

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            $user = auth()->user();
            return redirect()->intended('/')->with("Welcome $user->name");
        }
        return back()->withErrors(['email' => 'invalid email or password'])->onlyInput('password');
    }

    // return my profile page
    public  function Profile($id = null)
    {
        if ($id) {
            return view('user.profile', ['user' => User::findOrFail($id)]);
        }
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }

    // update my profile
    public  function updateProfile(Request $request)
    {
        $user = Auth::user();
        // in case of profile picture update
        if ($request->hasFile('image')) {
            $this->validate($request, ['file' => 'image']);
            $user->image = $request->file('image')->store('logos', 'public');
            $user->save();
            return back()->with('success', 'Profile picture updated successfully');
        }

        // in case of profile cover update
        else if ($request->hasFile('cover')) {
            $this->validate($request, ['file' => 'image']);
            $user->cover = $request->file('cover')->store('logos', 'public');
            $user->save();
            return back()->with('success', 'Profile cover was updated successfully');
        }

        // in case of profile info update
        else {

            // dd($request);
            $formFields = $request->validate(
                [
                    'first_name' => ['required', 'min:3'],
                    'last_name' => ['required', 'min:3'],
                ]
            );
            $user = Auth::user();
            $user->name = ucfirst(strtolower($formFields['first_name'])) . ' ' . ucfirst(strtolower($formFields['last_name']));
            $user->save();
            return redirect()->back()->with('success', 'Profile was updated successfully');
        }
    }

    // if the user want to change the password
    public function updatePassword(Request $request)
    {
        $request->validate(
            [
                'oldPassword' => 'required',
            ]
        );

        if (Hash::check($request->oldPassword, Auth::user()->password)) {
            $request->validate([
                'password' => 'required|confirmed|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            ], [
                'password.regex' => 'The password should have minimum eight characters,
                at least one letter, one number and one special character'
            ]);

            if (!Hash::check($request->password, Auth::user()->password)) {
                User::whereId(auth()->user()->id)->update([
                    'password' => Hash::make($request->password)
                ]);
                return redirect()->back()->with('success', 'password updated successfully');
            } else {
                return redirect()->back()->with('error', 'New password can not be the same as current password!');
            }
        } else {
            return back()->withErrors(['oldPassword' => 'incorrect password'])->onlyInput('oldPassword');
        }

        // Hash Password
        // $formFields['password'] = Hash::make($formFields['password']);

    }

    //move to edit profile
    public function editProfile()
    {
        return view('user.edit-profile', ['user' => Auth::user()]);
    }


    //view user's video
    public function viewVideo($id, $userId)
    {
        $video = Video::findOrFail($id);
        if (Auth::user()->id != $userId) {
            $video->views = $video->views + 1;
        }
        $video->save();
        return redirect($video->url);
    }

    // store new video
    function addVideo(Request $request)
    {
        $this->validate($request, ['file' => 'image']);

        $video = new Video;
        $video->image = $request->file('image')->store('logos', 'public');
        $video->title = $request->title;
        $video->user_id = Auth::user()->id;
        $video->url = $request->url;
        $video->save();
        return back()->with('success', 'Video uploaded successfully');
    }
}
