<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Manage Requests </title>

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

<div class="container-fluid mt-5"><!-- container-fluid mt-5 Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mb-4"><!-- col-md-12 mb-4 Starts -->

<h1 class="pull-left"> Manage Requests </h1>

<a href="post_request.php" class="btn btn-success pull-right">
Post New Request
</a>

</div><!-- col-md-12 mb-4 Ends -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<ul class="nav nav-tabs mt-3"><!-- nav nav-tabs mt-3 Starts -->

<li class="nav-item">

<a href="#active" data-toggle="tab" class="nav-link active">

Active <span class="badge badge-success">1</span>

</a>

</li>

<li class="nav-item">

<a href="#pause" data-toggle="tab" class="nav-link">

Paused <span class="badge badge-success">1</span>

</a>

</li>

<li class="nav-item">

<a href="#pending" data-toggle="tab" class="nav-link">

Pending <span class="badge badge-success">1</span>

</a>

</li>

<li class="nav-item">

<a href="#unapproved" data-toggle="tab" class="nav-link">

Unapproved <span class="badge badge-success">1</span>

</a>

</li>

</ul><!-- nav nav-tabs mt-3 Ends -->

<div class="tab-content mt-4"><!-- tab-content mt-4 Starts -->

<div id="active" class="tab-pane fade show active"><!-- active tab-pane fade show active Starts -->

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Title</th>

<th>Description</th>

<th>Date</th>

<th>Offers</th>

<th>Budget</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td> Please Quote Me </td>

<td>
Please quote for a platform exactly like EzOnset.com
</td>

<td> December 12th, 2020 </td>

<td> 2 </td>

<td class="text-success"> $40 </td>

<td>

<div class="dropdown"><!-- dropdown Starts -->

<button data-toggle="dropdown" class="btn btn-success dropdown-toggle">
</button>

<div class="dropdown-menu"><!-- dropdown-menu Starts -->

<a href="view_offers.php?request_id=" target="blank" class="dropdown-item">
View Offers
</a>

<a href="pause_request.php?request_id=" class="dropdown-item">
Pause
</a>

<a href="delete_request.php?request_id=" class="dropdown-item">
Delete
</a>

</div><!-- dropdown-menu Ends -->

</div><!-- dropdown Ends -->

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->

</div><!-- active tab-pane fade show active Ends -->

<div id="pause" class="tab-pane fade"><!-- pause tab-pane fade Starts -->

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Title</th>

<th>Description</th>

<th>Date</th>

<th>Offers</th>

<th>Budget</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td> Please Quote Me </td>

<td>
Please quote for a platform exactly like EzOnset.com
</td>

<td> December 12th, 2020 </td>

<td> 2 </td>

<td class="text-success"> $40 </td>

<td>

<div class="dropdown"><!-- dropdown Starts -->

<button data-toggle="dropdown" class="btn btn-success dropdown-toggle">
</button>

<div class="dropdown-menu"><!-- dropdown-menu Starts -->

<a href="active_request.php?request_id=" class="dropdown-item">
Activate
</a>

<a href="delete_request.php?request_id=" class="dropdown-item">
Delete
</a>

</div><!-- dropdown-menu Ends -->

</div><!-- dropdown Ends -->

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->

</div><!-- pause tab-pane fade Ends -->

<div id="pending" class="tab-pane fade"><!-- pending tab-pane fade Starts -->

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Title</th>

<th>Description</th>

<th>Date</th>

<th>Offers</th>

<th>Budget</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td> Please Quote Me </td>

<td>
Please quote for a platform exactly like EzOnset.com
</td>

<td> December 12th, 2020 </td>

<td> 2 </td>

<td class="text-success"> $40 </td>

<td>

<a href="delete_request.php?request_id=" class="btn btn-danger">
Delete
</a>

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->

</div><!-- pending tab-pane fade Ends -->

<div id="unapproved" class="tab-pane fade"><!-- unapproved tab-pane fade Starts -->

<div class="table-responsive box-table"><!-- table-responsive box-table Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Title</th>

<th>Description</th>

<th>Date</th>

<th>Offers</th>

<th>Budget</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td> Please Quote Me </td>

<td>
Please quote for a platform exactly like EzOnset.com
</td>

<td> December 12th, 2020 </td>

<td> 2 </td>

<td class="text-success"> $40 </td>

<td>

<a href="delete_request.php?request_id=" class="btn btn-danger">
Delete
</a>

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table Ends -->

</div><!-- unapproved tab-pane fade Ends -->

</div><!-- tab-content mt-4 Ends -->

</div><!-- col-md-12 Ends -->

</div><!-- row Ends -->

</div><!-- container-fluid mt-5 Ends -->


<?php include("../includes/footer.php"); ?>

</body>

</html>