<?php
include_once "includes/addtoprocess.php";
?>


<div class="breadcrumb">
<?php 
$category = @$_GET['path'];
$subcat = @$_GET['subcat_id'];
$sql = "select *from subcat where id='".$subcat."'";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
?>
<a href="http://localhost/aj">Home</a>
»
<a href="subcategory.php?path=<?php echo $category;?>&subcat_id=<?php echo $subcat?>"><?php echo $row['subcatname']; ?></a>
</div>
<h1><?php echo $row['subcatname']; ?></h1>
<div class="product-list">
<?php
$sql = "select *from product where pid='".$subcat."'";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
?>
<div>
<div class="right">
<div class="cart">
<input class="button" type="button" onclick="addtocart(<?php echo $row['id'];?>);" value="Add to Cart">
</div>
</div>
<div class="left">
<div class="image">
<a href="product.php?pro_id=<?php echo $row['id'];?>&path=<?php echo $path; ?>">
<img alt="" title="" src="images/<?php echo $row['imagename'];?>">
</a>
</div>
<div class="price">
<span class="price-new">price : $<?php echo $row['price'];?></span>
<br />
</div>
<div class="name">
<a href="product.php?pro_id=<?php echo $row['id'];?>&path=<?php echo $path; ?>"><?php echo $row['productname'];?></a>
</div>
<div class="description"><?php echo $row['description']; ?></div>
</div>
</div>
<?php } ?>
</div>
