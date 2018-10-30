<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li><a href="/page/bmi"><i class="fa fa-dashboard">&nbsp;</i> bmi</a></li>
        <li><a href="/page/bmr"><i class="fa fa-calendar">&nbsp;</i> bmr</a></li>

        @if (Session::has('auth_user') && Session::get('auth_type') === 'USER')
            <li><a href="/user/courses"><i class="fa fa-calendar">&nbsp;</i> คอร์ส</a></li>
            <li><a href="/user/nutritions"><i class="fa fa-calendar">&nbsp;</i> โภชนาการ</a></li>
            <li><a href="/user/practicerecords"><i class="fa fa-calendar">&nbsp;</i> บันทึกการฝึก</a></li>
            <li><a href="/user/effectrecords"><i class="fa fa-calendar">&nbsp;</i> บันทึกผลการฝึก</a></li>
        @endif

        @if (Session::has('auth_user') && Session::get('auth_type') === 'TRAINER')
            <li><a href="/trainer/courses"><i class="fa fa-calendar">&nbsp;</i> คอร์ส</a></li>
            <li><a href="/trainer/nutritions"><i class="fa fa-calendar">&nbsp;</i> โภชนาการ</a></li>
            <li><a href="/trainer/practicerecords"><i class="fa fa-calendar">&nbsp;</i> บันทึกการฝึก</a></li>
            <li><a href="/trainer/effectrecords"><i class="fa fa-calendar">&nbsp;</i> บันทึกผลการฝึก</a></li>
        @endif

        @if (Session::has('auth_user') && Session::get('auth_type')  === 'ADMIN')
            <li><a href="/admin/users"><i class="fa fa-calendar">&nbsp;</i> ผู้ใช้งาน</a></li>
            <li><a href="/admin/courses"><i class="fa fa-calendar">&nbsp;</i> คอร์ส</a></li>
            <li><a href="/admin/appeals"><i class="fa fa-calendar">&nbsp;</i> ร้องเรียน</a></li>
            <li><a href="/admin/comments"><i class="fa fa-calendar">&nbsp;</i> ความคิดเห็น</a></li>
            <li><a href="/admin/postures"><i class="fa fa-calendar">&nbsp;</i> ท่าการออกกำลังกาย</a></li>
            <li><a href="/admin/photos"><i class="fa fa-calendar">&nbsp;</i> รูปการออกกำลังกาย</a></li>
            <li><a href="/admin/videos"><i class="fa fa-calendar">&nbsp;</i> วีดีโอการออกกำลังกาย</a></li>
        @endif
        
        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-1">
                <i class="fa fa-navicon">&nbsp;</i> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="#"><span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1</a>
                </li>
            </ul>
        </li>
    </ul>
</div>