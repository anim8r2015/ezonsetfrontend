
<h1 class="mb-4"> Account Settings </h1>

<h5 class="mb-4"> Paypal For Withdrawing Revenues  </h5>

<form method="post" class="clearfix mb-3"><!-- form clearfix mb-3 Starts -->

<div class="form-group row"><!-- form-group row Starts -->

<label class="col-md-4 col-form-label"> Enter Paypal Email </label>

<div class="col-md-8">

<input type="text" name="seller_paypal_email" value="fixmywebsite@EzOnset.com" placeholder="Enter Paypal Email Address Where Your Revenues Sent To" class="form-control" required >

</div>

</div><!-- form-group row Ends -->

<button type="submit" name="submit_paypal_email" class="btn btn-success float-right">

<i class="fa fa-user-md"></i> Change Paypal Email

</button>

</form><!-- form clearfix mb-3 Ends -->


<hr>

<h5 class="mb-4"> Change Password </h5>

<form method="post" class="clearfix mb-3"><!-- form clearfix mb-3 Starts -->

<div class="form-group row"><!-- form-group row Starts -->

<label class="col-md-4 col-form-label"> Enter Current Password </label>

<div class="col-md-8">

<input type="text" name="old_pass" class="form-control" required >

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<label class="col-md-4 col-form-label"> Enter New Password </label>

<div class="col-md-8">

<input type="text" name="new_pass" class="form-control" required >

</div>

</div><!-- form-group row Ends -->

<div class="form-group row"><!-- form-group row Starts -->

<label class="col-md-4 col-form-label"> Enter New Password Again </label>

<div class="col-md-8">

<input type="text" name="new_pass_again" class="form-control" required >

</div>

</div><!-- form-group row Ends -->

<button type="submit" name="change_password" class="btn btn-success float-right">

<i class="fa fa-user-md"></i> Change Password

</button>

</form><!-- form clearfix mb-3 Ends -->

<hr>

<h5 class="mb-1"> ACCOUNT DEACTIVATION </h5>


<ul class="list-unstyled mb-3 float-right"><!-- list-unstyled mb-3 float-right Starts -->

<li class="lead">

<strong> What happens when you deactivate your account? </strong>

</li>

<li> Your profile and proposals won't be shown on EzOnset anymore. </li>

<li> Any open orders will be cancelled and refunded. </li>

<li> You won't be able to re-activate your proposals. </li>

<li> You won't be able to restore your account. </li>

</ul><!-- list-unstyled mb-3 float-right Ends -->

<div class="clearfix"></div>

<form method="post">

<div class="form-group"><!-- form-group Starts -->

<label> Why Are You Leaving? </label>

<select name="deactivate_reason" class="form-control" required>

<option class="hidden"> Choose A Reason </option>

<option> The quality of service was less than expected </option>

<option>I have no time to use it</option>

<option>I can’t find what I am looking for</option>

<option>I had a negative experience with a seller / buyer</option>

<option>I found the site difficult to use</option>

<option>The level of customer service was less than expected</option>

<option>I have another EzOnset account</option>

<option>I'm not receiving enough orders</option>

<option>Other</option>

</select>

</div><!-- form-group Ends -->

<button type="submit" name="deactivate_account" class="btn btn-danger float-right">

<i class="fa fa-user-md"></i> Deactivate Account

</button>

</form>
