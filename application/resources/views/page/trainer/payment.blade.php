@extends('layout.app-include')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">การชำระเงิน</li>
			</ol>
		</div>
        <h1>การชำระเงิน</h1>

        <div class="panel panel-default">
            <div class="panel-heading">การชำระเงิน</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>สถานะ</th>
                            <th>ราคา</th>
                            <th>ไฟล์แนบ</th>
                            <th>ข้อความจากลูกค้า</th>
                            <th>ยื่นข้อเสนอเมื่อ</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($payments as $i => $payment)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $payment->customer_user->fullname }}</td>
                            <td class="text-center" style="padding-top:13px">
                                @if ($payment->status == 1)
                                    <span class="label label-warning">รอการชำระ</span>
                                @elseif ($payment->status == 2)
                                    <span class="label label-info">ตอบกลับการชำระ</span>
                                @elseif ($payment->status == 3)
                                    <span class="label label-success">ชำระเงินแล้ว</span>
                                @elseif ($payment->status == 0)
                                    <span class="label label-danger">ยกเลิก</span>
                                @endif
                            </td>
                            <td>{{ $payment->amount }}</td>
                            <td class="text-center">
                                @if ($payment->img_path)
                                    <a href="/storage/{{ $payment->img_path }}" target="_blank">link</a>
                                @endif
                            </td>
                            <td>{!! $payment->customer_note !!}</td>
                            <td>{{ $payment->created_at }}</td>
                            <td class="text-center">
                                <form action="/trainer/payments/{{ $payment->payment_id }}" method="post">
                                    @csrf
                                    {{ method_field('PATCH') }}

                                    <input type="hidden" name="status" value="3">

                                    <button class="btn btn-success btn-block">ชำระเงิน</button>
                                </form>
                                <form action="/trainer/payments/{{ $payment->payment_id }}" method="post">
                                    @csrf
                                    {{ method_field('PATCH') }}

                                    <input type="hidden" name="status" value="0">

                                    <button class="btn btn-danger btn-block">ยกเลิก</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
