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


<form action="/api/photo" method="POST">
 <h1>รูปการออกกำลังกาย</h1><br>

    <div> ชื่อภาพการออกกำลังกาย </div> 
    <div><input type="text" name="photoName"> </div> 
    <div>ภาพการออกำลังกาย</div>    
    <div> 
    <!-- <form name="form1" method="post" action="PageUploadToMySQL2.php" enctype="multipart/form-data"> -->
	  <input type="file" name="localtionDetail">
    </div>
    <div>ที่มาข้อมูล</div> 
    <div><input type="text" name="photoQuote"></div>

    <button type="submit"  class="cancelbtn"  >Save</button>
    <a href="updatecourse"> Update </a> 
    <a href="deletecourse"> Delete </a> 

</form>
   
</form>
<h1>รูปภาพ</h1>
<div class="datagrid">

<table >
<hr>
<tr><td>photoID</td><td>	photoName</td><td>	localtionDetail	</td><td>photoQuote</td></tr>
<?php foreach ($photo as $photos): ?>
 
<tr class="alt">
  <td >
  <?= $photos->photoID ?>
  </td>

  <td > 
  <?= $photos->photoName ?> 
  </td>   

  <td >
  <?= $photos->localtionDetail	 ?> 
  </td>    

  <td >
  <?= $photos->photoQuote ?> 
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