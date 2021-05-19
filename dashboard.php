<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Dashboard </title>

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

<div class="container mt-4 mb-5"><!--- container mt-4 mb-5 Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-4"><!--- col-md-4 Starts --->

<?php include("includes/dashboard_sidebar.php"); ?>

</div><!--- col-md-4 Ends --->

<div class="col-md-8"><!--- col-md-8 Starts --->

<div class="card rounded-0"><!--- card rounded-0 Starts --->

<div class="card-body p-0"><!--- card-body p-0 Starts --->

<div class="row p-2"><!-- row p-2 Starts --->

<div class="col-lg-3 col-sm-12 text-center"><!--- col-lg-3 col-sm-12 text-center Starts --->

<img src="user_images/fixmywebsite.jpg" class="rounded-circle img-thumbnail" width="130">

</div><!--- col-lg-3 col-sm-12 text-center Ends --->


<div class="col-lg-9 col-sm-12 text-lg-left text-center"><!--- col-lg-9 col-sm-12 text-lg-left text-center Starts -->

<div class="row mb-2"><!--- row mb-2 Starts --->

<div class="col-6 col-lg-4 mt-3"><!--- col-6 col-lg-4 mt-3 Starts --->

<h6 class="text-muted"> Positive Ratings </h6>

<h6> 92% </h6>

</div><!--- col-6 col-lg-4 mt-3 Ends --->


<div class="col-6 col-lg-8 mt-3"><!--- col-6 col-lg-8 mt-3 Starts --->

<h6 class="text-muted"> Country </h6>

<h6>Pakistan</h6>

</div><!--- col-6 col-lg-8 mt-3 Ends --->

</div><!--- row mb-2 Ends --->


<div class="row"><!--- row Starts --->

<div class="col-6 col-lg-4"><!--- col-6 col-lg-4 Starts --->

<h6 class="text-muted"> Recent Delivery </h6>

<h6> December 1, 2020 </h6>

</div><!--- col-6 col-lg-4 Ends --->

<div class="col-6 col-lg-8"><!--- col-6 col-lg-8 Starts --->

<h6 class="text-muted"> Member Since </h6>

<h6> April 2020 </h6>

</div><!--- col-6 col-lg-8 Ends --->

</div><!--- row Ends --->


</div><!--- col-lg-9 col-sm-12 text-lg-left text-center Ends -->


</div><!-- row p-2 Ends --->

<hr>


<div class="row pl-3 pr-3 pb-2 pt-3 mt-4"><!--- row pl-3 pr-3 pb-2 pt-3 mt-4 Starts --->


<div class="col-md-4 text-center border-box"><!--- col-md-4 text-center border-box Starts --->

<h5 class="text-muted"> Orders Completed </h5>

<h3 class="text-success"> 10 </h3>

</div><!--- col-md-4 text-center border-box Ends --->


<div class="col-md-4 text-center border-box"><!--- col-md-4 text-center border-box Starts --->

<h5 class="text-muted"> Delivered Orders </h5>

<h3 class="text-success"> 5 </h3>

</div><!--- col-md-4 text-center border-box Ends --->


<div class="col-md-4 text-center border-box"><!--- col-md-4 text-center border-box Starts --->

<h5 class="text-muted"> Orders Cancelled </h5>

<h3 class="text-success"> 3 </h3>

</div><!--- col-md-4 text-center border-box Ends --->


</div><!--- row pl-3 pr-3 pb-2 pt-3 mt-4 Ends --->

<hr>


<div class="row pl-3 pr-3 pb-2 pt-2"><!---- row pl-3 pr-3 pb-2 pt-2 Starts --->

<div class="col-md-3 text-center border-box"><!--- col-md-3 text-center border-box Starts --->

<h5 class="text-muted"> Sales In Queue </h5>

<h3> 2 </h3>

</div><!--- col-md-3 text-center border-box Ends --->


<div class="col-md-3 text-center border-box"><!--- col-md-3 text-center border-box Starts --->

<h5 class="text-muted"> Open Purchases </h5>

<h3> 4 </h3>

</div><!--- col-md-3 text-center border-box Ends --->


<div class="col-md-3 text-center border-box"><!--- col-md-3 text-center border-box Starts --->

<h5 class="text-muted"> Balance </h5>

<h3 class="text-success"> $172 </h3>

</div><!--- col-md-3 text-center border-box Ends --->


<div class="col-md-3 text-center border-box"><!--- col-md-3 text-center border-box Starts --->

<h5 class="text-muted"> Earend This Month </h5>

<h3 class="text-success"> $74 </h3>

</div><!--- col-md-3 text-center border-box Ends --->


</div><!---- row pl-3 pr-3 pb-2 pt-2 Ends --->


</div><!--- card-body p-0 Ends --->

</div><!--- card rounded-0 Ends --->


<div class="card rounded-0 mt-3"><!--- card rounded-0 mt-3 Starts --->

<div class="card-header"><!--- card-header Starts --->

<ul class="nav nav-tabs card-header-tabs"><!---- nav nav-tabs card-header-tabs Starts --->

<li class="nav-item">

<a href="#notifications" data-toggle="tab" class="nav-link active">

Notifications <span class="badge badge-success"> 2 </span>

</a>

</li>

<li class="nav-item">

<a href="#inbox" data-toggle="tab" class="nav-link">

Messages <span class="badge badge-success"> 2 </span>

</a>

</li>

</ul><!---- nav nav-tabs card-header-tabs Ends --->

</div><!--- card-header Ends --->


<div class="card-body p-0"><!--- card-body p-0 Starts --->

<div class="tab-content"><!--- tab-content Starts --->

<div id="notifications" class="tab-pane fade show active mt-3"><!--- notifications tab-pane fade show active mt-3 Starts --->

<div class="header-message-div-unread"><!--- header-message-div-unread Starts --->

<a href="dashboard.php?delete_notification" class="float-right text-danger">

<i class="fa fa-times-circle fa-lg"></i>

</a>

<a href="dashboard.php?n_id"><!--- a Starts --->

<img src="user_images/salman.jpg" width="50" height="50" class="rounded-circle">

<strong class="heading"> Aamir D. </strong>

<p class="message"> Complete Your Order. </p>

<p class="date text-muted"> 3:01 Dec 02 2020 </p>

</a><!--- a Ends --->


</div><!--- header-message-div-unread Ends --->


<div class="header-message-div"><!--- header-message-div Starts --->

<a href="dashboard.php?delete_notification" class="float-right text-danger">

<i class="fa fa-times-circle fa-lg"></i>

</a>

<a href="dashboard.php?n_id"><!--- a Starts --->

<img src="user_images/salman.jpg" width="50" height="50" class="rounded-circle">

<strong class="heading"> Aamir D. </strong>

<p class="message"> Complete Your Order. </p>

<p class="date text-muted"> 3:01 Dec 02 2020 </p>

</a><!--- a Ends --->


</div><!--- header-message-div Ends --->

</div><!--- notifications tab-pane fade show active mt-3 Ends --->


<div id="inbox" class="tab-pane fade mt-3"><!--- inbox tab-pane fade mt-3 Starts --->

<div class="header-message-div-unread"><!--- header-message-div-unread Starts --->

<a href="conversations/insert_message.php?single_message_id">

<img src="user_images/brock.jpg" width="50" height="50" class="rounded-circle">

<strong class="heading"> Adam B. </strong>

<p class="message text-truncate">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

</p>

<p class="date text-muted"> 3:08pm Dec 02 2020 </p>

</a>

</div><!--- header-message-div-unread Ends --->


<div class="header-message-div"><!--- header-message-div Starts --->

<a href="conversations/insert_message.php?single_message_id">

<img src="user_images/brock.jpg" width="50" height="50" class="rounded-circle">

<strong class="heading"> Adam B. </strong>

<p class="message text-truncate">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

</p>

<p class="date text-muted"> 3:08pm Dec 02 2020 </p>

</a>

</div><!--- header-message-div Ends --->

<div class="p-3">

<a href="http://localhost/freelance/conversations/inbox.php" class="btn btn-primary btn-block">
See All
</a>

</div>

</div><!--- inbox tab-pane fade mt-3 Ends --->


</div><!--- tab-content Ends --->

</div><!--- card-body p-0 Ends --->


</div><!--- card rounded-0 mt-3 Ends --->


</div><!--- col-md-8 Ends --->

</div><!--- row Ends --->

</div><!--- container mt-4 mb-5 Ends --->

<?php include("includes/footer.php"); ?>

</body>

</html>