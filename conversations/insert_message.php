<!DOCTYPE html>

<html>

<head>

<title> EzOnset / fixmywebsite / Conversation with miss_digimarket </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="../styles/bootstrap.min.css" rel="stylesheet">

<link href="../styles/style.css" rel="stylesheet">

<link href="../styles/user_nav_style.css" rel="stylesheet">

<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src="../js/jquery.min.js"></script>

<script src="https://checkout.stripe.com/checkout.js"></script>

</head>

<body>

<?php include("../includes/user_header.php"); ?>

<div class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mt-5 mb-3"><!-- col-md-12 mt-5 mb-3 Starts --> 

<div class="row insert-message"><!-- row insert-message Starts -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<div class="row"><!-- row Starts -->

<div class="col-lg-5 col-md-12 text-center"><!-- col-lg-5 col-md-12 text-center Starts -->

<img src="../user_images/miss_digimarket.jpg" class="seller-image" >

<img src="../images/level_badge_1.png" class="seller-level-image" >

</div><!-- col-lg-5 col-md-12 text-center Ends -->

<div class="col-lg-7 col-md-12 mt-lg-0 mt-3 text-lg-left text-center"><!-- col-lg-7 col-md-12 mt-lg-0 mt-3 text-lg-left text-center Starts -->

<h4> <a href="user.php" target="blank" > miss_digimarket </a> </h4>

<p> Level One </p>

</div><!-- col-lg-7 col-md-12 mt-lg-0 mt-3 text-lg-left text-center Ends -->

</div><!-- row Ends -->

</div><!-- col-md-3 Ends -->

<div class="col-md-9 responsive-border mt-lg-0 mt-3 text-md-left text-center"><!-- col-md-9 responsive-border mt-lg-0 mt-3 text-md-left text-center Starts -->


<p class="p-style mt-md-0 mt-3">

<i class="fa fa-clock-o"></i> Recent Delivery <b> December 18, 2020 </b>

</p>

<p class="p-style">

<i class="fa fa-comments-o"></i> Speaks

<b> English </b> (Conversational)

<b> French </b> (Fluent)

</p>

<p class="p-style">

<i class="fa fa-smile-o"></i> Positive Ratings <b> 100% </b>

</p>

</div><!-- col-md-9 responsive-border mt-lg-0 mt-3 text-md-left text-center Ends -->

</div><!-- row insert-message Ends -->

</div><!-- col-md-12 mt-5 mb-3 Ends --> 

<div class="col-md-12"><!-- col-md-12 Starts -->

<div id="display-request"><!-- display-request Starts -->

<div class="request-div"><!-- request-div Starts -->

<h5>

THIS MESSAGE IS RELATED TO THE FOLLOWING REQUEST:
<span class="btn-close float-right">x</span>

</h5>

<p>
"I want Ezonset Platform to be replicated"
</p>

<span class="arrow">
View Offer <i class="fa fa-caret-down"></i>
</span>

</div><!-- request-div Ends -->

<div class="offer-div"><!-- offer-div Starts -->

<h5>
I Will Fix Html , Php , Laravel, Css,Javascript , Jquery Bugs
<span class="price float-right"> $100 </span>
</h5>

<p>
I will do your work as per your requirement.
</p>

<p>
<strong> <i class="fa fa-clock-o"></i> Delivery Time: </strong> 3 Days
</p>

</div><!-- offer-div Ends -->

<script>

$(".offer-div").hide();

$(".arrow").click(function(){
	
	$(".offer-div").slideToggle();
	
});

$(".btn-close").click(function(){
	
	$(".request-div").fadeOut().remove();
	
	$(".offer-div").fadeOut().remove();
	
});

</script>

</div><!-- display-request Ends -->

<div id="display-messages" class="bg-white"><!-- display-messages Starts -->

<?php include("display_messages.php") ?>

</div><!-- display-messages Ends -->

<div id="seller-vacation-div"><!-- seller-vacation-div Starts -->

<h3> Dear fixmywebsite </h3>

<p class="lead">

You Can Not Send Message. This Person Is On Vacations.

</p>

</div><!-- seller-vacation-div Ends -->

<div class="insert-message-box"><!-- insert-message-box Starts -->

<div class="float-right">

<p class="text-muted mt-1">

fixmywebsite <span class="text-success"> Online </span> | Local Time

<i class="fa fa-clock-o"></i> 02:46 PM

</p>

</div>

<form id="insert-message-form"><!-- insert-message-form Starts -->

<textarea class="form-control mb-2" rows="5" id="message" placeholder="Type your Message Here"></textarea>

<button type="submit" class="btn btn-success ml-2 float-right">
Send
</button>

<button type="button" id="send-offer" class="btn btn-success float-right">
Send an Offer
</button>

</form><!-- insert-message-form Ends -->

<div class="clearfix"></div>

<p class="mt-lg-0 mt-2 mb-0">

<span class="font-weight-bold" > Accepted File Formats: </span>

jpeg, jpg, gif, png, tif, avi, mpeg, mpg, mov, rm, 3gp, flv, mp4, zip, rar, mp3, wav

</p>

<div class="form-row align-items-center message-attacment"><!-- form-row align-items-center message-attacment Starts -->

<label class="h6 ml-2 mt-1"> Attach File (optional) </label>

<input type="file" id="file" class="form-control-file p-1 mb-2 mb-sm-0" >

</div><!-- form-row align-items-center message-attacment Ends -->

</div><!-- insert-message-box Ends -->

</div><!-- col-md-12 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->

<div id="accpet-offer-div"></div>

<div id="send-offer-div"></div>

<script>

$(document).ready(function(){
	
	$("#send-offer").click(function(){
		
		recevier_id = "";
		
		message = $("#message").val();
		
		file = $("#file").val();
		
		if(file == ""){
			message_file = file;
		}else{
			message_file = document.getElemetById("file").files[0].name;
		}
		
		offer_id = "";
		
		$.ajax({
			method: 'POST',
			url: 'send_offer_modal.php',
			data: {recevier_id: recevier_id, message: message, file: message_file, offer_id: offer_id}
		}).done(function(data){
		
		$("#send-offer-div").html(data);
		
	});
		
	});
	
});

</script>

<?php include("../includes/footer.php"); ?>

</body>

</html>