





<center>



<?php include("connection.php");?>
<?php
$id =$_REQUEST['ch_id'];
$result=mysql_query("select * from chlidrenbirth where ch_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['date'];
$price=$rows['chfname'];
$cod=$rows['chlname'];
$pri=$rows['dateOfbirth'];
$nan=$rows['gender'];
$nid=$rows['fathnames'];
$jan=$rows['matnames'];
$ja=$rows['cell'];
$jani=$rows['vallege'];
$jap=$rows['alive'];
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
mysql_query("UPDATE chlidrenbirth SET date='$code',chfname='$price',chlname='$cod',dateOfbirth='$pri',gender='$nan',fathnames='$nid',matnames='$jan',cell='$ja',vallege='$jani',alive='$jap' WHERE ch_id='$id';")or die(mysql_error());
include("chilbiupdate.php");

}
else
{

?>
</p>

<center>

<fieldset STYLE="border:4px #000 solid;background-color:#336600;width:430px;height:400px">
<legend STYLE="border:4px #fff solid; background-color:#999900; " ALIGN="center">
<b>BORN EDIT</b>
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
				<th><label FOR="input-one"><strong>Date OF Birth:</strong></label></th>
				<td><input  NAME="name3" TYPE="text" SIZE="30" VALUE="<?php print$pri?>"></td>
			</tr>
			<tr BGCOLOR="#000000">
			<th><label FOR="input-one"><strong><font color="#FFFFFF">Gender:</font></strong></label></td><td><select name="name4">
   <option value="Male">Male</option>
    <option value="Female">Female</option>
	
  </select><?php print$nan?>"></td>
			</tr>		
			<tr  BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>Father Names:</strong></label></th>
				<td><input  NAME="name5" TYPE="text" SIZE="30" VALUE="<?php print$nid?>"></td>
			</tr>	
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>Mother Names:</strong></label></th>
				<td><input  NAME="name6" TYPE="text" SIZE="30" VALUE="<?php print$jan?>"></td>
			</tr>
			
			</tr>	
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>Cellure:</strong></label></th>
				<td><input  NAME="name7" TYPE="text" SIZE="30" VALUE="<?php print$ja?>"></td>
			</tr>	
			
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>Vallege:</strong></label></th>
				<td><input  NAME="name8" TYPE="text" SIZE="30" VALUE="<?php print$jani?>"></td>
			</tr>
			
			<tr BGCOLOR="#000000">
			<th><label FOR="input-one"><strong><font color="#FFFFFF">Status:</font></strong></label></td><td><select name="name9">
    <option value="Alive">Alive</option>
	<option value="Dead">Died</option>
  </select><?php print$jap?>"></td></tr>
				
			
				
			
			
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

