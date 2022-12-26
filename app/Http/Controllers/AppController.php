<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use App\Models\Studio;
use App\Models\Contact;
use App\Models\Payment;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //show main page
    public function index()
    {
        $usersList = User::all();
        $videos = Video::all();

        // order users by their videos views sum
        $videosViews = Video::selectRaw('sum(views)')
            ->whereColumn('user_id', 'users.id')
            ->getQuery();

        $users = User::select('users.*')
            ->selectSub($videosViews, 'videos_views')
            ->orderBy('videos_views', 'DESC')
            ->get();

        $studios = Studio::all();

        return view('app.index', [
            'users' => $usersList,
            'videos' => $videos,
            'topStreamers' => $users,
            'studios' => $studios,
        ]);
    }

    //view appointment page

    public function appointment()
    {
        return view(
            'app.appointment',
            [
                'user' => Auth::user(),
                'studios' => Studio::all(),
                'appointments' => Appointment::all(),
            ]
        );
    }

    //make appointment
    public function makeAppointment(Request $request)
    {
        return View('app.checkout', [
            'timeStart' => $request->timeStart,
            'date' => $request->date,
            'duration' => $request->duration,
            'name' => $request->name,
            'phone' => $request->phone,
            'studio' => Studio::find($request->studio)
        ]);
    }

    // view checkout page
    public function checkout()
    {
        return view('app.checkout');
    }


    // view about page

    public function about()
    {
        return view('app.about');
    }



    public function payment(Request $request)
    {
        $user = Auth::user();
        $payment = new Payment;
        $payment->user_id = $user->id;
        $payment->plan = $request->plan;
        $payment->studio_id = $request->studio_id;
        $payment->phone = $request->phone;
        $payment->save();

        if ($payment->plan == 'basic') {
            $user->coins = ($user->coins + 20);
        } else  if ($payment->plan == 'obtimal') {
            $user->coins = ($user->coins + 50);
        } else if ($payment->plan == 'ultimate') {
            $user->coins = ($user->coins + 120);
        }
        $user->save();
        return redirect()->back();
    }


    // confirm Appointment

    public function confirmAppointment(Request $request)
    {
        $app = new Appointment;
        $app->date = $request->date;
        $app->time_start = $request->timeStart;
        $app->time_end = $request->timeEnd;
        $app->studio_id = $request->studio;
        $app->coins = $request->cost;
        $app->user_id = Auth::user()->id;
        $app->save();

        return redirect()->intended('/');
    }

    //store contact message
    public function contact(Request $request)
    {
        Contact::create($request->all());
    return back()->with('success', 'Message was sent successfully');
    }
}
