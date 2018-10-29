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
      <a class="active" href="/api/hometrainer">Home</a>


      </div>
    </div>
  <!-- manu -->
  <div class="sidenav">
  <h>TrainerFreelance</h>
  <a href="course">คอร์ส</a>
  <a href="nutrition">โภชนาการ</a>
  <a href="practicerecord">บันทึกการฝึก</a>
  <a href="effectrecord">บันทึกผลการฝึก</a>  
  <a href="appeal"> ร้องเรียน </a>
  <a href="comment"> ความคิดเห็น </a> 
  <a href="posture"> ท่าการออกกำลังกาย </a>
  <a href="photo"> รูปการออกกำลังกาย </a>
  <a href="video">วีดีโอการออกกำลังกาย  </a>
  <a href="bmi">BMI  </a>
  <a href="bmr">BMR  </a>
</div>

<!-- ------------------------------------------------------------------------------------------------------ -->

<div class="main" >

<form method="post" action="/api/userSearch">

<input type="text" name="search" /> 
<input type="submit" value="Search"/> 
 <br>

</form>
<h1>สมาชิก</h1>
<div class="datagrid">

<table >
<hr>
<tr><td>userID</td><td>userName</td><td>address</td><td>email</td><td>LineID</td></tr>
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