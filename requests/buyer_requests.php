<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Recent Buyer Requests </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="../styles/bootstrap.min.css" rel="stylesheet">

<link href="../styles/style.css" rel="stylesheet">

<link href="../styles/user_nav_style.css" rel="stylesheet">

<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src="../js/jquery.min.js"></script>

</head>

<body>

<?php include("../includes/user_header.php"); ?>


<div class="container-fluid"><!-- container-fluid Starts -->

<div class="row buyer-requests"><!-- row buyer-requests Starts -->

<div class="col-md-12 mt-5"><!-- col-md-12 mt-5 Starts -->

<h1 class="col-md-9 float-left"> Recent Buyer Requests <h1>

<div class="col-md-3 float-right"><!-- col-md-3 float-right Starts -->

<div class="input-group"><!-- input-group Starts -->

<input type="text" id="search-input"  placeholder="Search Buyer Requests" class="form-control" >

<span class="input-group-btn">

<button class="btn btn-primary"> <i class="fa fa-search"></i> </button>

</span>


</div><!-- input-group Ends -->

</div><!-- col-md-3 float-right Ends -->

</div><!-- col-md-12 mt-5 Ends -->

<div class="col-md-12 mt-4"><!-- col-md-12 mt-4 Starts -->

<h5 class="text-right mr-3"><!-- text-right mr-3 Starts -->

<i class="fa fa-list-alt"></i> 10 Offers Left Today

</h5><!-- text-right mr-3 Ends -->

<div class="clearfix"></div>

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="nav-item">

<a href="#active-requests" data-toggle="tab" class="nav-link active">

Active <span class="badge badge-success"> 2 </span>

</a>

</li>

<li class="nav-item">

<a href="#sent-offers" data-toggle="tab" class="nav-link">

Sent Offers <span class="badge badge-success"> 1 </span>

</a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content mt-4"><!-- tab-content mt-4 Starts -->

<div id="active-requests" class="tab-pane fade show active"><!-- active-requests tab-pane fade show active Starts -->

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<h3 class="float-left ml-2 mt-3 mb-3"> Buyer Requests </h3>

<select id="sub-category" class="form-control float-right sort-by mt-3 mb-3 mr-3">

<option value="all"> All Subcategories </option>

<option value="1"> Web Programming </option>

</select>

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Request</th>

<th>Offers</th>

<th>Date</th>

<th>Duration</th>

<th>Budget</th>

</tr>

</thead>

<tbody id="load-data">

<tr id="request_tr_1">

<td>

<img src="../user_images/salman.jpg" class="request-img rounded-circle" >

<div class="request-description"><!-- request-description Starts -->

<h6> Aamir D. </h6>

<h5 class="text-primary"> Need a Develper </h5>

<p class="lead mb-2"> i want 5 years experience php developer </p>

<a href="request_files/download.jpg" download>

<i class="fa fa-arrow-circle-down"></i> download.jpg

</a>

<ul class="request-category">

<li> Programming & Tech </li>

<li> WordPress </li>

</ul>

</div><!-- request-description Ends -->

</td>

<td>5</td>

<td> Dec 11th, 2020 </td>

<td> 

1 Day <a href="#" class="remove-link remove_request_1"> Remove Request </a>

</td>

<td class="text-success font-weight-bold">

$5 <br>

<button class="btn btn-success btn-sm mt-4 send_button_1">
Send Offer
</button>

</td>


<script>

$(".send_button_1").css("visibility","hidden");

$(".remove_request_1").css("visibility","hidden");

$(document).on("mouseenter", "#request_tr_1", function(){
	
	$(".send_button_1").css("visibility","visible");
	
	$(".remove_request_1").css("visibility","visible");
	
});

$(document).on("mouseleave", "#request_tr_1", function(){
	
	$(".send_button_1").css("visibility","hidden");
	
	$(".remove_request_1").css("visibility","hidden");
	
});

$(".remove_request_1").click(function(event){
	
	event.preventDefault();
	
	$("#request_tr_1").fadeOut().remove();
	
});

$(".send_button_1").click(function(){
	
request_id = "";
	
$.ajax({
	
method: "POST",
url: "send_offer_modal.php",
data: {request_id: request_id}
})
.done(function(data){
	
$(".append-modal").html(data);
	
});
	
});


</script>

</tr>

<tr id="request_tr_2">

<td>

<img src="../user_images/salman.jpg" class="request-img rounded-circle" >

<div class="request-description"><!-- request-description Starts -->

<h6> Aamir D. </h6>

<h5 class="text-primary"> Need a Develper </h5>

<p class="lead mb-2"> i want 5 years experience php developer </p>

<a href="request_files/download.jpg" download>

<i class="fa fa-arrow-circle-down"></i> download.jpg

</a>

<ul class="request-category">

<li> Programming & Tech </li>

<li> WordPress </li>

</ul>

</div><!-- request-description Ends -->

</td>

<td>5</td>

<td> Dec 11th, 2020 </td>

<td> 

1 Day <a href="#" class="remove-link remove_request_2"> Remove Request </a>

</td>

<td class="text-success font-weight-bold">

$5 <br>

<button class="btn btn-success btn-sm mt-4 send_button_2" data-toggle="modal" data-target="#quota-finish">
Send Offer
</button>

</td>


<script>

$(".send_button_2").css("visibility","hidden");

$(".remove_request_2").css("visibility","hidden");

$(document).on("mouseenter", "#request_tr_2", function(){
	
	$(".send_button_2").css("visibility","visible");
	
	$(".remove_request_2").css("visibility","visible");
	
});

$(document).on("mouseleave", "#request_tr_2", function(){
	
	$(".send_button_2").css("visibility","hidden");
	
	$(".remove_request_2").css("visibility","hidden");
	
});

$(".remove_request_2").click(function(event){
	
	event.preventDefault();
	
	$("#request_tr_2").fadeOut().remove();
	
});


</script>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->

</div><!-- active-requests tab-pane fade show active Ends -->



<div id="sent-offers" class="tab-pane fade"><!-- sent-offers tab-pane fade Starts -->

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<h3 class="ml-2 mt-3 mb-3"> OFFERS SUBMITTED FOR BUYER REQUESTS </h3>

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Offer</th>

<th>Duration</th>

<th>Price</th>

<th>Request</th>

</tr>

</thead>

<tbody>

<tr>

<td>

<strong> I Will Do Wordpress Customization And PHP Programming </strong>

<p>

I will do your work as exactly as you demand.

</p>

</td>

<td> 3 Days </td>

<td> $50 </td>

<td>


<img src="../user_images/salman.jpg" class="request-img rounded-circle mt-0" >

<div class="request-description"><!-- request-description Starts -->

<h6> Aamir D. </h6>

<h5 class="text-primary"> Need a Develper </h5>

<p class="lead mb-2"> i want 5 years experience php developer </p>

<a href="request_files/download.jpg" download>

<i class="fa fa-arrow-circle-down"></i> download.jpg

</a>

<ul class="request-category">

<li> Programming & Tech </li>

<li> WordPress </li>

</ul>

</div><!-- request-description Ends -->

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->

</div><!-- sent-offers tab-pane fade Ends -->



</div><!-- tab-content mt-4 Ends -->

</div><!-- col-md-12 mt-4 Ends -->

</div><!-- row buyer-requests Ends -->

</div><!-- container-fluid Ends -->

<div class="append-modal"></div>

<div id="quota-finish" class="modal fade"><!--- quota-finish modal fade Starts --->

<div class="modal-dialog"><!--- modal-dialog Starts --->

<div class="modal-content"><!--- modal-content Starts --->

<div class="modal-header"><!--- modal-header Starts --->

<h5 class="modal-title h5"> Request Quota Finished </h5>

<button class="close" data-dismiss="modal"> &times; </button>

</div><!--- modal-header Ends --->

<div class="modal-body"><!--- modal-body Starts --->

<center>

<h3> You Have Already Sent 10 Offers Today, Quota Finish </h3>

</center>

</div><!--- modal-body Ends --->

<div class="modal-footer"><!--- modal-footer Starts --->

<button class="btn btn-secondary" data-dismiss="modal">

Close

</button>

</div><!--- modal-footer Ends --->

</div><!--- modal-content Ends --->

</div><!--- modal-dialog Ends --->

</div><!--- quota-finish modal fade Ends --->


<?php include("../includes/footer.php"); ?>

</body>

</html>