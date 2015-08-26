<p align="center"><b>ADD PRODUCT INTO PRODUCT TABLE FOR A SUBCATEGORY</b></p>
<form name="addpro" action="process.php" method="post" enctype="multipart/form-data">
<table border="1" align="center">
<tr>
<table border="0" align="center">
<tr>
<td>Product Name :&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="productname" value="" /></td>
</tr>
<tr>
<td>Description :</td>
<td><input type="text" name="description" value="" /></td>
</tr>
<tr>
<td>price :</td>
<td><input type="text" name="price" value="" /></td>
</tr>
<tr>
<td>quantity :</td>
<td><input type="text" name="quantity" value="" /></td>
</tr>

<tr>
<td>Product image :</td>
<td><input type="file" name="pic" value="" /></td>
</tr>

<tr>
<td>Subcategory :</td>
<td>
<select name="selsubcat">
<option value="0" selected="selected" disabled="disabled">select category</option>
<?php
$sql = "select *from subcat";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['subcatname']; ?></option>
<?php } ?>
</select>
</td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="addproduct" value="Add product"></td>
</tr>
</table>
</tr>
</table>
</form> 
