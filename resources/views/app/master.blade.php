<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

    <head>
        <title>@yield('title')</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport"
            content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css"
            href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic%7CLato:300,300italic,400,400italic,700,900%7CMerriweather:700italic">
        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        @yield('profile-style')
        {{-- font awesome --}}
        <script src="https://kit.fontawesome.com/0a9ca5a95a.js" crossorigin="anonymous"></script>

        {{-- Sweet alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

        {{-- boostrap select --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
            integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        
    </head>

    <body>
        <div class="preloader">
            <div class="preloader-body">
                <div class="cssload-container">
                    <div class="cssload-speeding-wheel"> </div>
                </div>
                <p>Loading...</p>
            </div>
        </div>

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

        <div class="page">
            <header class="page-head">
                <div class="rd-navbar-wrap ">
                    <nav class="rd-navbar rd-navbar-default border-bottom" data-layout="rd-navbar-fixed"
                        data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                        data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
                        data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                        data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
                        data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px"
                        data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true"
                        data-xl-stick-up="true" data-xxl-stick-up="true">
                        <div class="rd-navbar-inner">
                            <div class="rd-navbar-aside-wrap">
                                <div class="rd-navbar-aside">
                                    <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside">
                                        <span></span>
                                    </div>
                                    <div class="rd-navbar-aside-content">
                                        <ul class="rd-navbar-aside-group list-units">
                                            <li>
                                                <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                                    <div class="unit-left">
                                                        <span
                                                            class="novi-icon icon icon-xxs icon-primary material-icons-phone">
                                                        </span>
                                                    </div>
                                                    <div class="unit-body">
                                                        <a class="link-dusty-gray" href="tel:+962787823264">
                                                            +962 (78) 782–3264
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                                    <div class="unit-left"><span
                                                            class="novi-icon icon icon-xxs icon-primary"></span>
                                                    </div>
                                                    <div class="unit-body">
                                                        <a class="link-dusty-gray"
                                                            href="mailto:ahmad98alsalman@gmail.com">
                                                            <i class="fa-solid fa-envelope"></i>
                                                            contact@klaket.com
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        {{-- social media links --}}

                                        <div class="rd-navbar-aside-group">
                                            <ul class="list-inline list-inline-reset">
                                                <li>
                                                    <a target="blank"
                                                        class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-facebook"
                                                        href="https://web.facebook.com/profile.php?id=100087927272986">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="blank"
                                                        class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-twitter"
                                                        href="https://twitter.com/klaket_3?lang=ar">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="blank"
                                                        class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-instagram"
                                                        href="https://www.instagram.com/klaket_production/">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="rd-navbar-group mx-auto">
                                <div class="rd-navbar-panel">
                                    <button class="rd-navbar-toggle"
                                        data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                                    </button>
                                    <a class="rd-navbar-brand brand mr-5" href="/">
                                        <img src="/images/logo.png" />
                                    </a>
                                </div>
                                <div class="rd-navbar-nav-wrap w-100 ">
                                    <div class="rd-navbar-nav-inner  ">
                                        <ul class="rd-navbar-nav w-100 ">

                                            <li class=" {{ Route::is('home') ? 'active' : '' }}">
                                                <a class="d-flex" href="/">

                                                    <span class="mr-4 sidenav-menu">
                                                        <i class="fa-solid fa-house"></i>
                                                    </span>
                                                    Home
                                                </a>
                                            </li>

                                            <li class="  {{ Route::is('appointment') ? 'active' : '' }}">
                                                <a class="d-flex" href="/appointment">
                                                    <span class="mr-4 sidenav-menu">
                                                        <i class="fa-solid fa-calendar-check"></i>
                                                    </span>
                                                    Appointment
                                                </a>
                                            </li>
                                            <li class=" {{ Route::is('about') ? 'active' : '' }}">
                                                <a class="d-flex" href="/about">
                                                    <span class="mr-4 sidenav-menu">
                                                        <i class="fa-solid fa-circle-question"></i>
                                                    </span>

                                                    About
                                                </a>
                                            </li>
                                            <li class=" mr-auto  {{ Route::is('contact') ? 'active' : '' }}">
                                                <a class="d-flex" href="/contact">
                                                    <span class="mr-4 sidenav-menu">
                                                        <i class="fa-solid fa-comment-dots"></i>
                                                    </span>

                                                    Contact
                                                </a>
                                            </li>

                                            <!-- Basic dropdown start -->
                                            <li>
                                                @auth
                                                <button class="btn btn-primary dropdown-toggle " type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    {{Auth::user()->name }}
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/profile">
                                                        <span>
                                                            <i class="fa-solid fa-user mr-2"></i>
                                                        </span>
                                                        View profile
                                                    </a>
                                                    <a class="dropdown-item" href="edit-profile">
                                                        <span>
                                                            <i class="fa-solid fa-pen-to-square mr-2"></i>
                                                        </span>
                                                        Edit profile
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <form method="POST" action="/logout" class="d-flex dropdown-item">
                                                        <span>
                                                            <i class="fa-solid fa-arrow-right-from-bracket"
                                                                style="margin-right: 7px "></i>
                                                        </span>
                                                        @csrf
                                                        <input class="dropdown-item  p-0" type="submit" value="Logout">
                                                    </form>
                                                </div>
                                                <!-- Basic dropdown end -->
                                            </li>

                                            <!-- When < 1200px  -->
                                            <div class="side-dropdown" style="display: none">
                                                <br>
                                                <hr>
                                                <li>
                                                    <a class="dropdown-item" href="/profile">
                                                        <span>
                                                            <i class="fa-solid fa-user mr-4"></i>
                                                        </span>
                                                        View Profile
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item" href="/edit-profile">
                                                        <span>
                                                            <i class="fa-solid fa-pen-to-square mr-4"></i>
                                                        </span>
                                                        Edit profile
                                                    </a>
                                                </li>

                                                <li class="">
                                                    <form method="POST" action="/logout"
                                                        class="d-flex dropdown-item py-3">
                                                        <span class="pt-2">
                                                            <i class="fa-solid fa-arrow-right-from-bracket "
                                                                style="margin-right: 14px "></i>
                                                        </span>
                                                        @csrf
                                                        <input class="dropdown-item  p-2" type="submit" value="Logout">
                                                    </form>
                                                </li>
                                            </div>
                                            @else
                                            <li>

                                                <a href="/register" class="btn btn-primary navbar-login">
                                                    <span>
                                                        <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>
                                                    </span>
                                                    login
                                                </a>
                                            </li>
                                            @endauth

                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

            <main>
                @yield('content')


            </main>







            <footer class="page-foot bg-ebony-clay">
                <div class="section-40 section-md-75">
                    <div class="container">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-9 col-md-11 col-xl-12">
                                <div class="row row-50">
                                    <div class="col-md-6 col-lg-10 col-xl-3">
                                        <div class="inset-xl-right-20" style="max-width: 510px;">
                                            <a class="brand" href="/">
                                                <img src="/images/logo.png" alt="" class="inverted" />
                                            </a>
                                            <p>
                                                Whether you're looking for a commercial, music video, or feature film,
                                                Our team of professionals will work closely with you to ensure that
                                                every aspect of your project meets your
                                                expectations and exceeds them.
                                                Contact us today to start your journey.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <p class="h7">Recent Posts</p>

                                        @php
                                        $recent =App\Models\Video::orderBy('id', 'desc')->take(2)->get();
                                        @endphp
                                        @foreach($recent as $video)

                                        <article class="post post-preview post-preview-inverse">
                                            <a href={{$video->url}}>
                                                <div class="unit unit-horizontal unit-spacing-lg">
                                                    <div class="unit-left">
                                                        <figure class="post-image">
                                                            <img src={{$video->image}} alt="" width="70"
                                                            height="70" />
                                                        </figure>
                                                    </div>

                                                    <div class="unit-body">
                                                        <div class="post-header">
                                                            <p>{{$video->title}}</p>
                                                        </div>
                                                        <div class="post-meta">
                                                            <ul class="list-meta">
                                                                <li>
                                                                    <time datetime="{{$video->created_at}}">
                                                                        {{
                                                                        \Carbon\Carbon::parse($video->created_at)->format('d-m-Y')}}
                                                                    </time>
                                                                </li>
                                                                <li>{{$video->user->name}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </article>
                                        @endforeach
                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <p class="h7">Quick links</p>
                                        <div class="row" style="max-width: 270px;">
                                            <div class="col-6">
                                                <ul class="list-marked-variant-2">
                                                    <li><a href="/">Home</a></li>
                                                    <li><a href="/#services">Services</a></li>
                                                    <li><a href="/#plans">Plans</a></li>
                                                    @auth
                                                    <li><a href="/profile ">Profile</a></li>
                                                    @else
                                                    <li><a href="/register ">login</a></li>
                                                    @endauth
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-marked-variant-2">
                                                    <li><a href="/about">About us</a></li>
                                                    <li><a href="/contact">Contacts</a></li>
                                                    <li><a href="/appointment">Appointment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <p class="h7">Contact us</p>
                                        <address class="contact-info text-left">
                                            <div class="unit unit-horizontal unit-spacing-md align-items-center">
                                                <div class="unit-left"><span
                                                        class="novi-icon icon icon-xs icon-storm-gray material-icons-phone"></span>
                                                </div>
                                                <div class="unit-body"><a class="link-white"
                                                        href="tel:+962787823264">+962-78-782-3264</a>
                                                </div>
                                            </div>
                                            <div class="unit unit-horizontal unit-spacing-md align-items-center">
                                                <div class="unit-left"><span
                                                        class="novi-icon icon icon-xs icon-storm-gray fa fa-envelope-o"></span>
                                                </div>
                                                <div class="unit-body"><a class="link-white"
                                                        href="mailto:#">contact@klaket.com</a>
                                                </div>
                                            </div>
                                            <div class="unit unit-horizontal unit-spacing-md">
                                                <div class="unit-left"><span
                                                        class="novi-icon icon icon-xs icon-storm-gray material-icons-place"></span>
                                                </div>
                                                <div class="unit-body"><a class="link-white d-inline" href="#">
                                                        Yajuz ST
                                                        Yajuz
                                                        Russaifeh,<br>Zarqa,
                                                        Jordan</a></div>
                                            </div>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                </div>
                <div class="section-35">
                    <div class="container text-center">
                        <div class="row row-15 flex-md-row-reverse justify-content-md-between align-items-md-center">
                            <div class="col-md-6 text-md-right">
                                <div class="group-sm group-middle">
                                    <p class="font-italic text-white">Follow Us:</p>

                                    <ul class="list-inline list-inline-reset">
                                        <li>
                                            <a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-facebook"
                                                href="https://web.facebook.com/profile.php?id=100087927272986"></a>
                                        </li>
                                        <li>
                                            <a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-twitter"
                                                href="https://twitter.com/klaket_3?lang=ar"></a>
                                        </li>
                                        <li>
                                            <a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-instagram"
                                                href="https://www.instagram.com/klaket_production/"></a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <div class="snackbars" id="form-output-global"></div>
        <script src="/js/core.min.js"></script>
        <script src="/js/script.js"></script>
    </body>

</html>
