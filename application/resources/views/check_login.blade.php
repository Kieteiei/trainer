<?php
	try{
	//session_start();
	require_once ('database-connect.php');
	$where="";
if($_POST['userName']!=null && $_POST['password']!=null){
	$user = $_POST['userName'];
	$pass = $_POST['password'];
	$where=" userName='" . $user . "' AND password='" . $pass . "'";
}
if($_SESSION["FBid"]!=null)
{
	$where=" FBID='" . $_SESSION["FBid"] . "'";
}
	$statement = $con->prepare( "SELECT * FROM User WHERE ".$where);
	//echo $statement;
	$statement->execute();
	$data = $statement->fetch(); 

	if(! $data)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $data->userID;
			$_SESSION["UserName"] = $data->userName;
			$_SESSION["Status"] = $data->userType;

			session_write_close();
			
			if($_SESSION["Status"] == "ADMIN")
			{
				header("location:homeadmin");
			}
			else if($_SESSION["Status"]=="TRAINER")
			{
				header("location:hometrainer");
			}
		
			else if($_SESSION["Status"]=="USER")
			{
				header("location:homeuser");
			}else{
				echo "<script>";
					echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
					echo "window.history.back()";
				echo "</script>";

			  }
			
	}
}
catch (Exception $e) {
	echo "<script>";
				echo "alert(\" ชื่อผู้ใช้หรือระหัดผ่านไม่ถูกต้อง!\");"; 
			echo "</script>";
		
  }
  
?>