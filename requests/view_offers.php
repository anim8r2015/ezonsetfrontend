<!DOCTYPE html>

<html>

<head>

<title> EzOnset / View Request Offers </title>

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

<div class="container mt-4 mb-4"><!-- container mt-4 mb-4 Starts -->

<div class="row view-offers"><!-- row view-offers Starts -->

<h2 class="mb-3 ml-3"> View Offers (1) </h2>

<div class="col-md-12"><!-- col-md-12 Starts -->

<div class="card mb-4 rounded-0"><!-- card mb-4 rounded-0 Starts -->

<div class="card-body"><!-- card-body Starts -->

<h5 class="text-muted"> Request Description </h5>

<p class="offer-p">

Please quote for a platform exactly like EzOnset.com

</p>

<p class="offer-p">

<i class="fa fa-usd"></i> <span> Request Budget: </span> $40 |

<i class="fa fa-clock-o"></i> <span> Request Date: </span> December 14th, 2020 |

<i class="fa fa-clock-o"></i> <span> Request Duration: </span>  3 Days Delivery  |

<i class="fa fa-archive"></i> <span> Request Category: </span> Programming & Tech / Web Programming |

</p>

</div><!-- card-body Ends -->

</div><!-- card mb-4 rounded-0 Ends -->

<div class="card rounded-0 mb-3"><!-- card rounded-0 mb-3 Starts -->

<div class="card-body"><!-- card-body Starts -->

<h2 class="text-center"> Your Request Still Not Received Offers, Please Wait </h2>

</div><!-- card-body Ends -->

</div><!-- card rounded-0 mb-3 Ends -->

<div class="card rounded-0 mb-3"><!-- card rounded-0 mb-3 Starts -->

<div class="card-body"><!-- card-body Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-2"><!-- col-md-2 Starts -->

<img src="../proposals/proposal_files/web-development.jpg" class="img-fluid" >

</div><!-- col-md-2 Ends -->

<div class="col-md-7"><!-- col-md-7 Starts -->

<h5 class="mt-md-0 mt-2"><!-- mt-md-0 mt-2 Starts -->

<a href="../proposals/proposal.php"> I Will Do Web Development In Laravel And Codeignite </a>

</h5><!-- mt-md-0 mt-2 Ends -->

<p class="mb-1">

I have a complete freelancing theme same like EzOnset.com which has been made in php&mysqli with bootstrap 4 and I can provide it to you in 100$ only. I am sending you its demo url so you can see it yourself.

</p>

<p class="offer-p text-muted">

<i class="fa fa-usd"></i> Offer Budget: <span class="font-weight-normal"> $100 </span>

<i class="fa fa-clock-o"></i> Offer Duration: <span class="font-weight-normal"> 3 Days </span>

</p>

</div><!-- col-md-7 Ends -->

<div class="col-md-3 responsive-border pt-md-0 pt-3"><!-- col-md-3 responsive-border pt-md-0 pt-3 Starts -->

<div class="offer-seller-picture"><!-- offer-seller-picture Starts -->

<img src="../user_images/salman.jpg" class="rounded-circle" >

<img src="../images/level_badge_1.png" class="level-badge" >

</div><!-- offer-seller-picture Ends -->

<div class="offer-seller mb-4"><!-- offer-seller mb-4 Starts -->

<p class="font-weight-bold mb-1"><!-- font-weight-bold mb-1 Starts -->

Salman <small class="text-success"> Online </small>

</p><!-- font-weight-bold mb-1 Ends -->

<p class="user-link">

<a href="user.php" target="blank"> User Profile </a>

</p>

</div><!-- offer-seller mb-4 Ends -->

<a href="#" class="btn btn-sm btn-success rounded-0">

Contact Now

</a>

<button id="order-button-1" class="btn btn-sm btn-success rounded-0">

Order Now

</button>

</div><!-- col-md-3 responsive-border pt-md-0 pt-3 Ends -->

</div><!-- row Ends -->

<script>

$("#order-button-1").click(function(){

request_id = "";

offer_id = "";

$.ajax({
	method: "POST",
	url: "offer_submit_order.php",
	data: {request_id: request_id, offer_id: offer_id}
}).done(function(data){
	
	$("#append-modal").html(data);
	
});	
	
	
});

</script>

</div><!-- card-body Ends -->

</div><!-- card rounded-0 mb-3 Ends -->

</div><!-- col-md-12 Ends -->

</div><!-- row view-offers Ends -->

</div><!-- container mt-4 mb-4 Ends -->

<div id="append-modal"></div>

<?php include("../includes/footer.php"); ?>

</body>

</html>