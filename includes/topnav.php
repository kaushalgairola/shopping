<?php
$sql = "select *from category";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
$id = $row['id'];
?>
<ul>
      <li><a href="category.php?path=<?php echo $row['id']; ?>&catname=<?php echo $row['categoryname']; ?>"><?php echo $row['categoryname']; ?></a>
	  
	  <div>
	  <ul>
	  <?php
	  $sqlmin = "select *from subcat where pid='".$id."'";
	  $resmin = mysql_query($sqlmin);
	  while($rowmin = mysql_fetch_array($resmin))
	  {
	  ?>
		
		
          <li><a href="subcategory.php?path=<?php echo $row['id']; ?>&subcat_id=<?php echo $rowmin['id']; ?>"><?php echo $rowmin['subcatname'];?></a></li>
		 
		  <?php } ?> 
        </ul>
		</div>
      </li>
</ul>
<?php } ?>	  		 