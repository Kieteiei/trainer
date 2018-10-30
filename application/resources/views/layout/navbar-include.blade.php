<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
            <ul class="nav navbar-top-links navbar-right">
                @if (Session::has('auth_user'))
                    <li class="dropdown">
                        <form id="form-logout" action="/auth/logout" method="post">
                            @csrf
                        </form>
                        <a href="#" onclick="document.getElementById('form-logout').submit();"> Logout </a>
                    </li class="dropdown">
                @else
                    <li class="dropdown">
                        <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="modal" data-target="#register-modal">Register</a>
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
            <form action="/api/registerlogin" method="post">
                <input type="text" name="user_name" placeholder="Username">
                <input type="password" name="password" placeholder="Password">

                <input type="submit" name="login" class="login loginmodal-submit" value="Register">
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
    
