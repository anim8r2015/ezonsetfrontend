<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Create A New Proposal </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="../styles/bootstrap.min.css" rel="stylesheet">

<link href="../styles/style.css" rel="stylesheet">

<link href="../styles/user_nav_style.css" rel="stylesheet">

<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="../styles/bootstrap-tokenfield.min.css" rel="stylesheet" >

<script src="../js/jquery.min.js"></script>

 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=gq1oawghp3wbsf6kpxxy3yatq931ealyg354sptnmpns5s4b"></script>
 
  <script>tinymce.init({ selector:'.proposal-desc' });</script>
  
<script src="../js/bootstrap-tokenfield.min.js"></script>   
  

</head>

<body>

<?php include("../includes/user_header.php"); ?>

<div class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mb-5 mt-5"><!-- col-md-12 mb-5 mt-5 Starts -->

<h1> Create A New Proposal </h1>

</div><!-- col-md-12 mb-5 mt-5 Ends -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<div class="card rounded-0 mb-5"><!-- card rounded-0 mb-5 Starts -->

<div class="card-body"><!-- card-body Starts -->

<form method="post" enctype="multipart/form-data"><!-- form Starts -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> Proposal Title </div>

<div class="col-md-8">

<input type="text" name="proposal_title" maxlength="70" class="form-control" required>

</div>

</div><!-- form-group row Ends -->


<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> Proposal Category </div>

<div class="col-md-8">

<select name="proposal_category" id="category" class="form-control mb-3" required>

<option value="" class="hidden"> Select A Category </option>

<option value="1"> Graphics & Design </option>

</select>

<select name="proposal_sub_category" id="sub-category" class="form-control" required>

<option value="" class="hidden"> Select A Sub Category </option>

<option value="1"> Logo Design </option>

</select>

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> Proposal Price </div>

<div class="col-md-8">

<select name="proposal_price" class="form-control" required>

<option value="5"> $5 </option>

<option value="10"> $10 </option>

<option value="15"> $15 </option>

<option value="20"> $20 </option>

</select>

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> 

Proposal Description <br> <small> Briefly Describe Your Proposal. </small>

</div>

<div class="col-md-8">

<textarea name="proposal_description" rows="7" placeholder="Enter Your Proposal Description"  class="form-control proposal-desc"></textarea>

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6">

Instructions to Buyer <br> <small> Give Buyer a head start. </small>

<br>

<small> 
If you need to obtain information, files or other material from the buyer prior to starting your work, please add your instructions here. For example: Please send me your company name or Please send me the photo you need me to edit.
</small>

</div>

<div class="col-md-8">

<textarea name="buyer_instruction" rows="7" class="form-control"></textarea>

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> Proposal Tags </div>

<div class="col-md-8">

<input type="text" name="proposal_tags" placeholder="Tags" class="form-control" id="tags" required>

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> Proposal Delivery Time </div>

<div class="col-md-8">

<select name="delivery_id" class="form-control" required>

<option value="1"> 1 Day </option>

<option value="3"> 3 Days </option>

<option value="5"> 5 Days </option>

<option value="7"> 7 Days </option>

<option value="any"> Any Day </option>

</select>

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> Add Proposal Image </div>

<div class="col-md-8">

<input type="file" name="proposal_img1" class="form-control" required>

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> Add Proposal More Images </div>

<div class="col-md-8">

<a href="#" data-toggle="collapse" data-target="#more-images" class="btn btn-success btn-block">
Add More Images
</a>

<div id="more-images" class="collapse"><!-- more-images collapse Starts -->

<input type="file" name="proposal_img2" class="form-control mt-3 mb-2">

<input type="file" name="proposal_img3" class="form-control mb-2">

<input type="file" name="proposal_img4" class="form-control mb-2">

</div><!-- more-images collapse Ends -->

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> Add Proposal Video Optional </div>

<div class="col-md-8">

<input type="file" name="proposal_video" class="form-control">

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<div class="col-md-3 control-label h6"> </div>

<div class="col-md-8">

<button type="submit" name="submit" class="btn btn-success form-control"> Insert New Proposal </button>

</div>

</div><!-- form-group row Ends -->

</form><!-- form Ends -->

</div><!-- card-body Ends -->

</div><!-- card rounded-0 mb-5 Ends -->

</div><!-- col-md-12 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->

<script>

$(document).ready(function(){

$("#sub-category").hide();	

$("#category").change(function(){

$("#sub-category").show();		
	
});
	
$("#tags").tokenfield();	
	
});

</script>

<?php include("../includes/footer.php"); ?>

</body>

</html>