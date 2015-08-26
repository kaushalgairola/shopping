
<?php
ob_start();
include_once "/includes/functions.php";
include_once "/includes/connection.php";
if(@$_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		//echo "dfdsfdsffdsg";
		
		//header("location:shoppingcart.php");
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		echo '<script>location.href="index.php"</script>';
		exit();
	}
ob_flush();
?>


<!----------------------for add to cart------------------------->
<script language="javascript">
	function addtocart(pid){
		//document.write("dsfsdf"+pid);
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
<!--------------------------------------------------------------->

<form name="form1" method="post">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>


<?php 
$sql = "select *from category";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res))
{
$id = $row['id'];
?>
<div class="box">
<div class="box-heading" style="background-color:#E4E4E4; text-transform:uppercase; ">
<a href="category.php?path=<?php echo $row['id']; ?>&catname=<?php echo $row['categoryname']; ?>" style="text-decoration: none;"><?php echo $row['categoryname'];?></a>
</div>
<div class="box-content">
<div class="box-product">
<?php
$sql2 = "select *from product where ppid='".$id."'";
$res2 = mysql_query($sql2);
$i = 0;
while($row2 = mysql_fetch_array($res2))
{	
$i++;
if($i < 5)
{ 
?>
<div style="width:auto; height:auto;">
<div class="image">
<a href="product.php?pro_id=<?php echo $row2['id'];?>&path=<?php echo $row['id']; ?>">
<img  src="images/<?php echo $row2['imagename'];?>" />
</a>
</div>
<div class="name">
<a href="product.php?pro_id=<?php echo $row2['id'];?>&path=<?php echo $row['id']; ?>"><?php echo $row2['productname'];?></a>
</div>
<div class="price">$<?php echo $row2['price']; ?> </div>
<div class="description" style="width:60px; height:auto; margin-top:5px; margin-bottom:5px;"><?php echo $row2['description']; ?> </div>
<div class="cart">


<input class="button" type="button" name="addtocart" value="Add to cart" onclick="addtocart(<?php echo $row2['id']?>);" \>

</div>
</div>

<?php 
}
	
}
 ?>
 
</div>

<div><a href="category.php?path=<?php echo $row['id']; ?>&catname=<?php echo $row['categoryname']; ?>" style="text-decoration: none;">view more</a></div>
</div>

</div>
<?php } ?>