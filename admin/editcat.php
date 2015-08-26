<?php
$id = $_GET['id'];
$catname = $_GET['catname'];
$des = $_GET['des'];
?>
<form name="editcat" action="process.php" method="get">
<table border="1" align="center">
<tr>
<table border="0" align="center">
<tr>
<td>Id :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="id" value="<?php echo $id; ?>" ></td>
</tr> 
<tr>
<td>category name :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="catname" value="<?php echo $catname; ?>" ></td>
</tr> 	 
<tr>
<td>Description :</td>&nbsp;&nbsp;&nbsp;
<td><input type="text" name="description" value="<?php echo $des; ?>" ></td>
</tr>
<tr>

<td colspan="2"><input type="submit" name="editcat" value="Done" ></td>
</tr> 	 	
 	 	
</table>
</tr>
</table>
