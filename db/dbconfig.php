<?php

	$con = mysqli_connect("localhost","root","root");
	if(!$con){
		die('Could not connect:'.mysqli_error());
	}else{
		echo 'local mysql connect ok';
	}
	
	if (mysqli_query($con,"CREATE DATABASE test1")){
	  echo "Database created";
	}else{
	  echo "Error creating database: ";// . mysqli_error();
	}

//选择数据库
mysqli_select_db($con,"test");
//数据库操作
$sql = "CREATE TABLE pre_users (
	user_id int NOT NULL auto_increment PRIMARY KEY,
	user_name varchar(60) NOT NULL,
	password varchar(60) NOT NULL
);
";

if(mysqli_query($con,$sql)){
	echo 'ok';
}else{
	echo 'false';
}




	mysqli_close($con);
