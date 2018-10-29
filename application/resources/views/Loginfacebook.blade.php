<?php

session_start();

$sql="SELECT * FROM user WHERE fbID = ".$_POST["hdnFbID"]."";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query);
if ($result) {
	$_SESSION["customerID"] = $result["customerID"];
	//echo $result["customerID"];
	header("location:index.php");
	exit();
}	
else {
	$sql1="INSERT INTO customer (customerName,email,fbID) VALUES ('".$_POST["hdnName"]."','".$_POST["hdnEmail"]."','".$_POST["hdnFbID"]."')";
	$query1=mysqli_query($conn,$sql1);
	$sql2="SELECT * FROM customer WHERE fbID = ".$_POST["hdnFbID"]."";
		$query2=mysqli_query($conn,$sql2);
		$result2=mysqli_fetch_array($query2);
		$_SESSION["customerID"] = $result2["customerID"];
		header("location:index.php");
		exit();
	
}
?>