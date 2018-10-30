@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">บันทึกการฝึก</li>
			</ol>
		</div>
        <h1>บันทึกการฝึก</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลบันทึกการฝึก</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>practicerecord id</th>
                            <th>practicerecord name</th>
                            <th>practicerecord detail</th>
                            <th>practicerecord datetime</th>
                            <th>user id</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($practicerecords as $i => $practicerecord)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $practicerecord->practicerecord_id }}</td>
                            <td>{{ $practicerecord->practicerecord_name }}</td>   
                            <td>{{ $practicerecord->practicerecord_detail }}</td>    
                            <td>{{ $practicerecord->practicerecord_datetime }}</td>    
                            <td>{{ $practicerecord->user_id }}</td>
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
            <div class="panel-heading">เพื่มข้อมูลบันทึกการฝึก</div>
            <div class="panel-body">
                <form action="api/practicerecord" method="post">
                    @csrf

                    <div class="form-group">
                        <label>ชื่อการบันทึก</label>
                        <input type="text" class="form-control" name="practicerecord_name" > 
                    </div>

                    <div class="form-group">
                        <label>รายละเอียดการฝึก</label>
                        <input type="text" class="form-control" name="practicerecord_detail" > 
                    </div>

                    <div class="form-group">
                        <label>วันที่ทำการฝึก</label>
                        <input type="date" class="form-control" name="practicerecord_datetime" > 
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