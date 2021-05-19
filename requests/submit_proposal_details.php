
<div class="modal-content"><!--- modal-content Starts --->

<div class="modal-header"><!--- modal-header Starts --->

<h5 class="modal-title h5"> Specify Your Proposal Details </h5>

<button class="close" data-dismiss="modal"> &times; </button>

</div><!--- modal-header Ends --->

<div class="modal-body p-0"><!--- modal-body p-0 Starts --->

<div class="request-summary"><!--- request-summary Starts --->

<img src="http://localhost/freelance/user_images/brock.jpg" width="50" height="50" class="rounded-circle">

<div id="request-description"><!--- request-description Starts --->

<h6 class="text-primary mb-1"> Script Writing </h6>

<p> I Need A Programmer To Write Me A Script. </p>

</div><!--- request-description Ends --->

</div><!--- request-summary Ends --->

<form id="proposal-details-form"><!--- proposal-details-form Starts --->

<div class="selected-proposal p-3"><!--- selected-proposal p-3 Starts --->

<h5> I Will Do Viral Youtube Seo Social Media Promotion </h5>

<hr>

<input type="hidden" name="proposal_id" value="">

<input type="hidden" name="request_id" value="">

<div class="form-group"><!--- form-group Starts --->

<label class="font-weight-bold"> Description :  </label>

<textarea name="description" class="form-control" required></textarea>

</div><!--- form-group Ends --->

<hr>

<div class="form-group"><!--- form-group Starts --->

<label class="font-weight-bold"> Delivery Time :  </label>

<select class="form-control float-right" name="delivery_time">

<option value="1 Day"> 1 Day </option>

<option value="2 Days"> 2 Days </option>

<option value="3 Days"> 3 Days </option>

</select>

</div><!--- form-group Ends --->

<hr>


<div class="form-group"><!--- form-group Starts --->

<label class="font-weight-bold"> Total Offer Amount :  </label>

<div class="input-group float-right">

<span class="input-group-addon font-weight-bold"> $ </span>

<input type="number" name="amount" class="form-control" min="5" placeholder="5 Minimum">

</div>

</div><!--- form-group Ends --->


</div><!--- selected-proposal p-3 Ends --->

<div class="modal-footer"><!--- modal-footer Starts --->

<button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#send-offer-modal">

Back

</button>

<button type="submit" class="btn btn-success">

Submit Offer

</button>

</div><!--- modal-footer Ends --->

</form><!--- proposal-details-form Ends --->

</div><!--- modal-body p-0 Ends --->

</div><!--- modal-content Ends --->

<div id="insert_offer"></div>


<script>

$(document).ready(function(){
	
$("#proposal-details-form").submit(function(event){
	
event.preventDefault();
	
$.ajax({
	
method: "POST",
url: "http://localhost/freelance/requests/insert_offer.php",
data: $('#proposal-details-form').serialize()

})

.done(function(data){
	
$("#submit-proposal-details").modal('hide');

$("#insert_offer").html(data);
	
	
});
	
});
	
	
	
});


</script>

