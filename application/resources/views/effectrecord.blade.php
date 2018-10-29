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
      <a class="active" href="/">Home</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>      
      



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

</div>

<div class="main">
<div class="datagrid">
<h1>บันทึกผลการฝึก</h1>
<table >
<tr><td>erID</td><td>prID</td><td>effect</td><td>weihth</td><td>hige</td><td>erDatetime</td><td>userID</td></tr>
<?php foreach ($effectrecord as $effectrecords): ?>
 
<tr class="alt">
  <td >
  <?= $effectrecords->erID ?>
  </td>

  <td > 
  <?= $effectrecords->prID ?> 
  </td>   

  <td >
  <?= $effectrecords->effect ?> 
  </td>    

  <td >
  <?= $effectrecords->weihth ?> 
  </td>    

  <td > 
  <?= $effectrecords->hige ?>
  </td>    

  <td > 
  <?= $effectrecords->erDatetime ?>
  </td>    

  <td > 
  <?= $effectrecords->userID ?>
  </td>    

   
</tr>



<?php endforeach; ?>
</table>
    <hr>

</div>

  <!-- ----------------------------------------------------------------------- -->

<form action="api/effectrecord" method="POST">
<br>
    <div> ชื่อการฝึก(มาจากบันทึกการฝึก) </div> 
    <div><input type="text" name="prID"> </div> 
    <div>ผลการฝึก</div>    
    <div><input type="text" name="effect"> </div>
    <div>น้ำหนัก</div> 
    <div><input type="text" name="weihth"></div>
    <div>ส่วนสูง</div> 
    <div><input type="text" name="hige"></div>
    <div>สัปดาห์ที่</div> 
    <div><input type="text" name="erDatetime"></div>
     <div>รหัสผู้เพิ่ม (Auto)</div>
    <div><input type="text" name="userID"> </div>
    <button type="submit"  class="cancelbtn" >Save</button>
</form>
    



</div>

    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>