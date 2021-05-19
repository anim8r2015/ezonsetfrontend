
<div id="send-offer-modal" class="modal fade"><!-- send-offer-modal modal fade Starts -->

<div class="modal-dialog"><!-- modal-dialog Starts -->

<div class="modal-content"><!-- modal-content Starts -->

<div class="modal-header"><!-- modal-header Starts -->

<h5 class="modal-title"> Select A Proposal To Offer </h5>

<button class="close" data-dismiss="modal">

<span> &times; </span>

</button>

</div><!-- modal-header Ends -->

<div class="modal-body p-0"><!-- modal-body p-0 Starts -->

<div class="request-proposals-list"><!--- request-proposals-list Starts --->

<div class="proposal-picture"><!--- proposal-picture Starts --->

<input type="radio" id="radio-1" class="radio-custom" name="proposal_id" value="" required>

<label for="radio-1" class="radio-custom-label"> </label>

<img src="http://localhost/freelance/proposals/proposal_files/youtube-seo-1.jpg" width="50" height="50">

</div><!--- proposal-picture Ends --->

<div class="proposal-title"><!--- proposal-title Starts --->

<p>I Will Do Viral Youtube Seo Social Media Promotion</p>

</div><!--- proposal-title Ends --->

<hr>


<div class="proposal-picture"><!--- proposal-picture Starts --->

<input type="radio" id="radio-2" class="radio-custom" name="proposal_id" value="" required>

<label for="radio-2" class="radio-custom-label"> </label>

<img src="http://localhost/freelance/proposals/proposal_files/youtube-seo-1.jpg" width="50" height="50">

</div><!--- proposal-picture Ends --->

<div class="proposal-title"><!--- proposal-title Starts --->

<p>I Will Do Viral Youtube Seo Social Media Promotion</p>

</div><!--- proposal-title Ends --->

<hr>

</div><!--- request-proposals-list Ends --->

</div><!-- modal-body p-0 Ends -->

<div class="modal-footer"><!--- modal-footer Starts --->

<button class="btn btn-secondary" data-dismiss="modal"> Close </button>

<button id="submit-proposal" class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#submit-proposal-details">

Go Next

</button>

</div><!--- modal-footer Ends --->

</div><!-- modal-content Ends -->

</div><!-- modal-dialog Ends -->

</div><!-- send-offer-modal modal fade Ends -->

<div id="submit-proposal-details" class="modal fade"><!--- modal fade Starts --->

<div class="modal-dialog"><!--- modal-dialog Starts --->


</div><!--- modal-dialog Ends --->

</div><!--- modal fade Ends --->

<textarea id="message" class="d-none" ></textarea>

<script>

$(document).ready(function(){
	
	$("#send-offer-modal").modal('show');
	
	$("#submit-proposal").attr("disabled", "disabled");
	
	$(".radio-custom-label").click(function(){
		
		$("#submit-proposal").removeAttr("disabled");
		
	});
	
 
   $("#submit-proposal").click(function(){
	   
   proposal_id = document.querySelector('input[name="proposal_id"]:checked').value;	   
	
   receiver_id = "";
   
   message = $("#message").val();
   
   file = "";
   
   offer_id = "";
   
   $.ajax({
	   
	method: "POST",   
	
	url: "http://localhost/freelance/conversations/submit_proposal_details.php",
	
	data: { proposal_id: proposal_id, receiver_id: receiver_id, message: message, file: file, offer_id: offer_id }
	   
   })
   
   .done(function(data){
	   
	   $("#submit-proposal-details .modal-dialog").html(data);
	   
   });
	
	
   });
	
});

</script>