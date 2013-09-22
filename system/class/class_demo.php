<?php

 class demo{
	function __construct() {
	   print "<br>Construct demo<br>\n";
	}
   function __destruct() {
       //print "Destroying demo<br>\n";
   }
   
   function show($name){
   
	echo 'show '.$name."<br>\n";
   }
 }
 
 
