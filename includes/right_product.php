<?php
include_once "includes/addtoprocess.php";
?>

<?php
include_once "function.php";
$pro_id = @$_GET['pro_id'];
$sql = "select *from product where id='".$pro_id."'";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
?>
<div class="breadcrumb">
        <a href="http://localhost/aj/">Home</a>
         &raquo; <a href=""><?php echo $row['productname']; ?></a>
</div>
  <h3><?php echo $row['productname']; ?></h3>
<div class="product-info">
    <div class="left">
      <div class="image"><a href="" title="<?php echo $row['productname']; ?>" class="colorbox" rel="colorbox"><img src="http://localhost/aj/images/<?php echo $row['imagename']; ?>" title="" id="image" /></a></div>
          <div class="description">
                <?php echo $row['description']; ?>
           </div>
    </div>
    <div class="right">
      <div class="description">
                
                <span>Product Code:</span>
				<?php echo $row['id']; ?><br />
                <span>Status:</span>  
				<?php echo $row['status']; ?>
	  </div>
      <div class="price"><span style="color:#3399FF;">Price: &nbsp;</span><span style="color:#808080;">$<?php echo $row['price']; ?></span><br />
                <br />
       </div>
       <div class="cart">
        <div>
         <input type="button" class="button" value="Add to cart" onclick="addtocart(<?php echo $row['id'];?>);" />
        </div>
       </div>
            
    </div>
</div>