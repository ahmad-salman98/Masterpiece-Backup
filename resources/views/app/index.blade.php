@extends('app.master')
@section('title','Home')
@section('content')

{{-- Swiper Section start --}}
<section class="max-width">
    <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="5500"
        data-simulate-touch="true">
        <div class="swiper-wrapper text-center">

            {{-- 1st slide swiper start --}}
            <div class="swiper-slide" data-slide-bg="/images/klaket-banner.jpg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                    <h3 class="medium text-primary">With Us</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">You
                                    Are Always One Step Ahead</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                    data-caption-delay="250">
                                    we have the skills and resources to deliver exceptional results.
                                </p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a
                                        class="button button-lg button-primary-outline-v2 header-button"
                                        href="/appointment">Request an appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 1st slide swiper end --}}


            {{-- 2nd slide swiper start --}}
            <div class="swiper-slide" data-slide-bg="/images/studio3.jpg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                    <h3 class="medium text-primary">We Offer</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">
                                    Professional video and audio content</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                    data-caption-delay="250">
                                    Our expert team are dedicated to helping our clients bring their vision to life.</p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a
                                        class="button button-lg button-primary-outline-v2 header-button"
                                        href="/appointment">Request an appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2nd slide swiper end --}}

            {{-- 3rd slide swiper start--}}
            <div class="swiper-slide" data-slide-bg="/images/camera3.jpeg">
                <div class="swiper-slide-caption text-center">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                    <h3 class="medium text-primary">With Our Services</h3>
                                </div>
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">You
                                    Will Get Extensive production Support
                                </h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                    data-caption-delay="250">
                                    Our team has extensive experience in all aspects of video production, from
                                    pre-production to post-production.
                                </p>
                                <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400">
                                    <a class="button button-lg button-primary-outline-v2 header-button"
                                        href="/appointment"> Request an appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3rd slide swiper end--}}

        </div>

        {{-- Swiper Controllers start --}}
        <div class="swiper-scrollbar d-lg-none"></div>
        <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        {{-- Swiper Controllers end --}}
    </div>
</section>
{{-- Swiper Section end --}}


{{-- What we Offer Start --}}
<section class="section-50 section-md-75 section-lg-100" id="services">
    <div class="container">
        <h3 class="text-center"> What Do We Offer </h3>
        <div class="row px-5 d-flex justify-content-between">

            {{-- 1st offer start --}}
            <div class="col-md-6 col-lg-4 height-fill my-5">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon">
                            <span class="novi-icon icon icon-primary ">
                                <img src="images/icons/studio-set.png" class="services-icon" alt="">
                            </span>
                        </div>
                        <div class="box-header">
                            <h5><a href="#">Studio rental</a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>
                            Looking for the perfect studio? Look no further! Book your studio rental today and see what
                            our service can do for you!
                        </p>
                    </div>
                </article>
            </div>
            {{-- 1st offer end --}}

            {{-- 2nd offer start --}}
            <div class="col-md-6 col-lg-4 height-fill my-5">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="novi-icon icon icon-primary">
                                <img src="images/icons/director.png" class="services-icon" alt="">
                            </span>
                        </div>
                        <div class="box-header">
                            <h5><a href="#">Live Production</a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>
                            Are ou looking to take your events to the next level with professional live streaming? We've
                            got you covered.
                        </p>
                    </div>
                </article>
            </div>
            {{-- 2nd offer end --}}

            {{-- 3rd offer start --}}
            <div class="col-md-6 col-lg-4 height-fill my-5">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="novi-icon icon icon-primary">
                                <img src="images/icons/videography.png" class="services-icon" alt="">
                            </span>
                        </div>
                        <div class=" box-header">
                            <h5><a href="#">Video Making </a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>
                            Wants to bring your ideas to life through the power of video? Our video making
                            service is here to help!
                        </p>
                    </div>
                </article>
            </div>
            {{-- 3rd offer end --}}

            {{-- 4th offer start --}}
            <div class="col-md-6 col-lg-4 height-fill my-5">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon">
                            <span class="novi-icon icon icon-primary">
                                <img src="images/icons/writing.png" class="services-icon" alt="">
                            </span>
                        </div>
                        <div class="box-header">
                            <h5><a href="#">Content Writing</a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>
                            Are you in need of top-notch content that tells your story? Our content
                            writing service is here to help.
                        </p>
                    </div>
                </article>
            </div>
            {{-- 4th offer end --}}

            {{-- 5th offer start --}}
            <div class="col-md-6 col-lg-4 height-fill my-5">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon">
                            <span class="novi-icon icon icon-primary ">
                                <img src="images/icons/photographer.png" class="services-icon" alt="">
                            </span>
                        </div>
                        <div class="box-header">
                            <h5><a href="#">Photography</a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>
                            Ready to up your visual game with professional, stunning photography? Our team
                            is here to help.
                        </p>
                    </div>
                </article>
            </div>
            {{-- 5th offer end --}}


            {{-- 6th offer start --}}
            <div class="col-md-6 col-lg-4 height-fill my-5">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon">
                            <span class="novi-icon icon icon-primary ">
                                <img src="images/icons/social-media.png" class="services-icon" alt="">
                            </span>
                        </div>
                        <div class="box-header">
                            <h5><a href="#">Digital Marketing</a></h5>
                        </div>
                    </div>
                    <div class="divider bg-accent"></div>
                    <div class="box-body">
                        <p>
                            Our team of experienced professionals is here to help you reach your target audience and
                            achieve your goals.
                        </p>
                    </div>
                </article>
            </div>
            {{-- 6th offer end --}}

        </div>
    </div>
</section>
{{-- what we offer end --}}

{{-- About us start --}}

<section class="bg-displaced-wrap" style="margin-bottom:10rem;">
    <div class="bg-displaced-body">
        <div class="container">
            <div class="px-5 ">
                <article class="box-cart bg-ebony-clay">
                    <div class="box-cart-image"><img class="ahmad-salman-img" src="/images/ahmad-salman.jpeg" alt=""
                            width="342" height="338" />
                    </div>
                    <div class="box-cart-body">
                        <blockquote class="blockquote-complex blockquote-complex-inverse">
                            <h3>About Us</h3>
                            <p>
                                <q>
                                    Klaket is a production company specializing in creating high-quality
                                    video content for businesses and
                                    organizations. We have a passion for telling stories through video and believe that
                                    video is a powerful tool for
                                    communication and marketing.
                                </q>
                            </p>
                            <div class="quote-footer">
                                <cite>Ahmad Salman</cite><small>Founder of Klaket</small>
                            </div>
                        </blockquote>
                        <div class="button-wrap inset-md-left-70"><a
                                class="button button-responsive button-medium button-primary-outline-v2"
                                href="/appointment">Join
                                Us For Free</a></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class="bg-displaced bg-image" style="background-image: url(images/banner-about.jpg);"></div>
</section>
{{-- About us end --}}


{{-- Statistics Section start --}}

<section class="section parallax-container bg-black mt-5 " style="background-image: url(images/camera.jpg); ">
    <div class="parallax-content">
        <div class="section-50 section-md-90">
            <div class="container">
                <div class="row row-40">
                    <div class="col-sm-6 col-md-3">
                        <div class="box-counter box-counter-inverse">
                            <span class="novi-icon icon icon-lg icon-primary">
                                <i class="fa-solid fa-users" style="color:#FF4B2Bd1"></i>
                            </span>
                            <div class="text-large counter">{{count($users)}}</div>
                            <p class="box-header"> Active Users</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-counter box-counter-inverse">
                            <span class="novi-icon icon icon-lg icon-primary ">
                                <i class="fa-solid fa-calendar-check" style="color:#FF4B2Bd1"></i>
                            </span>
                            <div class="text-large counter">23</div>
                            <p class="box-header">Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-counter box-counter-inverse">
                            <span class="novi-icon icon icon-lg icon-primary">
                                <i class="fa-solid fa-handshake" style="color:#FF4B2Bd1"></i>
                            </span>
                            <div class="text-large counter ">15</div>
                            <p class="box-header"> Partner Institution</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="box-counter box-counter-inverse">
                            <span class="novi-icon icon icon-lg icon-primary">
                                <i class="fa-solid fa-clapperboard" style="color:#FF4B2Bd1"></i>
                            </span>
                            <div class="text-large counter">45</div>
                            <p class="box-header">Show Production</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Statistics Section end --}}



{{-- Gallery start --}}

<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4"
    style="background: #F0F4F8; margin:10rem 0">
    <div class="container py-5 my-5">
        <h3 class="text-center">Our Top Streamers</h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary " data-items="1" data-sm-items="1" data-md-items="2"
            data-lg-items="3" data-xl-items="4" data-xxl-items="5" data-stage-padding="15" data-xxl-stage-padding="0"
            data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">

            @foreach($topStreamers as $user)
            <div class="thumbnail thumbnail-variant-2 ">
                <figure class="thumbnail-image">
                    <img style="max-width:100%; height:350px; object-fit:cover" src="{{asset('storage/'.$user->image)}}"
                        alt="" />
                </figure>
                <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary"></span>
                        {{-- material-icons-local_phone --}}
                        {{-- <a class="link-white" href="tel:+962778086352">+962 (77) 808–6352</a> --}}
                    </div>
                    <div class="link-group">
                        <span class="novi-icon icon icon-xxs icon-primary  ">
                            <i class="fa-regular fa-envelope" style="color:#FF4B2B"></i>

                        </span>
                        <a class="link-white" href="mailto:{{$user->email}}">{{$user->email}}</a>
                    </div>
                </div>
                <div class="thumbnail-caption">
                    <p class="text-header"><a href="profile/{{$user->id}}">{{$user->name}}</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">{{$user->rank}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Gallery end --}}



{{-- Teatmonials start --}}

<section class="section-66 section-md-90 section-xl-bottom-100">
    <div class="container">
        <h3 class="text-center">Testimonials</h3>
        <div class="owl-carousel owl-spacing-1 owl-nav-classic owl-style-minimal" data-autoplay="true" data-items="1"
            data-md-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true"
            data-nav="true" data-dots="true" data-dots-each="1">
            <div class="item">
                <blockquote class="quote-bordered">
                    <div class="quote-body">
                        <div class="quote-open">
                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px"
                                viewbox="0 0 21 15" preserveAspectRatio="none">
                                <path
                                    d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z">
                                </path>
                            </svg>
                        </div>
                        <div class="quote-body-inner">
                            <h6>One of The Most professional team I’ve Ever Known...</h6>
                            <p>
                                <q>I have been working with Klaket Production Company for the past year and have
                                    consistently been impressed with their level
                                    of professionalism and attention to detail. From pre-production to post, the team at
                                    Klaket is always on top of their game
                                    and it shows in the final product. I highly recommend them for anyone in need of
                                    top-notch production services.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                            <div class="unit-left">
                                <img class="img-circle" src="/images/testamonial-2.jpg" alt="" width="68" height="68" />
                            </div>
                            <div class="unit-body">
                                <cite>Qusai Terawi</cite>
                                <p class="text-primary">CFO, Tatweer Ltd.</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="quote-bordered">
                    <div class="quote-body">
                        <div class="quote-open">
                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px"
                                viewbox="0 0 21 15" preserveAspectRatio="none">
                                <path
                                    d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z">
                                </path>
                            </svg>
                        </div>
                        <div class="quote-body-inner">
                            <h6>Klaket is One of The Best...</h6>
                            <p>
                                <q> Klaket Production Company has been a pleasure to work with on our latest project.
                                    They
                                    are extremely organized and
                                    proactive in their communication, making sure that everything runs smoothly from
                                    start to finish. The team at Klaket is
                                    truly dedicated to delivering the best possible product and it shows in the final
                                    result. I recommend them
                                    to anyone in need of top-quality production services.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                            <div class="unit-left">
                                <img class="img-circle" src="/images/testamonial-1.jpg" alt="" width="68" height="68" />
                            </div>
                            <div class="unit-body">
                                <cite>Haya Qaddomy</cite>
                                <p class="text-primary">CEO, Awraq Co.</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="quote-bordered">
                    <div class="quote-body">
                        <div class="quote-open">
                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px"
                                viewbox="0 0 21 15" preserveAspectRatio="none">
                                <path
                                    d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z">
                                </path>
                            </svg>
                        </div>
                        <div class="quote-body-inner">
                            <h6>Great experience and awesome team !!...</h6>
                            <p>
                                <q>I have been extremely impressed with the level of service and expertise provided by
                                    Klaket Production Company. They are
                                    truly professionals in every sense of the word and have consistently delivered
                                    high-quality work on all of our projects.
                                    I would highly recommend them to anyone looking for top-notch production
                                    services, they are really better than any one could imagine.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                            <div class="unit-left">
                                <img class="img-circle" src="/images/testamonial-3.jpg" alt="" width="68" height="68" />
                            </div>
                            <div class="unit-body">
                                <cite>Laith Hussain</cite>
                                <p class="text-primary">Director, AMG Ltd.</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="quote-bordered">
                    <div class="quote-body">
                        <div class="quote-open">
                            <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px"
                                viewbox="0 0 21 15" preserveAspectRatio="none">
                                <path
                                    d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z">
                                </path>
                            </svg>
                        </div>
                        <div class="quote-body-inner">
                            <h6>Klaket is dedicated to delivering the best possible
                                product...</h6>
                            <p>
                                <q>Klaket Production Company has been an invaluable partner on our latest project. From
                                    start to finish, the team has been
                                    organized, professional, and dedicated to delivering the best possible product. I
                                    have been extremely impressed with
                                    their attention to detail and ability to meet tight deadlines. I would highly
                                    recommend them to anyone in need of
                                    top-quality production services.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                            <div class="unit-left">
                                <img class="img-circle" src="/images/testamonial-4.jpg" alt="" width="68" height="68" />
                            </div>
                            <div class="unit-body">
                                <cite>Dania Shuqair</cite>
                                <p class="text-primary">CEO, Birzeit Co.</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>

        </div>
    </div>
</section>
{{-- Teatmonials end --}}


{{-- Pricing start --}}


<section class="py-5" style="background: #F0F4F8; margin:10rem 0 ;" id="plans">
    <div class="section  py-5">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h3 class="mb-5">Pricing</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header">
                            <div class="pricing-item-heading">Basic</div>
                            <div class="pricing-item-price"><small>from</small> 50$</div>
                        </header>
                        <div class="pricing-item-h ">
                            <div class="pricing-item-content">
                                <ul class="pricing-item-list pricing-1">

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        2.5 Casting hours
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Studio rental
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Live production
                                    </li>

                                    <li class="">
                                        <i class="fa-solid fa-check"></i>
                                        Video making
                                    </li>

                                    <li class="">
                                        <i class="fa-solid fa-check"></i>
                                        Content writing
                                    </li>
                                    <li class="">
                                        <i class="fa-solid fa-check"></i>
                                        Digital marketing
                                    </li>
                                </ul>
                            </div>
                            <footer class="pricing-item-footer">
                                <a href="#!" class="btn btn-large btn-with-icon btn-wide ripple" id="basicPlane">
                                    <span>Get Starter</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                    <span class="el-ripple-circle" style="left: 272.4px; top: 61px;"></span>
                                </a>
                            </footer>
                        </div>
                    </div><!-- End pricing item -->
                </div>


                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <div class="pricing-item-badge">Best Deal</div>
                        <header class="pricing-item-header">
                            <div class="pricing-item-heading">Optimal</div>
                            <div class="pricing-item-price"><small>from</small> 100$</div>
                        </header>
                        <div class="pricing-item-h pricing-2">
                            <div class="pricing-item-content">
                                <ul class="pricing-item-list">
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        5 Casting hours
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Studio rental
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Live production
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Video making
                                    </li>

                                    <li class="">
                                        <i class="fa-solid fa-check"></i>
                                        Content writing
                                    </li>
                                    <li class="">
                                        <i class="fa-solid fa-check"></i>
                                        Digital marketing
                                    </li>
                                </ul>
                            </div>
                            <footer class="pricing-item-footer">
                                <a href="#!" class="btn btn-border btn-large btn-with-icon btn-wide ripple"
                                    id="obtimalPlane">
                                    <span>Get Starter</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                    <span class="el-ripple-circle" style="left: 359.412px; top: 49px;"></span>
                                </a>
                            </footer>
                        </div>
                    </div><!-- End pricing item -->
                </div>
                <div class="col-lg-4 col-md-12 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header">
                            <div class="pricing-item-heading">Ultimate</div>
                            <div class="pricing-item-price"><small>from</small> 200$</div>
                        </header>
                        <div class="pricing-item-h pricing-3">
                            <div class="pricing-item-content">
                                <ul class="pricing-item-list">
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        12 Casting hours
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Studio rental
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Live production
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Video making
                                    </li>

                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Content writing
                                    </li>
                                    <li class="active">
                                        <i class="fa-solid fa-check"></i>
                                        Digital marketing
                                    </li>
                                </ul>
                            </div>
                            <footer class="pricing-item-footer">
                                <a href="#!" class="btn btn-large btn-with-icon btn-wide ripple" id="ultimatePlane">
                                    <span>Get Starter</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                    <span class="el-ripple-circle" style="left: 180.425px; top: -108px;"></span>
                                </a>
                            </footer>
                        </div>
                    </div><!-- End pricing item -->
                </div>
            </div>
        </div>
    </div>

    {{-- modal setup --}}
    @auth

    <button type="button" class="btn text-success bg-transparent" style="box-shadow: none;" data-toggle="modal"
        onclick="focus()" data-target="#joinModal" autofocus id="modalTrigger">Inschrijven
    </button>

    <div class="modal" id="joinModal" tabindex="0" role="dialog" aria-labelledby="joinModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="payment" method="post" onsubmit="triggerAlert()">
                        @csrf
                        <input type="hidden" name="plan" id="paymentPlan">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="name" placeholder="John Doe"
                                autofocus value="{{Auth::user()->name}}" disabled>
                        </div>

                        <div class=" form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" name="phone"
                                placeholder="enter your phone number started with 07" required minlength="7">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address </label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="john-doe@email.com" value="{{Auth::user()->email}} " disabled>
                        </div>

                        <div class="form-group">
                            <label for="studio">Choose a studio location to pay at</label>
                            <select class="form-input border" id="studio" name="studio_id" required>
                                @foreach($studios as $studio)
                                <option value="{{$studio->id}}">{{$studio->location}}</option>
                                @endforeach
                            </select>
                            <div class="arrow"><i class="fa-solid fa-angle-down"></i></div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="confirmPayment">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endauth
</section>


@auth
<script>
    const modalBtn = document.getElementById('modalTrigger');
    modalBtn.style.display = 'none';
    const basicPlane = document.getElementById('basicPlane');
    const obtimalPlane = document.getElementById('obtimalPlane');
    const ultimatePlane = document.getElementById('ultimatePlane');
    const modalTitle = document.getElementById('modalTitle');
    const paymentPlan = document.getElementById('paymentPlan');


    // for basic plan
    basicPlane.addEventListener('click', ()=>{
        modalBtn.click();
modalTitle.innerText ="Complete payment - Basic plane";
paymentPlan.value='basic';
    });


    // for obtimal plan
    obtimalPlane.addEventListener('click', ()=>{
        modalBtn.click();
modalTitle.innerText ="Complete payment - Obtimal plane";
paymentPlan.value='obtimal';
    });


    // for ultimate plan
    ultimatePlane.addEventListener('click', ()=>{
        modalBtn.click();
modalTitle.innerText ="Complete payment - Ultimate plane";
paymentPlan.value='ultimate';
    });

    // alert when confirm payment

    const triggerAlert = ()=>{

        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your request has been sent',
        showConfirmButton: false,
        timer: 1500,
        customClass:'swal-alert'
        })
    };
</script>
@endauth

@guest
<script>
    const basicPlane = document.getElementById('basicPlane');
    const obtimalPlane = document.getElementById('obtimalPlane');
    const ultimatePlane = document.getElementById('ultimatePlane');

    basicPlane.addEventListener('click', ()=>{
Swal.fire({
icon: 'info',
title: 'Authorization Failed',
text: 'Please login first!',
footer: '<a href="/register">Login from here</a>',
customClass: 'swal-alert'
})
  });

    obtimalPlane.addEventListener('click', ()=>{
Swal.fire({
icon: 'info',
title: 'Authorization Failed',
text: 'Please login first!',
footer: '<a href="/register">Login from here</a>',
customClass: 'swal-alert'
})
  });

    ultimatePlane.addEventListener('click', ()=>{
Swal.fire({
icon: 'info',
title: 'Authorization Failed',
text: 'Please login first!',
footer: '<a href="/register">Login from here</a>',
customClass: 'swal-alert'
})
  });
</script>

@endguest

@endsection
