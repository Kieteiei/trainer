@extends('layout.app-include')

@section('content')
   
<header class="v-header container">
    <div class="fullscreen-video-wrap">
        <video src="/img/intro-vdo.mp4" autoplay muted></video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
      <h1>Welcome Everyone</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
      <a class="btn">Find Out More</a>
    </div>
</header>

@endsection