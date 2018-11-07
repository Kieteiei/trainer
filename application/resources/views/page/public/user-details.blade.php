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

        <div class="panel panel-container">
            <div class="panel-body">
                <h3>
                    <strong>{{ $user->fullname }}</strong>
                    <div style="float:right;">
                        @if (Session::has('auth_user'))
                            @if (Session::get('auth_type') == 'TRAINER' && $user->user_type == 'USER')
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#connect-modal">ยื่นข้อเสนอรับการฝึก</button>
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#payment-modal">ยื่นข้อเสนอการชำระเงิน</button>
                            @endif

                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#appeal-modal">รายงานปัญหา</button>
                        @endif
                    </div>
                </h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>birthday</strong> {{ $user->birthday }} </li>
                    <li class="list-group-item"><strong>address</strong> {{ $user->address }} </li>
                    <li class="list-group-item"><strong>email</strong> {{ $user->email }} </li>
                    <li class="list-group-item"><strong>phone_number</strong> {{ $user->phone_number }} </li>
                    <li class="list-group-item"><strong>line_id</strong> {{ $user->line_id }} </li>
                </ul>
            </div>
        </div>

        @if ($user->user_type == 'TRAINER')
            <div class="panel panel-container">
                <div class="row">
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-teal panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                                <div class="large">120</div>
                                <div class="text-muted">คะแนนเฉลี่ย</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-blue panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                                <div class="large">52</div>
                                <div class="text-muted">ความคิดเห็น</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-orange panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                                <div class="large">24</div>
                                <div class="text-muted">นักเรียนที่เคยฝึก</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-red panel-widget ">
                            <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                                <div class="large">25.2k</div>
                                <div class="text-muted">ยอดค้นหา</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default chat">
                    <div class="panel-heading">
                        Comments
                    </div>
                    <div class="panel-body">
                        @if (Session::has('auth_user'))
                            <form action="/page/trainer/{{ $user->user_id }}/comment" method="post">
                                @csrf
                                <input type="text" name="comment" class="form-control" placeholder="แสดงความเห็นของคุณที่นี่" required />
                            </form>
                        @endif
                        <br>
                        <ul>
                            @foreach ($comments as $comment)
                                <li class="left clearfix"><span class="chat-img pull-left">
                                    <img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header"><strong class="primary-font"> {{ $comment->comment_user->fullname }} </strong> <small class="text-muted">{{ $comment->created_at }}</small></div>
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        Timeline
                    </div>
                    <div class="panel-body timeline-container">
                        @if (Session::has('auth_user') && Session::get('auth_user')->user_id == $user->user_id )
                            <form action="/page/trainer/{{ $user->user_id }}/post" method="post">
                                @csrf

                                <input type="text" class="form-control" name="body" placeholder="โพสต์ข้อความที่นี่" required/>
                            </form>
                        @endif
                        <br>
                        <ul class="timeline">
                            @foreach ($posts as $post)
                                <li>
                                    <div class="timeline-badge" style="padding-top:14px;"><em class="glyphicon glyphicon-comment"></em></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">{{ $post->created_at }}</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>{{ $post->body }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="connect-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container text-right">
                <h1>ยื่นข้อเสนอรับการฝึกแก่ลูกค้าท่านนี้</h1>
                <form action="/page/trainer/{{ $user->user_id }}/training" method="post">
                    @csrf

                    <textarea name="trainer_note" class="form-control" style="height:100px" placeholder="หมายเหตุ"></textarea><br>

                    <button type="submit" class="btn btn-success">ยื่นข้อเสนอ</button>
                    <button type="button" class="btn btn-warning" onclick="$('#connect-modal').modal('toggle');">ยกเลิก</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="payment-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container text-right">
                <h1>ยื่นข้อเสนอการชำระเงินแก่ลูกค้าท่านนี้</h1>
                <form action="/page/trainer/{{ $user->user_id }}/payment" method="post">
                    @csrf

                    <input type="number" class="form-control" name="amount" placeholder="จำนวนเงิน" required min="0"/><br>
                    <textarea name="trainer_note" class="form-control" style="height:100px" placeholder="หมายเหตุ"></textarea><br>
                    <button type="submit" class="btn btn-success">ยื่นข้อเสนอ</button>
                    <button type="button" class="btn btn-warning" onclick="$('#payment-modal').modal('toggle');">ยกเลิก</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="appeal-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container text-right">
                <h1>ร้องเรียนผู้ใช้งานท่านนี้ ?</h1>
                <form action="/page/trainer/{{ $user->user_id }}/appeal" method="post">
                    @csrf

                    <input type="text" class="form-control" name="appeal_detail" placeholder="เนื้อหาที่ต้องการร้องเรียน" required />

                    <button type="submit" class="btn btn-success" >ร้องเรียน</button>
                    <button type="button" class="btn btn-warning" onclick="$('#appeal-modal').modal('toggle');">ยกเลิก</button>
                </form>
            </div>
        </div>
    </div>



@endsection
