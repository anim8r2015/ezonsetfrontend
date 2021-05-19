<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Proposals Sales Orders </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="styles/user_nav_style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>

</head>

<body>

<?php include("includes/user_header.php"); ?>


<div class="container-fluid mt-5"><!---  container-fluid mt-5 Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-12"><!--- col-md-12 Starts --->

<h1> Manage Proposals Sales Orders </h1>

</div><!--- col-md-12 Ends --->

</div><!--- row Ends --->

<div class="row"><!--- row Starts --->

<div class="col-md-12 mt-5 mb-3"><!--- col-md-12 mt-5 mb-3 Starts --->

<ul class="nav nav-tabs"><!--- nav nav-tabs Starts --->

<li class="nav-item"><!--- nav-item Starts --->

<a href="#active" data-toggle="tab" class="nav-link active">

ACTIVE <span class="badge badge-success">4</span>

</a>

</li><!--- nav-item Ends --->

<li class="nav-item"><!--- nav-item Starts --->

<a href="#delivered" data-toggle="tab" class="nav-link">

DELIVERED <span class="badge badge-success">1</span>

</a>

</li><!--- nav-item Ends --->


<li class="nav-item"><!--- nav-item Starts --->

<a href="#completed" data-toggle="tab" class="nav-link">

COMPLETED <span class="badge badge-success">1</span>

</a>

</li><!--- nav-item Ends --->


<li class="nav-item"><!--- nav-item Starts --->

<a href="#cancelled" data-toggle="tab" class="nav-link">

CANCELLED <span class="badge badge-success">1</span>

</a>

</li><!--- nav-item Ends --->


<li class="nav-item"><!--- nav-item Starts --->

<a href="#all" data-toggle="tab" class="nav-link">

ALL <span class="badge badge-success">6</span>

</a>

</li><!--- nav-item Ends --->

</ul><!--- nav nav-tabs Ends --->

<div class="tab-content"><!--- tab-content Starts --->

<div class="tab-pane fade show active" id="active"><!--- active tab-pane fade show active Starts --->

<?php include("manage_orders/order_active_selling.php"); ?>

</div><!--- active tab-pane fade show active Ends --->


<div class="tab-pane fade" id="delivered"><!--- delivered tab-pane fade Starts --->

<?php include("manage_orders/order_delivered_selling.php"); ?>

</div><!--- delivered tab-pane fade Ends --->


<div class="tab-pane fade" id="completed"><!--- completed tab-pane fade Starts --->

<?php include("manage_orders/order_completed_selling.php"); ?>

</div><!--- completed tab-pane fade Ends --->


<div class="tab-pane fade" id="cancelled"><!--- cancelled tab-pane fade Starts --->

<?php include("manage_orders/order_cancelled_selling.php"); ?>

</div><!--- cancelled tab-pane fade Ends --->


<div class="tab-pane fade" id="all"><!--- all tab-pane fade Starts --->

<?php include("manage_orders/order_all_selling.php"); ?>

</div><!--- all tab-pane fade Ends --->


</div><!--- tab-content Ends --->

</div><!--- col-md-12 mt-5 mb-3 Ends --->

</div><!--- row Ends --->

</div><!---  container-fluid mt-5 Ends --->


<?php include("includes/footer.php"); ?>

</body>

</html>