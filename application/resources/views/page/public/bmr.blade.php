
@extends('layout.app-include')

@section('content')

   <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">bmr</li>
			</ol>
		</div>
        <h1>bmr</h1>

        <div class="panel panel-default">
            <div class="panel-heading">โปรแกรมคำนวณอัตราการใช้พลังงานในแต่ละวัน(BMR)</div>
            <div class="panel-body">
                <form name=form >
                    <label>เลือกเพศของคุณ</label>
                    <div class="radio">
                        <label>
                            <input type="radio" checked value="MalePick" name="gender">ชาย
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" checked value="FemPick" name="gender">หญิง
                        </label>
                    </div>
                    
                    <div class="form-group">
                        <label>ส่วนสูงของคุณ (เซนติเมตร)</label>
                        <input type="number" class="form-control" size="5" name="cents">
                    </div>

                    <div class="form-group">
                        <label>น้ำหนักของคุณ (กิโลกรัม)</label>
                        <input type="number" class="form-control" size="5" name="kilograms">
                    </div>

                    <div class="form-group">
                        <label>อายุของคุณ (ปี)</label>
                        <input type="number" class="form-control" size="5" name="years">
                    </div>

                    <div class="form-group">
                        <label>ระดับการออกกำลังกายของคุณ</label>
                        <select class="form-control" name="exercise">
                            <option value="1.25">น้อย หรือไม่ค่อยออกกำลังกาย</option>
                            <option value="1.375">ปานกลาง ออกกำลังกาย 1-3 ครั้งต่อสัปดาห์</option>
                            <option value="1.55">ปานกลาง ออกกำลังกาย 4-5 ครั้งต่อสัปดาห์</option>
                            <option value="1.7">หนัก ออกกำลังกาย 6-7 ครั้งต่อสัปดาห์</option>
                            <option value="1.9">หนักมาก ออกกำลังกายวันละ 2 ครั้งขึ้นไป</option>
                        </select>
                    </div>

                    <input onClick="CalcDCI()" type="button" value="คำนวณ" name="button">
                </form>

                <div class="form-group">
                    <label>อัตราการความต้องการเผาผลาญของร่างกายในชีวิตประจำวัน (กิโลแคลอรี่)</label>
                    <input id="BMR" class="form-control" style="background-color:#FFC; border:solid 1px #CCC"> 
                </div>
                <div class="form-group">
                    <label>ค่าของพลังงานที่ใช้ทั้งหมดในแต่ละวัน (กิโลแคลอรี่)</label>
                    <input id="tdee" class="form-control" style="background-color:#FFC; border:solid 1px #CCC" >
                </div>
            </div>
        </div>
    </div>
        
    <script type="text/JavaScript">
        function CalcDCI() {
            if (document.form.cents.value == null || document.form.cents.value.length == 0 ||
                document.form.kilograms.value == null || document.form.kilograms.value.length == 0 ||
                document.form.years.value == null    || document.form.years.value.length == 0) 
            {
                alert('a')
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

            document.getElementById('BMR').value = Math.round(weight + height - age);
            document.getElementById('tdee').value = Math.round(weight + height - age) * factor;
        }
    </script>

@endsection