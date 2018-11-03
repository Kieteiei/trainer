@extends('layout.app-include')

@section('content')

     <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">คอร์ส</li>
			</ol>
		</div>
        <br>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">

                    @foreach($courses as $i => $course)
                        <div class="col-md-6 col-lg-4">
                            <div class="example-1 card course-card">
                            <div class="wrapper" style="background: url(/storage/{{ $course->img_path }}) 20% 1% / cover no-repeat;">
                                    <div class="date">
                                        <span class="day">{{ (new DateTime($course->created_at))->format('d') }}</span>
                                        <span class="month">{{ (new DateTime($course->created_at))->format('M') }}</span>
                                        <span class="year">{{ (new DateTime($course->created_at))->format('Y') }}</span>
                                    </div>
                                    <div class="data">
                                        <div class="content">
                                            <span class="author">{{ $course->user->user_name }}</span>
                                            <h1 class="title"><a href="#">{{ $course->course_name}}</a></h1>
                                            <p class="text">{!! $course->activity !!}</p>
                                        <label for="show-menu-{{ $i }}" class="menu-button"><span></span></label>
                                        </div>
                                        <input type="checkbox" id="show-menu-{{ $i }}" />
                                        <ul class="menu-content">
                                            <li>
                                                <a href="#" class="fa fa-bookmark-o"></a>
                                            </li>
                                            <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
                                            <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
