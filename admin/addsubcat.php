<p align="center"><b>ADD PRODUCT INTO PRODUCT TABLE FOR A CATEGORY</b></p>
<form name="addsubcat" action="process.php" method="get">
<table border="0" align="center">
<tr>
<table border="0" align="center">
<tr>
<td>Subcategory Name :&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="subcatname" value="" /></td>
</tr>
<tr>
<td>Description :</td>
<td><input type="text" name="description" value="" /></td>
</tr>
<tr>
<td>Category :</td>
<td>
<select name="selcat">
<option value="0" selected="selected" disabled="disabled">select category</option>
<?php
$sql = "select *from category";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['categoryname']; ?></option>
<?php } ?>
</select>
</td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="addsubcat" value="Add subcategory"></td>
</tr>
</table>
</tr>
</table>
</form> 
