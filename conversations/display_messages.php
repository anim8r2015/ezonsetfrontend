
<div class="message-div-hover"><!-- message-div-hover Starts -->

<img src="../user_images/salman.jpg" class="message-image" >

<h5> fixmywebsite </h5>

<p class="message-desc">

Hey can you make a complete platform exactly like EzOnset.com for me.

<a href="conversations_files/download.jpg" class="d-block mt-2 ml-1">
<i class="fa fa-download"></i> download.jpg
</a>

</p>

<p class="text-right text-muted mb-0"> 12:29: December 18, 2020
 </p>

</div><!-- message-div-hover Ends -->

<div class="message-div"><!-- message-div Starts -->

<img src="../user_images/miss_digimarket.jpg" class="message-image" >

<h5> miss_digimarket </h5>

<p class="message-desc">

Yeah, I can make a complete platform exactly like EzOnset.com that would cost ($1000).


<a href="conversations_files/download.jpg" class="d-block mt-2 ml-1">
<i class="fa fa-download"></i> download.jpg
</a>

</p>

<p class="text-right text-muted mb-0"> 12:29: December 18, 2020 </p>

</div><!-- message-div Ends -->


<div class="message-div"><!-- message-div Starts -->

<img src="../user_images/miss_digimarket.jpg" class="message-image" >

<h5> miss_digimarket </h5>

<p class="message-desc">

Here’s your custom offer. Place an order to get started


<a href="conversations_files/download.jpg" class="d-block mt-2 ml-1">
<i class="fa fa-download"></i> download.jpg
</a>

</p>

<div class="message-offer"><!-- message-offer Starts -->

<div class="row"><!-- row Starts -->

<div class="col-lg-2 col-md-3"><!-- col-lg-2 col-md-3 Starts -->

<img src="../proposals/proposal_files/web-development.jpg" class="img-fluid">

</div><!-- col-lg-2 col-md-3 Ends -->

<div class="col-lg-10 col-md-9"><!-- col-lg-10 col-md-9 Starts -->

<h5 class="mt-md-0 mt-2">

I Will Fix Html , Php , Laravel, Css,Javascript , Jquery Bugs

<span class="price float-right d-sm-block d-none"> $100 </span>

</h5>

<p> I will do your work as per your requirements. </p>

<p class="d-block d-sm-none"> <b> Total Amount: </b> $100 </p>

<p> <b> Delivery Time : </b> 3 Days </p>

</div><!-- col-lg-10 col-md-9 Ends -->

</div><!-- row Ends -->

</div><!-- message-offer Ends -->

<p class="text-right text-muted mb-0"> 12:29: December 18, 2020 </p>

</div><!-- message-div Ends -->


<div class="message-div-hover"><!-- message-div-hover Starts -->

<img src="../user_images/miss_digimarket.jpg" class="message-image" >

<h5> miss_digimarket </h5>

<p class="message-desc">

Here’s your custom offer. Place an order to get started


<a href="conversations_files/download.jpg" class="d-block mt-2 ml-1">
<i class="fa fa-download"></i> download.jpg
</a>

</p>

<div class="message-offer"><!-- message-offer Starts -->

<div class="row"><!-- row Starts -->

<div class="col-lg-2 col-md-3"><!-- col-lg-2 col-md-3 Starts -->

<img src="../proposals/proposal_files/web-development.jpg" class="img-fluid">

</div><!-- col-lg-2 col-md-3 Ends -->

<div class="col-lg-10 col-md-9"><!-- col-lg-10 col-md-9 Starts -->

<h5 class="mt-md-0 mt-2">

I Will Fix Html , Php , Laravel, Css,Javascript , Jquery Bugs

<span class="price float-right d-sm-block d-none"> $100 </span>

</h5>

<p> I will do your work as per your requirements </p>

<p class="d-block d-sm-none"> <b> Total Amount: </b> $100 </p>

<p> <b> Delivery Time : </b> 3 Days </p>

<button id="accpet-offer-1" class="btn btn-success rounded-0 mt-2 float-right">
Accpet Offer | Order Now
</button>

<script>

$("#accpet-offer-1").click(function(){
	
	single_message_id = "";
	
	offer_id = "";
	
	$.ajax({
		method: "POST",
		url:"accpet_offer_modal.php",
		data: { single_message_id: single_message_id, offer_id: offer_id  }
		
	}).done(function(data){
		
		$("#accpet-offer-div").html(data);
		
	});
	
});

</script>

</div><!-- col-lg-10 col-md-9 Ends -->

</div><!-- row Ends -->

</div><!-- message-offer Ends -->

<p class="text-right text-muted mb-0"> 12:29: December 18, 2020 </p>

</div><!-- message-div-hover Ends -->

<div class="message-div-hover"><!-- message-div-hover Starts -->

<img src="../user_images/miss_digimarket.jpg" class="message-image" >

<h5> miss_digimarket </h5>

<p class="message-desc">

Here’s your custom offer. Place an order to get started


<a href="conversations_files/download.jpg" class="d-block mt-2 ml-1">
<i class="fa fa-download"></i> download.jpg
</a>

</p>

<div class="message-offer"><!-- message-offer Starts -->

<div class="row"><!-- row Starts -->

<div class="col-lg-2 col-md-3"><!-- col-lg-2 col-md-3 Starts -->

<img src="../proposals/proposal_files/web-development.jpg" class="img-fluid">

</div><!-- col-lg-2 col-md-3 Ends -->

<div class="col-lg-10 col-md-9"><!-- col-lg-10 col-md-9 Starts -->

<h5 class="mt-md-0 mt-2">

I Will Fix Html , Php , Laravel, Css,Javascript , Jquery Bugs

<span class="price float-right d-sm-block d-none"> $100 </span>

</h5>

<p> I will do your work as per your requirements. </p>

<p class="d-block d-sm-none"> <b> Total Amount: </b> $100 </p>

<p> <b> Delivery Time : </b> 3 Days </p>

<button class="btn btn-success rounded-0 mt-2 float-right" disabled>
Offer Accpeted
</button>

<a href="#" target="blank" class="mt-3 mr-3 float-right">
View Order
</a>

</div><!-- col-lg-10 col-md-9 Ends -->

</div><!-- row Ends -->

</div><!-- message-offer Ends -->

<p class="text-right text-muted mb-0"> 12:29: December 18, 2020 </p>

</div><!-- message-div-hover Ends -->

