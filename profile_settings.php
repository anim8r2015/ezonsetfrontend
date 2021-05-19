
<h2 class="mb-4"> Profile Settings  </h2>

<form method="post" enctype="multipart/form-data"><!-- form Starts -->

<div class="form-group row"><!-- form-group row Starts --> 

<label class="col-md-3 col-form-label"> Full Name </label>

<div class="col-md-8">

<input type="text" name="seller_name" value="Saad Ahmed" class="form-control" required >

</div>

</div><!-- form-group row Ends --> 

<div class="form-group row"><!-- form-group row Starts --> 

<label class="col-md-3 col-form-label"> Email </label>

<div class="col-md-8">

<input type="text" name="seller_email" value="sad.ahmed22224@gmail.com" class="form-control" required >

</div>

</div><!-- form-group row Ends --> 

<div class="form-group row"><!-- form-group row Starts --> 

<label class="col-md-3 col-form-label"> Country </label>

<div class="col-md-8">

<input type="text" name="seller_country" value="Pakistan" class="form-control" required >

</div>

</div><!-- form-group row Ends --> 

<div class="form-group row"><!-- form-group row Starts --> 

<label class="col-md-3 col-form-label"> Main Conversational Language </label>

<div class="col-md-8">

<select name="seller_language" class="form-control" required>

<option class="hidden"> Select Language </option>

<option value="1"> English </option>

<option value="2"> Hindi </option>

<option value="3"> Urdu </option>

</select>

</div>

</div><!-- form-group row Ends --> 

<div class="form-group row"><!-- form-group row Starts --> 

<label class="col-md-3 col-form-label"> Profile Photo </label>

<div class="col-md-8">

<input type="file" name="profile_photo" class="form-control">

<p class="mt-2">
This photo is your identity on EzOnset<br>
and appears on your profile and proposals.
</p>

<img src="user_images/salman.jpg" width="80" class="img-thumbnail img-circle" >

</div>

</div><!-- form-group row Ends --> 

<div class="form-group row"><!-- form-group row Starts --> 

<label class="col-md-3 col-form-label"> Headline </label>

<div class="col-md-8">

<textarea name="seller_headline" id="textarea-headline" rows="2" class="form-control" maxlength="150"></textarea>

<span class="float-right mt-1">

<span class="count-headline"> 0 </span> / 150 MAX

</span>

</div>

</div><!-- form-group row Ends --> 

<div class="form-group row"><!-- form-group row Starts --> 

<label class="col-md-3 col-form-label"> Description <span class="text-muted"> (SOMETHING ABOUT YOU) </span>  </label>

<div class="col-md-8">

<textarea name="seller_about" id="textarea-about" rows="5" class="form-control" maxlength="300"></textarea>

<span class="float-right mt-1">

<span class="count-about"> 0 </span> / 300 MAX

</span>

</div>

</div><!-- form-group row Ends --> 

<hr>

<button type="submit" name="submit" class="btn btn-success float-right">

<i class="fa fa-user-md"></i> Save Changes

</button>

</form><!-- form Ends -->

<script>

$(document).ready(function(){
	
	$("#textarea-headline").keydown(function(){
		
		var textarea_headline = $("#textarea-headline").val();
		
		$(".count-headline").text(textarea_headline.length);
		
		
	});
	
	$("#textarea-about").keydown(function(){
		
		var textarea_about = $("#textarea-about").val();
		
		$(".count-about").text(textarea_about.length);
		
		
	});
	
	
});

</script>
