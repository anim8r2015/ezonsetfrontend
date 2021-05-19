<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Manage Contacts </title>

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

<div class="container-fluid"><!-- container-fluid Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mt-5"><!-- col-md-12 mt-5 Starts -->

<h1> Manage Contacts </h1>

<ul class="nav nav-tabs mt-5 mb-3"><!-- nav nav-tabs mt-5 mb-3 Starts -->

<li class="nav-item">

<a href="#my_buyers" data-toggle="tab" class="nav-link active">

My Buyers <span class="badge badge-success">1</span>

</a>

</li>

<li class="nav-item">

<a href="#my_sellers" data-toggle="tab" class="nav-link">

My Sellers <span class="badge badge-success">1</span>

</a>

</li>

</ul><!-- nav nav-tabs mt-5 mb-3 Ends -->

<div class="tab-content mt-2"><!-- tab-content mt-2 Starts -->

<div id="my_buyers" class="tab-pane fade show active"><!-- my_buyers tab-pane fade show active Starts -->

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<h4 class="mt-3 mb-3 ml-2"> BUYERS WHO HAVE PURCHASED PROPOSAlS FROM YOU. </h4>

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Buyer Name</th>

<th> Completed Orders </th>

<th> Amount Spent </th>

<th> Last Order </th>

<th></th>

</tr>

</thead>

<tbody>

<tr>

<td>

<img src="user_images/salman.jpg" class="rounded-circle contact-image" >

<div class="contact-title">

<h6> Aamir D. </h6>

<a href="user.php" target="blank" > User Profile </a> | <a href="#" target="blank" > History </a>

</div>

</td>

<td>5</td>

<td>$50</td>

<td>
December 17, 2017
</td>

<td>

<a href="#" target="blank" class="btn btn-success">

<i class="fa fa-comment"></i>

</a>

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->


</div><!-- my_buyers tab-pane fade show active Ends -->

<div id="my_sellers" class="tab-pane fade"><!-- my_sellers tab-pane fade Starts -->

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<h4 class="mt-3 mb-3 ml-2"> SELLERS FROM WHOM YOU HAVE PURCHASED PROPOSAlS. </h4>

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Seller Name</th>

<th> Completed Orders </th>

<th> Amount Spent </th>

<th> Last Order </th>

<th></th>

</tr>

</thead>

<tbody>

<tr>

<td>

<img src="user_images/salman.jpg" class="rounded-circle contact-image" >

<div class="contact-title">

<h6> Aamir D. </h6>

<a href="user.php" target="blank" > User Profile </a> | <a href="#" target="blank" > History </a>

</div>

</td>

<td>5</td>

<td>$50</td>

<td>
December 17, 2017
</td>

<td>

<a href="#" target="blank" class="btn btn-success">

<i class="fa fa-comment"></i>

</a>

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->


</div><!-- my_sellers tab-pane fade Ends -->

</div><!-- tab-content mt-2 Ends -->

</div><!-- col-md-12 mt-5 Ends -->

</div><!-- row Ends -->

</div><!-- container-fluid Ends -->

<?php include("includes/footer.php"); ?>

</body>

</html>