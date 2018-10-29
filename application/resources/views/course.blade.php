@extends('layout.app-include')

@section('content')
 
    @include('layout.navbar-include')

    <div class="main">
        <div class="datagrid">
            <h1>คอร์ส</h1>
            <table class="table table-striped">
                <tr>
                    <th>course id</th>
                    <th>course name</th>
                    <th>activity</th>
                    <th>course datetime</th>
                    <th>user id</th>
                    <th></th>
                </tr>
                @foreach($courses as $course)
                    <tr class="alt">
                        <td>{{ $course->course_id }}</td>
                        <td>{{ $course->course_name }}</td>   
                        <td>{{ $course->activity }}</td>    
                        <td>{{ $course->course_datetime }}</td>    
                        <td>{{ $course->user_id }}</td>
                        <td>  
                            <a href="/api/update">Update</a>
                            <a href="/api/Delete">Delete</a>
                        </td>    
                    </tr>
                @endforeach
            </table>
        </div>

        <form action="api/course" method="POST">
            <div>ชื่อคร์อส </div>
            <div>
                <input type="text" name="courseName" > 
            </div> 
            <div>กิจกรรม</div>    
            <div>
                <input type="text" name="activity"> 
            </div>
            <div>วันเ/ดือน/ปี  </div> 
            <div>
                <input type="date" name="coeseDattime">
            </div>
            <div>รหัสผู้เพิ่ม (Auto)</div>
            <div>
                <input type="text" name="userID"> 
            </div>
            <button type="submit"  class="cancelbtn" >Save</button>
            <a href="updatecourse"> Update </a> 
            <a href="deletecourse"> Delete </a> 
        </form>
    </div> 

@endsection