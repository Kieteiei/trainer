@extends('layout.app-include')

@section('content')

     <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ค้นหาผู้ใช้งาน</li>
			</ol>
        </div>
        <h1>ค้นหาผู้ใช้งาน</h1>
        <br>

        <div class="panel panel-default">
            <div class="panel-body">
                <form action="/page/search-users">
                    <input type="hidden" name="search" value="true">

                    <div class="col-sm-4">
                        <select name="user_type" class="form-control" required>

                            <option value="">- ประเภทผู้ใช้งาน -</option>
                            <option value="TRAINER">เทรนเนอร์</option>
                            <option value="USER">ผู้ใช้งานทั่วไป</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select name="filter" class="form-control" required>
                            <option value="">- เงื่อนไขการค้นหา -</option>
                            <option value="fullname">ชื่อ-นามสกุล</option>
                            <option value="province">จังหวัด</option>
                            <option value="district">อำเภอ</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="keyword" class="form-control" style="height:34px" placeholder="คีเวิร์ดที่ต้องการหา">
                    </div>

                    <div class="col-xs-12 text-right" style="margin-top: 10px">
                        <button class="btn btn-primary">ค้นหา</button>
                        <a href="/page/search-users" class="btn btn-warning">ดูทั้งหมด</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                @foreach ($users as $user)
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>
                                <strong>
                                    <a href="/page/trainer/{{ $user->user_id}}">{{ $user->fullname }}</a>
                                </strong>
                            </h2>
                        </div>
                        <div class="col-xs-3">
                            <strong>phone_number</strong> {{ $user->phone_number }}
                        </div>
                        <div class="col-xs-3">
                            <strong>email</strong> {{ $user->email }}
                        </div>
                        <div class="col-xs-3">
                            <strong>line_id</strong> {{ $user->line_id }}
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

@endsection
