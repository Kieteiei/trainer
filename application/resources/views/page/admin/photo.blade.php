@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">รูปการออกกำลังกาย</li>
			</ol>
		</div>
        <h1>รูปการออกกำลังกาย</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลรูปการออกกำลังกาย</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>photo id</th>
                            <th>photo name</th>
                            <th>location detail</th>
                            <th>photo quote</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($photos as $i => $photo)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $photo->photo_id }}</td>
                            <td>{{ $photo->photo_name }}</td>
                            <td>{{ $photo->location_detail }}</td>
                            <td>{{ $photo->photo_quote }}</td>
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
            <div class="panel-heading">เพื่มข้อมูลรูปการออกกำลังกาย</div>
            <div class="panel-body">
                <form action="api/photo" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>ชื่อภาพการออกกำลังกาย</label>
                        <input type="text" class="form-control" name="photo_name" >
                    </div>

                    <div class="form-group">
                        <label>ภาพการออกกำลังกาย</label>
                        <input type="file" class="form-control" name="location_detail" >
                    </div>

                    <div class="form-group">
                        <label>ที่มาข้อมูล</label>
                        <input type="text" class="form-control" name="photo_quote" >
                    </div>

                    <button type="submit" class="btn btn-primary" >เพิ่มข้อมูล</button>
                </form>
            </div>
        </div>
    </div>

@endsection
