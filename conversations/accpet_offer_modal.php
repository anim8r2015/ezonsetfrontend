
<div id="accept-offer-modal" class="modal fade"><!-- accpet-offer-modal Starts -->

<div class="modal-dialog"><!-- modal-dialog Starts -->

<div class="modal-content"><!-- modal-content Starts -->

<div class="modal-header"><!-- modal-header Starts -->

<h5> Select A Payment Method To Place An Order</h5>

<button class="close" data-dismiss="modal">

<span> &times; </span>

</button>

</div><!-- modal-header Ends -->

<div class="modal-body p-0"><!-- modal-body p-0 Starts -->

<div class="order-details"><!-- order-details Starts -->

<div class="request-div"><!-- request-div Starts -->

<h4 class="mb-3">

THIS ORDER IS RELATED TO THE FOLLOWING OFFER:

<span class="price float-right d-sm-block d-none"> $100 </span>

</h4>

<p> "I will do your work as exactly as you demand." </p>

<p> <b> Proposal: </b> I Will Fix Html , Php , Laravel, Css,Javascript , Jquery Bugs </p>

<p> <b> Total Amount: </b> $100 </p>

<p> <b> Delivery Time: </b> 3 Days </p>

<p> <b> Number of Revisions: </b> 3</p>

</div><!-- request-div Ends -->

</div><!-- order-details Ends -->

<div class="payment-options-list"><!-- payment-options-list Starts -->

<div class="payment-option mb-2"><!-- payment-option mb-2 Starts -->

<input type="radio" name="payment_option" id="shopping-balance" class="radio-custom" checked>

<label for="shopping-balance" class="radio-custom-label" ></label>

<span class="lead font-weight-bold"> Ezonset Available Personal Balance </span>

<p class="lead ml-5">

Personal Balance - fixmywebsite <span class="text-success font-weight-bold"> $1450 </span>

</p>

</div><!-- payment-option mb-2 Ends -->

<hr>

<div class="payment-option"><!-- payment-option Starts -->

<input type="radio" name="payment_option" id="paypal" class="radio-custom">

<label for="paypal" class="radio-custom-label"></label>

<img src="../images/payoneer.png">

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

<input type="hidden" name="offer_id" value="">

<input type="hidden" name="amount" value="">

<button type="submit" name="message_offer_submit_order" class="btn btn-success" onclick="return confirm('Do You Really Want to buy this offer through your EzOnset Personal Balance?')">

Pay With EzOnset Personal Balance

</button>

</form><!--- shopping-balance-form Ends --->

<br>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal-form"><!--- paypal-form Starts --->

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="business" value="sad.ahmed22224@gmail.com">

<input type="hidden" name="tax" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://localhost/freelance/conversations/insert_message.php?single_message_id=">

<input type="hidden" name="return" value="http://localhost/freelance/paypal_order.php?insert_message=1&message_offer_id=">

<input type="hidden" name="item_name" value="I Will Do Viral Youtube Seo Social Media Promotion">

<input type="hidden" name="item_number" value="1">

<input type="hidden" name="amount" value="10">

<input type="hidden" name="quantity" value="1">


<button type="submit" name="submit" class="btn btn-success">

Pay With Paypal

</button>


</form><!--- paypal-form Ends --->


<form action="accept_offer_charge.php" method="post" id="credit-card-form"><!--- credit-card-form Starts --->

<input type="hidden" name="offer_id" value="">

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
data-name="ezonset.com"
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

</div><!-- accpet-offer-modal Ends -->

<script>

$(document).ready(function(){
	
	$("#accept-offer-modal").modal('show');
	
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