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



<form  action="/api/bmi" method="post">
    
<table width="600" border="0" align="center">
<tr>
      <td colspan="2">
      <div align="center"><h2>โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</h2></div>
      </td>
</tr>
<tr>
      <td width="200"> <div align="right">น้ำหนัก : </div> </td>
      <td width="212"> <input type="number" name="weight" size="20" maxlength="100" />กิโลกรัม </td>
</tr>
<tr>
      <td><div align="right">ส่วนสูง : </div></td>
      <td><input type="number" name="height" size="20" maxlength="100" value="" />ซ.ม.</td>
</tr>     
 <tr>
      <td colspan="2"> <div align="center"><input type="submit" value="คำนวณ" /></div></td>
</tr>
<tr>
      <td colspan="2" style="font-size:14px; color:#F00;" align="center"></td>
</tr>
  </table>
<div align="center"></div>


    </form>

  
</div> 
    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>