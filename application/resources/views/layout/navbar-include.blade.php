<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand hidden-sm hidden-xs" href="#"><span>Trainer</span>Freelance</a>
            <a href="/" class="navbar-brand visible-sm visible-xs" href="#"><span>TN</span>FL</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown hidden-xs">
                    <a href="/page/course">
                        <i class="fa fa-search">&nbsp;</i> ค้นหาคอร์สเรียน
                    </a>
                </li>
                <li class="dropdown hidden-xs">
                    <a href="/page/search-users">
                        <i class="fa fa-users">&nbsp;</i> ค้นหาลูกค้า/เทรนเนอร์
                    </a>
                </li>
                @if (Session::has('auth_user'))
                    <li class="dropdown">
                        <form id="form-logout" action="/auth/logout" method="post">
                            @csrf
                        </form>
                        <a onclick="document.getElementById('form-logout').submit();">
                            <i class="fa fa-unlock-alt">&nbsp;</i> ออกจากระบบ
                        </a>
                    </li class="dropdown">
                @else
                    <li class="dropdown">
                        <a href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fa fa-sign-in">&nbsp;</i>เข้าสู่ระบบ
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="modal" data-target="#register-modal">
                            <i class="fa fa-edit">&nbsp;</i> สมัครสมาชิก
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>เข้าสู่ระบบ</h1><br>
            <form action="/auth/login" method="post">
                @csrf

                <input type="text" name="user_name" placeholder="Username">
                <input type="password" name="password" placeholder="Password">

                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                <fb:login-button
                    scope="public_profile,email"
                    class="fb-login-button"
                    data-max-rows="1"
                    data-size="large"
                    data-button-type="login_with"
                    data-show-faces="false"
                    data-auto-logout-link="false"
                    data-use-continue-as="false"
                    data-width="290"
                    onlogin="checkLoginState();">
                    Continue with Facebook
                </fb:login-button>
            </form>
            <form action="/api/Loginfacebook"method="post"name="frmMain" id="frmMain">
                <input type="hidden" id="hdnFbID" name="hdnFbID">
                <input type="hidden" id="hdnName" name="hdnName">
                <input type="hidden" id="hdnEmail" name="hdnEmail">
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>สมัครสมาชิก</h1><br>
            <form action="/auth/register" method="post">
                @csrf

                <input type="text" name="fullname" placeholder="Fullname" required>
                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="user_name" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="radio">
                    <label>
                        <input type="radio" name="user_type" value="USER" checked>
                        ลูกค้า
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="user_type" value="TRAINER">
                        เทรนเนอร์
                    </label>
                </div>

                <button type="submit" class="btn btn-info btn-block loginmodal-submit" style="margin-bottom:7px">
                    Register
                </button>
                <fb:login-button
                    scope="public_profile,email"
                    class="fb-login-button"
                    data-max-rows="1"
                    data-size="large"
                    data-button-type="login_with"
                    data-show-faces="false"
                    data-auto-logout-link="false"
                    data-use-continue-as="false"
                    data-width="290"
                    onlogin="checkLoginState();">
                    Continue with Facebook
                </fb:login-button>
            </form>
            <form action="/api/Loginfacebook"method="post"name="frmMain" id="frmMain">
                <input type="hidden" id="hdnFbID" name="hdnFbID">
                <input type="hidden" id="hdnName" name="hdnName">
                <input type="hidden" id="hdnEmail" name="hdnEmail">
            </form>
        </div>
    </div>
</div>

