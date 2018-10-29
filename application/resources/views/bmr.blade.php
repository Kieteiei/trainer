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

    <script type="text/JavaScript">
<!--
function CalcDCI()
{
	if (document.form.cents.value == null || document.form.cents.value.length == 0 ||
        document.form.kilograms.value == null || document.form.kilograms.value.length == 0 ||
        document.form.years.value == null    || document.form.years.value.length == 0) 
		{
				return;
		}
				
	var cents=document.form.cents.value / 2.54;
	var kilograms=document.form.kilograms.value / 0.4536;
    var years=document.form.years.value;
	var factor=document.form.exercise[document.form.exercise.selectedIndex].value;
	
	// Make the male calculations   
    if (document.form.gender[0].checked)
	  {
     	weight = 66 + (13.7 * (kilograms / 2.2));
  		height = 5 * (cents * 2.54);
  		age = 6.8 * years;               
      }

    // Make the female calculations
    else
	  {
       weight = 655 + (9.6 * (kilograms / 2.2));
	   height = 1.7 * (cents * 2.54);
	   age = 4.7 * years;             
	  }
	  document.form.BMR.value = Math.round(weight + height - age);    
	  document.form.tdee.value = document.form.BMR.value * factor;    
				
}

//-->
</script>

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



 <FORM name=form >
 <table width="600" border="0" align="center">
 <tr>
 <td colspan="2"><h2> โปรแกรมคำนวณอัตราการใช้พลังงานในแต่ละวัน(BMR)</h2></td>
            
 </tr>
            
 <tr>
 <td width="200"><div>เลือกเพศของคุณ</div></td>
 <td width="212"> <div><p>
              <INPUT type=radio 
                            checked align=left value=MalePick name=gender>
              &nbsp;&nbsp;ชาย&nbsp;&nbsp;
              <INPUT 
                            type=radio align=left value=FemPick name=gender>
              &nbsp;หญิง
            </p></div>
</td>
</tr>
<tr>
         <td> <div> ส่วนสูงของคุณ (เซนติเมตร)</div></td>  
         <td><div>
            <INPUT type="number" size=5 name="cents">
            </div>
        </td>   
</tr>
<tr>           
          <td><div> น้ำหนักของคุณ (กิโลกรัม)</div></td> 
          <td><div><INPUT type="number" size=5 name="kilograms"></div></td>
           
 </tr>
 <tr>          
        <td><div>อายุของคุณ (ปี)</div></td> 
        <td><div><INPUT type="number" size=5 name="years"></div></td>
</tr>
<tr>
            <td><div> ระดับการออกกำลังกายของคุณ</div></td>           
            <td><SELECT name=exercise>
              <OPTION value="1.25">น้อย หรือไม่ค่อยออกกำลังกาย</OPTION>
              <OPTION value="1.375">ปานกลาง ออกกำลังกาย 1-3 ครั้งต่อสัปดาห์</OPTION>
              <OPTION value="1.55">ปานกลาง ออกกำลังกาย 4-5 ครั้งต่อสัปดาห์</OPTION>
              <OPTION value="1.7">หนัก ออกกำลังกาย 6-7 ครั้งต่อสัปดาห์</OPTION>
              <OPTION value="1.9">หนักมาก ออกกำลังกายวันละ 2 ครั้งขึ้นไป</OPTION>
            </SELECT></td>
</tr>
<tr>
<td></td>
            <td><BR><br />
            <INPUT onClick="CalcDCI()" type="button" value="คำนวณ" name="button">
            <BR>
            <BR>
            <BR></td>
            </tr>
<tr>

            <td><div>BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต</div></td>
           <td> <div> <INPUT size="5" name="BMR" style="background-color:#FFC; border:solid 1px #CCC" > กิโลแคลอรี่</div></td>
</tr>
<tr>         
           <td><div>TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน</div></td>
           <td><div><INPUT size="5" name="tdee" style="background-color:#FFC; border:solid 1px #CCC" > กิโลแคลอรี่</div></td>
</tr>
        </table>
          </FORM>

  
</div> 
    <!-- include js -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>