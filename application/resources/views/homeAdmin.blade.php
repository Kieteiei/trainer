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


</head>
  <body>
  <!-- top_ui -->
    <div class="main">
    <div class="topnav">
      
      <a href="logout">Logout</a>
      <a href="/api/updateuser"> <?= $_SESSION ["UserName"] ?> </a>
      <a class="active" href="/api/homeuser">Home</a>


      </div>
    </div>
  <!-- manu -->
  <div class="sidenav">
  <h>TrainerFreelance</h>
  <!-- <a href="course">คอร์ส</a> -->
  <!-- <a href="nutrition">โภชนาการ</a> -->
  <!-- <a href="practicerecord">บันทึกการฝึก</a> -->
  <!-- <a href="effectrecord">บันทึกผลการฝึก</a>   -->
  <!-- <a href="appeal"> ร้องเรียน </a> -->
  <!-- <a href="comment"> ความคิดเห็น </a>  -->
  <a href="/api/homeadmin"> ผู้ใช้งานระบบ </a>
  <a href="appeal_admin"> ร้องเรียน </a>
  <a href="comment_admin"> ความคิดเห็น </a>
  <a href="posture"> ท่าการออกกำลังกาย </a>
  <a href="photo"> รูปการออกกำลังกาย </a>
  <a href="video">วีดีโอการออกกำลังกาย  </a>
  <!-- <a href="bmi">BMI  </a> -->
  <!-- <a href="bmr">BMR  </a> -->
</div>


   
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
            
          <button type="submit">Login</button> <br>
        </div>
        
        <a href="/api/register"> Register </a>
        <div class="low" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
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

<form method="post" action="/api/userSearch">

<input type="text" name="search" /> 
<input type="submit" value="Search"/> 
 <br>

</form>
<h1>ผู้ใช้งานระบบ</h1>
<div class="datagrid">

<table >
<hr>
<tr><td>UserID</td><td>UserName</td><td>Address</td><td>Email</td><td>LineID</td><td>UserType</td></tr>
<?php foreach ($user as $users): ?>
 
<tr class="alt">
  <td >
  <?= $users->userID ?>
  </td>

  <td > 
  <?= $users->userName ?> 
  </td>   

  <td >
  <?= $users->address ?> 
  </td>    

  <td >
  <?= $users->email ?> 
  </td>    

  <td > 
  <?= $users->LineID ?>
  </td>    

  <td > 
  <?= $users->userType ?>
  </td>    
   
</tr>



<?php endforeach; ?>
</table>
    <hr>

</div>





</div>
    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>