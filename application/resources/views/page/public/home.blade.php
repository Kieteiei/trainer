@extends('layout.app-include')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <header class="v-header container">
            <div class="fullscreen-video-wrap">
                <video src="/img/intro-vdo.mp4?v=2" autoplay muted loop></video>
            </div>
            <div class="header-overlay"></div>
            <div class="header-content text-md-center">
                <h1>Welcome to Trainer Freelance</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
                <a class="btn-home">Find Out More</a>
            </div>
        </header>
</div>
   {{-- <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorem tempora, eveniet quae dicta blanditiis non, totam officia vel itaque ullam unde ducimus! Asperiores earum, nemo dolorem facilis veritatis alias!</div> --}}
    {{-- <header class="v-header container">
        <div class="fullscreen-video-wrap">
            <video src="/img/intro-vdo.mp4?v=2" autoplay muted loop></video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content text-md-center">
            <h1>Welcome to Trainer Freelance</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
            <a class="btn-home">Find Out More</a>
        </div>
    </header> --}}

@endsection
