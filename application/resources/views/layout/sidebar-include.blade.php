<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    @if (Session::has('auth_user'))
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <a href="/page/me">
                    <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
                </a>
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><a href="/page/me">{{ substr(Session::get('auth_user')->fullname,0,13) }}</a></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
    @endif
    <div class="divider"></div>
    <ul class="nav menu">
        <li><a href="/page/bmi"><i class="fa fa-calculator">&nbsp;</i> คำนวณค่า BMI</a></li>
        <li><a href="/page/bmr"><i class="fa fa-calculator">&nbsp;</i> คำนวณค่า BMR</a></li>
        <li class="visible-xs"><a href="/page/course"><i class="fa fa-search">&nbsp;</i> ค้นหาคอร์สเรียน</a></li>
        <li class="visible-xs"><a href="/page/search-users"><i class="fa fa-users">&nbsp;</i> ค้นหาลูกค้า/เทรนเนอร์</a></li>
        <hr>

        @if (Session::has('auth_user') && Session::get('auth_type') === 'USER')
            <li><a href="/page/me"><i class="fa fa-user-o">&nbsp;</i> โปรไฟล์ของฉัน </a></li>
            <li><a href="/user/trainings"><i class="fa fa-calendar">&nbsp;</i> การเทรนของฉัน</a></li>
            <li><a href="/user/payments"><i class="fa fa-credit-card">&nbsp;</i> การชำระเงิน</a></li>
        @endif

        @if (Session::has('auth_user') && Session::get('auth_type') === 'TRAINER')
            <li><a href="/page/me"><i class="fa fa-user-circle-o">&nbsp;</i> โปรไฟล์ของฉัน </a></li>
            <li><a href="/trainer/courses"><i class="fa fa-clipboard">&nbsp;</i> คอร์สของฉัน</a></li>
            <li><a href="/trainer/trainings"><i class="fa fa-universal-access">&nbsp;</i> การเทรนลูกค้า</a></li>
            <li><a href="/trainer/payments"><i class="fa fa-credit-card">&nbsp;</i> การชำระเงิน</a></li>
        @endif

        @if (Session::has('auth_user') && Session::get('auth_type')  === 'ADMIN')
            <li><a href="/page/me"><i class="fa fa-user-o">&nbsp;</i> โปรไฟล์ของฉัน </a></li>
            <li><a href="/admin/users"><i class="fa fa-calendar">&nbsp;</i> ผู้ใช้งาน</a></li>
            <li><a href="/admin/appeals"><i class="fa fa-calendar">&nbsp;</i> การร้องเรียน</a></li>
            {{-- <li><a href="/admin/postures"><i class="fa fa-calendar">&nbsp;</i> ท่าการออกกำลังกาย</a></li>
            <li><a href="/admin/photos"><i class="fa fa-calendar">&nbsp;</i> รูปการออกกำลังกาย</a></li>
            <li><a href="/admin/videos"><i class="fa fa-calendar">&nbsp;</i> วีดีโอการออกกำลังกาย</a></li> --}}
        @endif
    </ul>
</div>
