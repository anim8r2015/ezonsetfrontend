<!DOCTYPE html>

<html>

<head>

<title> EzOnset / Change Password </title>

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

<div class="container"><!--- container Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12 mt-5 mb-5"><!--- col-md-12 mt-5 mb-5 Starts --->

<div class="card change-pass"><!--- card change-pass Starts -->

<div class="card-header text-center"><!-- card-header text-center Starts -->

<h3> Dear Fixmywebsite , Change Password </h3>

</div><!-- card-header text-center Ends -->

<div class="card-body d-flex justify-content-center"><!--- card-body d-flex justify-content-center Starts -->

<form method="post" class="col-md-8"><!-- form col-md-8 Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>Enter Your Password</label>

<div class="input-group"><!--- input-group Starts --->

<span class="input-group-addon"><!--- input-group-addon Starts --->

<i class="fa fa-check tick1 text-success"></i>

<i class="fa fa-times cross1 text-danger"></i>

</span><!--- input-group-addon Ends --->

<input type="password" name="new_pass" id="password" class="form-control" required>

<span class="input-group-addon"><!-- input-group-addon Starts -->

<div id="meter_wrapper"><!-- meter_wrapper Starts -->

<span id="pass_type"></span>

<div id="meter"></div>

</div><!-- meter_wrapper Ends -->

</span><!-- input-group-addon Ends -->

</div><!--- input-group Ends --->

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label>Enter Your New Password Again</label>

<div class="input-group"><!--- input-group Starts --->

<span class="input-group-addon"><!--- input-group-addon Starts --->

<i class="fa fa-check tick2 text-success"></i>

<i class="fa fa-times cross2 text-danger"></i>

</span><!--- input-group-addon Ends --->

<input type="password" name="new_pass_again" id="confirm_password" class="form-control" required>

</div><!--- input-group Ends --->

</div><!-- form-group Ends -->

<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="submit" class="btn btn-primary">

<i class="fa fa-user-md"></i> Change Password

</button>

</div><!-- text-center Ends -->

</form><!-- form col-md-8 Ends -->

</div><!--- card-body d-flex justify-content-center Ends -->

</div><!--- card change-pass Ends -->

</div><!--- col-md-12 mt-5 mb-5 Ends --->

</div><!-- row Ends -->

</div><!--- container Ends -->

<?php include("includes/footer.php"); ?>


<!--- Password Strength checker code starts  --->

<script>

$(document).ready(function(){

$("#password").keyup(function(){

check_pass();

});

});

function check_pass() {

var val = document.getElementById("password").value;

var meter = document.getElementById("meter");

var no=0;

if(val!=""){

// If the password length is less than or equal to 6
if(val.length<=6)no=1;

// If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

// If the password length is greater than 6 and contain alphabet,number,special character respectively
if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

// If the password length is greater than 6 and must contain alphabets,numbers and special characters
if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

if(no==1){

$("#meter").animate({width:'50px'},300);

meter.style.backgroundColor="red";

document.getElementById("pass_type").innerHTML="Very Weak";

}

if(no==2){

$("#meter").animate({width:'100px'},300);

meter.style.backgroundColor="#F5BCA9";

document.getElementById("pass_type").innerHTML="Weak";

}

if(no==3){

$("#meter").animate({width:'150px'},300);

meter.style.backgroundColor="#FF8000";

document.getElementById("pass_type").innerHTML="Good";

}

if(no==4){

$("#meter").animate({width:'200px'},300);

meter.style.backgroundColor="#00FF40";

document.getElementById("pass_type").innerHTML="Strong";

}

}

else{

meter.style.backgroundColor="";

document.getElementById("pass_type").innerHTML="";

}

}

</script>



<!--- Password Strength checker code Ends  --->


<!--- Tick and Cross code starts  --->

<script>

$(document).ready(function(){

$('.tick1').hide();

$('.cross1').hide();

$('.tick2').hide();

$('.cross2').hide();

$('#confirm_password').focusout(function(){

var password = $('#password').val();

var confirmPassword = $('#confirm_password').val();

if(password == confirmPassword){

$('.tick1').show();

$('.cross1').hide();

$('.tick2').show();

$('.cross2').hide();

}
else{

$('.tick1').hide();

$('.cross1').show();

$('.tick2').hide();

$('.cross2').show();

}

});

});

</script>



<!--- Tick and Cross code Ends  --->


</body>

</html>