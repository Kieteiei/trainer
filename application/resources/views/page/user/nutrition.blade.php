@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">โภชนาการ</li>
			</ol>
		</div>
        <h1>โภชนาการ</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลโภชนาการ</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>nutrition id</th>
                            <th>nutrition name</th>
                            <th>nutrition detail</th>
                            <th>nutrition quote</th>
                            <th>user id</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($nutritions as $i => $nutrition)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $nutrition->nutrition_id }}</td>
                            <td>{{ $nutrition->nutrition_name }}</td>   
                            <td>{{ $nutrition->nutrition_detail }}</td>    
                            <td>{{ $nutrition->nutrition_quote }}</td>    
                            <td>{{ $nutrition->user_id }}</td>
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
            <div class="panel-heading">เพื่มข้อมูลโภชนาการ</div>
            <div class="panel-body">
                <form action="api/nutrition" method="post">
                    @csrf

                    <div class="form-group">
                        <label>ชื่อโภชนาการ</label>
                        <input type="text" class="form-control" name="nutrition_name" > 
                    </div>

                    <div class="form-group">
                        <label>รายละเอียด</label>
                        <input type="text" class="form-control" name="nutrition_detail" > 
                    </div>

                    <div class="form-group">
                        <label>ที่มาโภชนากร</label>
                        <input type="date" class="form-control" name="nutrition_quote" > 
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