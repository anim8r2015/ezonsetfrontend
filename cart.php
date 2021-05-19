<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Shopping Cart </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="styles/category_nav_style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>

</head>

<body>

<?php include("includes/header.php"); ?>


<div class="container mt-5 mb-3"><!--- container mt-5 mb-3 Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-12"><!--- col-md-12 Starts --->

<div class="card mb-3"><!--- card mb-3 Starts --->

<div class="card-body"><!--- card-body Starts --->

<h5 class="float-left"> Your Cart (2) </h5>

<h5 class="float-right">

<a href="index.php">

Keep Shopping

</a>

</h5>

</div><!--- card-body Ends --->

</div><!--- card mb-3 Ends --->

</div><!--- col-md-12 Ends --->

</div><!--- row Ends --->


<div class="row" id="cart-show"><!--- cart-show row Starts --->

<div class="col-md-7"><!--- col-md-7 Starts --->

<div class="card mb-3"><!--- card mb-3 Starts --->

<div class="card-body"><!--- card-body Starts --->

<div class="cart-proposal"><!--- cart-proposal Starts --->

<div class="row"><!--- row Starts --->

<div class="col-lg-3 mb-2"><!--- col-lg-3 mb-2 Starts --->

<a href="proposals/proposal.php">

<img src="proposals/proposal_files/youtube-seo-1.jpg" class="img-fluid">

</a>

</div><!--- col-lg-3 mb-2 Ends --->


<div class="col-lg-9"><!--- col-lg-9 Starts --->

<a href="proposals/proposal.php">

<h6>I Will Do Viral Youtube Seo Social Media Promotion</h6>

</a>


<a href="cart.php?remove_proposal" class="remove-link text-muted">

Remove Proposal

</a>

</div><!--- col-lg-9 Ends --->


</div><!--- row Ends --->

<hr>

<h6 class="clearfix">

Proposal Quantity

<strong class="float-right price ml-2 mt-2"> $20 </strong>

<input type="text" name="quantity" class="float-right form-control quantity" data-proposal_id="" value="1">

</h6>

<hr>

</div><!--- cart-proposal Ends --->


<div class="cart-proposal"><!--- cart-proposal Starts --->

<div class="row"><!--- row Starts --->

<div class="col-lg-3 mb-2"><!--- col-lg-3 mb-2 Starts --->

<a href="proposals/proposal.php">

<img src="proposals/proposal_files/youtube-seo-1.jpg" class="img-fluid">

</a>

</div><!--- col-lg-3 mb-2 Ends --->


<div class="col-lg-9"><!--- col-lg-9 Starts --->

<a href="proposals/proposal.php">

<h6>I Will Do Viral Youtube Seo Social Media Promotion</h6>

</a>


<a href="cart.php?remove_proposal" class="remove-link text-muted">

Remove Proposal

</a>

</div><!--- col-lg-9 Ends --->


</div><!--- row Ends --->

<hr>

<h6 class="clearfix">

Proposal Quantity

<strong class="float-right price ml-2 mt-2"> $20 </strong>

<input type="text" name="quantity" class="float-right form-control quantity" data-proposal_id="" value="1">

</h6>

<hr>

</div><!--- cart-proposal Ends --->

<h3 class="float-right"> Total : $40 </h3>


</div><!--- card-body Ends --->

</div><!--- card mb-3 Ends --->

</div><!--- col-md-7 Ends --->


<div class="col-md-5"><!--- col-md-5 Starts --->

<div class="card"><!--- card Starts --->

<div class="card-body cart-order-details"><!--- card-body cart-order-details Starts --->

<p> Cart Subtotal <span class="float-right">$40</span> </p>

<hr>

<p> Apply Coupon Code </p>

<form class="input-group" method="post"><!--- input-group Starts --->

<input type="text" name="code" class="form-control apply-disabled" placeholder="Enter Coupon Code">

<button type="submit" name="coupon_submit" class="input-group-addon btn btn-success">

Apply

</button>

</form><!--- input-group Ends --->

<p class="coupon-response"></p>

<hr>

<p> Processing Fee <span class="float-right">$1</span> </p>

<hr>

<p> Total <span class="font-weight-bold float-right"> $41 </span> </p>

<hr>

<a href="cart_payment_options.php" class="btn btn-lg btn-success btn-block">

Proceed To Payment

</a>

</div><!--- card-body cart-order-details Ends --->

</div><!--- card Ends --->

</div><!--- col-md-5 Ends --->


</div><!--- cart-show row Ends --->


</div><!--- container mt-5 mb-3 Ends --->


<?php include("includes/footer.php"); ?>

</body>

</html>