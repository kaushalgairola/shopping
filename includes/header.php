<script>
function abc(str){
		//document.ss.srch.value=str;
		document.sr.submit();
	}
</script>
<?php
if(@$_GET['msg']=='done')
{
	session_start();
	session_destroy();
	session_unset();

}
include_once "/includes/connection.php";
include_once "/includes/function.php";
include_once "/includes/functions.php";
?>
<div id="logo">
	<a href="http://localhost/aj" style="text-decoration:none;"><h1 style="color:#38B0E3;">Online Electronic Shopping</h1></a>
</div>
      
<div id="cart">
  <div class="heading">
    <h4>Shopping Cart</h4>
    <a><span id="cart-total"><?php echo count(@$_SESSION['cart']);?>&nbsp;item(s) - $<?php echo get_order_total(); ?></span></a>
  </div>
	<?php 
	include_once "/includes/cartinfo.php";
	?>
</div> 
		<div id="search">
		<div class="button-search"></div>
			<form name="sr" action="search.php">
			<input type="text" name="filter_name" value="Search" onClick="this.value='' && abc();" onKeyDown="this.style.color = '#000000';" />
			</form>
		</div>
		<div id="welcome">
        Welcome visitor you can 
		<a href="process.php?msg=chklog">login</a>
		or 
		<a href="process.php?msg=chkreg">create an account</a>
		</div>
		
  <div class="links">
  <?php 
  if(@$_SESSION['userid']!="")
  {
  ?>
  <div style="float:left; height:auto;">welcome <span style="color:#00CC33;"><?php echo $_SESSION['username'];?></span><span style="float:right;">&nbsp;&nbsp;&nbsp;<a href="process.php?msg=logout">logout</a></span></a></div>
  <?php } ?>
  <a href="http://localhost/aj">Home</a>
  <a href="cart.php">Shopping Cart</a>
  <a href="test.php">Checkout</a>
  </div>