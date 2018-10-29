<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<div align="center">
  <?php


  $weight=$_POST['weight'];
  $height=$_POST ['height'] ;

  $height=$height/100;
 
  $bmi=$weight/($height*$height);
 
 
  if($bmi<=18.50){
       $c="น้ำหนักน้อย / ผอม";
       $s="มากกว่าคนปกติ";
  }else if($bmi>18.50 && $bmi<22.90){
       $c="ปกติ (สุขภาพดี)";   
       $s="ปกติ";
  }else if($bmi>23 && $bmi<24.90){
       $c="ท้วม / โรคอ้วนระดับ 1";   
       $s="อันตรายระดับ 1";
  }else if($bmi>25 && $bmi<29.90){
       $c="อ้วน / โรคอ้วนระดับ 2";   
       $s="อันตรายระดับ 2";
  }else if($bmi>30){
       $c="อ้วนมาก / โรคอ้วนระดับ 3";
       $s="อันตรายระดับ 3";   
  }

   ?>
   <h2>โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</h2>
   
   <p align="center">
   <b>BMI : </b><?php echo $bmi;?> bmi<br /><br />
   <b>อยู่ในเกณท์ : </b><?php echo $c;?><br /><br />
   <b>ภาวะเสี่ยงต่อโรค : </b><?php echo $s;?>
   
   </p>   
 
</div>
</div>
</body>
</html>