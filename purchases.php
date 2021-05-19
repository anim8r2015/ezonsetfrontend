<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Purchases </title>

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

<div class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mt-5"><!-- col-md-12 mt-5 Starts -->

<h1 class="mb-4"> Purchases </h1>

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Date</th>

<th>For</th>

<th>Amount</th>

</tr>

</thead>

<tbody>

<tr>

<td> December 12, 2017 </td>

<td> 

Proposal Purchased from Shopping Balance  
(<a href="order_details.php?order_id="> View Order </a>)

</td>

<td class="text-danger"> -$10.00 </td>

</tr>

<tr>

<td> December 12, 2017 </td>

<td> 

Proposal Purchased from Paypal 
(<a href="order_details.php?order_id="> View Order </a>)

</td>

<td class="text-danger"> -$10.00 </td>

</tr>

<tr>

<td> December 12, 2017 </td>

<td> 

Proposal Purchased from Credit Card / Stripe 
(<a href="order_details.php?order_id="> View Order </a>)

</td>

<td class="text-danger"> -$10.00 </td>

</tr>

<tr>

<td> December 12, 2017 </td>

<td> 

Cancelled Order Payment Refunded to Your Shopping Balance 
(<a href="order_details.php?order_id="> View Order </a>)

</td>

<td class="text-success"> +$10.00 </td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->

</div><!-- col-md-12 mt-5 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->

<?php include("includes/footer.php"); ?>

</body>

</html>