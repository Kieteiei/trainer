@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ลิงค์วีดีโอ</li>
			</ol>
		</div>
        <h1>ลิงค์วีดีโอ</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลลิงค์วีดีโอ</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>linkvideo id</th>
                            <th>video name</th>
                            <th>video detail</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($videos as $i => $video)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $video->linkvideo_id }}</td>
                            <td>{{ $video->video_name }}</td>   
                            <td>{{ $video->video_detail }}</td>    
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
            <div class="panel-heading">เพื่มข้อมูลลิงค์วีดีโอ</div>
            <div class="panel-body">
                <form action="api/video" method="post">
                    @csrf

                    <div class="form-group">
                        <label>ชื่อวีดีโอ</label>
                        <input type="text" class="form-control" name="video_name" > 
                    </div>

                    <div class="form-group">
                        <label>วีดีโอ</label>
                        <input type="text" class="form-control" name="video_detail" > 
                    </div>
                   
                    <button type="submit" class="btn btn-primary" >เพิ่มข้อมูล</button>
                </form>
            </div> 
        </div>
    </div>

@endsection