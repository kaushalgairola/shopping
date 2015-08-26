<table align="center" cellspacing="5" cellpadding="1">
<tr>
<td colspan="7">
<h2 style="color:#339933;">shopping orders</h2>
</td>
</tr>

<tr>
<td>
<table align="center" cellspacing="0" cellpadding="0" border="1">
<tr>
<td>orderid</td>
<td>items</td>
<td>total amout</td>
<td>date</td>
<td>payment</td>
<td>userid</td>
<td>action</td>
</tr>
<?php
$sql = "select *from orders";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
?>
<tr>
<td><?php echo $row['orderid'];?></td>
<td><?php echo $row['item'];?></td>
<td><?php echo $row['totalamt'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['payment'];?></td>
<td><?php echo $row['userid'];?></td>
<td><a href="process.php?id=<?php echo $row['orderid'];?>">edit</a> | <a href="process.php?msg=removeorder&id=<?php echo $row['orderid'];?>">remove</a></td>
</tr>
<?php } ?>
</table>
</td>
</tr>
</table>