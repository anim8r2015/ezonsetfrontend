
<div class="message-div"><!--- message-div Starts --->

<img src="user_images/miss_digimarket.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> miss_digimarket </a>

</h5>

<p class="message-desc">

Please do this work,i have attaced the file.

<a href="order_files/attachment.txt" class="d-block mt-2 ml-1" download>

<i class="fa fa-download"></i> attachment.txt

</a>

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div Ends --->



<div class="message-div-hover"><!--- message-div-hover Starts --->

<img src="user_images/fixmywebsite.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> fixmywebsite </a>

</h5>

<p class="message-desc">

Ok

<a href="order_files/attachment.txt" class="d-block mt-2 ml-1" download>

<i class="fa fa-download"></i> attachment.txt

</a>

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div-hover Ends --->


<h3 class="text-center mt-3 mb-3"> Order Delivered </h3>


<div class="message-div-hover"><!--- message-div-hover Starts --->

<img src="user_images/fixmywebsite.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> fixmywebsite </a>

</h5>

<p class="message-desc">

Here is Your Work.

<a href="order_files/attachment.txt" class="d-block mt-2 ml-1" download>

<i class="fa fa-download"></i> attachment.txt

</a>

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div-hover Ends --->

<?php if(isset($_GET["buying_order"])){ ?>

<center class="mt-4 pb-4"><!-- mt-4 pb-4 Starts -->

<form method="post">

<input type="hidden" name="conversation_id" value="">

<button type="submit" name="complete" class="btn btn-success mr-4">
Accept & Review Order
</button>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#revision-request-modal">

Request Revision

</button>

</form>

</center><!-- mt-4 pb-4 Ends -->

<?php } ?>

<h3 class="text-center mt-3 mb-3"> Revision Requested By miss_digimarket </h3>


<div class="message-div"><!--- message-div Starts --->

<img src="user_images/miss_digimarket.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> miss_digimarket </a>

</h5>

<p class="message-desc">

This Work Is Not Good.

<a href="order_files/attachment.txt" class="d-block mt-2 ml-1" download>

<i class="fa fa-download"></i> attachment.txt

</a>

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div Ends --->


<h3 class="text-center pt-2 pb-2"> Order Cancellation Request By miss_digimarket </h3>

<?php if(isset($_GET['selling_order'])){ ?>


<div class="message-div"><!--- message-div Starts --->

<img src="user_images/miss_digimarket.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> miss_digimarket </a>

</h5>

<p class="message-desc">

I Want To Cancel This Order.

</p>

<form class="mb-2" method="post"><!--- form mb-2 Starts --->

<button name="accept_request" class="btn btn-success btn-sm"> Accept Request </button>

<button name="decline_request" class="btn btn-success btn-sm"> Decline Request </button>

</form><!--- form mb-2 Ends --->

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div Ends --->


<?php }elseif(isset($_GET["buying_order"])){ ?>

<div class="message-div"><!--- message-div Starts --->

<img src="user_images/miss_digimarket.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> miss_digimarket </a>

</h5>

<p class="message-desc">

I Want To Cancel This Order.

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div Ends --->

<?php } ?>

<h3 class="text-center pt-2 pb-2"> Order Cancellation Request By miss_digimarket </h3>

<?php if(isset($_GET['selling_order'])){ ?>


<div class="message-div"><!--- message-div Starts --->

<img src="user_images/miss_digimarket.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> miss_digimarket </a>

</h5>

<p class="message-desc">

I Want To Cancel This Order.

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div Ends --->


<div class="order-status-message"><!--- order-status-message Starts --->

<i class="fa fa-times fa-3x text-danger"></i>

<h5 class="text-danger"> Cancellation Request Declined By Seller </h5>

</div><!--- order-status-message Ends --->

<?php }elseif(isset($_GET["buying_order"])){ ?>

<div class="message-div"><!--- message-div Starts --->

<img src="user_images/miss_digimarket.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> miss_digimarket </a>

</h5>

<p class="message-desc">

I Want To Cancel This Order.

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div Ends --->


<div class="order-status-message"><!--- order-status-message Starts --->

<i class="fa fa-times fa-3x text-danger"></i>

<h5 class="text-danger"> Cancellation Request Declined By fixmywebsite </h5>

<p>

Your Seller declined the request to mutually cancel this order.<br>

For further assistance, please visit our 

<a href="contact.php" class="seller-buyer-name" > Support Center </a>

</p>

</div><!--- order-status-message Ends --->


<?php } ?>

<h3 class="text-center pt-2 pb-2"> Order Cancellation Request By miss_digimarket </h3>

<?php if(isset($_GET['selling_order'])){ ?>


<div class="message-div"><!--- message-div Starts --->

<img src="user_images/miss_digimarket.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> miss_digimarket </a>

</h5>

<p class="message-desc">

I Want To Cancel This Order.

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div Ends --->


<div class="order-status-message"><!--- order-status-message Starts --->

<i class="fa fa-times fa-3x text-danger"></i>

<h5 class="text-danger"> Order Cancelled By Mutual Agreement. </h5>

<p>

Order Was Cancelled By Mutual Agreement Between You And Your Buyer.

<br>

The Order Funds Have Been Returened To Buyer.

</p>

</div><!--- order-status-message Ends --->

<?php }elseif(isset($_GET["buying_order"])){ ?>

<div class="message-div"><!--- message-div Starts --->

<img src="user_images/miss_digimarket.jpg" class="message-image">

<h5>

<a href="#" class="seller-buyer-name"> miss_digimarket </a>

</h5>

<p class="message-desc">

I Want To Cancel This Order.

</p>

<p class="text-right text-muted mb-0"> 03:56 Dec 7, 2017  </p>

</div><!--- message-div Ends --->


<div class="order-status-message"><!--- order-status-message Starts --->

<i class="fa fa-times fa-3x text-danger"></i>

<h5 class="text-danger"> Order Cancelled By Mutual Agreement. </h5>

<p>

Order was cancelled by mutual agreement between you and your seller.<br>

The order funds have been returned to the you.

</p>

</div><!--- order-status-message Ends --->

<?php } ?>

<?php if(isset($_GET["selling_order"])){ ?>


<div class="order-status-message"><!--- order-status-message Starts --->

<i class="fa fa-times fa-3x text-danger"></i>

<h5 class="text-danger"> Order Cancelled By Customer Support. </h5>

<p>

Payment For This Order Was Refunded To Buyer Shopping Balance.

<br>

For Further Assistance , Please Visit Our

<a href="contact.php" class="link"> Customer Support </a>.

</p>

</div><!--- order-status-message Ends --->


<?php }elseif(isset($_GET["buying_order"])){ ?>

<div class="order-status-message"><!--- order-status-message Starts --->

<i class="fa fa-times fa-3x text-danger"></i>

<h5 class="text-danger"> Order Cancelled By Customer Support. </h5>

<p>

Payment For This Order Was Refunded To Your

<a href="revenue.php" class="link"> Shopping Balance </a>.

</p>

</div><!--- order-status-message Ends --->

<?php } ?>
