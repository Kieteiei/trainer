@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">บันทึกผลการฝึก</li>
			</ol>
		</div>
        <h1>บันทึกผลการฝึก</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลบันทึกผลการฝึก</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>effectrecord id</th>
                            <th>practicerecord id</th>
                            <th>effect</th>
                            <th>weight</th>
                            <th>height</th>
                            <th>effectrecord datetime</th>
                            <th>user id</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($effectrecords as $i => $effectrecord)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $effectrecord->effectrecord_id }}</td>
                            <td>{{ $effectrecord->practicerecord_id }}</td> 
                            <td>{{ $effectrecord->effect }}</td>   
                            <td>{{ $effectrecord->weight }}</td>    
                            <td>{{ $effectrecord->height }}</td>    
                            <td>{{ $effectrecord->effectrecord_datetime }}</td>    
                            <td>{{ $effectrecord->user_id }}</td>
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
            <div class="panel-heading">เพื่มข้อมูลบันทึกผลการฝึก</div>
            <div class="panel-body">
                <form action="api/course" method="post">
                    @csrf

                    <div class="form-group">
                        <label>ชื่อบันทึกการฝึก</label>
                        <input type="text" class="form-control" name="practice_id" > 
                    </div>

                    <div class="form-group">
                        <label>ผลการฝึก</label>
                        <input type="text" class="form-control" name="effect" > 
                    </div>

                    <div class="form-group">
                        <label>น้ำหนัก</label>
                        <input type="text" class="form-control" name="weight" > 
                    </div>

                    <div class="form-group">
                        <label>ส่วนสูง</label>
                        <input type="text" class="form-control" name="height" > 
                    </div>

                    <div class="form-group">
                        <label>สัปดาห์ที่</label>
                        <input type="date" class="form-control" name="effectrecord_datetime" > 
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