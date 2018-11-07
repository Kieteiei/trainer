@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ผู้ใช้งานระบบ</li>
			</ol>
		</div>
        <h1>ผู้ใช้งานระบบ</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลผู้ใช้งานระบบ</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>user_name</th>
                            <th>fullname</th>
                            <th>email</th>
                            <th>phone_number</th>
                            <th>user_type</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($users as $i => $user)
                        @if ($user->user_type !== 'ADMIN')
                            @if ($user->status == 1)
                                <tr>
                            @elseif ($user->status == 0)
                                <tr style="background-color:#ccc">
                            @endif
                                <td class="text-center"> {{ ++$i }} </td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->user_type }}</td>
                                <td class="text-center">
                                    @if ($user->status == 1)
                                        <form action="/admin/users/{{ $user->user_id }}" method="post">
                                            @csrf
                                            {{ method_field('PATCH') }}

                                            <input type="hidden" name="status" value="0">

                                            <button type="submit" class="btn btn-danger">
                                                แบนผู้ใช้งาน
                                            </button>
                                        </form>
                                    @elseif ($user->status == 0)
                                        <form action="/admin/users/{{ $user->user_id }}" method="post">
                                            @csrf
                                            {{ method_field('PATCH') }}

                                            <input type="hidden" name="status" value="1">

                                            <button type="submit" class="btn btn-warning">
                                                ปลดแบนผู้ใช้งาน
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
