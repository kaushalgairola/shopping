<?php		
$id = $_GET['id'];
$sql = "select *from subcat where id=".$id."";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
?>	
<form name="editsubcat" action="process.php" method="get">
<table border="1" align="center">
<tr>
<table border="0" align="center">
<tr>
<td>Subcategory id :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="id" value="<?php echo $row['id']; ?>" ></td>
</tr> 
<tr>
<td>Subcategory Name :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="subcatname" value="<?php echo $row['subcatname']; ?>" ></td>
</tr> 	 
<tr>
<td>Description:</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="description" value="<?php echo $row['description']; ?>" ></td>
</tr>
<tr>

<td colspan="2"><input type="submit" name="editsubcat" value="Done" ></td>
</tr> 	 	
 	 	
</table>
</tr>
</table>
</form>
<?php
	
?>	


	</div>
	<div id="footer">
	<?php
	include_once "footer.php";
	?>
	</div>
</div>
</body>
</html>
