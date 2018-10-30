@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">bmi</li>
			</ol>
        </div>
        <h1>bmi</h1>

        <div class="panel panel-default">
            <div class="panel-heading">โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</div>
            <div class="panel-body">
                <form action="/page/bmi" method="post">
                    @csrf

                    <div class="form-group">
                        <label>น้ำหนัก (กิโลกรัม)</label>
                        <input type="text" class="form-control" name="weight" size="20" maxlength="100" required> 
                    </div>
                    <div class="form-group">
                        <label>ส่วนสูง (ซ.ม.)</label>
                        <input type="text" class="form-control" name="height" size="20" maxlength="100" required> 
                    </div>

                    <input type="submit" class="btn btn-primary" value="คำนวณ" />
                </form>
            </div>
        </div>
    </div>

@endsection