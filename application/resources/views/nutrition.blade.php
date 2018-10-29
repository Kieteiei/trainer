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
   <h1>โภชนาการ</h1>
<table>
 <tr><td>nutritionID</td><td>nutritionName</td><td>nutritionDetail</td><td>nutritionQuote</td><td>userID</td></tr>
<?php foreach ($nutrition as  $nutritions): ?>


  
  <tr class="alt">
  <td>
  <?= $nutritions->nutritionID ?>
  </td>    



  <td> 
  <?= $nutritions->ntName ?> 
  </td>   

  <td>
  <?= $nutritions->ntDetail ?> 
  </td>    

  <td>
  <?= $nutritions->ntQuote ?> 
  </td>    

  <td> 
  <?= $nutritions->userID ?>
  </td>    

   
</tr>
    

 



<?php endforeach; ?>
</table>
    <hr></div>




<!-- ----------------------------------------------------------------------------- -->
<form action="api/nutrition" method="POST">
<br>
    <div> ชื่อโภชนาการ </div> 
    <div><input type="text" name="ntName"> </div> 
    <div>รายละเอียด</div>    
    <div><input type="text" name="ntDetail"> </div>
    <div>ที่มาโภชนากร  </div> 
    <div><input type="text" name="ntQuote"></div>
     <div>รหัสผู้เพิ่ม (Auto)</div>
    <div><input type="text" name="userID"> </div>
    <button type="submit"  class="cancelbtn"  >Save</button>
</form>
    


</div>

    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>