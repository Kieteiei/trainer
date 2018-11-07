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
                            <th>เทรนเนอร์</th>
                            <th>สถานะ</th>
                            <th>ราคา</th>
                            <th>ไฟล์แนบ</th>
                            <th>ข้อความจากเทรนเนอร์</th>
                            <th>ยื่นข้อเสนอเมื่อ</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($payments as $i => $payment)
                        <tr>
                            <td class="text-center"> {{ ++$i }} </td>
                            <td>{{ $payment->trainer_user->fullname }}</td>
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
                            <td>{!! $payment->trainer_note !!}</td>
                            <td>{{ $payment->created_at }}</td>
                            <td class="text-center">
                                @if ($payment->trainer_user->paypal_email)
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                        <input type="hidden" name="business" value="{{ $payment->trainer_user->paypal_email }}">
                                        <input type="hidden" name="cmd" value="_xclick">
                                        <input type="hidden" name="item_name" value="ชำระเงินค่าฝึกสอนให้เทรนเนอร์ {{ $payment->trainer_user->fullname }}">
                                        <input type="hidden" name="amount" value="{{ $payment->amount }}">
                                        <input type="hidden" name="currency_code" value="THB">

                                        <button class="btn btn-success btn-block" style="margin-bottom:5px">ชำระผ่าน Paypal</button>
                                    </form>
                                @endif
                                <button class="btn btn-warning btn-block" onclick="togglePaymentDetailModal(`{{ $payment->trainer_user->payment_detail }}`)">
                                    ช่องทางการชำระเงินอื่นๆ
                                </button>
                                <button class="btn btn-primary btn-block" onclick="togglePaymentModal({{ $payment->payment_id }}, `{{ $payment->customer_note }}`)">
                                    แจ้งชำระเงิน
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="payment-detail-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>ช่องการชำระเงิน</h1><br>
                <div>
                    <p id="payment-detail">
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="payment-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>ท่านต้องการแจ้งชำระเงิน ?</h1><br>
                <div class="text-right">
                    <form id="payment_form" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}

                        <input type="hidden" name="status" value="2">

                        <div class="form-group">
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea id="customer_note" class="form-control" name="customer_note" style="height:100px"></textarea>
                        </div>

                        <button class="btn btn-success btn-block">แจ้งชำระเงิน</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePaymentModal(payment_id, customer_note) {
            $('#payment-modal').modal('toggle');
            $('#payment_form').attr('action', '/user/payments/' + payment_id);
            $('#customer_note').val(customer_note);
        }

        function togglePaymentDetailModal(payment_detail) {
            $('#payment-detail-modal').modal('toggle');
            $('#payment-detail').html(payment_detail);
        }
    </script>

@endsection
