<?php include "files/header.php"; ?>
<?php

	global $connect;
	$ip=getIp();
	$total=0;
	$t_price="SELECT * FROM cart WHERE ip_add='$ip'";
	$run_price=mysqli_query($connect,$t_price);
	while($row_t_price=mysqli_fetch_array($run_price)){
		$pro_id_t=$row_t_price['p_id'];
		$price_pro="SELECT * FROM products WHERE p_id='$pro_id_t'";
		$run_price_pro=mysqli_query($connect,$price_pro);
		while($row_price_pro=mysqli_fetch_array($run_price_pro)){
			$pro_price=array($row_price_pro['p_price']);
			
			$pro_name=$row_price_pro['p_title'];
			
			$values=array_sum($pro_price);
			$total +=$values;
		}
	
	}
$get_qty="SELECT * FROM cart WHERE p_id='$pro_id_t'";
	$run_qty=mysqli_query($connect,$get_qty);
	$row_qty=mysqli_fetch_array($run_qty);
	$qty=$row_qty['qty'];
	if($qty==0){
		$qty=1;
	}
	else{
		$qty=$qty;
		$total=$total*$qty
	}
	


?>
<div>
<center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments.الايميل الذى يتم الدفع لة(ايمل الادمن) -->
  <input type="hidden" name="business" value="business9895@shop.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="<?php echo $pro_name;?>">
  <input type="hidden" name="item_number" value="<?php echo $pro_id_t; ?>" >
  <input type="hidden" name="amount" value="<?php echo $total; ?>">
  <input type="hidden" name="quantity" value="<?php echo $qty; ?>" />
  <input type="hidden" name="currency_code" value="USD">
  
  <input type="hidden" name="return" value=""/>
  <input type="hidden" name="cancel_return" value="" />

  <!-- Display the payment button. -->

  <input type="image" name="submit" border="0"
  src="images/pay.png"
  alt="PayPal - The safer, easier way to pay online">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
</center>
</div>
<?php include "files/footer.php"; ?>
