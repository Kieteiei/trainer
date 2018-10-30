<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller 
{
    public function userfrom() 
    {
        return view('register');
    }
    public function homefrom() 
    {
        return view('page.public.home');
    }
    public function homeuser() 
    {
        return view('homeUser');
    }
    
    public function homeadmin() 
    {
        $user =new User();
        $user->all(); 
        
        return view('homeAdmin',[
            'user' => $user
        ]);
    }
        
    public function hometrainer() 
    {
        $user =new User();
        $user->all();

        return view('homeTrainner',[
            'user' => $user
        ]);
    }
        
    public function logout() 
    {
        session_start();
        session_destroy();
        header("location:/");
    }
            
    public function register(Request $request) 
    {
        
        $errorBag = [
            'userName' => [],
            'password' => [],
            'email' => []
        ];
        
        if (!$request->userName)
        array_push($errorBag['userName'], 'กรุณากรอก ชื่อสมาชิก');
        
        if (!$request->password)
        array_push($errorBag['password'], 'กรุณากรอก รหัสผ่าน');
        
        if (!$request->email)
        array_push($errorBag['email'], 'กรุณากรอก อีเมล');
        
        if ($request->password != $request->pass )
        array_push($errorBag['password'], 'กรุณายืนยันรหัสผ่านให้ถูกต้อง');
        
        if (count($errorBag) > 0)
        $this->session()->flash('errors', $errorBag);
        
        if (! $this->session()->has('errors')) {
            $user->userName = $request->userName;
            $user->password=$request->password;
            $user->idCard=$request->idCard;
            $user->address = $request->address;
            $user->birthday = $request->birthday;
            $user->email = $request->email;
            $user->phoneNumber = $request->phoneNumber;
            $user->weight = $request->weight;
            $user->hige = $request->hige;
            $user->LineID = $request->LineID;
            $user->userType = $request->userType;
            $user->save();
            echo "<script>";
            echo "alert(\" สมัครสมาชิกสำเร็จแล้ว \");"; 					
            echo "</script>";
            return view('home');
        }
    }

    public function login(Request $request)
    {
        return view('check_login');
        
    }
            
    public function search(Request $request)
    {
        if (!$request->search)
        {
            $user=new User();
            $user->all();
            
            return $user;
        }
        else{
            $user=new User();
            $user->where( "userName","=",   $request->search)->get();
            
            return$user;
        }
        
    }
            
            
    public function update(){
        $user =new User();
        $user->where("userName","=",$_SESSION ["UserName"])->first();
        
        return view('updateUser' ,["user"=> $user]);
    }
            
            
            
    public function updates(Request $request)
    {
        $errorBag = [
            'userName' => [],
            'password' => [],
            'email' => []
        ];
        
        if (!$request->userName)
        array_push($errorBag['userName'], 'กรุณากรอก ชื่อสมาชิก');
        
        if (!$request->password)
        array_push($errorBag['password'], 'กรุณากรอก รหัสผ่าน');
        
        if (!$request->email)
        array_push($errorBag['email'], 'กรุณากรอก อีเมล');
        
        if ($request->password != $request->pass )
        array_push($errorBag['password'], 'กรุณายืนยันรหัสผ่านให้ถูกต้อง');
        
        if (count($errorBag) > 0)
        $this->session()->flash('errors', $errorBag);
        
        if (! $this->session()->has('errors')) {
            $user =new User();
            $user ->where("userID","=",           $_SESSION["UserID"])
                ->update([
                    "userName" =>       $request->userName,
                    "password"=>         $request->password,
                    "idCard"=>            $request->idCard,
                    "address"=>           $request->address,
                    "birthday"=>          $request->birthday,
                    "email"=>             $request->email,
                    "phoneNumber"=>       $request->phoneNumber,
                    "weight"=>        $request->weight,
                    "hige"=>              $request->hige,
                    "LineID"=>            $request->LineID,
                    "userType"=>          $request->userType
                    ]);    
                    
                    
        }
                
        return redirect("/api/updateuser");
    }     
            
    public function showdata(){
        $user =new User();
        $user->all();

        return $user;
    }        
                    
    public function registerform()
    {
        return view('register');
    }
                    
    public function Loginfacebook()
    {
        $fbif=$_POST["hdnFbID"];
        $Name=$_POST["hdnName"];
        $email=$_POST["hdnEmail"];
        $user =new User();
        $user->where("FBID","=",$fbif)->first();

        if ($user) {
            $user = $user;
                    
            if($user->userType == "TRAINER"){
                $_SESSION["UserName"]= $user->userName;
                return view('hometrainer');
            }
            else if($user->userType == "USER"){
                $_SESSION["UserName"]= $user->userName;
                return view("homeuser");
            }
        }	
        else {
          
            $user->userName = $Name;
            $user->FBID = $fbif;
            $user->email = $email;
            $user->userType="USER";
            $user->save();
            $_SESSION["FBid"]= $fbif;
            echo "<script>";
            echo "alert(\" สมัครสมาชิกสำเร็จแล้ว \");"; 					
            echo "</script>";
            return view('check_login');
        }
    }
    
}