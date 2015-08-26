<table border="1" width="500" height="auto" align="center">
<tr>
<td>
<?php 
if(@$_GET['msg']==1)
{
?>
<strong>Subcategory is edited</strong>
<?php } ?>
<table border="1" width="500" height="auto" cellspacing="0" align="center" cellpadding="5">
<tr>
<td>Id </td>
<td>Subcategory name </td>
<td>Description </td>
<td>Category id</td>
<td>Action</td>
</tr>
<?php 
$sql = "select *from subcat";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['subcatname']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['pid']; ?></td>
<td>
<a href="home.php?page=editsubcat&id=<?php echo $row['id'];?>">Edit</a>&nbsp;&nbsp;&nbsp;
<a href="home.php?page=removesubcat&id=<?php echo $row['id'];?>">Remove</a>
</td>
</tr>

<?php } ?>

</table>
</td>
</tr>
</table>
	