
<?php
ob_start();
include_once "/includes/functions.php";
//include_once "/includes/connection.php";
//$url = $_GET['url'];
if(@$_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		//echo "dfdsfdsffdsg";
		
		//header("location:shoppingcart.php");
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		echo '<script>location.href=""</script>';
		exit();
	}
ob_flush();
?>
<form name="form1" method="post">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />

</form>


<!----------------------for add to cart------------------------->
<script language="javascript">
	function addtocart(pid){
		//document.write("dsfsdf"+pid);
		document.form1.productid.value=pid;
		//var s=document.form1.productid.value;
		//document.write("sdffdfd");
		document.form1.command.value='add';
		//document.write("dsfsdf"+pid);
		//alert(document.form1.productid.value());
		document.form1.submit();
	}
</script>
<!--------------------------------------------------------------->




<div class="breadcrumb">
<?php 
$cat = @$_GET['catname'];
$path = @$_GET['path'];
?>
<a href="http://localhost/aj">Home</a>
»
<a href="category.php?path=<?php echo $path; ?>&catname=<?php echo $cat; ?>"><?php echo $cat; ?></a>
</div>
<h1><?php echo $cat; ?></h1>
<h2>Refine Search</h2>
<div class="category-list">
<ul>
<?php
$sql = "select *from subcat where pid='".$path."'";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
?>
<li>
<a href="subcategory.php?path=<?php echo $path;?>&subcat_id=<?php echo $row['id']; ?>"><?php echo $row['subcatname']; ?></a>
</li>
<?php } ?>
</ul>
</div>

<div class="product-list">
<?php
$sql = "select *from product where ppid='".$path."'";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
?>
<div>
<div class="right">
<div class="cart">
<input class="button" type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['id'];?>);">

</div>
</div>
<div class="left">
<div class="image">
<a href="product.php?pro_id=<?php echo $row['id'];?>&path=<?php echo $path; ?>">
<img alt="" title="" src="images/<?php echo $row['imagename'];?>">
</a>
</div>
<div class="price">
price :<span class="price-new">$<?php echo $row['price'];?></span>
<br>
</div>
<div class="name">
<a href="product.php?pro_id=<?php echo $row['id'];?>&path=<?php echo $path; ?>"><?php echo $row['productname'];?></a>
</div>
<div class="description"></div>
</div>
</div>
<?php } ?>
</div>
