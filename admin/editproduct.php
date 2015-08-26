<?php		
$id = $_GET['id'];
$sql = "select *from product where id=".$id."";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
?>
<form name="editpro" action="process.php" method="get">
<table border="1" align="center">
<tr>
<table border="0" align="center">
<tr>
<td>Id :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="id" value="<?php echo $row['id']; ?>" ></td>
</tr> 
<tr>
<td>Product Name:</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="productname" value="<?php echo $row['productname']; ?>" ></td>
</tr> 	 
<tr>
<td>Description :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="description" value="<?php echo $row['description']; ?>" ></td>
</tr>
<tr>
<td>Price :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="price" value="<?php echo $row['price']; ?>" ></td>
</tr>

<tr>

<td colspan="2"><input type="submit" name="editproduct" value="Done" ></td>
</tr> 	 	
 	 	
</table>
</tr>
</table>
</form>
