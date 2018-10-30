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
                            <th>activity</th>
                            <th>course datetime</th>
                            <th>user id</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($courses as $i => $course)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $course->course_id }}</td>
                            <td>{{ $course->course_name }}</td>   
                            <td>{{ $course->activity }}</td>    
                            <td>{{ $course->course_datetime }}</td>    
                            <td>{{ $course->user_id }}</td>
                            <td class="text-center">  
                                <a class="btn btn-warning" href="/api/update">Update</a>
                                <a class="btn btn-danger" href="/api/Delete">Delete</a>
                            </td>    
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">เพื่มข้อมูลคอร์ส</div>
            <div class="panel-body">
                <form action="api/course" method="post">
                    @csrf

                    <div class="form-group">
                        <label>ชื่อคอร์ส</label>
                        <input type="text" class="form-control" name="course_name" > 
                    </div>

                    <div class="form-group">
                        <label>กิจกรรม</label>
                        <input type="text" class="form-control" name="activity" > 
                    </div>

                    <div class="form-group">
                        <label>วัน/เดือน/ปี</label>
                        <input type="date" class="form-control" name="course_datetime" > 
                    </div>

                    <div class="form-group">
                        <label>รหัสผู้เพิ่ม (Auto)</label>
                        <input type="text" class="form-control" name="user_id" > 
                    </div>
                   
                    <button type="submit" class="btn btn-primary" >เพิ่มข้อมูล</button>
                </form>
            </div> 
        </div>
    </div>

@endsection