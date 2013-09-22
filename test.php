<?php
define('__ROOT__', dirname(__FILE__)); 
include_once(__ROOT__.'\db\db.php');

echo '<b>Simo Info:</b><br>';

if($_POST){
	echo "Welcome ".$_POST["username"].".<br>";
	echo "your password :".$_POST["password"].".<br>";
	if(insertuser($_POST["username"],$_POST["password"])){
		echo "insert ok<br>";
	}else{
		echo "insert fail<br>";
	}
}