@extends('app.master')
@section('title','About')

@section('content')

{{-- about us tabs start --}}

<section class="section section-sm section-first bg-default text-md-left mt-5">
    <div class="container">
        <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img style="width:519px; height:564px; object-fit:cover"
                    src="images/camerman.jpg" alt="">
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6 mb-auto">
                <h3>Why choose us</h3>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                    <!-- Nav tabs-->
                    <ul class="nav nav-tabs">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1"
                                data-toggle="tab">Experience</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2"
                                data-toggle="tab">Skills</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3"
                                data-toggle="tab">Mission</a></li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-4-1">
                            <p>with our experts, the improvements will be markable, your career will be directed by
                                professionals to make sure you
                                reach your highest limits, or even more.</p>
                            <div class="group-md group-middle"><a
                                    class="button button-width-xl-230 button-primary button-pipaluk" href="/contact">Get
                                    in
                                    touch</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-4-2">
                            <div class=" justify-content-center text-center inset-top-10">
                                <p class="text-left mb-3"> With a talanted team, your career will be continusly
                                    inhanced.
                                    some of these talants
                                    and skills are:</p>
                                <!-- Linear progress bar-->
                                <article class="progress-linear progress-secondary animated-first">
                                    <div class="progress-header">
                                        <p class="text-secondary">
                                            Video making
                                        </p>
                                    </div>
                                    <div class="progress-bar-linear-wrap">
                                        <div class="progress-bar-linear" data-gradient="" style="width: 89%;"><span
                                                class="progress-value">89</span><span class="progress-marker"></span>
                                        </div>
                                    </div>
                                </article>


                                <!-- Linear progress bar-->
                                <article class="progress-linear progress-orange animated-first my-3">
                                    <div class="progress-header">
                                        <p class="text-secondary">Content writing </p>
                                    </div>
                                    <div class="progress-bar-linear-wrap">
                                        <div class="progress-bar-linear" data-gradient="" style="width: 82%;"><span
                                                class="progress-value">82</span><span class="progress-marker"></span>
                                        </div>
                                    </div>
                                </article>

                                <!--Linear progress bar-->
                                <article class="progress-linear animated-first progress-blue">
                                    <div class="progress-header">
                                        <p class="text-secondary">Live directing </p>
                                    </div>
                                    <div class="progress-bar-linear-wrap">
                                        <div class="progress-bar-linear" data-gradient="" style="width: 85%;"><span
                                                class="progress-value">88</span><span class="progress-marker"></span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="group-md group-middle">
                                <a class="button button-width-xl-230 button-primary button-pipaluk" href="/contact">Get
                                    in
                                    touch</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-4-3">
                            <p>Our mission is to support our clients, and put them on the first success steps. and these
                                achivements will by done folloing these instructions .</p>
                            <div class="text-center text-sm-left offset-top-30 tab-height">
                                <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                                    <li>Commitment</li>
                                    <li>Continues follow-up</li>
                                    <li>Huge comminnity</li>
                                    <li>Markiting experts</li>
                                    <li>Creative staff</li>
                                </ul>
                            </div>
                            <div class="group-md group-middle"><a
                                    class="button button-width-xl-230 button-primary button-pipaluk" href="/contact">Get
                                    in
                                    touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- about us tabs end --}}


{{-- our experts start --}}
<section class="section-60 section-lg-90 bg-whisper" style="margin: 10rem 0">
    <div class="container">
        <div class="row row-40 align-items-sm-end">
            {{-- ahmad salman --}}
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail-variant-2-wrap">
                    <div class="thumbnail thumbnail-variant-2">
                        <figure class="thumbnail-image"><img src="images/ahmad-salman.jpeg"
                                style="max-width: 100%; object-fit:cover " />
                        </figure>
                        <div class="thumbnail-inner">
                            <div class="link-group">
                            </div>
                            <div class="link-group"><span> <i class="fa-regular fa-envelope" style="color: #FF4B2B"></i>
                                </span><a class="link-white" href="mailto:a.salman@klaket.com">A.Salman@klaket.com</a>
                            </div>
                        </div>
                        <div class="thumbnail-caption">
                            <p class="text-header"><a href="#">Ahmad Salman</a></p>
                            <div class="divider divider-md bg-teak"></div>
                            <p class="text-caption">Founder </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- jafer --}}
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail-variant-2-wrap">
                    <div class="thumbnail thumbnail-variant-2">
                        <figure class="thumbnail-image "><img src="images/jafer.png"
                                style="max-width: 100%; object-fit:cover " />
                        </figure>
                        <div class="thumbnail-inner">
                            <div class="link-group">
                            </div>
                            <div class="link-group"><span> <i class="fa-regular fa-envelope" style="color: #FF4B2B"></i>
                                </span>
                                <a class="link-white" href="mailto:J.Dakhily@klaket.com">J.Dakhily@klaket.com</a>
                            </div>
                        </div>
                        <div class="thumbnail-caption">
                            <p class="text-header">
                                <a href="#">Jafer Al-Dakhily</a>
                            </p>
                            <div class="divider divider-md bg-teak"></div>
                            <p class="text-caption">CEO</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- osama --}}
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail-variant-2-wrap">
                    <div class="thumbnail thumbnail-variant-2">
                        <figure class="thumbnail-image"><img src="images/osama.png"
                                style="max-width: 100%; object-fit:cover " />
                        </figure>
                        <div class="thumbnail-inner">
                            <div class="link-group">
                            </div>
                            <div class="link-group"><span> <i class="fa-regular fa-envelope" style="color: #FF4B2B"></i>
                                </span><a class="link-white" href="mailto:J.Doe@klaket.com">O.Dasouky@klaket.com</a>
                            </div>
                        </div>
                        <div class="thumbnail-caption">
                            <p class="text-header">
                                <a href="#">Osama Dasouky</a>
                            </p>
                            <div class="divider divider-md bg-teak"></div>
                            <p class="text-caption">Marketing Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 text-center">
                <div class="block-wrap-1">
                    <div class="block-number">06</div>
                    <h3 class="text-normal">Experts</h3>
                    <p class="h5 h5-smaller text-style-4">in Their Fields</p>
                    <p>If you or your business is facing challenge, contact us today to get your problems solved.</p>

                </div>
            </div>
        </div>
    </div>
</section>
{{-- our experts end --}}


{{-- Why choose us starts --}}
<section class="bg-whisper " style="margin-top:10rem 0">
    <div class="container">
        <div class="row align-items-lg-end">
            <div class="offset-md-1 offset-lg-0 col-md-8 col-lg-6 col-xl-5">
                <div class="section-60 section-md-90">
                    <div class="inset-md-left-100">
                        <h3>Our Advantages</h3>
                    </div>
                    <div class="inset-md-left-30 inset-md-right-30">
                        <ul class="list-xl">
                            <li>
                                <article class="icon-box-horizontal">
                                    <div class="unit unit-horizontal unit-spacing-md">
                                        <div class="unit-left">
                                            <i class="fa-solid fa-handshake fa-2xl pt-4" style="color: #FF4B2B"></i>
                                        </div>
                                        <div class="unit-body">
                                            <h5><a href="#">Our Beliefs</a></h5>
                                            <p>Our firm is like family. We truly believe that each career is someone’s
                                                life and we need to treat it as such.</p>
                                        </div>
                                    </div>
                                </article>

                            </li>
                            <li>
                                <article class="icon-box-horizontal">
                                    <div class="unit unit-horizontal unit-spacing-md">
                                        <div class="unit-left">
                                            <i class="fa-solid fa-briefcase fa-2xl pt-4" style="color: #FF4B2B"></i>
                                        </div>
                                        <div class="unit-body">
                                            <h5><a href="#">Rich Experience</a></h5>
                                            <p>Experience gets the job done. Our company have more than 150
                                                experts ready to help.</p>
                                        </div>
                                    </div>
                                </article>

                            </li>
                            <li>
                                <article class="icon-box-horizontal">
                                    <div class="unit unit-horizontal unit-spacing-md">
                                        <div class="unit-left">
                                            <i class="fa-solid fa-chart-line fa-2xl pt-4" style="color: #FF4B2B"></i>
                                        </div>
                                        <div class="unit-body">
                                            <h5><a href="#">Great Results</a></h5>
                                            <p>Results are only successful when we make a difference in your life. We’ll
                                                help you get the money and benefits.</p>
                                        </div>
                                    </div>
                                </article>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-7 offset-top-30 offset-md-top-0 d-none d-lg-block d-flex  ">
                <div class="image-wrap-1">
                    <img class="ml-auto d-flex px-5  w-100" src="images\employee.png"
                        style="height: 100%; object-fit:cover" />
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Why choose us ends --}}


@endsection
