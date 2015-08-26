<form name="log" action="process.php" method="post">
<table border="0" align="center">
<tr>

<?php
if(@$_GET['msg']==1)
{
?>
<tr><td><strong>please fill user field</strong></td></tr>
<?php } ?>

<?php
if(@$_GET['lf']=='yes')
{
?>
<tr><td><strong>please login first</strong></td></tr>
<?php } ?>

<?php
if(@$_GET['msg']=='logout')
{
?>
<tr><td><strong>Logout successfully</strong></td></tr>
<?php } ?>

<?php
if(@$_GET['msg']==2)
{
?>
<tr><td><strong>please fill password</strong></td></tr>
<?php } ?>

<?php
if(@$_GET['msg']==3)
{
?>
<tr><td><strong>Invalid user</strong></td></tr>
<?php } ?>


<table border="0" align="center">
<tr>
<td colspan="2" align="center">ADMIN SECTION</td>
</tr>
<tr>
<td>Username :</td>
<td><input type="text" name="user" value="" /></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="pass" value="" /></td>
</tr>
<tr>

<td><input type="submit" name="login" value="Login" /></td>
</tr>

</table>
</tr>
</table>
</form>
