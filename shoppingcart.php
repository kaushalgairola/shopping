<?
	
	
	if(@$_REQUEST['command']=='delete' && @$_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if(@$_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if(@$_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}

?>
<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


</script>
<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px; height:400px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Your Shopping Cart</h1>
    <input type="button" class="button" value="Continue Shopping" onclick="window.location='index.php'" />
    </div>
    	
    	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#EEEEEE;" width="100%">
    	<?php
			if(is_array(@$_SESSION['cart'])){
            	echo '<tr bgcolor="#aaaaaa" style="font-weight:bold"><td>Serial</td><td>Name</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<tr bgcolor="#f2f2f2"><td><?=$i+1?></td><td><?=$pname?></td>
                    <td>$ <?=get_price($pid)?></td>
                    <td><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" /></td>                    
                    <td>$ <?=get_price($pid)*$q?></td>
                    <td><a href="javascript:del(<?=$pid?>)">Remove</a></td></tr>
            <?					
				}
			?>
				<tr><td><b>Order Total: $<?=get_order_total()?></b></td><td colspan="5" align="right"><input type="button" class="button" value="Clear Cart" onclick="clear_cart()">&nbsp;&nbsp;&nbsp;<input type="button" class="button" value="Update Cart" onclick="update_cart()">&nbsp;&nbsp;&nbsp;<input type="button" value="checkout" onclick="window.location='test.php'" class="button"></td></tr>
			<?
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table>
    </div>
</form>
