@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">การร้องเรียน</li>
			</ol>
		</div>
        <h1>การร้องเรียน</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลการร้องเรียน</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>username ผู้ร้องเรียน</th>
                            <th>เนื้อหาการร้องเรียน</th>
                            <th>username ผู้ถูกร้องเรียน</th>
                            <th>ร้องเรียนเมื่อ</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($appeals as $i => $appeal)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $appeal->reporter_user->user_name }}</td>
                            <td>{!! $appeal->appeal_detail !!}</td>
                            <td>{{ $appeal->reported_user->user_name }}</td>
                            <td>{{ $appeal->created_at }}</td>
                            <td class="text-center">
                                <form action="/admin/appeals/{{ $appeal->appeal_id}}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        ลบทิ้ง
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
