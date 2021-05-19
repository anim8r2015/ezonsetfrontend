
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"><!-- navbar navbar-expand-lg navbar-dark bg-dark fixed-top Starts -->

<div class="container"><!-- container Starts -->

<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<a class="navbar-brand" href="http://localhost/freelance/index.php"> EzOnset </a>

<a class="navbar-toggler" href="http://localhost/freelance/mobile_categories.php">

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

<li class="nav-item active">

<a href="http://localhost/freelance/home.php" class="nav-link"> Home </a>

</li>

<li class="nav-item">

<a class="nav-link" href="#" data-toggle="modal" data-target="#register-modal">

Become A Seller

</a>

</li>


<li class="nav-item">

<a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">

Sign In

</a>

</li>


<li class="nav-item">

<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#register-modal">

Sign Up

</a>

</li>


</ul><!--- navbar-nav Ends -->

</div><!-- collapse navbar-collapse Ends -->


</div><!-- container Ends -->



</nav><!-- navbar navbar-expand-lg navbar-dark bg-dark fixed-top Ends -->



<?php include("category_nav.php"); ?>



<div class="modal fade" id="register-modal" ><!-- modal fade Starts -->

<div class="modal-dialog"><!-- modal-dialog Starts -->

<div class="modal-form register modal-content"><!-- modal-form register modal-content Starts -->

<div class="modal-header"><!-- modal-header Starts -->

<h5 class="modal-title"> Register Account </h5>

<button class="close" data-dismiss="modal">

<span>&times;</span>

</button>

</div><!-- modal-header Ends -->

<div class="modal-body"><!-- modal-body Starts -->

<form id="formRegistration" action="endpoint_post.php" method="post"><!-- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="form-control-label font-weight-bold"> Full Name </label>

<input type="text" class="form-control" name="name" placeholder="Enter Your Full Name">

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="form-control-label font-weight-bold"> Username </label>

<input type="text" class="form-control" name="u_name" placeholder="Enter Your Username">

<small class="form-text text-muted">

! Important Username can not be changed once an account is registered.

</small>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="form-control-label font-weight-bold"> Email </label>

<input type="email" class="form-control" name="email" placeholder="Enter Your Email">

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="form-control-label font-weight-bold"> Password </label>

<input type="password" class="form-control" name="pass" placeholder="Enter Your Password">

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="form-control-label font-weight-bold"> Confirm Password </label>

<input type="password" class="form-control" name="con_pass" placeholder="Enter Your Password Again To Confirm">

</div><!-- form-group Ends -->

<input type="submit" name="register" class="btn btn-success btn-block" value="Register Here">

</form><!-- form Ends -->

</div><!-- modal-body Ends -->

</div><!-- modal-form register modal-content Ends -->

</div><!-- modal-dialog Ends -->

</div><!-- modal fade Ends -->

<!-- Login form Starts -->
<form id="formLogin" action="endpoint_post.php" method="post">
<div class="modal fade" id="login-modal"><!-- modal fade Starts -->

<div class="modal-dialog"><!-- modal-dialog Starts -->

<div class="modal-form modal-content"><!-- modal-form modal-content Starts -->

<div class="modal-header"><!-- modal-header Starts -->

<h5 class="modal-title"> Login To Your Account </h5>

<button type="button" class="close" data-dismiss="modal">

<span>&times;</span>

</button>


</div><!-- modal-header Ends -->

<div class="modal-body"><!-- modal-body Starts -->


<div class="form-group"><!-- form-group Starts -->

<input type="text" class="form-control" name="seller_user_name" placeholder="Username" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<input type="password" class="form-control" name="seller_pass" placeholder="Password" required>

</div><!-- form-group Ends -->
</form>
<input type="submit" id="loginBtn" name="login" class="btn btn-success btn-block" value="Login">


<script>
	
    jQuery(function($) {
    $('#loginBtn').on('click', function() {
        var $form = $('#formRegistration');
        //var $target = $($form.attr('data-target'));

        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
           
            success: function(data, status) {
                //$target.html(data);
                console.log(data);
              
                }       
            });

        });
    });
</script>

<div class="text-center mt-3"><!-- text-center mt-3 Starts -->

<a href="#" data-toggle="modal" data-target="#register-modal" data-dismiss="modal">

Register

</a>

&nbsp;&nbsp; | &nbsp;&nbsp;

<a href="#" data-toggle="modal" data-target="#forgot-modal" data-dismiss="modal">

Forgot Password

</a>


</div><!-- text-center mt-3 Ends -->

</div><!-- modal-body Ends -->

</div><!-- modal-form modal-content Ends -->

</div><!-- modal-dialog Ends -->

</div><!-- modal fade Ends -->


<div class="modal fade" id="forgot-modal"><!-- modal fade Starts -->

<div class="modal-dialog"><!-- modal-dialog Starts -->

<div class="modal-form modal-content"><!-- modal-form modal-content Starts -->

<div class="modal-header"><!-- modal-header Starts -->

<h5 class="modal-title"> Forgot Password </h5>

<button type="button" class="close" data-dismiss="modal">

<span>&times;</span>

</button>

</div><!-- modal-header Ends -->

<div class="modal-body"><!-- modal-body Starts -->

<p class="text-muted text-center mb-2"><!-- text-muted text-center mb-2 Starts --> 

Enter your EzOnset profile email & we’ll send a password reset link.

</p><!-- text-muted text-center mb-2 Ends --> 

<form action="" method="post"><!-- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<input type="text" class="form-control" name="forgot_email" placeholder="Enter Your Email">

</div><!-- form-group Ends -->

<input type="submit" name="forgot" class="btn btn-success btn-block" value="Submit">

<p class="text-muted text-center mt-2"><!-- text-muted text-center mt-2 Starts -->

Not A Member Yet ?

<a href="#" data-toggle="modal" data-target="#register-modal" data-dismiss="modal">

Join Now

</a>

</p><!-- text-muted text-center mt-2 Ends -->

</form><!-- form Ends -->


</div><!-- modal-body Ends -->

</div><!-- modal-form modal-content Ends -->

</div><!-- modal-dialog Ends -->

</div><!-- modal fade Ends -->




