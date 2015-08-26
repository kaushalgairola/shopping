
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
		echo '<script>location.href="";</script>';
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
