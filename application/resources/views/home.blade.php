<!DOCTYPE html5>
<html>
  <head>
    <title> TrainerFreelance </title>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- set base route (pretty url) for angular.js -->
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- include css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
<!--FB-->


<form action="/api/registerlogin">
<!-- ลิงค์ใหม่ ฟังก์ชั่นใหม่ -->
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '350974038685871',
      xfbml      : true,
      version    : 'v2.12'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
function checkLoginState() {
    FB.getLoginStatus(function(response) {
      // statusChangeCallback(response);
    FB.api(
    '/me',
    'GET',
    {"fields":"id,name,email"},
    function(response) {
        // Insert your code here
        fbname=response.name;
        fbemail=response.email;
        fbID=response.id;
        
        $("#hdnFbID").val(fbID);
        $("#hdnName ").val(fbname);
        $("#hdnEmail").val(fbemail);
        $("#frmMain").submit();
    console.log(response);
                        }
          );
    });
}
</script>
</form>


 



</head>
  <body>



  <!-- top_ui -->
    <div class="main">
    <div class="topnav">
      <a class="active" href="/">Home</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>      
      <!-- Login -->
     <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"class="active">Login</a>




      </div>
    </div>
  <!-- manu -->
  <div class="sidenav">
  <h>TrainerFreelance</h>
  <a href="bmi">BMI  </a>
  <a href="bmr">BMR  </a>
</div>


      <!-- Login -->
     <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

    <div id="id01" class="modal">
      
      <form class="modal-content animate" action="/api/registerlogin" method="POST">
        <!-- <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="img/a.png" class="avatar">
        </div> -->
        <div class="container">
          <label><b>Username</b></label><br>
          <input type="text"   name="userName"><br>

          <label><b>Password</b></label><br>
          <input type="password" name="password"><br>
            
          <button type="submit">Login</button> &nbsp;&nbsp; <br>  
          <fb:login-button 
            scope="public_profile,email"
            class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" 
            onlogin="checkLoginState();"></fb:login-button>
          

<!-- lieh shre -->
<!-- <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true"></div> -->


           <br>
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

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
<!-- ------------------------------------------------------------------------------------------------------ -->

<div class="main" >
 <!-- <form action="/api/Loginfacebook"method="post"name="frmMain" id="frmMain">
 <fb:login-button 
            scope="public_profile,email"
            class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"  
            onlogin="checkLoginState();"> 
          </fb:login-button>
              <input type="text" id="hdnFbID" name="hdnFbID">
              <input type="text" id="hdnName" name="hdnName">
              <input type="text" id="hdnEmail" name="hdnEmail">
          </form> -->

      <h2 style="text-align:center">รายการแนะนำ</h2>

      <div>
        <div class="row" align="center">
          <img src="img/01.jpg" style="width:50%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">  
          <img src="img/02.jpg" style="width:50%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
          <img src="img/03.jpg" style="width:50%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
          <img src="img/04.jpg" style="width:50%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
      </div>

 

    <div id="myModal" class="modal" align="center">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="img/01.jpg" style="width:70%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="img/02.jpg" style="width:70%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="img/03.jpg" style="width:70%">
        </div>
        
        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="img/04.jpg" style="width:70%">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>


        <div class="column">
          <img class="demo cursor" src="img/01.jpg" style="width:95%" onclick="currentSlide(1)" alt=""> <!-- ตัวแปรข้อมูลภาพ -->
        </div>
        <div class="column">
          <img class="demo cursor" src="img/02.jpg" style="width:95%" onclick="currentSlide(2)" alt="">
        </div>
        <div class="column">
          <img class="demo cursor" src="img/03.jpg" style="width:95%" onclick="currentSlide(3)" alt="">
        </div>
        <div class="column">
          <img class="demo cursor" src="img/04.jpg" style="width:95%" onclick="currentSlide(4)" alt="">
        </div>
      </div>
    </div>
   

</div>

          <script>
          function openModal() {
            document.getElementById('myModal').style.display = "block";
          }

          function closeModal() {
            document.getElementById('myModal').style.display = "none";
          }

          var slideIndex = 1;
          showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
          }
          </script>

    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>