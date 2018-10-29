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
<h1>ท่าการออกกำลังกาย</h1>
<table >
<tr><td>postureID</td><td>postureName</td><td>postureDetail</td><td>postureQuote</td></tr>
<?php foreach ( $posturs as $posturss): ?>
 
<tr class="alt">
  <td >
  <?= $posturss->postureID ?>
  </td>

  <td > 
  <?= $posturss->postureName ?> 
  </td>   

  <td >
  <?= $posturss->postureDetail ?> 
  </td>    

  <td >
  <?= $posturss->postureQuote ?> 
  </td>   

   
</tr>



<?php endforeach; ?>
</table>
    <hr>

</div>
  <!-- *************************************************************** -->
<form action="api/posture" method="POST">
<br>
    <div> ชื่อท่าการออกำลังกาย </div> 
    <div><input type="text" name="postureName"> </div> 
    <div>รายละเอียดท่าการออกำลังกาย</div>    
    <div><input type="text" name="postureDetail"> </div>
    <div>ที่มาข้อมูล</div> 
    <div><input type="text" name="postureQuote"></div>
    <button type="submit"  class="cancelbtn"  >Save</button>
</form>
    
    


</div>

    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>