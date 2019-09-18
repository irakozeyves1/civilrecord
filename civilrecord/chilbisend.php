<?php
require_once('connection.php');
            $fname=$_POST['name1'];
			$lname=$_POST['name2'];
			$gender=$_POST['name3'];
			$gende=$_POST['name4'];
	$gend=$_POST['name5'];
	$gen=$_POST['name6'];
	$ge=$_POST['name7'];
			
$g=$_POST['name8'];
	
	$ave=$_POST['name9'];;		
			
$insert=mysql_query("INSERT INTO chlidrenbirth(date,chfname,chlname,dateOfbirth,gender,fathnames,matnames,cell,vallege,alive) VALUES(now(),'$fname','$lname','$gender','$gende','$gend','$gend','$ge','$g','$ave')")or die(mysql_error());
$message="children has been recorded!!";
 print"<script>window.alert('$message');window.location='chilbiform.php';</script>";

?>


