<?php
session_start();
if (isset($_POST["checkout-btn"])) {
    $order_number = rand(100, 999);
}
?>
<HTML>
<HEAD>
<TITLE>PAYMENT PAGE</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/one-page-checkout.css" type="text/css"
	rel="stylesheet" />
<script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="./vendor/jquery/jquery-ui.js"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-heading">YOU WILL PAY CASH</div>

		<form name="one-page-checkout-form" id="one-page-checkout-form"
			action="" method="post" onsubmit="return checkout()">
			
<?php if(!empty($order_number)){?>

			<div class="order-message order-success">
			You Ticket Number is <?php echo $order_number;?>.
		<span class="btn-message-close"
					onclick="this.parentElement.style.display='none';" title="Close">&times;</span>
					
			</div>
<?php }?>


			<div class="section product-gallery">
        			<?php require_once './view/product-gallery.php'; ?>
      		 </div>
			<div class="billing-details">
		            <?php require_once './view/billing-details.php'; ?>
			</div>

			<div class="cart-error-message" id="cart-error-message">Cart must not
				be emty to checkout</div>
			<div id="shopping-cart" tabindex="1">
				<div id="tbl-cart">
					<div id="txt-heading">
						<div id="cart-heading">Your Shopping Cart</div>
						<div id="close"></div>
					</div>
					<div id="cart-item">
        				<?php require_once './view/shopping-cart.php'; ?>
           			 </div>
				</div>
			</div>

			<div class="payment-details">
				<div class="payment-details-heading">      </div>
				<div class="row">
					<div class="inline-block">

				</div>
			</div>

			<div class="row">
				<div id="inline-block">
					<input type="submit" class="checkout" name="checkout-btn"
						id="checkout-btn" value="PAY">
						
				</div>
				
			</div>
			<li><a href="http://localhost/cs314/bookingMovie/welcome.php"><span class="" > </span> Return Home </a></li>

		</form>
	</div>
	<script src="./assets/js/cart.js"></script>
	<script>
	
function checkout() {

	var valid = true;
	
	$("#first-name").removeClass("error-field");
	$("#PHONE").removeClass("error-field");
	$("#shopping-cart").removeClass("error-field");
	$("#cart-error-message").hide();
	
	var firstName = $("#first-name").val();
	var cartItem = $("#cart-item-count").val();
	var PHONE = $("#PHONE").val();
	
	$("#first-name-info").html("").hide();
	$("#PHONE-info").html("").hide();

	if (firstName.trim() == "") {
		$("#first-name-info").html("required.").css("color", "#ee0000").show();
		$("#first-name").addClass("error-field");
		valid = false;
	}
	if (PHONE == "") {
		$("PHONE-info").html("required").css("color", "#ee0000").show();
		$("#PHONE").addClass("error-field");
		valid = false;

	}
	if(cartItem == 0){
		$("#cart-error-message").show();
		$("#shopping-cart").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;	
}
</script>
</BODY>
</HTML>