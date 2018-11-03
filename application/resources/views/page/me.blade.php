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

        <div class="panel panel-default">
            <div class="panel-body">
                <form action="/page/me" method="post">
                    {{ method_field('PATCH') }}
                    @csrf

                    <div class="form-group">
                        <label>user_name</label>
                        <input type="text" class="form-control" name="user_name" required value="{{ $user->user_name }}">
                    </div>

                    <div class="form-group">
                        <label>id_card</label>
                        <input type="text" class="form-control" name="id_card" value="{{ $user->id_card }}">
                    </div>

                    <div class="form-group">
                        <label>address</label>
                        <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                    </div>

                    <div class="form-group">
                        <label>birthday</label>
                        <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                    </div>

                    <div class="form-group">
                        <label>email</label>
                        <input type="email" class="form-control" name="email" required value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label>phone_number</label>
                        <input type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}">
                    </div>

                    <div class="form-group">
                        <label>weight</label>
                        <input type="number" class="form-control" name="weight" value="{{ $user->weight }}">
                    </div>

                    <div class="form-group">
                        <label>height</label>
                        <input type="number" class="form-control" name="height" value="{{ $user->height }}">
                    </div>

                    <div class="form-group">
                        <label>line_id</label>
                        <input type="text" class="form-control" name="line_id" value="{{ $user->line_id }}">
                    </div>

                    <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
                </form>

                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

                    <!-- Identify your business so that you can collect the payments. -->
                    <input type="hidden" name="business" value="knight_baberon@hotmail.com">

                    <!-- Specify a Buy Now button. -->
                    <input type="hidden" name="cmd" value="_xclick">

                    <!-- Specify details about the item that buyers will purchase. -->
                    <input type="hidden" name="item_name" value="Hot Sauce-12oz. Bottle">
                    <input type="hidden" name="amount" value="1">
                    <input type="hidden" name="currency_code" value="THB">

                    <!-- Display the payment button. -->
                    <input type="image" name="submit" border="0"
                    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                    alt="Buy Now">
                    <img alt="" border="0" width="1" height="1"
                    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                  </form>
            </div>
        </div>
    </div>


@endsection
