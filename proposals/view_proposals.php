<!DOCTYPE html>

<html>

<head>

<title> EzOnset / View Proposals </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="EzOnset is the world's largest freelance services marketplace for lean entrepreneurs to focus on growth & create a successful business at affordable costs.">

<meta name="keywords" content="freelance,freelancers,jobs,proposals,sellers,buyers">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="../styles/bootstrap.min.css" rel="stylesheet">

<link href="../styles/style.css" rel="stylesheet">

<link href="../styles/user_nav_style.css" rel="stylesheet">

<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="../styles/owl.carousel.css" rel="stylesheet">

<link href="../styles/owl.theme.default.css" rel="stylesheet">

<script src="../js/jquery.min.js"></script>

<script src="https://checkout.stripe.com/checkout.js"></script>

</head>

<body>

<?php include("../includes/user_header.php"); ?>

<div class="container-fluid view-proposals"><!-- container-fluid view-proposals Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mt-5 mb-3"><!-- col-md-12 mt-5 mb-3 Starts -->

<h1 class="pull-left"> View Proposals </h1>

<label class="pull-right lead"><!-- pull-right lead Starts -->

Vacation Mode

<button id="turn_on_seller_vaction" data-toggle="button" class="btn btn-lg btn-toggle">

<div class="toggle-handle"></div>

</button>

<button id="turn_off_seller_vaction" data-toggle="button" class="btn btn-lg btn-toggle active">

<div class="toggle-handle"></div>

</button>

</label><!-- pull-right lead Ends -->

</div><!-- col-md-12 mt-5 mb-3 Ends -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<a href="create_proposal.php" class="btn btn-success pull-right">
Add New Proposal
</a>

<div class="clearfix"></div>

<ul class="nav nav-tabs mt-3"><!-- nav nav-tabs mt-3 Starts -->

<li class="nav-item">

<a href="#active-proposals" data-toggle="tab" class="nav-link active">

Active <span class="badge badge-success">1</span>

</a>

</li>

<li class="nav-item">

<a href="#pause-proposals" data-toggle="tab" class="nav-link">

Paused <span class="badge badge-success">1</span>

</a>

</li>

<li class="nav-item">

<a href="#pending-proposals" data-toggle="tab" class="nav-link">

Pending Approval <span class="badge badge-success">1</span>

</a>

</li>

<li class="nav-item">

<a href="#modification-proposals" data-toggle="tab" class="nav-link">

Requires Modification <span class="badge badge-success">1</span>

</a>

</li>

</ul><!-- nav nav-tabs mt-3 Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="active-proposals" class="tab-pane fade show active"><!-- active-proposals tab-pane fade show active Starts -->

<div class="table-responsive box-table mt-4"><!-- table-responsive box-table mt-4 Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Proposal Title</th>

<th>Proposal Price </th>

<th>Views</th>

<th>Orders</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td class="proposal-title"> I Will Do Wordpress Customization And PHP Programming </td>

<td class="text-success"> $15 </td>

<td>51</td>

<td>10</td>

<td>

<div class="dropdown"><!-- dropdown Starts -->

<button class="btn btn-success dropdown-toggle" data-toggle="dropdown"></button>

<div class="dropdown-menu"><!-- dropdown-menu Starts -->

<a href="proposal.php" class="dropdown-item"> Preview </a>

<a href="#" class="dropdown-item" id="featured-button-1"> Featured Listing </a>

<a href="pause_proposal.php?proposal_id=" class="dropdown-item"> Pause </a>

<a href="edit_proposal.php?proposal_id=" class="dropdown-item"> Edit </a>

<a href="delete_proposal.php?proposal_id=" class="dropdown-item"> Delete </a>

</div><!-- dropdown-menu Ends -->

</div><!-- dropdown Ends -->

<script>

$("#featured-button-1").click(function(){

proposal_id = "";

$.ajax({
  method: "POST",
  url: "pay_featured_listing.php",
  data: {proposal_id: proposal_id }
})
.done(function(data){

$("#featured-proposal-modal").html(data);	
	
});	
	
	
});

</script>

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table mt-4 Ends -->

</div><!-- active-proposals tab-pane fade show active Ends -->

<div id="pause-proposals" class="tab-pane fade show"><!-- pause-proposals tab-pane fade show  Starts -->

<div class="table-responsive box-table mt-4"><!-- table-responsive box-table mt-4 Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Proposal Title</th>

<th>Proposal Price </th>

<th>Views</th>

<th>Orders</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td class="proposal-title"> I Will Do Wordpress Customization And PHP Programming </td>

<td class="text-success"> $15 </td>

<td>51</td>

<td>10</td>

<td>

<div class="dropdown"><!-- dropdown Starts -->

<button class="btn btn-success dropdown-toggle" data-toggle="dropdown"></button>

<div class="dropdown-menu"><!-- dropdown-menu Starts -->

<a href="proposal.php" class="dropdown-item"> Preview </a>

<a href="activate_proposal.php?proposal_id=" class="dropdown-item"> Activate </a>

<a href="edit_proposal.php?proposal_id=" class="dropdown-item"> Edit </a>

<a href="delete_proposal.php?proposal_id=" class="dropdown-item"> Delete </a>

</div><!-- dropdown-menu Ends -->

</div><!-- dropdown Ends -->

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table mt-4 Ends -->

</div><!-- pause-proposals tab-pane fade show Ends -->


<div id="pending-proposals" class="tab-pane fade show"><!-- pending-proposals tab-pane fade show  Starts -->

<div class="table-responsive box-table mt-4"><!-- table-responsive box-table mt-4 Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Proposal Title</th>

<th>Proposal Price </th>

<th>Views</th>

<th>Orders</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td class="proposal-title"> I Will Do Wordpress Customization And PHP Programming </td>

<td class="text-success"> $15 </td>

<td>51</td>

<td>10</td>

<td>

<div class="dropdown"><!-- dropdown Starts -->

<button class="btn btn-success dropdown-toggle" data-toggle="dropdown"></button>

<div class="dropdown-menu"><!-- dropdown-menu Starts -->

<a href="proposal.php" class="dropdown-item"> Preview </a>

<a href="edit_proposal.php?proposal_id=" class="dropdown-item"> Edit </a>

<a href="delete_proposal.php?proposal_id=" class="dropdown-item"> Delete </a>

</div><!-- dropdown-menu Ends -->

</div><!-- dropdown Ends -->

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table mt-4 Ends -->

</div><!-- pending-proposals tab-pane fade show Ends -->

<div id="modification-proposals" class="tab-pane fade show"><!-- modification-proposals tab-pane fade show  Starts -->

<div class="table-responsive box-table mt-4"><!-- table-responsive box-table mt-4 Starts -->

<table class="table table-hover"><!-- table table-hover Starts -->

<thead>

<tr>

<th>Modification Proposal</th>

<th>Modification Message</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<tr>

<td class="proposal-title"> I Will Do Wordpress Customization And PHP Programming </td>

<td> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </td>

<td>

<div class="dropdown"><!-- dropdown Starts -->

<button class="btn btn-success dropdown-toggle" data-toggle="dropdown"></button>

<div class="dropdown-menu"><!-- dropdown-menu Starts -->

<a href="submit_approval.php?proposal_id=" class="dropdown-item"> Submit For Approval </a>

<a href="proposal.php" class="dropdown-item"> Preview </a>

<a href="edit_proposal.php?proposal_id=" class="dropdown-item"> Edit </a>

<a href="delete_proposal.php?proposal_id=" class="dropdown-item"> Delete </a>

</div><!-- dropdown-menu Ends -->

</div><!-- dropdown Ends -->

</td>

</tr>

</tbody>

</table><!-- table table-hover Ends -->

</div><!-- table-responsive box-table mt-4 Ends -->

</div><!-- modification-proposals tab-pane fade show Ends -->

</div><!-- tab-content Ends -->

</div><!-- col-md-12 Ends -->

</div><!-- row Ends -->

</div><!-- container-fluid view-proposals Ends -->

<div id="featured-proposal-modal"></div>

<?php include("../includes/footer.php"); ?>

</body>

</html>