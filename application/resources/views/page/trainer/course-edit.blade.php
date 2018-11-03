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
        <h1>คอร์ส <a class="btn btn-warning" href="/trainer/courses"> ย้อนกลับ</a></h1>

        <div class="panel panel-default">
            <div class="panel-heading">แก้ไขคอร์ส</div>
            <div class="panel-body">
                <form action="/trainer/courses/{{ $course->course_id }}" method="post" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    <div class="form-group">
                        <label>ชื่อคอร์ส</label>
                        <input type="text" class="form-control" name="course_name" required value={{ $course->course_name }}>
                    </div>

                    <div class="form-group">
                        <label>กิจกรรม</label>
                        <textarea type="text" class="form-control" name="activity">{{ $course->activity }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>รูปภาพ</label>
                        <input type="file" class="form-control" name="photo">
                        <img src="/storage/{{ $course->img_path }}" style="width:200px" alt="photo">
                    </div>

                    <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                </form>
            </div>
        </div>
    </div>


@endsection
