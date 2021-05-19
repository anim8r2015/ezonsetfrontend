<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Customer Support </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="EzOnset is the world's largest freelance services marketplace for lean entrepreneurs to focus on growth & create a successful business at affordable costs.">

<meta name="keywords" content="freelance,freelancers,jobs,proposals,sellers,buyers">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="styles/category_nav_style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src='https://www.google.com/recaptcha/api.js'></script>

<script src="js/jquery.min.js"></script>

</head>

<body>

<?php include("includes/header.php"); ?>

<div class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mt-4"><!-- col-md-12 mt-4 Starts -->

<div class="alert alert-warning rounded-0"><!--- alert alert-warning rounded-0 Starts -->

<p class="lead mt-1 mb-1">

<strong style="color: red"> Warning ! </strong>

You do not submit a support request, without logging in to this website.

</p>

</div><!--- alert alert-warning rounded-0 Ends -->

</div><!-- col-md-12 mt-4 Ends -->

</div><!-- row Ends -->


<div class="row"><!--- row Starts --->

<div class="col-md-12"><!--- col-md-12 Starts -->

<div class="card"><!-- card Starts -->

<div class="card-header text-center"><!--- card-header text-center  Starts --->

<h2> SUBMIT A REQUEST </h2>

<p class="text-muted">

If you have any questions, pease feel free to contact us

</p>
<p class="text-muted">
	We are here to help you 24/7. Our Customer Support Agent Will Get Back To You Soon.
</div><!--- card-header text-center Ends --->

<div class="card-body" style="background-color:#ffae42"><!-- card-body Starts -->

<center><!--- center Starts --->

<form class="col-md-8 contact-form" action="contact.php" method="post" enctype="multipart/form-data"><!--- col-md-8 contact-form Starts -->

<div class="form-group"><!--- form-group Starts -->

<label class="float-left"> Select Enquiry Type </label>

<select name="enquiry_type" class="form-control select_tag" required><!--- form-control select_tag Starts -->

<option value="" url="contact.php"> Select Enquiry </option>

<option value="1" url="contact.php?enquiry_id"> Order Support </option>

<option value="2" url="contact.php?enquiry_id"> Review Removal </option>

<option value="3" url="contact.php?enquiry_id"> Account Support </option>

<option value="4" url="contact.php?enquiry_id"> Report A Bug </option>

</select><!--- form-control select_tag Ends -->

</div><!--- form-group Ends -->


<div class="form-group"><!--- form-group Starts -->

<label class="float-left"> Subject * </label>

<input type="text" class="form-control" name="subject" required>

</div><!--- form-group Ends -->


<div class="form-group"><!--- form-group Starts -->

<label class="float-left"> Message * </label>

<textarea class="form-control" rows="6" name="message" required>

</textarea>

</div><!--- form-group Ends -->


<div class="form-group"><!--- form-group Starts -->

<label class="float-left"> Order Number * </label>

<input type="text" class="form-control" name="order_number" required>

</div><!--- form-group Ends -->


<div class="form-group"><!--- form-group Starts -->

<label class="float-left"> Select Your Role * </label>

<select name="order_rule" class="form-control " required><!--- form-control Starts -->

<option value="" class="hidden"> Select Order Rule </option>

<option> Buyer </option>

<option> Seller </option>

</select><!--- form-control Ends -->

</div><!--- form-group Ends -->


<div class="form-group"><!--- form-group Starts -->

<label class="float-left"> Add An Attachment, If Required. </label>

<input type="file" class="form-control" name="file">

</div><!--- form-group Ends -->



<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="submit" class="btn btn-primary btn-lg">

Submit your query

</button>

</div><!-- text-center Ends -->

</form><!--- col-md-8 contact-form Ends -->

</center><!--- center Ends --->

</div><!-- card-body Ends -->

</div><!-- card Ends -->

</div><!--- col-md-12 Ends -->

</div><!--- row Ends --->




</div><!-- container Ends -->

<?php include("includes/footer.php"); ?>

<script>

$(document).ready(function(){
	
$(".select_tag").change(function(){
	
url = $(".select_tag option:selected").attr('url');
	
	
window.location.href = url;
	
	
});
	
	
});

</script>

</body>

</html>