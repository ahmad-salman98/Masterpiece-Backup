{{-- @extends('app.master') --}}

@section('title','Sign up')

@section('profile-style')
<link rel="stylesheet" href="css/login.css">
@endsection






<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

    <head>
        <title>@yield('title')</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport"
            content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">

        {{-- bootstrap --}}
        {{--
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        --}}
        {{-- style --}}
        <link rel="stylesheet" href="css/login.css">
        {{-- font awesome --}}
        <script src="https://kit.fontawesome.com/0a9ca5a95a.js" crossorigin="anonymous"></script>



    </head>

    <body>


        <main>

            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form action="/store" method="POST">
                        @csrf
                        <h1>Create Account</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your email for registration</span>
                        <div class="d-flex">

                            {{-- first name --}}
                            <div class="w-45">
                                <input name="first_name" type="text" placeholder="first name" value={{
                                    old('first_name')}}>

                                @error('first_name')
                                <p class="text-danger text-left  small">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- last name --}}
                            <div class="w-45">
                                <input name="last_name" type="text" placeholder="last name" value={{ old('last_name')}}>

                                @error('last_name')
                                <p class="text-danger text-left  small">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- email --}}
                        <div>
                            <input name="email" type="email" placeholder="Email" value={{ old('email')}}>
                        </div>

                        @error('email')
                        <p class="text-danger text-left  small">{{ $message }}</p>
                        @enderror

                        {{-- password --}}
                        <div>
                            <input name="password" type="password" placeholder="Password">
                        </div>

                        @error('password')
                        <p class="text-danger text-left  small">{{ $message }}</p>
                        @enderror

                        <div>
                            <input name="password_confirmation" type="password" placeholder="Confirm password">
                        </div>

                        @error('password_confirmation')
                        <p class="text-danger text-left  small">{{ $message }}</p>
                        @enderror

                        <button type="submit">Sign Up</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form action="/authenticate" method="POST">
                        @csrf
                        <h1>Sign in</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                        {{-- email --}}
                        <div>
                            <input name="email" type="email" placeholder="Email" value="{{ old('email')}}">
                        </div>

                        @error('email')
                        <p class=" text-danger text-left small">{{ $message }}</p>
                        @enderror

                        {{-- password --}}
                        <div>
                            <input name="password" type="password" placeholder="Password" value="{{old('password')}}">
                        </div>

                        @error('password')
                        <p class="text-danger text-left  small">{{ $message }}</p>
                        @enderror

                        <a href="#">Forgot your password?</a>

                        <button type="submit">Sign In</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Hello, Friend!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
container.classList.remove("right-panel-active");
});
            </script>

        </main>







    </body>

</html>
