<table border="1" align="center" width="500" height="auto">
	<tr>
		<td>
			<table border="1" align="center" width="500" height="auto" cellspacing="0" cellpadding="5">
				<tr>
					<td>ID</td>
					<td>USER NAME</td>
					<td>PASSWORD</td>
					<td>ACTION</td>
				</tr>
	
			<?php
     		$sql = "select id,username,pass from users";
			$res = mysql_query($sql);
			while($row = mysql_fetch_array($res))
				{
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['pass']; ?></td>
					<td>
						<a href="home.php?page=edituser&id=<?php echo $row['id']; ?>&user=<?php echo $row['username']; ?>&pass=<?php echo $row['pass']; ?>">edit</a>&nbsp;|&nbsp;<a href="home.php?page=removeuser&id=<?php echo $row['id']; ?>">remove</a> 
					</td>
				</tr>
				<?php } ?>
			</table>
		</td>
	</tr>
</table>