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
			$ave=$_POST['name9'];		
			
$insert=mysql_query("INSERT INTO dear1(date,fname,lname,natio_id,gender,dateofdear,fatnames,monames,sector,vellage) VALUES(now(),'$fname','$lname','$gender','$gende','$gend','$gen','$ge','$g','$ave')")or die(mysql_error());
$message="died people has been recorded!!";
 print"<script>window.alert('$message');window.location='dearform.php';</script>";

?>


