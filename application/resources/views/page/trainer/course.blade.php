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
        <h1>คอร์ส</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลคอร์ส</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>course id</th>
                            <th>course name</th>
                            <th>course datetime</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($courses as $i => $course)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $course->course_id }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->created_at }}</td>
                            <td class="text-center">
                                <a class="btn btn-block btn-warning" href="/trainer/courses/{{ $course->course_id }}">Update</a>

                                <form action="/trainer/courses/{{ $course->course_id }}" method="post">
                                    {{ method_field('DELETE') }}
                                    @csrf

                                    <button type="submit" class="btn btn-block btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">เพิ่มคอร์ส</div>
            <div class="panel-body">
                <form action="/trainer/courses" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>ชื่อคอร์ส</label>
                        <input type="text" class="form-control" name="course_name" required>
                    </div>

                    <div class="form-group">
                        <label>กิจกรรม</label>
                        <textarea type="text" class="form-control" name="activity"></textarea>
                    </div>

                    <div class="form-group">
                        <label>รูปภาพ</label>
                        <input type="file" class="form-control" name="photo" required>
                    </div>

                    <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
                </form>
            </div>
        </div>
    </div>


@endsection
