<?php
if(@$_GET['msg']=='not')
{
?>
<div style="background-color:#EFEFEF; width:100%; height:400px;">
<br><br>
<table align="center">
<tr>
<td>
<table align="center">
<tr>
<td><h2 style="color:#FF0066;">There are no item in your shopping cart please buy atleast 1 item to checkout</h2></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td>
<input type="button" name="" value="Continue Shopping" onClick="window.location='index.php'" class="button"></input>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<?php } ?>
<?php
if(@$_GET['msg']=='chkout')
{
include_once "includes/order.php";
}
?>

<?php
if(@$_GET['msg']=='notset')
{
include_once "includes/login.php";
}
?>
