
<div id="offer-order-modal" class="modal fade"><!-- offer-order-modal modal fade Starts -->

<div class="modal-dialog"><!-- modal-dialog Starts -->

<div class="modal-content"><!-- modal-content Starts -->

<div class="modal-header"><!-- modal-header Starts -->

<h5 class="modal-title"> Select A Payment Method To Order </h5>

<button class="close" data-dismiss="modal">
<span> &times; </span>
</button>

</div><!-- modal-header Ends -->

<div class="modal-body p-0"><!-- modal-body p-0 Starts -->

<div class="order-details"><!-- order-details Starts -->

<div class="request-div"><!-- request-div Starts -->

<h4>

THIS ORDER IS RELATED TO THE FOLLOWING REQUEST:

<span class="btn-close float-right">x</span>

</h4>

<p>

"Please quote for a platform exactly like EzOnset.com"

</p>

<span class="arrow">

View Offer <i class="fa fa-caret-down"></i>

</span>

</div><!-- request-div Ends -->

<div class="offer-div"><!-- offer-div Starts -->

<h4>
I Will Do Web Development In Laravel And Codeignite

<span class="price float-right"> $100 </span>

</h4>

<p>
I have a complete freelancing theme same like EzOnset.com which has been made in php&mysqli with bootstrap 4 and I can provide it to you in 100$ only. I am sending you its demo url so you can see it yourself.

</p>

<p>
<strong> <i class="fa fa-clock-o"></i> Delivery Time: </strong>
3 Days
</p>

</div><!-- offer-div Ends -->

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

<input type="hidden" name="offer_id" value="">

<input type="hidden" name="amount" value="">

<button type="submit" name="view_offers_submit_order" class="btn btn-success" onclick="return confirm('Do You Really Want to Order This Offer From Your Shopping Balance.')">

Pay With Shopping Balance

</button>

</form><!--- shopping-balance-form Ends --->

<br>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal-form"><!--- paypal-form Starts --->

<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="business" value="sad.ahmed22224@gmail.com">

<input type="hidden" name="tax" value="1">

<input type="hidden" name="currency_code" value="USD">

<input type="hidden" name="cancel_return" value="http://localhost/freelance/requests/view_offers.php">

<input type="hidden" name="return" value="http://localhost/freelance/paypal_order.php?view_offers=1?offer_id=">

<input type="hidden" name="item_name" value="I Will Do Viral Youtube Seo Social Media Promotion">

<input type="hidden" name="item_number" value="1">

<input type="hidden" name="amount" value="10">

<input type="hidden" name="quantity" value="1">


<button type="submit" name="submit" class="btn btn-success">

Pay With Paypal

</button>


</form><!--- paypal-form Ends --->


<form action="offer_charge.php" method="post" id="credit-card-form"><!--- credit-card-form Starts --->

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


</div><!-- offer-order-modal modal fade Ends -->

<script>

$(document).ready(function(){
	
	$("#offer-order-modal").modal('show');
	
	$(".offer-div").hide();
	
	$(".arrow").click(function(){
		
		$(".offer-div").slideToggle();
		
	});
	
	$(".btn-close").click(function(){
		
		$(".request-div").fadeOut().remove();
		
		$(".offer-div").fadeOut().remove();
		
	});
	
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