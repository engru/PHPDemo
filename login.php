<?php
define('__ROOT__', dirname(__FILE__)); 
include_once(__ROOT__.'\db\db.php');

echo '<b>Simo Info:</b><br>';
session_start();
if($_POST){
	//echo "Welcome ".$_POST["username"].".<br>";
	//echo "your password :".$_POST["password"].".<br>";
	if(loginquery($_POST["username"],$_POST["password"])){
		echo "login ok<br>";
		$_SESSION['authorized'] = true;
		header("Location:./");
	}else{
		echo "login fail<br>";
	}
}