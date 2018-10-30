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

                    <div class="col-xs-4">
                        <div class="example-1 card course-card">
                            <div class="wrapper">
                                <div class="date">
                                    <span class="day">12</span>
                                    <span class="month">Aug</span>
                                    <span class="year">2016</span>
                                </div>
                                <div class="data">
                                    <div class="content">
                                        <span class="author">Jane Doe</span>
                                        <h1 class="title"><a href="#">Boxing icon has the will for a couple more fights</a></h1>
                                        <p class="text">The highly anticipated world championship fight will take place at 10am and is the second major boxing blockbuster in the nation after 43 years.</p>
                                        <label for="show-menu" class="menu-button"><span></span></label>
                                    </div>
                                    <input type="checkbox" id="show-menu" />
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
                    
                </div>
            </div>
        </div>
    </div>

@endsection