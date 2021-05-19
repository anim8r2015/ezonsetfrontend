<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Revenues </title>

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

<div class="col-md-12 mt-5 mb-3"><!-- col-md-12 mt-5 mb-3 Starts -->

<h1 class="pull-left"> Revenues </h1>

<p class="lead pull-right">

Available for Withdrawal: <span class="font-weight-bold"> $198 </span>

</p>

</div><!-- col-md-12 mt-5 mb-3 Ends -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<div class="card mb-3 rounded-0"><!-- card mb-3 rounded-0 Starts -->

<div class="card-body"><!-- card-body Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-3 text-center border-box"><!-- col-md-3 text-center border-box Starts -->

<p> Withdrawals </p>

<h2> $35 </h2>

</div><!-- col-md-3 text-center border-box Ends -->


<div class="col-md-3 text-center border-box"><!-- col-md-3 text-center border-box Starts -->

<p> Used To Order proposals </p>

<h2> $100 </h2>

</div><!-- col-md-3 text-center border-box Ends -->


<div class="col-md-3 text-center border-box"><!-- col-md-3 text-center border-box Starts -->

<p> Pending Clearance </p>

<h2> $8 </h2>

</div><!-- col-md-3 text-center border-box Ends -->

<div class="col-md-3 text-center border-box"><!-- col-md-3 text-center border-box Starts -->

<p> Available Income </p>

<h2> $198 </h2>

</div><!-- col-md-3 text-center border-box Ends -->

</div><!-- row Ends -->

</div><!-- card-body Ends -->

</div><!-- card mb-3 rounded-0 Ends -->

<label class="lead pull-left mt-1"> Withdraw: </label>

<button class="btn btn-default ml-2" data-toggle="modal" data-target="#paypal_withdraw_modal">

<i class="fa fa-paypal"></i> Paypal Account

</button>

<div class="table-responsive box-table mt-4"><!-- table-responsive box-table mt-4 Starts -->


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

<td> Order Revenue (<a href="order_deatails.php?order_id=" target="blank" > View Order </a>) </td>

<td class="text-success"> +$16.00 </td>

</tr>

<tr>

<td> December 12, 2017 </td>

<td> Order Revenue Pending Clearance (<a href="order_deatails.php?order_id=" target="blank" > View Order </a>) </td>

<td class="text-success"> +$16.00 </td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table mt-4 Ends -->

</div><!-- col-md-12 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->

<div id="paypal_withdraw_modal" class="modal fade"><!-- paypal_withdraw_modal modal fade Starts -->

<div class="modal-dialog"><!-- modal-dialog Starts -->

<div class="modal-content"><!-- modal-content Starts -->

<div class="modal-header"><!-- modal-header Starts -->

<h5 class="modal-title"> Withdraw Revenues To Paypal Account </h5>

<button class="close" data-dismiss="modal">

<span> &times; </span>

</button>

</div><!-- modal-header Ends -->

<div class="modal-body"><!-- modal-body Starts -->

<center><!-- center Starts -->

<p class="lead">

For Withdraw Revenues To Your PayPal Account Please Add Your PayPal Account Email In

<a href="http://localhost/freelance/settings.php?account_settings">
Setting Account Actions Tab
</a>

</p>

<p class="lead">

Your Revenues Will Be Sent To Follwing PayPal Account Email:

<br> <strong> sad.ahmed22224@gmail.com </strong>

</p>

<form action="paypal_adaptive.php" method="post"><!-- form Starts -->

<div class="form-group row"><!-- form-group row Starts -->

<label class="col-md-3 col-form-label font-weight-bold">
Enter Amount
</label>

<div class="col-md-8"><!-- col-md-8 Starts -->

<div class="input-group">

<span class="input-group-addon font-weight-bold"> $ </span>

<input type="number" name="amount" class="form-control input-lg" min="5" max="100" placeholder="5 Minimum" required >

</div>

</div><!-- col-md-8 Ends -->

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-8 offset-md-3">

<input type="submit" name="withdraw" value="Withdraw" class="btn btn-success form-control" >

</div>

</div><!-- form-group row Ends -->

</form><!-- form Ends -->

</center><!-- center Ends -->

</div><!-- modal-body Ends -->

<div class="modal-footer"><!-- modal-footer Starts -->

<button class="btn btn-default" data-dismiss="modal">
Close
</button>

</div><!-- modal-footer Ends -->

</div><!-- modal-content Ends -->

</div><!-- modal-dialog Ends -->

</div><!-- paypal_withdraw_modal modal fade Ends -->

<?php include("includes/footer.php"); ?>

</body>

</html>