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
                <h2>โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</h2>
                <p>
                    <b>BMI : </b>{{ $bmi }} bmi
                </p>
                <p>
                    <b>อยู่ในเกณท์ : </b>{{ $result }}
                </p>
                <p>
                    <b>ภาวะเสี่ยงต่อโรค : </b>{{ $risk }}
                </p>
            </div>
        </div>
    </div>

@endsection