
<div id="featured-listing-modal" class="modal fade"><!-- featured-listing-modal modal fade Starts -->

<div class="modal-dialog"><!-- modal-dialog Starts -->

<div class="modal-content"><!-- modal-content Starts -->

<div class="modal-header"><!-- modal-header Starts -->

<h5 class="modal-title"> Pay For Featured Proposal Listing </h5>

<button class="close" data-dismiss="modal">

<span> &times; </span>

</button>

</div><!-- modal-header Ends -->

<div class="modal-body p-0"><!-- modal-body p-0 Starts -->

<div class="order-details"><!-- order-details Starts -->

<div class="request-div"><!-- request-div Starts -->

<h4 class="mb-3">

THIS PAYMENT IS RELATED TO THE FOLLOWING PROPOSAL: <span class="price pull-right d-none d-sm-block"> $10 </span>

</h4>

<p>
You are about to pay for the featured listing fee for your proposal. The fee is $10. Please use the following payment methods.
</p>

<p> <b> Proposal Title: </b> I Will Do Wordpress Customization And PHP Programming </p>

<p> <b> Listing Fee: </b> $10 </p>

<p> <b> Listing Duration: </b> 3 Days </p>

</div><!-- request-div Ends -->

</div><!-- order-details Ends -->

<div class="payment-options-list"><!-- payment-options-list Starts -->

<div class="payment-option mb-2"><!-- payment-option mb-2 Starts -->

<input type="radio" name="payment_option" id="shopping-balance" class="radio-custom" checked>

<label for="shopping-balance" class="radio-custom-label" ></label>

<span class="lead font-weight-bold"> Shopping Balance </span>

<p class="lead ml-5">

Personal Balance - fixmywebsite <span class="text-success font-weight-bold"> $198 </span>

</p>

</div><!-- payment-option mb-2 Ends -->

<hr>

<div class="payment-option"><!-- payment-option Starts -->

<input type="radio" name="payment_option" id="paypal" class="radio-custom">

<label for="paypal" class="radio-custom-label"></label>

<img src="../images/paypal.png">

</div><!-- payment-option Ends -->


<hr>

<div class="payment-option"><!-- payment-option Starts -->

<input type="radio" name="payment_option" id="credit-card" class="radio-custom">

<label for="credit-card" class="radio-custom-label"></label>

<img src="../images/credit_cards.jpg">

</div><!-- payment-option Ends -->

</div><!-- payment-options-list Ends -->

</div><!-- modal-body p-0 Ends -->

<div class="modal-footer"><!-- modal-footer Starts -->

<button class="btn btn-secondary" data-dismiss="modal"> Close </button>


<form action="../shopping_balance.php" method="post" id="shopping-balance-form"><!--- shopping-balance-form Starts --->

<input type="hidden" name="proposal_id" value="">

<input type="hidden" name="amount" value="">

<button type="submit" name="pay_featured_proposal_listing" class="btn btn-success" onclick="return confirm('Do You Really Want to Pay This Proposal Featured Listing Fee From Your Shopping Balance.')">

Pay With Shopping Balance

</button>

</form><!--- shopping-balance-form Ends --->

<br>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal-form"><!--- paypal-form Starts --->

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="business" value="sad.ahmed22224@gmail.com">

<input type="hidden" name="tax" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://localhost/freelance/proposals/view_proposals.php">

<input type="hidden" name="return" value="http://localhost/freelance/paypal_order.php?featured_listing=1&proposal_id=">

<input type="hidden" name="item_name" value="I Will Do Viral Youtube Seo Social Media Promotion">

<input type="hidden" name="item_number" value="1">

<input type="hidden" name="amount" value="10">

<input type="hidden" name="quantity" value="1">


<button type="submit" name="submit" class="btn btn-success">

Pay With Paypal

</button>


</form><!--- paypal-form Ends --->


<form action="featured_listing_charge.php" method="post" id="credit-card-form"><!--- credit-card-form Starts --->

<input type="hidden" name="proposal_id" value="">

<input type="hidden" name="amount" value="">

<input
type="submit"
class="btn btn-success stripe-submit"
value="Pay With Credit Card"
data-dismiss="modal"
data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
data-amount="1100"
data-currency="usd"
data-email="fixmywebsite@gmail.com"
data-name="computerefever.com"
data-image="../images/logo.png"
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

</div><!-- modal-footer Ends -->

</div><!-- modal-content Ends -->

</div><!-- modal-dialog Ends -->

</div><!-- featured-listing-modal modal fade Ends -->

<script>

$(document).ready(function(){
	
$("#featured-listing-modal").modal("show");

$('#paypal-form').hide();
	
$('#credit-card-form').hide();
	
	
$('#shopping-balance').click(function(){
	
	$('#credit-card-form').hide();
	
	$('#paypal-form').hide();
	
	$('#shopping-balance-form').show();
	
});
	
	
	
$('#paypal').click(function(){
	
	$('#credit-card-form').hide();
	
	$('#paypal-form').show();
	
	$('#shopping-balance-form').hide();
	
});



$('#credit-card').click(function(){

	$('#credit-card-form').show();
	
	$('#paypal-form').hide();
	
	$('#shopping-balance-form').hide();
	
});
	
});

</script>