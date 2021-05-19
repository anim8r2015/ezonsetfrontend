<!DOCTYPE html>

<html>

<head>

<title> EzOnset / My Settings </title>

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

<div class="container mt-5 mb-5"><!-- container mt-5 mb-5 Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<ul class="nav nav-pills nav-stacked mb-4"><!-- nav nav-pills nav-stacked mb-4 Starts -->

<li class="nav-item">

<a href="#profile_settings" data-toggle="pill" class="nav-link active">
 Profile Settings
</a>

</li>

<li class="nav-item">

<a href="#account_settings" data-toggle="pill" class="nav-link">
 Account Settings
</a>

</li>

</ul><!-- nav nav-pills nav-stacked mb-4 Ends -->

</div><!-- col-md-3 Ends -->

<div class="col-md-9"><!-- col-md-9 Starts -->

<div class="card rounded-0"><!-- card rounded-0 Starts -->

<div class="card-body"><!-- card-body Starts -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="profile_settings" class="tab-pane fade show active"><!-- profile_settings tab-pane fade show active Starts -->

<?php include("profile_settings.php"); ?>

</div><!-- profile_settings tab-pane fade show active Ends -->

<div id="account_settings" class="tab-pane fade"><!-- account_settings tab-pane fade Starts -->

<?php include("account_settings.php"); ?>

</div><!-- account_settings tab-pane fade Ends -->

</div><!-- tab-content Ends -->

</div><!-- card-body Ends -->

</div><!-- card rounded-0 Ends -->

</div><!-- col-md-9 Ends -->

</div><!-- row Ends -->

</div><!-- container mt-5 mb-5 Ends -->

<?php include("includes/footer.php"); ?>

</body>

</html>