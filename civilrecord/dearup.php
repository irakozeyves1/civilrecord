





<center>



<?php include("connection.php");?>
<?php
$id =$_REQUEST['d_id'];
$result=mysql_query("select * from dear1 where d_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['date'];
$price=$rows['fname'];
$cod=$rows['lname'];
$pri=$rows['natio_id'];
$nan=$rows['gender'];
$nid=$rows['dateofdear'];
$jan=$rows['fatnames'];
$ja=$rows['monames'];
$jani=$rows['sector'];
$jap=$rows['vellage'];
 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['date'];
$price=$_REQUEST['name1'];
$cod=$_REQUEST['name2'];
$pri=$_REQUEST['name3'];
$nan=$_REQUEST['name4'];
$nid=$_REQUEST['name5'];
$jan=$_REQUEST['name6'];
$ja=$_REQUEST['name7'];
$jani=$_REQUEST['name8'];
$jap=$_REQUEST['name9'];
mysql_query("UPDATE dear1 SET date='$code',fname='$price',lname='$cod',natio_id='$pri',gender='$nan',dateofdear='$nid',fatnames='$jan',monames='$ja',sector='$jani',vellage='$jap' WHERE d_id='$id';")or die(mysql_error());
include("dearupdate.php");

}
else
{

?>
</p>

<center>

<fieldset STYLE="border:4px #000 solid;background-color:#336600;width:430px;height:400px">
<legend STYLE="border:4px #fff solid; background-color:#999900; " ALIGN="center">
<b>DIED PEOPLE EDIT</b>
</legend>

<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">
<table BGCOLOR="#66FFCC">
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>date:</strong></label></th>
				<td><input  NAME="date" TYPE="text" SIZE="30" VALUE="<?php print$code?>"></td>
			</tr>	
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>First Name:</strong></label></th>
				<td><input  NAME="name1" TYPE="text" SIZE="30" VALUE="<?php print$price?>"></td>
			</tr>	
			
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>Last Name:</strong></label></th>
				<td><input  NAME="name2" TYPE="text" SIZE="30" VALUE="<?php print$cod?>"></td>
			</tr>	
			<tr BGCOLOR="#990066">
				<th><label FOR="input-one"><strong>National Id:</strong></label></th>
				<td><input  NAME="name3" TYPE="text" SIZE="30" VALUE="<?php print$pri?>"></td>
			</tr>
			<tr BGCOLOR="#000000">
			<th><label FOR="input-one"><strong><font color="#FFFFFF">Gender:</font></strong></label></td><td><select name="name4">
   <option value="Male">Male</option>
    <option value="Female">Female</option>
	
  </select><?php print$nan?>"></td>
			</tr>		
			<tr  BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>Date Of Dead:</strong></label></th>
				<td><input  NAME="name5" TYPE="text" SIZE="30" VALUE="<?php print$nid?>"></td>
			</tr>	
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>Father Names:</strong></label></th>
				<td><input  NAME="name6" TYPE="text" SIZE="30" VALUE="<?php print$jan?>"></td>
			</tr>
			
			</tr>	
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>Mother Names:</strong></label></th>
				<td><input  NAME="name7" TYPE="text" SIZE="30" VALUE="<?php print$ja?>"></td>
			</tr>	
			
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>Cellule:</strong></label></th>
				<td><input  NAME="name8" TYPE="text" SIZE="30" VALUE="<?php print$jani?>"></td>
			</tr>
			
			</tr>	
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>Vellage:</strong></label></th>
				<td><input  NAME="name9" TYPE="text" SIZE="30" VALUE="<?php print$jap?>"></td>
			</tr>	
				
			
			
				<tr BGCOLOR="#669900" >
				<td  COLSPAN="2" ALIGN="center"><button TYPE="submit" NAME="Submit">update</button></td>
			</tr> 
		</table>
</form>
</body>
</html>
 <?php
 }
 ?>
 
 </head>
</fieldset>
</center>

