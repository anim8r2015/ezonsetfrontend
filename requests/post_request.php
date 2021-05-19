<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Post A New Request </title>

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

<div class="container-fluid mt-5 mb-5"><!-- container-fluid mt-5 mb-5 Starts -->

<div class="row"><!-- row Starts -->

<div class="col-lg-9 col-md-11"><!-- col-lg-9 col-md-11 Starts -->

<h1 class="mb-4"> Post A New Request To The Seller Community </h1>

<div class="card rounded-0"><!-- card rounded-0 Starts -->

<div class="card-body"><!-- card-body Starts -->

<form method="post" enctype="multipart/form-data"><!-- form Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-2 d-md-block d-none">

<i class="fa fa-pencil-square-o fa-4x"></i>

</div>

<div class="col-md-10 col-sm-12"><!-- col-md-10 col-sm-12 Starts -->

<div class="row"><!-- row Starts -->

<div class="col-lg-8"><!-- col-lg-8 Starts -->

<div class="form-group"><!-- form-group Starts -->

<input type="text" name="request_title" placeholder="Request Title" class="form-control input-lg" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<textarea name="request_textarea" id="textarea" rows="5" cols="73" maxlength="380" class="form-control" placeholder="Request Description" required></textarea>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<input type="file" name="request_file" id="file" >

<div class="font-weight-bold pull-right">

<span class="count"> 0 </span> / 380 Max

</div>

</div><!-- form-group Ends -->

</div><!-- col-lg-8 Ends -->

</div><!-- row Ends -->

</div><!-- col-md-10 col-sm-12 Ends -->

</div><!-- row Ends -->

<hr class="card-hr">

<h5> Chose A Category </h5>


<div class="row mb-2"><!-- row mb-2 Starts -->

<div class="col-md-2 d-md-block d-none"><!-- col-md-2 d-md-block d-none Starts -->

<i class="fa fa-folder-open fa-4x"></i>

</div><!-- col-md-2 d-md-block d-none Ends -->

<div class="col-md-10 col-sm-12"><!-- col-md-10 col-sm-12 Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-4 mb-2"><!-- col-md-4 mb-2 Starts -->

<select class="form-control" name="cat_id" id="category" required>

<option value="" class="hidden"> Select A Category </option>

<option value="1">  Graphics & Design </option>

</select>

</div><!-- col-md-4 mb-2 Ends -->

<div class="col-md-4 mb-2"><!-- col-md-4 mb-2 Starts -->

<select class="form-control" name="child_id" id="sub-category" required>

<option value="" class="hidden"> Select A Sub Category </option>

<option value="1">  Logo Design </option>

</select>

</div><!-- col-md-4 mb-2 Ends -->

</div><!-- row Ends -->

</div><!-- col-md-10 col-sm-12 Ends -->

</div><!-- row mb-2 Ends -->

<hr class="card-hr">

<h5> Once you place your order, when would you like your service delivered? </h5>

<div class="row mb-4"><!-- row mb-4 Starts -->

<div class="col-md-1 d-md-block d-none"><!-- col-md-1 d-md-block d-none Starts -->

<i class="fa fa-clock-o fa-4x"></i>

</div><!-- col-md-1 d-md-block d-none Ends -->

<div class="col-md-11 col-sm-12 mt-3"><!-- col-md-11 col-sm-12 mt-3 Starts -->

<label class="custom-control custom-radio"><!-- custom-control custom-radio Starts -->

<input type="radio" value="1" name="delivery_time" class="custom-control-input" required >

<span class="custom-control-indicator"></span>

<span class="custom-control-description"> 1 Day </span>

</label><!-- custom-control custom-radio Ends -->

<label class="custom-control custom-radio"><!-- custom-control custom-radio Starts -->

<input type="radio" value="2" name="delivery_time" class="custom-control-input" required >

<span class="custom-control-indicator"></span>

<span class="custom-control-description"> 2 Days </span>

</label><!-- custom-control custom-radio Ends -->

<label class="custom-control custom-radio"><!-- custom-control custom-radio Starts -->

<input type="radio" value="3" name="delivery_time" class="custom-control-input" required >

<span class="custom-control-indicator"></span>

<span class="custom-control-description"> 3 Days </span>

</label><!-- custom-control custom-radio Ends -->

</div><!-- col-md-11 col-sm-12 mt-3 Ends -->

</div><!-- row mb-4 Ends -->

<hr class="card-hr">

<h5> What is your budget for this service? </h5>

<div class="col-md-4 mb-2"><!-- col-md-4 mb-2 Starts -->

<div class="input-group"><!-- input-group Starts -->

<span class="input-group-addon font-weight-bold" > $ </span>

<input type="number" name="request_budget" min="5" placeholder="5 Minimum" class="form-control input-lg" >

</div><!-- input-group Ends -->

</div><!-- col-md-4 mb-2 Ends -->

<input type="submit" name="submit" value="Post Request" class="btn btn-outline-success btn-lg pull-right" >

</form><!-- form Ends -->

</div><!-- card-body Ends -->

</div><!-- card rounded-0 Ends -->

</div><!-- col-lg-9 col-md-11 Ends -->

</div><!-- row Ends -->


</div><!-- container-fluid mt-5 mb-5 Ends -->

<script>

$(document).ready(function(){
	
$("#textarea").keydown(function(){
	
var textarea = $("#textarea").val();

$(".count").text(textarea.length);	
	
});	

$("#sub-category").hide();

$("#category").change(function(){
	
$("#sub-category").show();	
	
});
	
});


</script>

<?php include("../includes/footer.php"); ?>

</body>

</html>