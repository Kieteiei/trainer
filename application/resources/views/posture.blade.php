@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ท่าการออกกำลังกาย</li>
			</ol>
		</div>
        <h1>ท่าการออกกำลังกาย</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลท่าการออกกำลังกาย</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>posture id</th>
                            <th>posture name</th>
                            <th>posture detail</th>
                            <th>posture quote</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($postures as $i => $posture)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $posture->posture_id }}</td>
                            <td>{{ $posture->posture_name }}</td>   
                            <td>{{ $posture->posture_detail }}</td>    
                            <td>{{ $posture->posture_quote }}</td>    
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
            <div class="panel-heading">เพื่มข้อมูลท่าการออกกำลังกาย</div>
            <div class="panel-body">
                <form action="api/posture" method="post">
                    @csrf

                    <div class="form-group">
                        <label>ชื่อท่าการออกกำลังกาย</label>
                        <input type="text" class="form-control" name="posture_name" > 
                    </div>

                    <div class="form-group">
                        <label>รายละเอียดท่าการออกำลังกาย</label>
                        <input type="text" class="form-control" name="posture_detail" > 
                    </div>

                    <div class="form-group">
                        <label>ที่มาข้อมูล</label>
                        <input type="date" class="form-control" name="posture_quote" > 
                    </div>
                   
                    <button type="submit" class="btn btn-primary" >เพิ่มข้อมูล</button>
                </form>
            </div> 
        </div>
    </div>

@endsection