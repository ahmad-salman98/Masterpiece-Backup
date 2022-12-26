@extends('app.master')
@section('title','Contact')

@section('content')
<!-- Contact information-->
<section class="section section-sm section-first bg-default" style="margin: 10rem 0">
    <div class="container">
        <h3>Contact us</h3>
        <p style="margin : 3rem 0; color: #2b2b2b">
            If you have any questions or comments, please don't hesitate to contact us.
        </p>
        <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon "><i class="fa-solid fa-phone fa-sm"></i></i></i></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="tel:+962787823264">+962 78-782-3264</a></p>
                        <p class="box-contacts-link"><a href="tel:+962778086352">+962 77-808-6352</a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon"><i class="fa-solid fa-house fa-sm"></i></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="#">Yajuz ST, Russaifeh, Zarqa, jo 11954</a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon"> <i class="fa-regular fa-comment-dots fa-sm"></i> </div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="mailto:#">Contact@klaket.com</a></p>
                        <p class="box-contacts-link"><a href="mailto:#">info@klaket.com</a></p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form-->

<section class="bg-whisper section section-sm section-last text-left " style="margin: 10rem 0; padding : 5rem 0">
    <div class="container">
        <article class="title-classic">
            <div class="title-classic-title">
                <h3>Get in touch</h3>
            </div>
            <div class="title-classic-text">
                <p style="margin : 3rem 0; color: #2b2b2b">If you have any questions, just fill in the contact form, and
                    we
                    will answer you shortly.</p>
            </div>
        </article>
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global"
            data-form-type="contact" method="post" action="/contact">
            @csrf
            <div class="row row-14 gutters-14">
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input " id="contact-your-name-2" type="text" name="name" required>
                        <label class="form-label" for="contact-your-name-2">
                            <span class="required-field">*</span>
                            Name
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input " id="contact-email-2" type="email" name="email" required>
                        <label class="form-label" for="contact-email-2">
                            <span class="required-field">*</span>
                            Email
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="phone">
                        <label class="form-label" for="contact-phone-2">Phone</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">
                            <span class="required-field">*</span>
                            Message
                        </label>
                        <textarea class="form-input textarea-lg " id="contact-message-2" name="content"
                            required></textarea>
                    </div>
                </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
        </form>
    </div>
</section>
@endsection
