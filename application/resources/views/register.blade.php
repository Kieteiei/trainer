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
  
<form action="api/updates" method="POST">

  <h1>สมัครสมาชิก</h1><br>
    <div class="form-group"> 
      <label>ชื่อผู้ใช้งาน</label>
      <input type="text" name="userName" class="form-control" > 
      
      <?php if ($errors->has('userName')): ?>
        <?php foreach ($errors->get('userName') as $error): ?>
          <div class="alert alert-danger">
            <strong>ผิดพลาด!</strong> <?= $error; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>   


    <div class="form-group">
      <label>รหัสผ่าน</label>
      <input type="password" name="password" class="form-control">

      <?php if ($errors->has('password')): ?>
        <?php foreach ($errors->get('password') as $error): ?>
          <div class="alert alert-danger">
            <strong>ผิดพลาด!</strong> <?= $error; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <div class="form-group">
      <label>ยืนยันรหัสผ่าน</label>
      <input type="password" name="pass" class="form-control">
      </div>

    <div class="form-group">
    <label>รหัสบัตรประจำตัวประชาชน</label>
      <input type="text" name="idCard"   class="form-control">
       </div>


    <div class="form-group">
    <label>ที่อยู่</label>
      <input type="text" name="address" class="form-control"> 
    </div>

    <div class="form-group">
    <label>วัน/เดือน/ปี เกิด</label>
      <input type="date" name="birthday"  class="form-control"> 
    </div>

    <div class="form-group">
    <label>อีเมล</label>
      <input type="text" name="email" class="form-control">

      <?php if ($errors->has('email')): ?>
        <?php foreach ($errors->get('email') as $error): ?>
          <div class="alert alert-danger">
            <strong>ผิดพลาด!</strong> <?= $error; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <div class="form-group">
      <label>หมายเลขโทรศัพท์</label>
      <input type="number" name="phoneNumber"  class="form-control"> 
    </div>

    <div class="form-group">
    <label>น้ำหนัก</label>
      <input type="number" name="weight"  class="form-control"> 
    </div>

    <div class="form-group">
    <label>ส่วนสูง</label>
      <input type="number" name="hige"   class="form-control"> 
    </div>

    <div class="form-group">
    <label>Line ID</label>
      <input type="text" name="LineID"  class="form-control"> 
    </div>

  
    
    <div class="form-group"> <label>ประเภทผู้ใช้งาน</label>
            <select name="userType" >
            <!-- <option value="ADMIN">ADMIN</option> -->
            <option value="USER">USER</option>
            <option value="Trainer">TRAINER</option>
            </select>
    </div>

    <button type="submit"  class="cancelbtn"  >Save</button>

    </form>
 

 
  
</div> 

    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>