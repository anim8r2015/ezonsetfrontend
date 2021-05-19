<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Login </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="EzOnset">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="styles/category_nav_style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>

</head>

<body>

<?php include("includes/header.php"); ?>

<div class="container mt-5"><!--- container mt-5 Starts -->

<div class="row justify-content-center"><!--- row justify-content-center Starts -->

<div class="col-lg-5 col-md-7"><!--- col-lg-5 col-md-7 Starts -->

<h2 class="text-center"> Login To EzOnset </h2>

<div class="box-login mt-4"><!--- box-login mt-4 Starts -->

<img class="logo img-fluid" src="images/logo.png">


<form action="endpoint_post.php" method="post"><!--- form Starts -->

<div class="form-group"><!--- form-group Starts -->

<input type="text" name="seller_user_name" placeholder="Username" class="form-control">

</div><!--- form-group Ends -->

<div class="form-group"><!--- form-group Starts -->

<input type="password" name="seller_pass" placeholder="Password" class="form-control">

</div><!--- form-group Ends -->

<div class="form-group"><!--- form-group Starts -->

<input type="submit" name="login" class="btn btn-success btn-block" value="Login" >

</div><!--- form-group Ends -->

</form><!--- form Ends -->

<div class="text-center mt-3"><!-- text-center mt-3 Starts -->

<a href="#" data-toggle="modal" data-target="#register-modal">

Register

</a>

<span class="ml-2 mr-2"> | </span>

<a href="#" data-toggle="modal" data-target="#forgot-modal">

Forgot Password

</a>

</div><!-- text-center mt-3 Ends -->

</div><!--- box-login mt-4 Ends -->

</div><!--- col-lg-5 col-md-7 Ends -->

</div><!--- row justify-content-center Ends -->

</div><!--- container mt-5 Ends -->

<?php include("includes/footer.php"); ?>

</body>

</html>