<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/edit-profile.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <title>edit profile</title>
    </head>

    <body>
        @if( session()->has('success'))
        <div class="success-msg flash-msg" id="successMsg">
            {{session('success')}}
            <script>
                window.setTimeout("closeDiv();", 5000);

                                function closeDiv(){
                                document.getElementById("successMsg").style.display=" none";
                                }
            </script>
        </div>
        @endif

        @if( session()->has('error'))
        <div class="error-msg flash-msg" id="errorMsg">
            {{session('error')}}
        </div>
        <script>
            window.setTimeout("closeDiv();", 5000);

                        function closeDiv(){
                        document.getElementById("errorMsg").style.display=" none";
                        }
        </script>

        @endif

        <div class="container rounded bg-white mt-5">
            <div class="row">
                <div class="col-md-4 img-col">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class=" profile-pic rounded-circle mt-5" src="{{asset('storage/'.$user->image)}}"
                            width="90">
                        <span class="font-weight-bold">{{$user->name}}</span>
                        <span class="text-black-50">{{$user->email}}</span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-row align-items-center back"><i
                                    class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                <a href="/" class="back-link">
                                    <h6> Back to home </h6>
                                </a>
                            </div>
                            <h6 class="text-right">Edit Profile</h6>
                        </div>

                        <form action="updateProfile" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <input class="form-control my-2" name="first_name" type="text" placeholder="first name"
                                    value="{{ old('first_name')}}">

                                @error('first_name')
                                <p class="text-danger text-left  small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="form-control my-2" name="last_name" type="text" placeholder="last name"
                                    value="{{ old('last_name')}}">

                                @error('last_name')
                                <p class="text-danger text-left  small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="form-control my-2" name="email" disabled type="email" placeholder="Email"
                                    value={{ $user->email}}>

                                @error('email')
                                <p class="text-danger text-left  small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="m-3 text-right">
                                <button class="btn btn-primary profile-button" type="submit">
                                    Save profile
                                </button>
                            </div>
                        </form>

                        {{-- update password --}}
                        <form action="updatePassword" method="POST">
                            @csrf
                            <hr>
                            <h6 class="text-right">Edit Password</h6>

                            <div class="col-md-12">
                                <input class="form-control my-2" name="oldPassword" type="password"
                                    placeholder="Current Password" value={{old('oldPassword')}}>
                                @error('oldPassword')
                                <p class="text-danger text-left  small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="form-control my-2" name="password" type="password" placeholder="Password"
                                    value="{{old('password')}}">
                                @error('password')
                                <p class="text-danger text-left  small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="form-control my-2" name="password_confirmation" type="password"
                                    placeholder="Confirm password" value="{{old('password_confirmation')}}">
                                @error('password_confirmation')
                                <p class="text-danger text-left  small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="m-3 text-right">
                                <button class="btn btn-primary profile-button" type="submit">
                                    Apply changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
