<table border="0" width="600" height="auto" align="center">
<tr>
<td>
<table border="1" width="600" height="auto" cellpadding="" align="center">
<tr>
<td>Id</td>
<td>Product name</td>
<td>Description</td>
<td>Price</td>
<td>Quantity</td>
<td>Action</td>
</tr>
<?php 
$sql = "select *from product";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['productname']; ?></td>
<td><?php echo $row['description'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['quantity']; ?></td>
<td>
<a href="home.php?page=editproduct&id=<?php echo $row['id'];?>">Edit</a>&nbsp;|&nbsp;
<a href="home.php?page=removeproduct&id=<?php echo $row['id'];?>">Remove</a>
</td>
</tr>
<?php } ?>
</table>
</td>
</tr>
</table>
