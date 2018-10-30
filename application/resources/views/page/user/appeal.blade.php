@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ร้องเรียน</li>
			</ol>
		</div>
        <h1>ร้องเรียน</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลร้องเรียน</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>appeal id</th>
                            <th>appeal type</th>
                            <th>appeal detail</th>
                            <th>appeal status</th>
                            <th>user id</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($appeals as $i => $appeal)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $appeal->appeal_id }}</td>
                            <td>{{ $appeal->appeal_type }}</td>   
                            <td>{{ $appeal->appeal_detail }}</td>    
                            <td>{{ $appeal->appeal_status }}</td>    
                            <td>{{ $appeal->user_id }}</td>
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
            <div class="panel-heading">เพื่มข้อมูลร้องเรียน</div>
            <div class="panel-body">
                <form action="api/course" method="post">
                    @csrf

                    <div class="form-group">
                        <label>ประเภทการร้องเรียน</label>
                        <input type="text" class="form-control" name="appeal_type" > 
                    </div>

                    <div class="form-group">
                        <label>รายละเอียดการร้องเรียน</label>
                        <input type="text" class="form-control" name="appeal_detail" > 
                    </div>

                    <div class="form-group">
                        <label>สถานะการร้องเรียน</label>
                        <input type="text" class="form-control" name="appeal_status" > 
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