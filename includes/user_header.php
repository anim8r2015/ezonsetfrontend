
<?php 
    require_once 'global_vars.php'; 
    include("seller_levels.php");
    
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-login fixed-top"><!-- navbar navbar-expand-lg navbar-dark bg-dark fixed-top Starts -->

<div class="container"><!-- container Starts -->

<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<a class="navbar-brand" href="index.php"> EzOnset</a>

<a class="navbar-toggler" href="mobile_categories.php">

<i class="fa fa-th-large"></i>

</a>

<div class="collapse navbar-collapse" id="navbarNav"><!-- collapse navbar-collapse Starts -->

<hr>

<form class="form-inline mr-auto" method="post"><!-- form-inline mr-auto Starts -->


<div class="input-group"><!-- input-group Starts -->

<input type="text" class="form-control" required placeholder="Search Proposals" name="search_query">

<span class="input-group-btn"><!-- input-group-btn Starts -->

<button class="btn btn-primary" name="search" type="submit">

<i class="fa fa-search"></i>

</button>

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- form-inline mr-auto Ends -->

<hr>

<ul class="navbar-nav"><!--- navbar-nav Starts -->



<li class="nav-item"><!-- nav-item Starts  -->

<a class="nav-link" href="dashboard.php" title="Dashboard">

<i class="fa fa-lg fa-dashboard"></i>

<span class="d-lg-none"> Dashboard </span>

</a>

</li><!-- nav-item Ends -->


<li class="nav-item dropdown"><!--- nav-item dropdown Starts -->

<a href="#" class="nav-link dropdown-toggle mr-lg-2" data-toggle="dropdown" title="Notifications"><!-- nav-link dropdown-toggle mr-lg-2 Starts -->

<i class="fa fa-fw fa-lg fa-bell"></i>

<span class="d-lg-none">

Notifications <span class="badge badge-pill badge-danger"> 1 New </span>

</span>

<span class="new-indicator text-danger d-lg-block d-none"><!--- new-indicator text-danger d-lg-block d-none Starts -->

<i class="fa fa-fw fa-circle"></i>

<span class="number"> 1 </span>

</span><!--- new-indicator text-danger d-lg-block d-none Ends -->

</a><!-- nav-link dropdown-toggle mr-lg-2 Ends -->

<div class="dropdown-menu notifications-dropdown"><!--- dropdown-menu notifications-dropdown Starts -->

<h3 class="dropdown-header"><!--- dropdown-header Starts --->

Notifications (1)

<a class="float-right" href="dashboard.php"> View Dashboard </a>

</h3><!--- dropdown-header Ends --->

<div class="header-message-div-unread"><!--- header-message-div-unread Starts --->

<a href="dashboard.php?n_id">

<img src="user_images/salman.jpg" width="50" height="50" class="rounded-circle">

<strong class="heading"> Aamir D. </strong>

<p class="message"> Complete Your Order. </p>

<p class="date text-muted"> 26:11: Nov 08 2020 </p>

</a>

</div><!--- header-message-div-unread Ends --->

<div class="header-message-div"><!--- header-message-div Starts --->

<a href="dashboard.php?n_id">

<img src="user_images/salman.jpg" width="50" height="50" class="rounded-circle">

<strong class="heading"> Aamir D. </strong>

<p class="message"> Complete Your Order. </p>

<p class="date text-muted"> 26:11: Nov 26 2020 </p>

</a>

</div><!--- header-message-div Ends --->

</div><!--- dropdown-menu notifications-dropdown Ends -->

</li><!--- nav-item dropdown Ends -->


<li class="nav-item dropdown"><!--- nav-item dropdown Starts --->

<a href="#" class="nav-link dropdown-toggle mr-lg-2" data-toggle="dropdown" title="Inbox Messages"><!--- nav-link dropdown-toggle mr-lg-2 Starts -->

<i class="fa fa-fw fa-lg fa-envelope"></i>

<span class="d-lg-none">

Messages <span class="badge badge-pill badge-danger"> 1 New </span>

</span>

<span class="new-indicator text-danger d-lg-block d-none"><!--- new-indicator text-danger d-lg-block d-none Starts -->

<i class="fa fa-fw fa-circle"></i>

<span class="number">1</span>

</span><!--- new-indicator text-danger d-lg-block d-none Ends -->

</a><!--- nav-link dropdown-toggle mr-lg-2 Ends -->

<div class="dropdown-menu messages-dropdown"><!--- dropdown-menu messages-dropdown Starts -->

<h3 class="dropdown-header"><!--- dropdown-header Starts -->

Inbox (1)

<a class="float-right" href="conversations/inbox.php">

View Inbox

</a>

</h3><!--- dropdown-header Ends -->

<div class="header-message-div-unread"><!--- header-message-div-unread Starts -->

<a href="conversations/insert_message.php?single_message_id">

<img src="user_images/brock.jpg" width="50" height="50" class="rounded-circle">

<strong class="heading"> Adam B. </strong>

<p class="message text-truncate"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>

<p class="date text-muted"> 26:11 Nov 26 2020 </p>

</a>

</div><!--- header-message-div-unread Ends -->


<div class="header-message-div"><!--- header-message-div Starts -->

<a href="conversations/insert_message.php?single_message_id">

<img src="user_images/brock.jpg" width="50" height="50" class="rounded-circle">

<strong class="heading"> Adam B. </strong>

<p class="message text-truncate"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>

<p class="date text-muted"> 26:11 Nov 26 2020 </p>

</a>

</div><!--- header-message-div Ends -->

<div class="m-2">

<a href="conversations/inbox.php" class="btn btn-primary btn-block">
 See All
</a>

</div>

</div><!--- dropdown-menu messages-dropdown Ends -->

</li><!--- nav-item dropdown Ends --->


<li class="nav-item dropdown"><!--- nav-item dropdown Starts -->

<a class="nav-link mr-lg-2" href="favourites.php" title="Favourites">

<i class="fa fa-fw fa-lg fa-heart"></i>

<span class="d-lg-none">

Favourites <span class="badge badge-pill badge-success"> 4 </span>

</span>

<span class="new-indicator text-success d-lg-block d-none"><!--- new-indicator text-success d-lg-block d-none Starts -->

<i class="fa fa-fw fa-circle"></i>

<span class="number"> 4 </span>

</span><!--- new-indicator text-success d-lg-block d-none Ends -->

</a>

</li><!--- nav-item dropdown Ends -->


<li class="nav-item dropdown"><!--- nav-item dropdown Starts -->

<a class="nav-link mr-lg-2" href="cart.php" title="Cart">

<i class="fa fa-fw fa-lg fa-shopping-cart"></i>

<span class="d-lg-none">

Cart <span class="badge badge-pill badge-success"> 7 </span>

</span>

<span class="new-indicator text-success d-lg-block d-none"><!--- new-indicator text-success d-lg-block d-none Starts -->

<i class="fa fa-fw fa-circle"></i>

<span class="number"> 7 </span>

</span><!--- new-indicator text-success d-lg-block d-none Ends -->

</a>

</li><!--- nav-item dropdown Ends -->


<li class="nav-item"><!--- nav-item Starts -->

<div class="dropdown"><!--- dropdown Starts --->

<button class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown">

<img src="user_images/fixmywebsite.jpg" width="27" height="27" class="rounded-circle">

<?php  
    if(isset($usernameCurr)){
        echo $usernameCurr;
    } else {
        echo "Guest";
    }
?> <span class="badge badge-success"> $172 </span>

</button>

<div class="dropdown-menu"><!-- dropdown-menu Starts -->

<a class="dropdown-item" href="dashboard.php">

Dashboard

</a>

<a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#selling">

Selling

</a>

<div id="selling" class="dropdown-submenu collapse"><!--- selling dropdown-submenu collapse Starts -->

<a class="dropdown-item" href="../selling_orders.php">

Orders

</a>

<a class="dropdown-item" href="proposals/view_proposals.php">

View Proposals

</a>

<a class="dropdown-item" href="requests/buyer_requests.php">

Buyer Requests

</a>

<a class="dropdown-item" href="../revenue.php">

Revenues

</a>

</div><!--- selling dropdown-submenu collapse Ends -->

<a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#buying">

Buying

</a>

<div id="buying" class="dropdown-submenu collapse"><!-- buying dropdown-submenu collapse Starts -->

<a class="dropdown-item" href="buying_orders.php">

Orders

</a>

<a class="dropdown-item" href="purchases.php">

Payments

</a>

<a class="dropdown-item" href="favourites.php">

Favourites

</a>

</div><!-- buying dropdown-submenu collapse Ends -->

<a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#requests">

Requests

</a>

<div id="requests" class="dropdown-submenu collapse"><!-- requests dropdown-submenu collapse Starts -->

<a class="dropdown-item" href="post_request.php">

Post A Request

</a>

<a class="dropdown-item" href="manage_requests.php">

Manage Requests

</a>

</div><!-- requests dropdown-submenu collapse Ends -->

<a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#contacts">

Contacts

</a>

<div id="contacts" class="dropdown-submenu collapse"><!--- contacts dropdown-submenu collapse Starts -->

<a href="manage_contacts.php?my_buyers" class="dropdown-item">

My Buyers

</a>

<a href="manage_contacts.php?my_sellers" class="dropdown-item">

My Sellers

</a>

</div><!--- contacts dropdown-submenu collapse Ends -->

<a class="dropdown-item" href="my_referrals.php">

My Referrals

</a>

<a class="dropdown-item" href="conversations/inbox.php">

Inbox Conversations

</a>

<a class="dropdown-item" href="user.php">

My Profile

</a>

<a class="dropdown-item dropdown-toggle" href="#" data-toggle="collapse" data-target="#settings">

Settings

</a>


<div id="settings" class="dropdown-submenu collapse"><!-- settings dropdown-submenu collapse Starts -->

<a class="dropdown-item" href="settings.php?profile_settings">

Profile Settings

</a>


<a class="dropdown-item" href="settings.php?account_settings">

Account Settings

</a>

</div><!-- settings dropdown-submenu collapse Ends -->

<div class="dropdown-divider"> </div>

<a class="dropdown-item" href="logout.php">

Logout

</a>

</div><!-- dropdown-menu Ends -->

</div><!--- dropdown Ends --->

</li><!--- nav-item Ends -->


</ul><!--- navbar-nav Ends -->

</div><!-- collapse navbar-collapse Ends -->


</div><!-- container Ends -->



</nav><!-- navbar navbar-expand-lg navbar-dark bg-dark fixed-top Ends -->


<?php include("user_nav.php"); ?>


<?php 
    if (isset($userVerified)) {
        if($userVerified=='No'){
            echo "<div class=\"alert alert-warning clearfix\">";//<!-- alert alert-warning clearfix Starts -->

            echo "<div class=\"row\">";//<!-- row Starts -->

            echo "<div class=\"col-md-1 text-center\">";//<!-- col-md-1 text-center Starts -->

            echo "<i class=\"fa fa-exclamation-circle fa-5x d-inline-block\"></i>";

            echo "</div>"; //<!-- col-md-1 text-center Ends -->

            echo "<div class=\"col-md-8 text-lg-left text-sm-center\">";//<!-- col-md-8 text-lg-left text-sm-center Starts -->

            echo "<p>";
            echo "<strong>";
            echo "You need to activate your account to visit this website.";
            echo "</strong>";
            echo "</p>";

            echo "<p>";

            if(isset($userEmail)){
                echo $userEmail;
            } else {
                echo "Please update your email to activate this account.";
            }

            echo "</p>";

            echo "<p>";
            echo "Need Help! <a href=\"contact.php\"> Contact Support </a>";
            echo "</p>";

            echo "</div>";//<!-- col-md-8 text-lg-left text-sm-center Ends -->

            echo "<div class=\"col-md-3\">";//<!-- col-md-3 Starts -->

            echo "<button id=\"send-email\" class=\"btn btn-warning float-right\">";
            echo "Send Email";
            echo "</button>";

            echo "</div>";//<!-- col-md-3 Ends -->

            echo "</div>";//<!-- row Ends -->

            echo "</div>";//<!-- alert alert-warning clearfix Ends -->
        }
    } else {
        echo "Please update your email to activate this account.";
    }
?>




