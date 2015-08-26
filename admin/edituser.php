<?php		
//if(@$_GET['page']=="edituser")
//{
$id = $_GET['id'];
$user = $_GET['user'];
$pass = $_GET['pass'];
?>
	
<form name="edituser" action="process.php" method="get">
<table border="1" align="center">
<tr>
<table border="0" align="center">
<tr>
<td>Id :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="id" value="<?php echo $id; ?>" ></td>
</tr> 
<tr>
<td>User :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="user" value="<?php echo $user; ?>" ></td>
</tr> 	 
<tr>
<td>Pass :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="pass" value="<?php echo $pass; ?>" ></td>
</tr>
<tr>

<td colspan="2"><input type="submit" name="edituser" value="Edit" ></td>
</tr> 	 	
 	 	
</table>
</tr>
</table>
</form>
