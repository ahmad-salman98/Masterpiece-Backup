@extends('app.master')
@section('title','Checkout')

@section('content')

<section>
    <div class=" container p-5 h-100 my-5">
        <h4>Appointment details</h4>
        <div class="row d-flex align-items-stretch h-100">

            {{-- studio location --}}
            <div class="col-md-6  col-12  maps my-5">
                <div>
                    <div id="map" style="height: 450px;"></div>
                    <p>Studio location</p>
                </div>

                <script type="text/javascript">
                    function initMap() {
                              const myLatLng = { lat: {{$studio->lat}}, lng: {{$studio->long}} };
                              const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 15,
                                center: myLatLng,
                              });

                              new google.maps.Marker({
                                position: myLatLng,
                                map,
                                title: "Our studio location!",
                              });
                            }

                            window.initMap = initMap;
                </script>

                <script type="text/javascript"
                    src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
            </div>


            {{-- Bill details --}}
            @php $timeEnd = $timeStart+ $duration @endphp

            <div class=" my-5 offset-md-1 col-md-5 col-12 align-self-center summary ">
                <h4 class="" style="background: # FF4B2B">Summary</h4>
                <div class="w-100 mt-0 ">
                    <ul>
                        <li>Name <span>{{$name}}</span></li>
                        <li>Studio location <span>{{$studio->location}}</span></li>
                        <li>Date <span>{{$date}}</span></li>
                        <li>Start time <span>{{$timeStart>12 ? ($timeStart-12) ." pm" : "$timeStart am"}}</span></li>
                        <li>End time <span>{{$timeEnd>12 ? ($timeEnd-12) ." pm" : "$timeEnd am"}}</span></li>
                        <li>Total cost <span>{{$duration * 10 }} Coins</span></li>
                    </ul>
                </div>
            </div>



            <div class="col-12 d-flex justify-content-between align-items-center my-5 ">

                <a href="/appointment" class="button button-block button-primary m-0">
                    <i class="fa-solid fa-circle-chevron-left mr-3"></i> Back
                </a>

                <form action="/confirm-appointment" method="post" class="ml-auto">
                    @csrf
                    <input type="hidden" name="timeStart" value="{{$timeStart}}">
                    <input type="hidden" name="timeEnd" value="{{$timeStart + $duration}}">
                    <input type="hidden" name="date" value="{{$date}}">
                    <input type="hidden" name="name" value="{{$name}}">
                    <input type="hidden" name="phone" value="{{$phone}}">
                    <input type="hidden" name="studio" value="{{$studio->id}}">
                    <input type="hidden" name="cost" value="{{$duration * 10}}">

                    <button class="button button-block button-primary m-0" type="submit">
                        Confirm checkout
                        <i class="fa-solid fa-circle-chevron-right ml-3"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
