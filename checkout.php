<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Order Details </title>

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

<div class="container mt-5 mb-5"><!---- container mt-5 mb-5 Starts --->

<div class="row"><!--- row Starts  --->


<div class="col-md-7"><!--- col-md-7 Starts --->

<div class="row"><!--- row Starts --->


<div class="col-md-12 mb-3"><!--- col-md-12 mb-3 Starts --->

<div class="card payment-options"><!--- card payment-options Starts --->

<div class="card-header"><!--- card-header Starts --->

<h5> Available EzOnset Personal Balance </h5>

</div><!--- card-header Ends --->

<div class="card-body"><!--- card-body Starts --->

<div class="row"><!--- row Starts --->

<div class="col-1"><!--- col-1 Starts --->

<input id="shopping-balance" class="form-control radio-input" type="radio" name="method" checked>

</div><!--- col-1 Ends --->

<div class="col-11"><!--- col-11 Starts --->

<p class="lead mt-2">

EzOnset Personal Balance - fixmywebsite

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

<img src="images/payoneer.png" height="50" class="ml-2 width-xs-100">

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

<div class="card checkout-details"><!--- card checkout-details Starts --->

<div class="card-header"><!--- card-header Starts --->

<h5><!--- h5 Starts --->

<i class="fa fa-money fa-fw"></i> Order Summary

</h5><!--- h5 Ends --->

</div><!--- card-header Ends --->

<div class="card-body"><!--- card-body Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-4 mb-3"><!--- col-md-4 mb-3 Starts --->

<img src="proposals/proposal_files/youtube-seo-1.jpg" class="img-fluid">

</div><!--- col-md-4 mb-3 Ends --->

<div class="col-md-8"><!--- col-md-8 Starts --->

<h5> I Will Do Viral Youtube Seo Social Media Promotion </h5>

</div><!--- col-md-8 Ends --->

</div><!--- row Ends --->

<hr>

<h6> Proposal Price : <span class="float-right"> $20 </span> </h6>

<hr>

<h6> Proposal Quantity : <span class="float-right"> 2 </span> </h6>

<hr>

<h6 class="processing-fee"> Processing Fee : <span class="float-right"> $1 </span> </h6>

<hr class="processing-fee">

<h6> Apply Coupon Code : </h6>

<form class="input-group" method="post"><!--- form input-group Starts --->

<input type="hidden" name="proposal_id" value="">

<input type="hidden" name="proposal_qty" value="">

<input type="text" name="code" class="form-control apply-disabled" placeholder="Enter Coupon Code">

<button type="submit" name="coupon_submit" class="input-group-addon btn btn-success"> 

Apply

</button>

</form><!--- form input-group Ends --->

<p class="coupon-response"></p>

<hr>

<h5 class="font-weight-bold">

Total Amount : <span class="float-right total-price"> $41 </span>

</h5>

<hr>


<form action="shopping_balance.php" method="post" id="shopping-balance-form"><!--- shopping-balance-form Starts --->

<input type="hidden" name="proposal_id" value="">

<input type="hidden" name="proposal_qty" value="">

<input type="hidden" name="amount" value="">

<button type="submit" name="checkout_submit_order" class="btn btn-lg btn-success btn-block" onclick="return confirm('Do You Really Want to Order This Proposal From Your EzOnset Personal Balance.')">

PAY NOW

</button>
<p class="text-muted"> By Clicking on 'PAY NOW', You agree to accept the proposal</p>
</form><!--- shopping-balance-form Ends --->

<br>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal-form"><!--- paypal-form Starts --->

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="business" value="sad.ahmed22224@gmail.com">

<input type="hidden" name="tax" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://localhost/freelance/proposals/proposal.php">

<input type="hidden" name="return" value="http://localhost/freelance/paypal_order.php?checkout_seller_id=?proposal_id=&proposal_qty&proposal_price=">

<input type="hidden" name="item_name" value="I Will Do Viral Youtube Seo Social Media Promotion">

<input type="hidden" name="item_number" value="1">

<input type="hidden" name="amount" value="20">

<input type="hidden" name="quantity" value="2">


<button type="submit" name="submit" class="btn btn-lg btn-success btn-block">

Pay With Payoneer

</button>


</form><!--- paypal-form Ends --->


<form action="checkout_charge.php" method="post" id="credit-card-form"><!--- credit-card-form Starts --->

<input type="hidden" name="proposal_id" value="">

<input type="hidden" name="proposal_qty" value="">

<input type="hidden" name="proposal_price" value="">

<input type="hidden" name="amount" value="">

<input
type="submit"
class="btn btn-lg btn-success btn-block stripe-submit"
value="Pay With Credit Card"
data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
data-amount="4000"
data-currency="usd"
data-email="fixmywebsite@gmail.com"
data-name="ezonser.com"
data-image="images/logo.png"
data-description="I Will Do Viral Youtube Seo Social Media Promotion"
data-allow-remember-me="false"

>

<script>

$(document).ready(function() {
            $('.stripe-submit').on('click', function(event) {
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


</div><!--- card-body Ends --->

</div><!--- card checkout-details Ends --->

</div><!--- col-md-5 Ends --->


</div><!--- row Ends --->

</div><!---- container mt-5 mb-5 Ends --->


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