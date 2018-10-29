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
      <a href="/api/updateuser">{{ Session::get("UserName", null) }} </a>
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
</div>

<div class="main">
<div class="datagrid">
<h1>คอร์ส</h1>
<table >
<tr>
<!-- <td>courseID</td> -->
<td>courseName</td><td>activity</td><td>coeseDattime</td>
<!-- <td>userID</td> -->
</tr>
  @foreach($courses as $course)
 
<tr class="alt">
  <td>
    {{ $course->courseID }}
  </td>
  

  <td > 
  {{ $course->courseName }} 
  </td>   

  <td >
  <?= $course->activity ?> 
  </td>    

  <td >
  <?= $course->coeseDattime ?> 
  </td>    

  <!-- <td > 
  <?= $course->userID ?>
  </td>     -->

  <td >  
  <a href="/api/update">Update</a>
  <a href="/api/Delete">Delete</a>
 
  </td>    

   
</tr>

@endforeach

</table>
    <hr>

</div>

<!-- -------------------------------------------------------------------------------------------------------------------- -->
<form action="api/course" method="POST">
    <br>
    <div>ชื่อคร์อส </div>
    <div><input type="text" name="courseName" > </div> 
    <div>กิจกรรม</div>    
    <div><input type="text" name="activity"> </div>
    <div>วันเ/ดือน/ปี  </div> 
    <div><input type="date" name="coeseDattime"></div>
     <div>รหัสผู้เพิ่ม (Auto)</div>
    <div><input type="text" name="userID"> </div>
    <button type="submit"  class="cancelbtn"  >Save</button>
    <a href="updatecourse"> Update </a> 
    <a href="deletecourse"> Delete </a> 
    </form>


    <!-- <form action="api/coursewhere" method="POST">
    <h1>Course</h1><br>
    <div>ชื่อครอส </div> 
    <div><input type="text" name="courseName" > </div> 
    <button type="submit"  class="cancelbtn"  >Save</button>
    <a href="updatecourse"> Update </a> 
    <a href="deletecourse"> Delete </a> 
    </form> -->
   

  
</div> 
    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>