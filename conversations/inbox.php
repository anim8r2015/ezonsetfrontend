<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Workstreams </title>

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

<div class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mt-5"><!-- col-md-12 mt-5 Starts -->

<h2> Workstreams </h2>

<div class="table-responsive box-table mt-5"><!-- table-responsive box-table mt-5 Starts -->

<h2 class="mt-3 mb-3 ml-3"> All Workstreams </h2>

<table class="table table-hover inbox-conversations"><!-- table table-hover inbox-conversations Starts -->

<thead>

<tr>

<th>Sender</th>

<th>Last Message</th>

<th>Last Updated </th>

<th> Delete </th>

</tr>

</thead>

<tbody>

<tr class="table-active">

<td class="inbox-seller">

<img src="../user_images/miss_digimarket.jpg" class="rounded-circle" >

<h6 class="mb-3">

<a href="insert_message.php?single_message_id="> miss_digimarket </a>

</h6>

</td>

<td width="400">

<a href="insert_message.php?single_message_id="> 
Here’s your custom offer. Place An Order to get started..
</a>

</td>

<td> 01:46: December 18, 2020 </td>

<td>

<a href="#" class="text-white btn btn-danger">

<i class="fa fa-trash-o"></i>

</a>

</td>

</tr>

<tr>

<td class="inbox-seller">

<img src="../user_images/salman.jpg" class="rounded-circle" >

<h6 class="mb-3">

<a href="insert_message.php?single_message_id="> Adam</a>

</h6>

</td>

<td width="400">

<a href="insert_message.php?single_message_id="> 
Here’s your custom offer. Place An Order to get started..
</a>

</td>

<td> 01:46: December 18, 2020 </td>

<td>

<a href="#" class="text-white btn btn-danger">

<i class="fa fa-trash-o"></i>

</a>

</td>

</tr>

</tbody>

</table><!-- table table-hover inbox-conversations Ends -->

</div><!-- table-responsive box-table mt-5 Ends -->

</div><!-- col-md-12 mt-5 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->

<?php include("../includes/footer.php"); ?>

</body>

</html>