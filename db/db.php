<?php
function insertuser($username,$password){
	$res = 0;
	$con = mysqli_connect("localhost","root","root");
	if(!$con){
		die('Could not connect:'.mysqli_error());
	}
	//选择数据库
	mysqli_select_db($con,"test");
	//数据库操作
	$sql = "INSERT INTO pre_users (user_id,user_name,password) VALUES 
		('',\"$username\",\"$password\");";
		
	//echo $sql;
	$res = mysqli_query($con,$sql);
	mysqli_close($con);
	echo $res."<br>";
	return res;
}
//insertuser("admin","admin");

function loginquery($username,$password){
	$res = 0;
	$con = mysqli_connect("localhost","root","root");
	if(!$con){
		die('Could not connect:'.mysqli_error());
	}
	//选择数据库
	mysqli_select_db($con,"test");
	//数据库操作
	$sql = "SELECT * FROM pre_users WHERE user_name = '$username' AND password='$password'";
	//(user_id,user_name,password) VALUES ('',\"$username\",\"$password\");";
		
	//echo $sql;
	$res = mysqli_query($con,$sql);
	mysqli_close($con);
	//echo $res."<br>";
	return mysqli_num_rows($res);
}
?>
