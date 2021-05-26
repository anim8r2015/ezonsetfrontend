
<?php include("includes/user_header.php");
 require_once "global_vars.php"?>

<div id="myCarousel" class="carousel slide"><!--- carousel slide Starts --->

<ol class="carousel-indicators"><!--- carousel-indicators Starts --->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>

<li data-target="#myCarousel" data-slide-to="1"></li>

<li data-target="#myCarousel" data-slide-to="2"></li>

<li data-target="#myCarousel" data-slide-to="3"></li>


</ol><!--- carousel-indicators Ends --->

<div class="carousel-inner"><!--- carousel-inner Starts -->

<div class="carousel-item active"><!--- carousel-item active Starts -->

<a href="#"><!--- a Starts --->

<img src="slides_images/2.png" class="d-block w-100">

<div class="carousel-caption"><!--- carousel-caption Starts --->

<h3 class="d-lg-block d-md-block d-none"> Getting Hired During Covid-19 </h3>

<p class="d-lg-block d-md-block d-none">
Job Search Resources Tailored to these Unique Times

</p>

</div><!--- carousel-caption Ends --->

</a><!--- a Ends --->

</div><!--- carousel-item active Ends -->



<div class="carousel-item"><!--- carousel-item Starts -->

<a href="#"><!--- a Starts --->

<img src="slides_images/3.png" class="d-block w-100">

<div class="carousel-caption"><!--- carousel-caption Starts --->

<h3 class="d-lg-block d-md-block d-none"> Discover expert Freelance services </h3>

<p class="d-lg-block d-md-block d-none">

Collaborate on any project with freelancers online 

</p>

</div><!--- carousel-caption Ends --->

</a><!--- a Ends --->

</div><!--- carousel-item Ends -->



<div class="carousel-item"><!--- carousel-item Starts -->

<a href="#"><!--- a Starts --->

<img src="slides_images/4.png" class="d-block w-100">

<div class="carousel-caption"><!--- carousel-caption Starts --->

<h3 class="d-lg-block d-md-block d-none"> Discover incredible freelancers </h3>

<p class="d-lg-block d-md-block d-none">

Search our freelancer listings for rated and reviewed experts in every skill imaginable 

</p>

</div><!--- carousel-caption Ends --->

</a><!--- a Ends --->

</div><!--- carousel-item Ends -->



<div class="carousel-item"><!--- carousel-item Starts -->

<a href="#"><!--- a Starts --->

<img src="slides_images/5.png" class="d-block w-100">

<div class="carousel-caption"><!--- carousel-caption Starts --->

<h3 class="d-lg-block d-md-block d-none"> Make yourself stand out. Build a great profile </h3>

<p class="d-lg-block d-md-block d-none">

Clients browse your profile when deciding who to work with on a project, <br>So it’s essential that you present yourself in the best way possible

</p>


</div><!--- carousel-caption Ends --->

</a><!--- a Ends --->

</div><!--- carousel-item Ends -->


</div><!--- carousel-inner Ends -->

<a class="carousel-control-prev" href="#myCarousel" data-slide="prev"><!--- carousel-control-prev Starts -->

<span class="carousel-control-prev-icon"></span>

</a><!--- carousel-control-prev Ends -->


<a class="carousel-control-next" href="#myCarousel" data-slide="next"><!--- carousel-control-next Starts -->

<span class="carousel-control-next-icon"></span>

</a><!--- carousel-control-next Ends -->


</div><!--- carousel slide Ends --->



<div class="container-fluid mt-5"><!--- container-fluid mt-5 Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-3"><!--- col-md-3 Starts --->

<?php include("includes/user_home_sidebar.php"); ?>

</div><!--- col-md-3 Ends --->

<div class="col-md-9"><!--- col-md-9 Starts --->

<div class="row"><!--- row Starts --->

<div class="col-md-12"><!--- col-md-12 Starts --->

<h2> Featured Proposals </h2>

</div><!--- col-md-12 Ends --->

</div><!--- row Ends --->

<div class="row"><!--- row Starts --->

<div class="col-md-12 flex-wrap"><!--- col-md-12 flex-wrap Starts --->

<div class="owl-carousel user-home-featured-carousel owl-theme"><!--- owl-carousel user-home-featured-carousel owl-theme Starts --->

<div class="proposal-div"><!--- proposal-div Starts --->

<div class="proposal_nav"><!--- proposal_nav Starts --->

<span class="float-left mt-2"><!--- float-left mt-2 Starts --->

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span><!--- float-left mt-2 Ends --->

<span class="float-right mt-2"><!--- float-right mt-2 Starts --->

<?php
	$bool = true;
	//put endpoint in env file not code
	$url = "http://104.197.141.62/api/collections/services";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);

	$result = json_decode($response);
	//use $result->[json attribute name to get data]
	$y = 0;

	for ($x = 0; $x < count($result->data); $x++) {
		//isset is used to check for nulls
		if (isset($result->data[$x]->request_title)) {
			$y++;
			echo "<img class=\"rating\" src=\"images/user_rate_full.png\">";
		}
	}
?>

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2">(2)</span>

</span><!--- float-right mt-2 Ends --->

<div class="clearfix mb-2"> </div>

</div><!--- proposal_nav Ends --->

<a href="proposals/proposal.php">

<hr class="m-0 p-0">

<img src="proposals/proposal_files/ytpro.png" class="resp-img">

</a>

<div class="text"><!--- text Starts --->

<h4>

<a href="proposals/proposal.php" class="video-img">

I Will Do Viral Youtube Seo Social Media Promotion

</a>

</h4>

<hr>


<p class="buttons clearfix"><!--- buttons clearfix Starts --->

<a href="#" class="favorite mt-2 float-left" data-toggle="tooltip" title="Add To Favorites">

<i class="fa fa-heart fa-lg"></i>

</a>


<span class="float-right"> STARTING AT <strong class="price"> $5 </strong> </span>

</p><!--- buttons clearfix Ends --->


</div><!--- text Ends --->

<div class="ribbon"><!--- ribbon Starts --->

<div class="theribbon"> Featuerd </div>

<div class="ribbon-background"></div>

</div><!--- ribbon Ends --->

</div><!--- proposal-div Ends --->


<div class="proposal-div"><!--- proposal-div Starts --->

<div class="proposal_nav"><!--- proposal_nav Starts --->

<span class="float-left mt-2"><!--- float-left mt-2 Starts --->

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span><!--- float-left mt-2 Ends --->

<span class="float-right mt-2"><!--- float-right mt-2 Starts --->

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2">(2)</span>

</span><!--- float-right mt-2 Ends --->

<div class="clearfix mb-2"> </div>

</div><!--- proposal_nav Ends --->

<a href="proposals/proposal.php">

<hr class="m-0 p-0">

<img src="proposals/proposal_files/ytpro.png" class="resp-img">

</a>

<div class="text"><!--- text Starts --->

<h4>

<a href="proposals/proposal.php" class="video-img">

I Will Do Viral Youtube Seo Social Media Promotion

</a>

</h4>

<hr>


<p class="buttons clearfix"><!--- buttons clearfix Starts --->

<a href="#" class="favorited mt-2 float-left" data-toggle="tooltip" title="Add To Favorites">

<i class="fa fa-heart fa-lg"></i>

</a>


<span class="float-right"> STARTING AT <strong class="price"> $5 </strong> </span>

</p><!--- buttons clearfix Ends --->


</div><!--- text Ends --->

<div class="ribbon"><!--- ribbon Starts --->

<div class="theribbon"> Featuerd </div>

<div class="ribbon-background"></div>

</div><!--- ribbon Ends --->

</div><!--- proposal-div Ends --->


<div class="proposal-div"><!--- proposal-div Starts --->

<div class="proposal_nav"><!--- proposal_nav Starts --->

<span class="float-left mt-2"><!--- float-left mt-2 Starts --->

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span><!--- float-left mt-2 Ends --->

<span class="float-right mt-2"><!--- float-right mt-2 Starts --->

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2">(2)</span>

</span><!--- float-right mt-2 Ends --->

<div class="clearfix mb-2"> </div>

</div><!--- proposal_nav Ends --->

<a href="proposals/proposal.php">

<hr class="m-0 p-0">

<img src="proposals/proposal_files/ytpro.png" class="resp-img">

</a>

<div class="text"><!--- text Starts --->

<h4>

<a href="proposals/proposal.php" class="video-img">

I Will Do Viral Youtube Seo Social Media Promotion

</a>

</h4>

<hr>


<p class="buttons clearfix"><!--- buttons clearfix Starts --->

<a href="#" class="favorited mt-2 float-left" data-toggle="tooltip" title="Add To Favorites">

<i class="fa fa-heart fa-lg"></i>

</a>


<span class="float-right"> STARTING AT <strong class="price"> $5 </strong> </span>

</p><!--- buttons clearfix Ends --->


</div><!--- text Ends --->

<div class="ribbon"><!--- ribbon Starts --->

<div class="theribbon"> Featuerd </div>

<div class="ribbon-background"></div>

</div><!--- ribbon Ends --->

</div><!--- proposal-div Ends --->


<div class="proposal-div"><!--- proposal-div Starts --->

<div class="proposal_nav"><!--- proposal_nav Starts --->

<span class="float-left mt-2"><!--- float-left mt-2 Starts --->

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span><!--- float-left mt-2 Ends --->

<span class="float-right mt-2"><!--- float-right mt-2 Starts --->

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2">(2)</span>

</span><!--- float-right mt-2 Ends --->

<div class="clearfix mb-2"> </div>

</div><!--- proposal_nav Ends --->

<a href="proposals/proposal.php">

<hr class="m-0 p-0">

<img src="proposals/proposal_files/ytpro.png" class="resp-img">

</a>

<div class="text"><!--- text Starts --->

<h4>

<a href="proposals/proposal.php" class="video-img">

I Will Do Viral Youtube Seo Social Media Promotion

</a>

</h4>

<hr>


<p class="buttons clearfix"><!--- buttons clearfix Starts --->

<a href="#" class="favorite mt-2 float-left" data-toggle="tooltip" title="Add To Favorites">

<i class="fa fa-heart fa-lg"></i>

</a>


<span class="float-right"> STARTING AT <strong class="price"> $5 </strong> </span>

</p><!--- buttons clearfix Ends --->


</div><!--- text Ends --->

<div class="ribbon"><!--- ribbon Starts --->

<div class="theribbon"> Featuerd </div>

<div class="ribbon-background"></div>

</div><!--- ribbon Ends --->

</div><!--- proposal-div Ends --->


<div class="proposal-div"><!--- proposal-div Starts --->

<div class="proposal_nav"><!--- proposal_nav Starts --->

<span class="float-left mt-2"><!--- float-left mt-2 Starts --->

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span><!--- float-left mt-2 Ends --->

<span class="float-right mt-2"><!--- float-right mt-2 Starts --->

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2">(2)</span>

</span><!--- float-right mt-2 Ends --->

<div class="clearfix mb-2"> </div>

</div><!--- proposal_nav Ends --->

<a href="proposals/proposal.php">

<hr class="m-0 p-0">

<img src="proposals/proposal_files/ytpro.png" class="resp-img">

</a>

<div class="text"><!--- text Starts --->

<h4>

<a href="proposals/proposal.php" class="video-img">

I Will Do Viral Youtube Seo Social Media Promotion

</a>

</h4>

<hr>


<p class="buttons clearfix"><!--- buttons clearfix Starts --->

<a href="#" class="favorite mt-2 float-left" data-toggle="tooltip" title="Add To Favorites">

<i class="fa fa-heart fa-lg"></i>

</a>


<span class="float-right"> STARTING AT <strong class="price"> $5 </strong> </span>

</p><!--- buttons clearfix Ends --->


</div><!--- text Ends --->

<div class="ribbon"><!--- ribbon Starts --->

<div class="theribbon"> Featuerd </div>

<div class="ribbon-background"></div>

</div><!--- ribbon Ends --->

</div><!--- proposal-div Ends --->


</div><!--- owl-carousel user-home-featured-carousel owl-theme Ends --->

</div><!--- col-md-12 flex-wrap Ends --->

</div><!--- row Ends --->


<div class="row"><!--- row Starts --->

<div class="col-md-12"><!--- col-md-12 Starts --->

<h2> Recent Buyer Requests </h2>

</div><!--- col-md-12 Ends --->

</div><!--- row Ends --->


<div class="row buyer-requests"><!--- row buyer-requests Starts --->

<div class="col-md-12"><!--- col-md-12 Starts -->

<div class="table-responsive box-table"><!--- table-responsive box-table Starts --->

<table class="table table-hover"><!--- table table-hover Starts --->

<thead><!--- thead Starts --->

<tr>

<th>Request</th>

<th>Offers</th>

<th>Duration</th>

<th>Budget</th>

</tr>

</thead><!--- thead Ends --->

<tbody><!--- tbody Starts --->

<?php
	//put endpoint in env file not code
	$url = "http://104.197.141.62/api/collections/requests";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);

	$result = json_decode($response);
	//use $result->[json attribute name to get data]
	$y = 0;

	for ($x = 0; $x < count($result->data); $x++) {
		//isset is used to check for nulls
		if (isset($result->data[$x]->request_title)) {
			$y++;
			echo "<tr id=\"request_tr_".$y."\">";

			echo "<td>";
			echo "<img src=\"user_images/brock.jpg\" class=\"request-img rounded-circle\">";
			echo "<div class=\"request-description\">";
				
			//echo "service_title: " . $result->data[$x]->service_title . "<br>";
			echo "<h6>" . $result->data[$x]->request_title . "</h6>";
			echo "<h6 style=\"color: #ffae42;\"><b>" . $result->data[$x]->request_category . "</b></h6>";
			echo "<p class=\"lead\">" . $result->data[$x]->request_description . "</p>";

			echo "</div><!--- request-description Ends --->";

			echo "</td>";

			echo "<td>" . $result->data[$x]->request_offers . "</td>";

			echo "<td>" . $result->data[$x]->reguest_duration . " </td>";

			echo "<td class=\"text-success\">";

			echo  $result->data[$x]->reguest_budget;

			echo "<br>";

			echo "<button class=\"btn btn-success btn-sm mt-4 send_button_".$y."\">";

			echo "Send Offer";

			echo "</button>";

			echo "</td>";
				
			echo "<script>
			$(\".send_button_".$y."\").css(\"visibility\",\"hidden\");
			$(document).on(\"mouseenter\", \"#request_tr_".$y."\", function(){
				$(\".send_button_".$y."\").css(\"visibility\",\"visible\");
			});
			$(document).on(\"mouseleave\", \"#request_tr_".$y."\", function(){
				$(\".send_button_".$y."\").css(\"visibility\",\"hidden\");
			});

			$(\".send_button_".$y."\").click(function(){
				
			request_id = \"\";
				
			$.ajax({
				
			method: \"POST\",
			url: \"requests/send_offer_modal.php\",
			data: {request_id: request_id}
			})
			.done(function(data){
				
			$(\".append-modal\").html(data);
				
			});
				
			});


			</script>

			</tr><!--- request_tr_1 id Ends --->";
		}
		
	}
?>




</tbody><!--- tbody Ends --->

</table><!--- table table-hover Ends --->

<hr>

<center>

<a href="requests/buyer_requests.php" class="btn btn-success btn-lg mb-3"> 

Load More

</a>

</center>

</div><!--- table-responsive box-table Ends --->

</div><!--- col-md-12 Ends -->

</div><!--- row buyer-requests Ends --->


</div><!--- col-md-9 Ends --->

</div><!--- row Ends --->



<div class="row"><!--- row Starts --->

<div class="col-md-6"><!--- col-md-6 Starts --->

<div class="card border-primary mb-3"><!--- card border-primary mb-3 Starts --->

<div class="card-header bg-primary"><!--- card-header bg-primary Starts --->

<h5 class="h5 text-white"> Random Proposals </h5>

</div><!--- card-header bg-primary Ends --->

<div class="card-body vertical-proposals"><!--- card-body vertical-proposals Starts --->

<div class="row mb-3"><!--- row mb-3 Starts --->

<div class="col-md-3"><!--- col-md-3 Starts --->

<a href="proposals/proposal.php" class="video-img">

<img src="proposals/proposal_files/ytpro.png" class="vertical-proposal-img">

</a>

</div><!--- col-md-3 Ends --->

<div class="col-md-9"><!--- col-md-9 Starts --->

<div class="text"><!--- text Starts --->

<h6>

<a href="proposals/proposal.php"> I will promote your YouTube Video for 3 Days</a>

<span class="text-success"> $20 </span>

</h6>

<p>

I will promote your YouTube Video On Different Platforms using multiple strategies &nbsp;

<a href="proposals/proposal.php"> Read More </a>

</p>

<hr>

<span class="float-left">

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span>

<span class="float-right">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2"> (2) </span>

</span>

</div><!--- text Ends --->

</div><!--- col-md-9 Ends --->

</div><!--- row mb-3 Ends --->


<div class="row mb-3"><!--- row mb-3 Starts --->

<div class="col-md-3"><!--- col-md-3 Starts --->

<a href="proposals/proposal.php" class="video-img">

<img src="proposals/proposal_files/ytpro.png" class="vertical-proposal-img">

</a>

</div><!--- col-md-3 Ends --->

<div class="col-md-9"><!--- col-md-9 Starts --->

<div class="text"><!--- text Starts --->

<h6>

<a href="proposals/proposal.php"> I will promote your YouTube Video for 3 Days</a>

<span class="text-success"> $20 </span>

</h6>

<p>

I will promote your YouTube Video On Different Platforms using multiple strategies &nbsp;

<a href="proposals/proposal.php"> Read More </a>

</p>

<hr>

<span class="float-left">

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span>

<span class="float-right">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2"> (2) </span>

</span>

</div><!--- text Ends --->

</div><!--- col-md-9 Ends --->

</div><!--- row mb-3 Ends --->



<div class="row mb-3"><!--- row mb-3 Starts --->

<div class="col-md-3"><!--- col-md-3 Starts --->

<a href="proposals/proposal.php" class="video-img">

<img src="proposals/proposal_files/ytpro.png" class="vertical-proposal-img">

</a>

</div><!--- col-md-3 Ends --->

<div class="col-md-9"><!--- col-md-9 Starts --->

<div class="text"><!--- text Starts --->

<h6>

<a href="proposals/proposal.php"> I will promote your YouTube Video for 3 Days</a>

<span class="text-success"> $20 </span>

</h6>

<p>

I will promote your YouTube Video On Different Platforms using multiple strategies &nbsp;

<a href="proposals/proposal.php"> Read More </a>

</p>

<hr>

<span class="float-left">

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span>

<span class="float-right">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2"> (2) </span>

</span>

</div><!--- text Ends --->

</div><!--- col-md-9 Ends --->

</div><!--- row mb-3 Ends --->


<ul class="pagination justify-content-center"><!--- pagination justify-content-center Starts --->

<li class="page-item">

<a href="index.php?random_proposals_page=1&top_proposals_page=1" class="page-link">

First Page

</a>

</li>

<li class="page-item active">

<a href="index.php?random_proposals_page=1&top_proposals_page=1" class="page-link">

1

</a>

</li>


<li class="page-item">

<a href="index.php?random_proposals_page=1&top_proposals_page=1" class="page-link">

2

</a>

</li>


<li class="page-item">

<a href="index.php?random_proposals_page=1&top_proposals_page=1" class="page-link">

Last Page

</a>

</li>

</ul><!--- pagination justify-content-center Ends --->

</div><!--- card-body vertical-proposals Ends --->

</div><!--- card border-primary mb-3 Ends --->

</div><!--- col-md-6 Ends --->


<div class="col-md-6"><!--- col-md-6 Starts --->

<div class="card border-primary mb-3"><!--- card border-primary mb-3 Starts --->

<div class="card-header bg-primary"><!--- card-header bg-primary Starts --->

<h5 class="h5 text-white"> Top Rated Proposals </h5>

</div><!--- card-header bg-primary Ends --->

<div class="card-body vertical-proposals"><!--- card-body vertical-proposals Starts --->

<div class="row mb-3"><!--- row mb-3 Starts --->

<div class="col-md-3"><!--- col-md-3 Starts --->

<a href="proposals/proposal.php" class="video-img">

<img src="proposals/proposal_files/ytpro.png" class="vertical-proposal-img">

</a>

</div><!--- col-md-3 Ends --->

<div class="col-md-9"><!--- col-md-9 Starts --->

<div class="text"><!--- text Starts --->

<h6>

<a href="proposals/proposal.php"> I will promote your YouTube Video for 3 Days</a>

<span class="text-success"> $20 </span>

</h6>

<p>

I will promote your YouTube Video On Different Platforms using multiple strategies &nbsp;

<a href="proposals/proposal.php"> Read More </a>

</p>

<hr>

<span class="float-left">

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span>

<span class="float-right">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2"> (2) </span>

</span>

</div><!--- text Ends --->

</div><!--- col-md-9 Ends --->

</div><!--- row mb-3 Ends --->


<div class="row mb-3"><!--- row mb-3 Starts --->

<div class="col-md-3"><!--- col-md-3 Starts --->

<a href="proposals/proposal.php" class="video-img">

<img src="proposals/proposal_files/ytpro.png" class="vertical-proposal-img">

</a>

</div><!--- col-md-3 Ends --->

<div class="col-md-9"><!--- col-md-9 Starts --->

<div class="text"><!--- text Starts --->

<h6>

<a href="proposals/proposal.php"> I will promote your YouTube Video for 3 Days</a>

<span class="text-success"> $20 </span>

</h6>

<p>

I will promote your YouTube Video On Different Platforms using multiple strategies &nbsp;

<a href="proposals/proposal.php"> Read More </a>

</p>

<hr>

<span class="float-left">

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span>

<span class="float-right">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2"> (2) </span>

</span>

</div><!--- text Ends --->

</div><!--- col-md-9 Ends --->

</div><!--- row mb-3 Ends --->



<div class="row mb-3"><!--- row mb-3 Starts --->

<div class="col-md-3"><!--- col-md-3 Starts --->

<a href="proposals/proposal.php" class="video-img">

<img src="proposals/proposal_files/ytpro.png" class="vertical-proposal-img">

</a>

</div><!--- col-md-3 Ends --->

<div class="col-md-9"><!--- col-md-9 Starts --->

<div class="text"><!--- text Starts --->

<h6>

<a href="proposals/proposal.php"> I will promote your YouTube Video for 3 Days</a>

<span class="text-success"> $20 </span>

</h6>

<p>

I will promote your YouTube Video On Different Platforms using multiple strategies &nbsp;

<a href="proposals/proposal.php"> Read More </a>

</p>

<hr>

<span class="float-left">

<strong class="ml-2 mr-1"> By </strong> <a href="http://localhost/freelance/user.php"> fixmywebsite </a>

</span>

<span class="float-right">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_full.png">

<img class="rating" src="images/user_rate_blank.png">

<span class="ml-1 mr-2"> (2) </span>

</span>

</div><!--- text Ends --->

</div><!--- col-md-9 Ends --->

</div><!--- row mb-3 Ends --->


<ul class="pagination justify-content-center"><!--- pagination justify-content-center Starts --->

<li class="page-item">

<a href="index.php?random_proposals_page=1&top_proposals_page=1" class="page-link">

First Page

</a>

</li>

<li class="page-item active">

<a href="index.php?random_proposals_page=1&top_proposals_page=1" class="page-link">

1

</a>

</li>


<li class="page-item">

<a href="index.php?random_proposals_page=1&top_proposals_page=1" class="page-link">

2

</a>

</li>


<li class="page-item">

<a href="index.php?random_proposals_page=1&top_proposals_page=1" class="page-link">

Last Page

</a>

</li>

</ul><!--- pagination justify-content-center Ends --->

</div><!--- card-body vertical-proposals Ends --->

</div><!--- card border-primary mb-3 Ends --->

</div><!--- col-md-6 Ends --->


</div><!--- row Ends --->


</div><!--- container-fluid mt-5 Ends --->

<div class="append-modal"> </div>


<div id="quota-finish" class="modal fade"><!--- quota-finish modal fade Starts --->

<div class="modal-dialog"><!--- modal-dialog Starts --->

<div class="modal-content"><!--- modal-content Starts --->

<div class="modal-header"><!--- modal-header Starts --->

<h5 class="modal-title h5"> Request Quota Finished </h5>

<button class="close" data-dismiss="modal"> &times; </button>

</div><!--- modal-header Ends --->

<div class="modal-body"><!--- modal-body Starts --->

<center>

<h3> You Have Already Sent 10 Offers Today, Quota Finish </h3>

</center>

</div><!--- modal-body Ends --->

<div class="modal-footer"><!--- modal-footer Starts --->

<button class="btn btn-secondary" data-dismiss="modal">

Close

</button>

</div><!--- modal-footer Ends --->

</div><!--- modal-content Ends --->

</div><!--- modal-dialog Ends --->

</div><!--- quota-finish modal fade Ends --->
<?php include("includes/footer.php"); ?>

