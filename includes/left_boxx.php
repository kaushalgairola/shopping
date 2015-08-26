<div id="column-left">
<div class="box">
<div class="box-heading">Categories</div>
<div class="box-content">
<div class="box-category">
<?php
$path = @$_GET['path'];
$subcat_id = @$_GET['subcat_id'];
$sql = "select *from category";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
$id = $row['id'];
?>
<ul>
<li>
<a class="<?php if($path==$row[id]) { ?>active<?php } ?>" href="category.php?path=<?php echo $row['id']; ?>&catname=<?php echo $row['categoryname']; ?>"><?php echo $row['categoryname']; ?></a>
<ul>
<?php
	  $sqlmin = "select *from subcat where pid='".$id."'";
	  $resmin = mysql_query($sqlmin);
	  while($rowmin = mysql_fetch_array($resmin))
	  {
	  $proid=$rowmin['id'];
	  ?>
<li>
<a style="<?php if($subcat_id==$proid){ ?>color:#000000;<?php } ?>" href="subcategory.php?path=<?php echo $row['id']; ?>&subcat_id=<?php echo $rowmin['id']; ?>"> <?php echo $rowmin['subcatname'];?></a>
</li>
<?php } ?> 
</ul>
</li>
</ul>
<?php } ?>

</div>
</div>
</div>