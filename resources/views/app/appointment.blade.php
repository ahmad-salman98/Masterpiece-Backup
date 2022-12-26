@extends('app.master')

@section('title','Appointment')

@section('content')

{{-- Google Maps --}}
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<style type="text/css">
    #map {
        height: 400px;
    }
</style>

{{-- Content --}}
<section class="bg-whisper" style="margin: 10rem 0 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 d-none d-xl-block">
                <div style="height:100%"><img style="height:100%; max-width:100%; object-fit:cover"
                        src="images/cameraman.jpg" alt="" width="472" height="753" />
                </div>
            </div>
            <div class="col-md-10 col-lg-9 col-xl-7">
                <div class="section-50 section-md-75 section-xl-100">
                    <h3>Book an appointment </h3>
                    <form class="rd-mailform" method="post" action="make-appointment">
                        @csrf
                        <div class="row row-30">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="" for="request-form-name">
                                        <span class="required-field">*</span>
                                        Name
                                    </label>
                                    <input class="form-input" id="request-form-name" type="text" name="name"
                                        placeholder="Your full name" value="{{$user->name}}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="" for="request-form-phone">
                                        <span class="required-field">*</span>
                                        Phone
                                    </label>
                                    <input class="form-input" id="request-form-phone" type="text" name="phone"
                                        placeholder="Enter your phone number" required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-outside">
                                    <!--Select 2-->
                                    <label class="" for="studio">
                                        <span class="required-field">*</span>
                                        Choose a studio
                                    </label>
                                    <select class="form-input select-filter" id="studio" required name="studio">
                                        @foreach($studios as $studio)
                                        <option value="{{$studio->id}}">{{$studio->location}}</option>
                                        @endforeach
                                    </select>
                                    <div class="arrow"><i class="fa-solid fa-angle-down"></i></div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="" for="date">
                                        <span class="required-field">*</span>Date
                                    </label>
                                    <input class="form-input bg-white" id="date" type="date" {{$user->coins}} required
                                    name="date">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <!--Select 2-->
                                    <label class="" for="duration">
                                        <span class="required-field">*</span>
                                        Session duration
                                    </label>
                                    <select class="form-input selectpicker" id="duration" required name="duration">
                                        @for($i=1; $i<4; $i++) <option value="{{$i}}">
                                            {{$i==1 ? "$i hour" : "$i hours" }} </option>
                                            @endfor
                                    </select>
                                    <div class="arrow"><i class="fa-solid fa-angle-down"></i></div>
                                </div>
                            </div>



                            <div class=" col-md-6">
                                <div class="form-wrap">
                                    <!--Select 2-->
                                    <label class="" for="timeStart">
                                        <span class="required-field">*</span>
                                        Avaliable start time
                                    </label>
                                    <select class="form-input select-filter" id="timeStart" required name="timeStart">
                                        @for($i=8; $i<18; $i++) {{$i==12 ? $x=12 : $x=$i-12;}} <option value="{{$i}}">
                                            {{$i<12? "$i:00 am" : "$x:00 pm" }} </option>
                                                @endfor
                                    </select>
                                    <div class="arrow"><i class="fa-solid fa-angle-down"></i></div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class=" offset-6 col-md-6">
                                        <button class="button button-block button-primary" type="submit">
                                            Proceed to checkout
                                            <i class="fa-solid fa-circle-chevron-right ml-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>
        const date = document.getElementById('date');
        const timeStart = document.getElementById('timeStart');
        const duration = document.getElementById('duration');
        const studio = document.getElementById('studio');
        const cost = document.getElementById('cost');
        const children = timeStart.children;
        const startTimes=  Array.from(children);

        date.addEventListener('change', checkTimeIfAvaliable );
        duration.addEventListener('change',checkTimeIfAvaliable);

        const appointments = @JSON($appointments) ;



        function enableAll(){
            for (let i=0; i < 9; i++) {
                console.log('i,ll try to remove disabe');
                children[i].disabled=false;
                }
            }

        function disableAll(){
            for (let i=0; i < 9; i++) {
                console.log('i,ll try to remove disabe');
                children[i].disabled=true;
                }
            }

        function checkTimeIfAvaliable() {

            enableAll();

            timeStart.value = "Choose start time";
            console.log(date.value);
            let timeArr = [];
            appointments.forEach(app => {
            if (app.date == date.value && app.studio_id == studio.value) {
            timeArr.push([app.time_start, app.time_end]);
            };
        });

            // console.log(timeArr);
        if(timeArr.length>0) {
            for (let x = 0; x < timeArr.length; x++) {
                // console.log(timeArr[x]);
                for (let i=0; i < startTimes.length; i++) {
                        let option=parseFloat(startTimes[i].value);
                        let appStart=parseFloat(timeArr[x][0]);
                        let appEnd=parseFloat(timeArr[x][1]);
                        let newDuration=parseFloat(duration.value);

                        if (option + newDuration > appStart
                            && option + newDuration <= appEnd
                            ||option >= appStart && option < appEnd)
                            {
                            children[i].disabled=true;
                            }
                }
            }
        }
    }

    </script>

</section>


@endsection
