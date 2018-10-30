@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ความคิดเห็น</li>
			</ol>
		</div>
        <h1>ความคิดเห็น</h1>

        <div class="panel panel-default">
            <div class="panel-heading">ตารางข้อมูลความคิดเห็น</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>comment id</th>
                            <th>comment type</th>
                            <th>comment</th>
                            <th>comment datetime</th>
                            <th>user id</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($comments as $i => $comment)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $comment->comment_id }}</td>
                            <td>{{ $comment->comment_type }}</td>   
                            <td>{{ $comment->comment }}</td>    
                            <td>{{ $comment->comment_datetime }}</td>    
                            <td>{{ $comment->user_id }}</td>
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
            <div class="panel-heading">เพื่มข้อมูลแสดงความคิดเห็น</div>
            <div class="panel-body">
                <form action="api/course" method="post">
                    @csrf

                    <div class="form-group">
                        <label>ประเภทความคิดเห็น</label>
                        <input type="text" class="form-control" name="comment_type" > 
                    </div>

                    <div class="form-group">
                        <label>ความคิดเห็น</label>
                        <input type="text" class="form-control" name="comment" > 
                    </div>

                    <div class="form-group">
                        <label>วัน/เดือน/ปี</label>
                        <input type="date" class="form-control" name="comment_datetime" > 
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