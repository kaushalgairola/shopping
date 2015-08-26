<table border="1" align="center" width="500" height="auto">
<tr>
	<td>Id</td>
	<td>CATEGORY NAME</td>
	<td>DESCRIPTION</td>
	<td>ACTION</td>
</tr>
	
     <?php
     $sql = "select id,categoryname,description from category";
		$res = mysql_query($sql);
		while($row = mysql_fetch_array($res))
		{
		?>
		<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['categoryname']; ?></td>
		<td><?php echo $row['description']; ?></td>
		
		<td>
		<a href="home.php?page=editcat&id=<?php echo $row['id']; ?>&catname=<?php echo $row['categoryname']; ?>&des=<?php echo $row['description']; ?>">edit</a>&nbsp;|&nbsp;<a href="home.php?page=removecat&id=<?php echo $row['id']; ?>">remove</a> 
		</td>
		</tr>
		<?php } ?>
</table>	
