@extends('app.master')
@section('profile-style')
<link rel="stylesheet" href="/css/profile.css">
@endsection
@section('title',"$user->name")

@section('content')
<div class="mx-auto container p-5 m-5">
    <div class="row profile-banner">
        <div class="col-12" id="profile-cover" {{-- profile cover --}}
            style="background-image:url('{{asset('storage/'.$user->cover)}}'); height:10rem;">

            <div class="col-3 " id="profile-pic">
                {{-- profile picture --}}
                <img class="p-0 m-0" src="{{asset('storage/'.$user->image)}}" alt="">
            </div>



            {{-- update-cover-button --}}
            @if($user->id ==Auth::user()->id)
            <button class='btn btn-primary' id="update-cover-button">update cover
                <i class="fa-solid fa-image ml-2"></i>
            </button>

            {{-- update profile picture icon --}}
            <div id="update-profile-icon" class="btn btn-primary">
                <i class="fa-solid fa-camera "></i>
            </div>
            {{-- update profile picture form --}}
            <form action="/updateProfile" method="POST" role="form" enctype="multipart/form-data" id="updateImage">
                @csrf
                <input type="file" name="image" id="chooseImage">
                <input type="file" name="cover" id="chooseCover">
                <input type="submit" value="submit">
            </form>

            {{-- edit profile icon --}}
            <a href="edit-profile" id="editProfileGear" class="edit-profile"><i class="fa-solid fa-gear fa-2xl"></i></a>
            @endif

            {{-- user name --}}
            <div id="profile-info">
                <h3 class="text-dark " id="profile-name"> {{$user->name}} </b></h3>
            </div>

            <div>
                <div class="main-profile {{$user->id == Auth::user()->id ? '' : 'other-user-profile'}} ">
                    {{-- about user --}}
                    <div class="col-lg-4 align-self-center">
                        <ul>
                            {{-- rank --}}
                            <li class="info-1">
                                <span>
                                    <i class="fa-solid fa-trophy me-1"></i>
                                </span>
                                Rank:
                                <span> {{ ucfirst(trans("$user->rank")) }} </span>
                            </li>
                            {{-- clips --}}
                            <li class="info-2"> <i class="fa-solid fa-video me-1"></i>
                                Clips:
                                <span>{{$user->videos()->count()}}</span>
                            </li>
                            {{-- views --}}
                            <li class="info-3">
                                <i class="fa-solid fa-eye me-1"></i>Views:
                                <span>{{$user->videos()->sum('views')}}</span>
                            </li>

                            @if($user->id ==Auth::user()->id)
                            {{-- coins --}}
                            <li class="info-4"> <i class="fa-solid fa-coins me-1"></i>Coins:
                                <span>{{$user->coins}}</span>
                            </li>
                            @endif
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>

    @if(Auth::user()->id == $user->id)
    <div class="add-video row">
        <div class="col-md-9 video-info">
            <h4>
                <i class="fa-solid fa-cloud-arrow-up"></i>
                Add New <span class="gold"> Video</span>
            </h4>
            <div class="p-4 m-0 mt-3">
                <form action="/add-video" method="post" id="addVideo" role="form" enctype="multipart/form-data">
                    @csrf
                    {{-- title --}}

                    <div class="form-group d-flex">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Video title"
                            required>
                    </div>

                    {{-- Url --}}
                    <div class="form-group d-flex my-3">
                        <label for="url">Link</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Youtube link" required>
                    </div>

                    {{-- image --}}
                    <div class="form-group d-flex">
                        <input type="file" class="form-control d-none" name="image" id="posterFile" required>
                        <span class='choosePoster'>
                            Upload poster
                        </span>
                        <span class="fileName" id="image">
                            Click to upload poster
                        </span>
                    </div>
                    <button type="submit" class="button button-lg button-primary-outline-v2 header-button  uploadVideo">
                        Upload video
                    </button>
                </form>
            </div>
        </div>

        <div class=" col-md-3 p-0">
            <img src="/images/video.jpg" alt="">
        </div>
    </div>
    @endif
    <div class=" row profile-content">
        <div class="col-lg-12">
            <div class="page-content">

                <!-- ***** Banner Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="clips">
                                    <div class="row" id="popular-clips">

                                        <div class="col-lg-12">
                                            <div class="heading-section">
                                                <h4 class="dark" id="more-popular">
                                                    <i class="fa-solid fa-video me-1"></i>
                                                    Most Recent <span class="gold"> Clips</span>
                                                </h4>
                                            </div>

                                            {{-- most popular videos --}}
                                            @if($user->videos->count() == 0)
                                            <div class="no-results">
                                                <img src="/storage/logos/no-results.png" alt="">
                                                <h5 class="dark">There are no vedios to show</h5>
                                            </div>
                                            @endif
                                        </div>

                                        @if($user->videos->count() >0)
                                        @foreach ($user->videos as $video)
                                        <div class=" col-lg-4 col-md-6 col-sm-12 py-5">
                                            <div class="container">
                                                <div class="row img-row">
                                                    <a href={{"/show/video/$video->id/$user->id"}}>
                                                        <img src="{{asset('storage/'.$video->image)}}" alt="" class="">
                                                    </a>
                                                </div>
                                                <div class="row video-ifo d-flex">
                                                    <div class="user-video-img ">
                                                        <img class="border-rounded"
                                                            src="{{asset('storage/'.$video->user->image)}}" alt=""
                                                            class="clip">
                                                    </div>
                                                    <div class="video-text ">
                                                        <div>
                                                            <h6 class="text-truncate w-100"> {{$video->title}}
                                                            </h6 class="">
                                                        </div>
                                                        <div>
                                                            <b class=" text-truncate"> {{$video->user->name}}
                                                            </b>
                                                        </div>
                                                        <div>
                                                            {{$video->views}} views .
                                                            {{date_format($video->created_at,"d/m/Y") }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

                                        <div class="col-lg-12">
                                            <div class="main-button w-100 my-5 pt-5">

                                                <a class="view-more dark" href="#">
                                                    @if($user->videos->count() >4)
                                                    <span>
                                                        Load More Clips
                                                    </span>
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Banner End ***** -->

            <!-- ***** appointments section Start, only visible for user ***** -->

            @if($user->id == Auth::user()->id)
            <div class="heading-section">
                <h4 class="dark">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    Your Appointments <span class="gold">History </span>
                </h4>
            </div>

            @if($user->appointments->count() == 0)
            <div class="no-results mb-5 pb-5">
                <img src="/storage/logos/no-results.png" alt="">
                <h5 class="dark">You haven't made any appointment, <a class="text-decoration-underline"
                        href="/appoinment"> make one
                        now</a></h5>
            </div>

            @else
            <div class="gaming-library profile-library">
                <div class="col-lg-12">

                    <table class="table table-striped  table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">date</th>
                                <th scope="col">Start time</th>
                                <th scope="col">End time</th>
                                <th scope="col">Studio</th>
                                <th scope="col">Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->appointments as $appointment)
                            <tr>
                                <td>{{$appointment->date}}</td>
                                <td>{{
                                    $appointment->time_start >12 ? ($appointment->time_start-12).":00 pm" :
                                    $appointment->time_start.":00 am" }}
                                </td>
                                <td>{{
                                    $appointment->time_end >12 ? ($appointment->time_end-12).":00 pm" :
                                    $appointment->time_end.":00 am" }}
                                </td>
                                <td>{{$appointment->studio->location}}</td>
                                <td>
                                    {{$appointment->coins > 1 ? $appointment->coins. ' Coins' :
                                    $appointment->coins. ' Coin'}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
            @endif
            <!-- ***** appointments section end ***** -->
        </div>
    </div>
</div>
</div>

<script>
    // update profile picture
    const updateImage = document.getElementById('update-profile-icon');
    const posterInput = document.getElementById('image');

    updateImage.addEventListener('click', () => {
    document.getElementById('chooseImage').click();
    }) ;
    document.getElementById('chooseImage').onchange = ()=>{ document.getElementById('updateImage').submit()}

    // update profile cover

    document.getElementById('update-cover-button').addEventListener('click', () => {
        document.getElementById('chooseCover').click();
    });
    document.getElementById('chooseCover').onchange = ()=>{ document.getElementById('updateImage').submit()}

    posterInput.addEventListener('click', (e)=>{
        document.getElementById('posterFile').click();
    });

document.getElementById('posterFile').onchange = ()=>{
    posterInput.textContent = document.getElementById('posterFile').value;
}




</script>

@endsection
