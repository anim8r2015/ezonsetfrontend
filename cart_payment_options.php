<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Shopping Cart Payment Options </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="styles/category_nav_style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="styles/owl.carousel.css" rel="stylesheet">

<link href="styles/owl.theme.default.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>

<script src="https://checkout.stripe.com/checkout.js"></script>

</head>

<body>

<?php include("includes/header.php"); ?>

<div class="container mt-5 mb-5"><!--- container mt-5 mb-5 Starts --->


<div class="row"><!--- row Starts --->

<div class="col-md-12"><!--- col-md-12 Starts --->

<div class="card mb-3"><!--- card mb-3 Starts --->

<div class="card-body"><!--- card-body Starts --->

<h5 class="float-left"> Your Cart (2) </h5>

<h5 class="float-right">

<a href="index.php">

Keep Shopping

</a>

</h5>

</div><!--- card-body Ends --->

</div><!--- card mb-3 Ends --->

</div><!--- col-md-12 Ends --->

</div><!--- row Ends --->


<div class="row"><!--- row Starts --->

<div class="col-md-7"><!--- col-md-7 Starts --->

<div class="row"><!--- row Starts --->


<div class="col-md-12 mb-3"><!--- col-md-12 mb-3 Starts --->

<div class="card payment-options"><!--- card payment-options Starts --->

<div class="card-header"><!--- card-header Starts --->

<h5> Available Shopping Balance </h5>

</div><!--- card-header Ends --->

<div class="card-body"><!--- card-body Starts --->

<div class="row"><!--- row Starts --->

<div class="col-1"><!--- col-1 Starts --->

<input id="shopping-balance" class="form-control radio-input" type="radio" name="method" checked>

</div><!--- col-1 Ends --->

<div class="col-11"><!--- col-11 Starts --->

<p class="lead mt-2">

Personal Balance - fixmywebsite

<span class="text-success font-weight-bold">$198</span>

</p>

</div><!--- col-11 Ends --->

</div><!--- row Ends --->

</div><!--- card-body Ends --->

</div><!--- card payment-options Ends --->

</div><!--- col-md-12 mb-3 Ends --->


<div class="col-md-12 mb-3"><!--- col-md-12 mb-3 Starts --->

<div class="card payment-options"><!--- card payment-options Starts --->

<div class="card-header"><!--- card-header Starts --->

<h5> Payment Options </h5>

</div><!--- card-header Ends --->

<div class="card-body"><!--- card-body Starts --->

<div class="row"><!--- row Starts --->

<div class="col-1"><!--- col-1 Starts --->

<input id="paypal" class="form-control radio-input" type="radio" name="method">

</div><!--- col-1 Ends --->

<div class="col-11"><!--- col-11 Starts --->

<img src="images/paypal.png" height="50" class="ml-2 width-xs-100">

</div><!--- col-11 Ends --->

</div><!--- row Ends --->

<hr>

<div class="row"><!--- row Starts --->

<div class="col-1"><!--- col-1 Starts --->

<input id="credit-card" class="form-control radio-input" type="radio" name="method">

</div><!--- col-1 Ends --->

<div class="col-11"><!--- col-11 Starts --->

<img src="images/credit_cards.jpg" height="50" class="ml-2 width-xs-100">

</div><!--- col-11 Ends --->

</div><!--- row Ends --->


</div><!--- card-body Ends --->


</div><!--- card payment-options Ends --->

</div><!--- col-md-12 mb-3 Ends --->


</div><!--- row Ends --->

</div><!--- col-md-7 Ends --->


<div class="col-md-5"><!--- col-md-5 Starts --->

<div class="card"><!--- card Starts --->

<div class="card-body cart-order-details"><!---- card-body cart-order-details Starts --->

<p> Cart Subtotal <span class="float-right">$40</span> </p>

<hr>

<p class="processing-fee"> Processing Fee <span class="float-right"> $1 </span> </p>

<hr class="processing-fee">

<p> Total <span class="float-right font-weight-bold total-price"> $41 </span> </p>

<hr>

<form action="shopping_balance.php" method="post" id="shopping-balance-form"><!---- shopping-balance-form Starts --->

<input type="hidden" name="amount" value="">

<button type="submit" name="cart_submit_order" class="btn btn-lg btn-success btn-block" onclick="return confirm('Do You Really Want To Order Proposals From Your Shopping Balance.')">

Pay With Shopping Balance

</button>

</form><!---- shopping-balance-form Ends --->

<br>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal-form"><!--- paypal-form Starts --->

<input type="hidden" name="cmd" value="_cart">

<input type="hidden" name="upload" value="1">

<input type="hidden" name="handling_cart" value="1">

<input type="hidden" name="business" value="sad.ahmed22224@gmail.com">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://localhost/freelance/cart_payment_options.php">

<input type="hidden" name="return" value="http://localhost/freelance/paypal_order.php?cart_seller_id">



<input type="hidden" name="item_name_1" value="I Will Do Viral Youtube Seo Social Media Promotion">

<input type="hidden" name="item_number_1" value="1">

<input type="hidden" name="amount_1" value="20">

<input type="hidden" name="quantity_1" value="1">


<input type="hidden" name="item_name_2" value="I Will Do Viral Youtube Seo Social Media Promotion">

<input type="hidden" name="item_number_2" value="1">

<input type="hidden" name="amount_2" value="20">

<input type="hidden" name="quantity_2" value="1">

<button type="submit" name="submit" class="btn btn-lg btn-success btn-block">

Pay With Paypal

</button>

</form><!--- paypal-form Ends --->


<form action="cart_charge.php" method="post" id="credit-card-form"><!--- credit-card-form Starts --->

<input type="hidden" name="amount" value="">

<input

type="submit"

class="btn btn-lg btn-success btn-block strip-submit"

data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"

value="Pay With Credit Card"

data-amount="1000"

data-currency="usd"

data-emial="fixmywebsite@gmail.com"

data-name="EzOnset.com"

data-image="images/logo.png"

data-description="All Cart Proposals Payment"

data-allow-remember-me="false"

>

<script>

$(document).ready(function() {
            $('.strip-submit').on('click', function(event) {
                event.preventDefault();
                var $button = $(this),
                    $form = $button.parents('form');
                var opts = $.extend({}, $button.data(), {
                    token: function(result) {
                        $form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
                    }
                });
                StripeCheckout.open(opts);
            });
        });

</script>

</form><!--- credit-card-form Ends --->


</div><!---- card-body cart-order-details Ends --->

</div><!--- card Ends --->

</div><!--- col-md-5 Ends --->


</div><!--- row Ends --->


</div><!--- container mt-5 mb-5 Ends --->

<script>

$(document).ready(function(){
	
$('.processing-fee').hide();
	
$('.total-price').html('$40');
	
$('#paypal-form').hide();
	
$('#credit-card-form').hide();
	
	
$('#shopping-balance').click(function(){
	
	$('.col-md-5 .card br').show();
	
	$('.total-price').html('$40');
	
	$('.processing-fee').hide();
	
	$('#credit-card-form').hide();
	
	$('#paypal-form').hide();
	
	$('#shopping-balance-form').show();
	
});
	
	
	
$('#paypal').click(function(){
	
	$('.col-md-5 .card br').hide();
	
	$('.total-price').html('$41');
	
	$('.processing-fee').show();
	
	$('#credit-card-form').hide();
	
	$('#paypal-form').show();
	
	$('#shopping-balance-form').hide();
	
});



$('#credit-card').click(function(){
	
	$('.col-md-5 .card br').hide();
	
	$('.total-price').html('$41');
	
	$('.processing-fee').show();
	
	$('#credit-card-form').show();
	
	$('#paypal-form').hide();
	
	$('#shopping-balance-form').hide();
	
});
	
	
});



</script>

<?php include("includes/footer.php"); ?>

</body>

</html>