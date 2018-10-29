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
  <a href="/api/homeadmin"> ผู้ใช้งานระบบ </a>
  <a href="appeal_admin"> ร้องเรียน </a>
  <a href="comment_admin"> ความคิดเห็น </a>
  <a href="posture"> ท่าการออกกำลังกาย </a>
  <a href="photo"> รูปการออกกำลังกาย </a>
  <a href="video">วีดีโอการออกกำลังกาย  </a>
</div>

<div class="main">
<div class="datagrid">
<h1>ร้องเรียน</h1>
<table >
<tr><td>appealID</td><td>appealType</td><td>appealDetail</td><td>appealStatus</td><td>userID</td></tr>
<?php foreach ($appeal as $appeals): ?>
 
<tr class="alt">
  <td >
  <?= $appeals->appealID ?>
  </td>

  <td > 
  <?= $appeals->appealType ?> 
  </td>   

  <td >
  <?= $appeals->appealDetail ?> 
  </td>    

  <td >
  <?= $appeals->appealStatus ?> 
  </td>    

  <td > 
  <?= $appeals->userID ?>
  </td>    

   
</tr>



<?php endforeach; ?>
</table>
    <hr>

</div>


<!-- *************************************************************************** -->


</div>

    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>