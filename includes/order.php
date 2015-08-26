<?php
include_once "includes/functions.php";
if(@$_SESSION['userid']!='')
{
?>
<div style="background-color:#EFEFEF; width:100%; height:500px;"> 
<div align="center" style="width:100%; height:40px; background-color:#C0C0C0;">
<h2 style="color:#009966;" align="center">Place Order</h2>
</div>
<table align="center" style="margin-top:40px;">
<tr>
<td>
<table align="center">
<tr>
<td>
<b>Delivery method :</b>
</td>
<td>
<input type="radio" name="dm" checked="checked">cash on delivery</input>
</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td><b>your total items :</b></td>
<td><?php echo count($_SESSION['cart']);?></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>
<b>Shipping rate :</b>
</td>
<td>There are no shipping rate</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td><b>Delivery detail :</b></td>
<td>within 3 to 4 days</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td><b>total amount :</b></td>
<td>$<?php echo get_order_total();?>&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo get_order_total()*52; ?> in Rs.)</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td><b>Confirm your order :</b></td>
<td><input type="button" value="Confirm"  class="button" onclick="window.location='process.php?msg=confirm'"/></td>
<td><input type="button" value="Cancel"  class="button" onclick="window.location='index.php'"/></td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<?php } ?>

