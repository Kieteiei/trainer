<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"class="active">Login</a>
                </li>
                <li class="dropdown">
                    <a href="/logout">Logout</a>
                </li class="dropdown">
                <li class="dropdown">
                    <a href="/api/updateuser">{{ Session::get("UserName", 'dummy_username') }} </a>
                </li>
                <li class="dropdown">
                    <a class="active" href="/api/hometrainer">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

 <div id="id01" class="modal">
    <form class="modal-content animate" action="/api/registerlogin" method="POST">
        <div class="container">
            <label><b>Username</b></label><br>
            <input type="text" name="userName"><br>

            <label><b>Password</b></label><br>
            <input type="password" name="password"><br>
        
            <button type="submit">Login</button> &nbsp;&nbsp; <br>  
            <fb:login-button 
                scope="public_profile,email"
                class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" 
                onlogin="checkLoginState();">
            </fb:login-button>
        </div>
    
        <a href="/api/register"> Register </a>
        <div class="low" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    <form action="/api/Loginfacebook"method="post"name="frmMain" id="frmMain">
        <input type="hidden" id="hdnFbID" name="hdnFbID">
        <input type="hidden" id="hdnName" name="hdnName">
        <input type="hidden" id="hdnEmail" name="hdnEmail">
    </form>
</div>
