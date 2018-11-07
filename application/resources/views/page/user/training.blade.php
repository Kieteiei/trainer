@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">การเทรนของฉัน</li>
			</ol>
		</div>
        <h1>การเทรนของฉัน</h1>

        <div class="panel panel-default">
            <div class="panel-heading">การเทรนที่กำลังดำเนินการ</div>
            <div class="panel-body">
                    @foreach($trainings as $i => $training)
                        @if ($training->status === 2)
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        เทรนเนอร์
                                        <strong>
                                            <a href="/user/trainings/{{ $training->training_id }}">{{ $training->customer_user->fullname }}</a>
                                        </strong>
                                    </h2>
                                </div>
                                <div class="col-xs-3">
                                    <strong>จำนวนการฝึก</strong> {{ count($training->practicerecords) }} ครั้ง
                                </div>
                                <div class="col-xs-3">
                                    <strong>จำนวนนัดหมาย</strong> {{ count($training->tabletrainings) }} ครั้ง
                                </div>
                                <div class="col-xs-3">
                                    <strong>เริ่มฝึกเมื่อ</strong> {{ $training->customer_user->created_at }}
                                </div>
                            </div>
                            <hr>
                        @endif
                    @endforeach
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">ข้อเสนอจากเทรนเนอร์</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>ชื่อลูกค้า</th>
                            <th>สถานะ</th>
                            <th>หมายเหตุ</th>
                            <th>วันที่เริ่ม</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($trainings as $i => $training)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td class="text-center">{{ $training->customer_user->fullname }}</td>
                            <td class="text-center" style="padding-top:13px">
                                @if ($training->status == '1')
                                    <span class="label label-warning">รอการตอบกลับ</span>
                                @elseif ($training->status == '2')
                                    <span class="label label-success">ดำเนินการ</span>
                                @elseif ($training->status == '0')
                                    <span class="label label-danger">ยกเลิก</span>
                                @endif
                            </td>
                            <td class="text-center">{!! $training->trainer_note !!}</td>
                            <td class="text-center">{{ $training->created_at }}</td>
                            <td class="text-center">
                                <form action="/user/trainings/{{ $training->training_id }}" method="post">
                                    {{ method_field('PATCH') }}
                                    @csrf

                                    <input type="hidden" name="status" value="0">

                                    <button type="submit" class="btn btn-block btn-danger">ยกเลิกการเทรน</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
