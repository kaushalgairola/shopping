<div style="width: 100%; height: 400px; background-color:#F7F7F7;">
<div style="width: 100%; height:30px; background-color:#E9E9E9;">
<span><h2 align="center" style="color:#0099FF; font-family:Arial, Helvetica, sans-serif;">welcome to login page</h2></span>
</div>
<div style="width:700px; height: 300px; margin-left:150px; margin-right:100px; background-color:#F1F1F1; margin-top:30px;">
<form action="process.php" method="POST" name="log"><table align="center" style="margin-top:30px;">
<tr>
<?php
if(@$_GET['msg']=='1')
{
?>
<tr>
<td colspan="2"><strong>please fill email id</strong></td>
</tr>
<?php } ?>
<?php
if(@$_GET['msg']=='2')
{
?>
<tr>
<td colspan="2"><strong>please fill password</strong></td>
</tr>
<?php } ?>
<?php
if(@$_GET['msg']=='4')
{
?>
<tr>
<td colspan="2"><strong>Invalid user</strong></td>
</tr>
<?php } ?>

		
<table align="center" style="margin-top:20px; color:#33CCFF;">
<tr>
<td>email :</td>
<td><input type="text" name="email" value="" /></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="pass" value="" /></td>
</tr>
<tr><td colspan="2"><br></tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="login" value="Login" style="background-color:#33CC33;" /></td>
</tr>
<tr>
<td><br /></td>
</tr>
<tr>
<td>new users can </td>
<td>&nbsp;&nbsp;&nbsp;<a href="register.php" style="color:#00CC66;">register</a></td>
</tr>
</table>
</tr>
</table>
</form>
</div>
</div>


