@extends('layout.app-include')

@section('content')

     <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">บัญชีผู้ใช้</li>
			</ol>
		</div>
        <br>

        {{-- <button onclick="notifyMe()">Notify me!</button> --}}

        <div class="panel panel-default">
            <div class="panel-body">
                <form action="/page/me" method="post">
                    {{ method_field('PATCH') }}
                    @csrf

                    <h3>ข้อมูลบุคคล</h3>
                    <hr>
                    <div class="form-group">
                        <label>fullname</label>
                        <input type="text" class="form-control" name="fullname" required value="{{ $user->fullname }}">
                    </div>

                    <div class="form-group">
                        <label>birthday</label>
                        <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                    </div>

                    <div class="form-group">
                        <label>weight</label>
                        <input type="number" class="form-control" name="weight" value="{{ $user->weight }}">
                    </div>

                    <div class="form-group">
                        <label>height</label>
                        <input type="number" class="form-control" name="height" value="{{ $user->height }}">
                    </div>

                    <h3>ที่อยู่</h3>
                    <hr>
                    <div class="form-group">
                        <label>address</label>
                        <textarea class="form-control" style="height:100px;" name="address">{{ $user->address }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>province</label>
                        <input type="text" class="form-control" name="province" value="{{ $user->province }}">
                    </div>

                    <div class="form-group">
                        <label>district</label>
                        <input type="text" class="form-control" name="district" value="{{ $user->district }}">
                    </div>

                    <h3>การติดต่อ</h3>
                    <hr>
                    <div class="form-group">
                        <label>phone_number</label>
                        <input type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}">
                    </div>

                    <div class="form-group">
                        <label>email</label>
                        <input type="email" class="form-control" name="email" required value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label>line_id</label>
                        <input type="text" class="form-control" name="line_id" value="{{ $user->line_id }}">
                    </div>

                    <h3>การชำระเงิน</h3>
                    <hr>
                    <div class="form-group">
                        <label>รายละเอียดช่องทางการชำระเงิน</label>
                        <textarea class="form-control ckedit-init" name="payment_detail">{{ $user->payment_detail }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>อีเมล์ของบัญชี paypal</label>
                        <input type="email" class="form-control" name="paypal_email" value="{{ $user->paypal_email }}">
                    </div>

                    <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                </form>
            </div>
        </div>
    </div>

    <script>
            // request permission on page load
            document.addEventListener('DOMContentLoaded', function () {
            if (!Notification) {
                alert('Desktop notifications not available in your browser. Try Chromium.');
                return;
            }

            if (Notification.permission !== "granted")
                Notification.requestPermission();
            });

            function notifyMe() {
            if (Notification.permission !== "granted")
                Notification.requestPermission();
            else {
                var notification = new Notification('Notification title', {
                icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
                body: "Hey there! You've been notified!",
                });

                notification.onclick = function () {
                window.open("http://stackoverflow.com/a/13328397/1269037");
                };

            }

            }
        </script>

@endsection
