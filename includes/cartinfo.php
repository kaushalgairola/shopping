<div class="content">
      <div class="mini-cart-info">
      <table>
	  
	  <?php 
	  $max = count(@$_SESSION['cart']);
	  if($max>0)
	  {
	  for($i=0;$i<$max;$i++)
	  {
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
	  ?>
	 
         <tr>
          <td class="image">
		  <img src="images/<?php echo get_imgname($pid);?>" alt="" title="" width="30" height="30" />
          </td>
          <td class="name">
		  <?php echo get_product_name($pid)?>
          </td>
          <td class="quantity">x&nbsp;&nbsp;<?php echo $q; ?></td>
          <td class="total">$<?php echo $q*get_price($pid); ?></td>
          <td class="remove">
		  <a href="javascript:del(<?=$pid?>)">remove</a>
		  </td>
        </tr>
		</form>
		<?php
		} }
		else
		{
		?>
		<tr><td colspan="4">your shopping cart is empty</tr>
      <?php } ?>
	  </table>
	  
    </div>
    <div class="mini-cart-total">
      <table>
         <tr>
          <td class="right"><b>Total:</b></td>
          <td class="right">$<?php echo get_order_total(); ?></td>
        </tr>
       </table>
    </div>
    <div class="checkout"><a href="cart.php">View Cart</a> | <a href="test.php">Checkout</a></div>
     
</div>
