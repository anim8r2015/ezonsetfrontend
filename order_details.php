<!DOCTYPE html>

<html>

<head>

<title> EzOnset / fixmywebsite / Order Management Of Your Order #1198390 </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/fontawesome-stars.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="styles/user_nav_style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="styles/owl.carousel.css" rel="stylesheet">

<link href="styles/owl.theme.default.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>

<script src="js/jquery.barrating.min.js"></script>

<script src="js/jquery.sticky.js"></script>

</head>

<body>

<?php include("includes/user_header.php"); ?>


<div id="order-status-bar"><!--- order-status-bar Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-8 offset-md-2"><!---- col-md-8 offset-md-2 Starts --->

<h6 class="float-left mt-2">

<span class="border border-primary rounded p-1"> Order: #1198390 : In Progress </span>

</h6>

<h2 class="float-right text-muted"> In Progress </h2>

</div><!---- col-md-8 offset-md-2 Ends --->

</div><!--- row Ends --->

</div><!--- order-status-bar Ends --->


<div id="order-status-bar"><!--- order-status-bar Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-8 offset-md-2"><!---- col-md-8 offset-md-2 Starts --->

<h6 class="float-left mt-2">

<i class="fa fa-lg fa-times-circle"></i> Order Cancelled

<i class="fa fa-lg fa-check-circle"></i> Payment Returend To Buyer

</h6>

<h2 class="float-right text-muted"> Order Cancelled </h2>

</div><!---- col-md-8 offset-md-2 Ends --->

</div><!--- row Ends --->

</div><!--- order-status-bar Ends --->



<div id="order-status-bar" class="bg-success text-white"><!--- order-status-bar Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-10 offset-md-1"><!---- col-md-10 offset-md-1 Starts --->

<?php if(isset($_GET['selling_order'])){ ?>

<h6 class="float-left mt-2">

<i class="fa fa-lg fa-check-circle-o"></i> WORK DELIVERED

</h6>

<h2 class="float-right"> 

<i class="fa fa-check-circle"></i> ORDER COMPLETED. YOU EARNED $16.00

</h2>

<?php }elseif(isset($_GET["buying_order"])){ ?>

<h6 class="float-left mt-2">

<i class="fa fa-lg fa-check-circle-o"></i> Delivery Submitted

</h6>

<h2 class="float-right"> 

<i class="fa fa-check-circle"></i> ORDER COMPLETED

</h2>

<?php } ?>

</div><!---- col-md-10 offset-md-1 Ends --->

</div><!--- row Ends --->

</div><!--- order-status-bar Ends --->


<div class="container order-page mt-2"><!--- container order-page mt-2 Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-12"><!--- col-md-12 Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-10 offset-md-1"><!--- col-md-10 offset-md-1 Starts --->

<ul class="nav nav-tabs mb-3 mt-3"><!--- nav nav-tabs mb-3 mt-3 Starts --->

<li class="nav-item">

<a href="#order-activity" data-toggle="tab" class="nav-link active">

Order Activity

</a>

</li>


<li class="nav-item">

<a href="#resolution-center" data-toggle="tab" class="nav-link">

Resolution Center

</a>

</li>


</ul><!--- nav nav-tabs mb-3 mt-3 Ends --->

</div><!--- col-md-10 offset-md-1 Ends --->

</div><!--- row Ends --->

</div><!--- col-md-12 Ends --->


<div class="col-md-12 tab-content mt-2 mb-4"><!--- col-md-12 tab-content mt-2 mb-4 Starts --->


<div id="order-activity" class="tab-pane fade show active"><!--- order-activity tab-pane fade show active Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-10 offset-md-1"><!--- col-md-10 offset-md-1 Starts --->

<div class="card"><!--- card Starts --->

<div class="card-body"><!--- card-body Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-2"><!--- col-md-2 Starts --->

<img src="proposals/proposal_files/youtube-seo-1.jpg" class="img-fluid d-lg-block d-md-block d-none">

</div><!--- col-md-2 Ends --->

<div class="col-md-10"><!--- col-md-10 Starts --->

<?php if(isset($_GET['selling_order'])){ ?>

<h1 class="text-success float-right d-lg-block d-md-block d-none"> $16.00 </h1>

<h4>

Order #1198390

<small> 

<a href="proposals/proposal.php" target="_blank">

View Proposal

</a>

</small>

</h4>

<p class="text-muted"><!--- text-muted Starts --->

<span class="font-weight-bold"> Buyer : </span>

<a href="user.php" target="_blank" class="seller-buyer-name mr-1"> miss_digimarket </a>

| <span class="font-weight-bold ml-1"> Status :</span> Completed

| <span class="font-weight-bold ml-1"> Date :</span> December 5, 2017

</p><!--- text-muted Ends --->

<?php }elseif(isset($_GET["buying_order"])){ ?>

<h1 class="text-success float-right d-lg-block d-md-block d-none"> $21.00 </h1>

<h4> I Will Do Viral Youtube Seo Social Media Promotion </h4>

<p class="text-muted"><!--- text-muted Starts --->

<span class="font-weight-bold"> Seller : </span>

<a href="user.php" target="_blank" class="seller-buyer-name mr-1"> fixmywebsite </a>

| <span class="font-weight-bold ml-1"> Order :</span> #119830

| <span class="font-weight-bold ml-1"> Date :</span> December 5, 2017

</p><!--- text-muted Ends --->

<?php } ?>

</div><!--- col-md-10 Ends --->

</div><!--- row Ends --->


<div class="row d-lg-flex d-md-flex d-none"><!--- row d-lg-flex d-md-flex d-none Starts --->

<div class="col-md-12"><!--- col-md-12 Starts --->

<table class="table mt-3"><!--- table mt-3 Starts --->

<thead><!--- thead Starts ---> 

<tr>

<th>Item</th>

<th>Quantity</th>

<th>Duration</th>

<th>Amount</th>

</tr>

</thead><!--- thead Ends ---> 

<tbody><!--- tbody Starts --->

<tr>

<td class="font-weight-bold" width="600">

I Will Do Viral Youtube Seo Social Media Promotion

</td>

<td> 1 </td>

<td> 3 Days </td>

<td>

 $<?php if(isset($_GET["selling_order"])){ ?>16.00
 
 <?php }elseif(isset($_GET["buying_order"])){ ?> 
 
 20.00
 
 <?php } ?>

</td>

</tr>

<?php if(isset($_GET["buying_order"])){  ?>

<tr>

<td> Processing Fee </td>

<td> </td>

<td> </td>

<td> $1.00 </td>

</tr>

<?php } ?>

<tr>

<td colspan="4">

<span class="float-right mr-4">

<strong>Total:</strong>

$<?php if(isset($_GET["selling_order"])){ ?>16.00
 
 <?php }elseif(isset($_GET["buying_order"])){ ?> 
 
 21.00
 
 <?php } ?>

</span>

</td>

</tr>


</tbody><!--- tbody Ends --->

</table><!--- table mt-3 Ends --->


<table class="table"><!--- table Starts --->

<thead><!--- thead Starts --->

<tr>

<th> Description </th>

</tr>

</thead><!--- thead Ends --->

<tbody><!--- tbody Starts --->

<tr>

<td width="600">

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

</td>

</tr>

</tbody><!--- tbody Ends --->

</table><!--- table Ends --->

</div><!--- col-md-12 Ends --->

</div><!--- row d-lg-flex d-md-flex d-none Ends --->


</div><!--- card-body Ends --->

</div><!--- card Ends --->


<?php if(isset($_GET["selling_order"])){ ?>

<h2 class="text-center mt-2" id="countdown-heading">

You Needs To Deliver Your Order Before This Time

</h2>

<?php }elseif(isset($_GET["buying_order"])){ ?>

<h2 class="text-center mt-2" id="countdown-heading">

Seller Needs To Deliver Your Order Before This Time

</h2>

<?php } ?>

<div id="countdown-timer"><!--- countdown-timer Starts --->

<div class="row"><!--- row Starts --->


<div class="col-lg-3 col-md-6 col-sm-6 countdown-box"><!--- col-lg-3 col-md-6 col-sm-6 countdown-box Starts --->

<p class="countdown-number" id="days"></p>

<p class="countdown-title">Days</p>

</div><!--- col-lg-3 col-md-6 col-sm-6 countdown-box Ends --->


<div class="col-lg-3 col-md-6 col-sm-6 countdown-box"><!--- col-lg-3 col-md-6 col-sm-6 countdown-box Starts --->

<p class="countdown-number" id="hours"></p>

<p class="countdown-title">Hours</p>

</div><!--- col-lg-3 col-md-6 col-sm-6 countdown-box Ends --->


<div class="col-lg-3 col-md-6 col-sm-6 countdown-box"><!--- col-lg-3 col-md-6 col-sm-6 countdown-box Starts --->

<p class="countdown-number" id="minutes"></p>

<p class="countdown-title">Minutes</p>

</div><!--- col-lg-3 col-md-6 col-sm-6 countdown-box Ends --->


<div class="col-lg-3 col-md-6 col-sm-6 countdown-box"><!--- col-lg-3 col-md-6 col-sm-6 countdown-box Starts --->

<p class="countdown-number" id="seconds"></p>

<p class="countdown-title">Seconds</p>

</div><!--- col-lg-3 col-md-6 col-sm-6 countdown-box Ends --->


</div><!--- row Ends --->

</div><!--- countdown-timer Ends --->


<div id="order-conversations" class="bg-white mt-3"><!--- order-conversations bg-white mt-3 Starts --->

<?php include("order_conversations.php"); ?>

</div><!--- order-conversations bg-white mt-3 Ends --->

<?php if(isset($_GET["selling_order"])){ ?>

<center><!--- center Starts --->

<button class="btn btn-success btn-lg mt-4 mb-2" data-toggle="modal" data-target="#deliver-order-modal">

Deliver Your Order

</button>

</center><!--- center Ends --->

<?php } ?>


<div class="proposal-reviews mt-3"><!--- proposal-reviews mt-3 Starts --->

<h2 class="text-center"> Order Reviews </h2>

<div class="card rounded-0 mt-3"><!--- card rounded-0 mt-3 Starts --->

<div class="card-body"><!--- card-body Starts --->

<ul class="reviews-list"><!--- reviews-list Starts --->

<li class="star-rating-row"><!--- star-rating-row Starts --->

<span class="user-picture"><!--- user-picture Starts --->

<img src="user_images/miss_digimarket.jpg" width="60" height="60">

</span><!--- user-picture Ends --->


<h4><!--- h4 Starts --->

<a href="#" class="mr-1"> miss_digimarket </a>

<img src="images/user_rate_full.png">

<img src="images/user_rate_full.png">

<img src="images/user_rate_full.png">

<img src="images/user_rate_full.png">

<img src="images/user_rate_full.png">

</h4><!--- h4 Ends --->

<div class="msg-body"><!--- msg-body Starts --->

Good Experience !.

</div><!--- msg-body Ends --->

<span class="rating-date"> December 8, 2017 </span>

</li><!--- star-rating-row Ends --->

<hr>

<li class="rating-seller"><!--- rating-seller Starts --->

<span class="user-picture"><!--- user-picture Starts --->

<img src="user_images/fixmywebsite.jpg" width="40" height="40">

</span><!--- user-picture Ends --->

<h4><!--- h4 Starts --->

<span class="mr-1"> Seller's Feedback </span>

<img src="images/user_rate_full.png">

<img src="images/user_rate_full.png">

<img src="images/user_rate_full.png">

<img src="images/user_rate_full.png">

<img src="images/user_rate_full.png">

</h4><!--- h4 Ends --->

<div class="msg-body"><!--- msg-body Starts --->

Great Buyer Thank You.

</div><!--- msg-body Ends --->

</li><!--- rating-seller Ends --->

</ul><!--- reviews-list Ends --->

</div><!--- card-body Ends --->

</div><!--- card rounded-0 mt-3 Ends --->

<?php if(isset($_GET["selling_order"])){ ?>

<div class="order-review-box mb-3 p-3"><!--- order-review-box mb-3 p-3 Starts --->

<h3 class="text-center text-white"> Please Review To Buyer </h3>

<div class="row"><!--- row Starts --->

<div class="col-md-8 offset-md-2"><!--- col-md-8 offset-md-2 Starts --->

<form method="post" align="center"><!--- form Starts --->

<div class="form-group"><!--- form-group Starts --->

<label class="h6 text-white"> Review Rating </label>

<select name="rating" class="rating-select">

<option value="1">1</option>

<option value="2">2</option>

<option value="3">3</option>

<option value="4">4</option>

<option value="5">5</option>

</select>

<script>

$(document).ready(function(){
	
	$('.rating-select').barrating({
		
		theme: 'fontawesome-stars'
		
	});
	
});

</script>


</div><!--- form-group Ends --->

<textarea name="review" class="form-control mb-3" rows="5" placeholder="Write Your Experience With Buyer"></textarea>

<input type="submit" name="seller_review_submit" class="btn btn-success" value="Give Your Review">

</form><!--- form Ends --->

</div><!--- col-md-8 offset-md-2 Ends --->

</div><!--- row Ends --->

</div><!--- order-review-box mb-3 p-3 Ends --->


<div class="order-review-box mb-3 p-3"><!--- order-review-box mb-3 p-3 Starts --->

<h3 class="text-center text-white"> Edit  Review To Buyer </h3>

<div class="row"><!--- row Starts --->

<div class="col-md-8 offset-md-2"><!--- col-md-8 offset-md-2 Starts --->

<form method="post" align="center"><!--- form Starts --->

<div class="form-group"><!--- form-group Starts --->

<label class="h6 text-white"> Review Rating </label>

<select name="rating" class="rating-select-update">

<option value="1">1</option>

<option value="2">2</option>

<option value="3">3</option>

<option value="4">4</option>

<option value="5">5</option>

</select>

<script>

$(document).ready(function(){
	
	$('.rating-select-update').barrating({
		
		theme: 'fontawesome-stars',
		
		initialRating: '5'
		
	});
	
});

</script>


</div><!--- form-group Ends --->

<textarea name="review" class="form-control mb-3" rows="5" placeholder="Write Your Experience With Buyer">
Great Buyer Thank You.
</textarea>

<input type="submit" name="seller_review_update" class="btn btn-success" value="Update Your Review">

</form><!--- form Ends --->

</div><!--- col-md-8 offset-md-2 Ends --->

</div><!--- row Ends --->

</div><!--- order-review-box mb-3 p-3 Ends --->


<?php }elseif(isset($_GET["buying_order"])){ ?>


<div class="order-review-box mb-3 p-3"><!--- order-review-box mb-3 p-3 Starts --->

<h3 class="text-center text-white"> Please Review To Seller </h3>

<div class="row"><!--- row Starts --->

<div class="col-md-8 offset-md-2"><!--- col-md-8 offset-md-2 Starts --->

<form method="post" align="center"><!--- form Starts --->

<div class="form-group"><!--- form-group Starts --->

<label class="h6 text-white"> Review Rating </label>

<select name="rating" class="rating-select">

<option value="1">1</option>

<option value="2">2</option>

<option value="3">3</option>

<option value="4">4</option>

<option value="5">5</option>

</select>

<script>

$(document).ready(function(){
	
	$('.rating-select').barrating({
		
		theme: 'fontawesome-stars'
		
	});
	
});

</script>


</div><!--- form-group Ends --->

<textarea name="review" class="form-control mb-3" rows="5" placeholder="Write Your Experience With Seller"></textarea>

<input type="submit" name="buyer_review_submit" class="btn btn-success" value="Give Your Review">

</form><!--- form Ends --->

</div><!--- col-md-8 offset-md-2 Ends --->

</div><!--- row Ends --->

</div><!--- order-review-box mb-3 p-3 Ends --->


<div class="order-review-box mb-3 p-3"><!--- order-review-box mb-3 p-3 Starts --->

<h3 class="text-center text-white"> Edit  Review To Seller </h3>

<div class="row"><!--- row Starts --->

<div class="col-md-8 offset-md-2"><!--- col-md-8 offset-md-2 Starts --->

<form method="post" align="center"><!--- form Starts --->

<div class="form-group"><!--- form-group Starts --->

<label class="h6 text-white"> Review Rating </label>

<select name="rating" class="rating-select-update">

<option value="1">1</option>

<option value="2">2</option>

<option value="3">3</option>

<option value="4">4</option>

<option value="5">5</option>

</select>

<script>

$(document).ready(function(){
	
	$('.rating-select-update').barrating({
		
		theme: 'fontawesome-stars',
		
		initialRating: '5'
		
	});
	
});

</script>


</div><!--- form-group Ends --->

<textarea name="review" class="form-control mb-3" rows="5" placeholder="Write Your Experience With Seller">
Great Buyer Thank You.
</textarea>

<input type="submit" name="buyer_review_update" class="btn btn-success" value="Update Your Review">

</form><!--- form Ends --->

</div><!--- col-md-8 offset-md-2 Ends --->

</div><!--- row Ends --->

</div><!--- order-review-box mb-3 p-3 Ends --->



<?php } ?>

</div><!--- proposal-reviews mt-3 Ends --->

<div class="insert-message-box"><!--- insert-message-box Starts --->

<div class="float-right"><!--- float-right Starts --->

<p class="text-muted mt-1"><!--- text-muted mt-1 Starts --->

miss_digimarket <span class="text-success"> Online </span> | Local Time

<i class="fa fa-sun-o"></i> 08:05 PM

</p><!--- text-muted mt-1 Ends --->

</div><!--- float-right Ends --->

<form id="insert-message-form" class="clearfix"><!--- insert-message-form clearfix Starts --->

<textarea id="message" rows="5" placeholder="Type Your Message Here..." class="form-control mb-2"></textarea>

<label class="float-left h6 mt-2 mr-2"> Attach File (optional) </label>

<label class="float-left mt-2"><!--- float-left Starts --->

<input type="file" id="file" class="form-control-file float-left">

</label><!--- float-left Ends --->


<input type="submit" class="btn btn-success float-right" value="Send">


</form><!--- insert-message-form clearfix Ends --->

</div><!--- insert-message-box Ends --->

</div><!--- col-md-10 offset-md-1 Ends --->

</div><!--- row Ends --->


</div><!--- order-activity tab-pane fade show active Ends --->


<div id="resolution-center" class="tab-pane fade"><!-- resolution-center tab-pane fade Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-10 offset-md-1"><!-- col-md-10 offset-md-1 Starts -->

<div class="card"><!-- card Starts -->

<div class="card-body"><!-- card-body Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-8 offset-md-2"><!-- col-md-8 offset-md-2 Starts -->

<h3 class="text-center mb-3"> Order Cancellation </h3>

<form method="post"><!-- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="font-weight-bold"> Cancellation Request Message </label>

<textarea name="callcellation_message" placeholder="Enter Your Cancellation Request Message" rows="10" class="form-control" required></textarea>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="font-weight-bold"> Cancellation Request Reason </label>

<select name="cancellation_reason" class="form-control">

<option class="hidden"> Select Cancellation Reason </option>

<?php if(isset($_GET["selling_order"])){ ?>

<option> Buyer is not responding </option>

<option> Buyer does not accept work </option>

<option> Buyer tells me to, cancel this order. </option>


<?php }elseif(isset($_GET["buying_order"])){ ?>

<option> Seller is not responding </option>

<option> Seller does not do well work. </option>

<option> Seller tells me to, cancel this order. </option>

<?php }  ?>

</select>

</div><!-- form-group Ends -->

<input type="submit" name="submit_cancellation_request" value="Send Cancellation Request" class="btn btn-success float-right" >

</form><!-- form Ends -->

</div><!-- col-md-8 offset-md-2 Ends -->

</div><!-- row Ends -->

</div><!-- card-body Ends -->

</div><!-- card Ends -->

</div><!-- col-md-10 offset-md-1 Ends -->

</div><!-- row Ends -->



</div><!-- resolution-center tab-pane fade Ends -->


</div><!--- col-md-12 tab-content mt-2 mb-4 Ends --->


</div><!--- row Ends --->

</div><!--- container order-page mt-2 Ends --->


<?php if(isset($_GET["selling_order"])){ ?>

<div id="deliver-order-modal" class="modal fade"><!--- deliver-order-modal modal fade Starts --->

<div class="modal-dialog"><!--- modal-dialog Starts --->

<div class="modal-content"><!--- modal-content Starts --->

<div class="modal-header"><!--- modal-header Starts --->

<h5 class="modal-title"> Deliver Your Order Now </h5>

<button class="close" data-dismiss="modal"> <span>&times;</span> </button>

</div><!--- modal-header Ends --->

<div class="modal-body"><!--- modal-body Starts --->

<form method="post" enctype="multipart/form-data"><!--- form Starts --->

<div class="form-group"><!--- form-group Starts --->

<label class="font-weight-bold" > Message </label>

<textarea name="delivered_message" placeholder="Type Your Message Here..." class="form-control mb-2"></textarea>

</div><!--- form-group Ends --->

<div class="form-group clearfix"><!--- form-group clearfix Starts --->

<input type="file" name="delivered_file" class="mt-1">

<input type="submit" name="submit_delivered" value="Deliver Order" class="btn btn-success float-right">

</div><!--- form-group clearfix Ends --->

</form><!--- form Ends --->

</div><!--- modal-body Ends --->

</div><!--- modal-content Ends --->

</div><!--- modal-dialog Ends --->

</div><!--- deliver-order-modal modal fade Ends --->

<?php }elseif(isset($_GET["buying_order"])){ ?>

<div id="revision-request-modal" class="modal fade"><!--- revision-request-modal fade Starts --->

<div class="modal-dialog"><!--- modal-dialog Starts --->

<div class="modal-content"><!--- modal-content Starts --->

<div class="modal-header"><!--- modal-header Starts --->

<h5 class="modal-title"> Submit Your Revision Request Now </h5>

<button class="close" data-dismiss="modal"> <span>&times;</span> </button>

</div><!--- modal-header Ends --->

<div class="modal-body"><!--- modal-body Starts --->

<form method="post" enctype="multipart/form-data"><!--- form Starts --->

<div class="form-group"><!--- form-group Starts --->

<label class="font-weight-bold" > Request Message </label>

<textarea name="revison_message" placeholder="Type Your Message Here..." class="form-control mb-2"></textarea>

</div><!--- form-group Ends --->

<div class="form-group clearfix"><!--- form-group clearfix Starts --->

<input type="file" name="revison_file" class="mt-1">

<input type="submit" name="submit_revison" value="Submit Revison" class="btn btn-success float-right">

</div><!--- form-group clearfix Ends --->

</form><!--- form Ends --->

</div><!--- modal-body Ends --->

</div><!--- modal-content Ends --->

</div><!--- modal-dialog Ends --->

</div><!--- revision-request-modal fade Ends --->

<?php } ?>

<script>

$(document).ready(function(){
	

////  Sticky Order Status Bar Code Starts  ////	

$("#order-status-bar").sticky({

topSpacing:0,
zIndex:1000	
	
});

////  Sticky Order Status Bar Code Ends  ////	

	
////  Countdown Timer Code Starts  ////

// Set the date we're counting down to

var countDownDate = new Date("Dec 8, 2017 20:46:03").getTime();

// Update the count down every 1 second

var x = setInterval(function(){

// Get todays date and time
var now = new Date().getTime();

// Find the distance between now an the count down date
var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));

var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

var seconds = Math.floor((distance % (1000 * 60)) / 1000);

document.getElementById("days").innerHTML = days;

document.getElementById("hours").innerHTML = hours;

document.getElementById("minutes").innerHTML = minutes;

document.getElementById("seconds").innerHTML = seconds;

// If the count down is over, write some text 
if (distance < 0){

clearInterval(x);

<?php if(isset($_GET["selling_order"])){ ?>

document.getElementById("countdown-heading").innerHTML = "You Failed To Deliver Your Order On Time";

<?php }elseif(isset($_GET["buying_order"])){ ?>

document.getElementById("countdown-heading").innerHTML = "Seller Failed To Deliver Your Order On Time";

<?php } ?>

$("#countdown-timer .countdown-number").addClass("countdown-number-late");

document.getElementById("days").innerHTML = "Your";

document.getElementById("hours").innerHTML = "Order";

document.getElementById("minutes").innerHTML = "Is";

document.getElementById("seconds").innerHTML = "Late";

}
}, 1000);

////  Countdown Timer Code Ends  ////
	
	
	
});




</script>


<?php include("includes/footer.php"); ?>

</body>

</html>