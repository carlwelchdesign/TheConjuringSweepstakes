<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<? include('meta.php'); ?>
	
	<link href="css/fonts.css" rel="stylesheet" type="text/css" />
	<link href="css/bvalidator.css" rel="stylesheet" type="text/css" />
	<link rel='stylesheet' type='text/css' href='css/styles.php' />
	<link rel='stylesheet' type='text/css' href='css/signup.php' />
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="js/css_browser_selector.js"></script>
	<!-- <script type="text/javascript" src="js/charCount.js"></script> -->
	<script type="text/javascript" src="js/jquery.bvalidator.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	
	<script type="text/javascript" src="js/lang.js"></script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37595647-3']);
	  _gaq.push(['_setDomainName', 'bonesfanevent.com']);
	  _gaq.push(['_setAllowLinker', true]);
	  _gaq.push(['_trackPageview']);
	 
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	 
	</script>

</head>


<?php
    
	//load classes and config
	require('required.php');
	
	//create connection
    $tmp_obj_db = Database::obtain(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
		
    if($tmp_obj_db->connect_pdo() === false)
    {
		echo "There was problem in connecting to the database.<BR>".$tmp_obj_db->getError();
		return  "";
    }
    
    
	//$salt = getenv('BONESFANEVENT_KEY');
	//is there POST data?
	
	$salt = 'jkfdsfsaKJjdsf';
	
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	    //clean vars
		$username = cleanVar($_POST['username']);
		$username = htmlentities($username, ENT_COMPAT, 'UTF-8');
		$phonenumber = cleanVar($_POST['phonenum']);
		
		$email = cleanVar($_POST['email']);
		
		$birthdate = cleanVar($_POST['birth_year'])."-".cleanVar($_POST['birth_month'])."-".cleanVar($_POST['birth_day']);
		
		//$birthdate = strtotime(cleanVar($_POST['birth_month'])."-".cleanVar($_POST['birth_day'])."-".cleanVar($_POST['birth_year']));
		$sweepstakes_country = $COUNTRY;
		$country = cleanVar($_POST['country']);
		$state = cleanVar($_POST['state']);

		$city = cleanVar($_POST['city']);
		
		$data = array(
		'username' => $username,
		'email' =>  $email,
		'sweepstakes_country' =>  $sweepstakes_country,
		'phonenumber' =>  $phonenumber,
		'birthdate' =>  $birthdate,
		'country' => $country,
		'state' => $state,
		'city' => $city
    );
		
	$tmp_int_last_id = $tmp_obj_db->insert_pdo(TBL_NAME1,$data);
    
    if($tmp_int_last_id === false)
    {
        //do what happens on a failed registration here.  
		
		echo "There was problem in inserting the record.<BR>".$tmp_obj_db->getError();
        //return  "";        
    }

	}else{

	}

	
	//do what happens on a successful registartion here


?>

<body class="thinBG">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=351899028271519";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<div id="container">	

	<div id="storyhead" class="signup submit media">
		<div class="left formhead">
			<a href="index.php" border=0><img src="images/logo_tt.png" /></a>
		</div>
		
		

		
		<div id="socialbox">
			<div class="facebook">
				<a href="http://www.facebook.com/TheConjuringMovie?group_id=0" target="_blank"><img border=0 src="images/facebook.png"></a>
			</div>
			
			<div class="twitter box">
				<a href="http://twitter.com/wbpictures" target="_blank"><img border=0 src="images/twitter.png"></a>
			</div>
			<p id="hashtag">#TheConjuring</p>
			<img id="openingdate" src="images/social_temp.png"/>
		</div>
		
		

		<div id="signupFormIntro">
			<div id="submitaquestion">Your Haunted Story</div>
			
			<p id="submitdescription">Have you or someone you know had a paranormal experience or lived in a haunted place? Tell us your scariest tale for a chance to win a trip to the premiere.</p>
			
			<img class="signupformline" src="images/signupformline.png"/>
		
		
		
			<div id="numberdots">
		
				<div class="box first">
					<p class="title">Register</p>
					<p class="desc">Sign up with Facebook, Twitter, or Google+ and enter for a chance to win a trip to the premiere!</p>
				</div>
				
				<div class="box second">
					<p class="title">Upload</p>
					<p class="desc">Submit your scary story, photo, or video .</p>
				</div>
				
				<div class="box third">
					<p class="title">Finish</p>
					<p class="desc">Thank you for entering!</p>
				</div>
		
			</div>
			
		</div>
	</div>
	
	
	<!--signup form -->
	<div class="bgtexure">
		<div class='blackbox likebox'></div>
		
		<div id="thanksforentering" class="sumbit">
			<p class="whichcontent thanksforentering">Thanks For Entering The Sweepstakes!</p>
			<img id="blackline_rev" src="images/blackline_rev.png"/>
			<p id="thankyoudesc">You can continue from here and submit your scary story, photo or video OR go back to the home page and checkout others scary stories.</p>
			
			<div id="buttoncontainer">
				<div id="backhome" class="button_sq">BACK TO HOME</div> <div id="continue" class="button_sq">CONTINUE</div>
			</div>
		
		
		
		</div>
		
		
		<div id="signupForm" class="sumbit">
			<div id="breadcrumb" class="second">
				
				<div class="breadlabel one">1. REGISTER</div>
				<div class="breadlabel two">2. UPLOAD</div>
				<div class="breadlabel three">3. FINISH</div>
				
			</div>
			<p id="submityourstory">Submit Your Story</p>
			<img id="blackline_rev" src="images/blackline_rev.png"/>

			<form action="thankyou.php" method="POST" enctype="multipart/form-data" name="bones" id="bones"> 
				<input type="hidden" name="id" value="<? echo $tmp_int_last_id ?>">
				<input type="hidden" name="username" value="<? echo $username ?>">
				
				<!--
<span id="usernamelabel" class="formLabel">Story Title</span>
				<input name="title" id="title" type="text"  class="textInputTitle" data-bvalidator="required" data-bvalidator-msg="Where's your title?"/>
-->
				
				<p class="whichcontent chooseyourcontent">Choose the content you wish to upload:</p>
				
				<div id="chooser">
					<div id ="choose_story" rel="submitStory" class="choose">
						<p>Story</p>
						<div class="button"></div>
					</div>
					
					<div id ="choose_photo" rel="submitPhoto" class="choose">
						<p>Photo</p>
						<div class="button"></div>
					</div>
					
					<div id ="choose_video" rel="submitVideo" class="choose">
						<p>Video</p>
						<div class="button"></div>
					</div>
				
				</div>
			
			
				<img id="blackline" src="images/blackline.png"/>
			
			
				<div id="submitStory" class="submitTypes" style="display: none;">
					<div class="submitlabels">
						<span>Written Story</span>
						<img src="images/book.png">
						
					</div>
					
					
					<span id="writeyourstory" class="formLabel">Type Your Story Below </span>
					<!-- <input name="story" id="story" type="text" cols="100" rows="5" class="textInputName" data-bvalidator="required" data-bvalidator-msg="Where's your story?"/> -->
					
					<textarea id="story" id="story" dir="ltr" cols="80" rows="30" name="story" class="textInputName" data-bvalidator="maxlength[4000],required" data-bvalidator-msg="Where's your story?"></textarea>			
					
					
					<img id="blackline_rev_a" src="images/blackline_rev.png">
	
				</div>
							
				<div id="submitPhoto" class="submitTypes" style="display: none;">
					<div class="submitlabels">
						<span>Image Upload</span>
						<img src="images/camera.png">
					</div>	
					
									
					<p>Select an image file (jpg, gif, png) from your computer to upload to the website.</p>
					
					<input type="file" name="file" id="IEfile" class="textInputName" data-bvalidator="required" data-bvalidator-msg="Where's your photo?" accept="image/gif, image/jpeg, image/png"/>

					<div class="upload">
						<input type="file" name="file" id="file" class="textInputName" data-bvalidator="required" data-bvalidator-msg="Where's your photo?" accept="image/gif, image/jpeg, image/png"/>
						<div id="uploadlabel">BROWSE FILE</div>
					</div>

					
					<div id="filename"></div>
					
					

					
					<span id="filenamedesclabel" class="formLabel">Image Description</span>
					<input name="photodesc" id="photodesc" type="text"  class="textInputTitle"/>
				
					<img id="blackline_rev_a" src="images/blackline_rev.png">
				
				</div>
				<div id="submitVideo" class="submitTypes" style="display: none;">
					<div class="submitlabels">
						<span>Video Upload</span>
						<img src="images/videocamera.png">
					</div>		
					
					<p>Record your video in your favorite program. Click the browse button to select your video to upload to your YouTube account.</p>

					<div id="browsefilevideo">BROWSE FILE</div>

					<span id="videolabel" class="formLabel">Your YouTube Video ID is:</span>
					<input name="video" id="video" type="text"  class="textInputName" readonly data-bvalidator="required" data-bvalidator-msg="Where's your video?" style="border:0;background:transparent"/>
					
					
					<span id="videonamedesclabel" class="formLabel">Video Description</span>
					<input name="videodesc" id="videodesc" type="text"  class="textInputTitle"/>
				
				
					<img id="blackline_rev_a" src="images/blackline_rev.png">
				</div>
				
				<div class="formRow terms">
					<!-- <p id="termslabel_L">CHECK BELOW IF YOU WOULD LIKE TO ENTER THE SWEEPSTAKES</p> -->
					<input id="tnc" name="tnc" type="checkbox" value="tnc" data-bvalidator="required" data-bvalidator-msg="You must agree to the terms and conditions."/>
					<span id="termslabel" class="formLabelAgree sumbitmedia"> By uploading a file, I confirm that I own and/or have all necessary rights in this content, including permission from all individuals depicted in or that contributed to the content, sufficient for Warner Bros. Entertainment Inc. (“Warner Bros.”) to use it for commercial purposes.  I understand and acknowledge that as further detailed in the Warner Bros. <a href="http://www.warnerbros.com/privacy/terms.html"  target="_blank" tabindex="1100" >Terms of Use</a>, I am granting Warner Bros., including its licensees and assignees, the irrevocable, perpetual, royalty-free and non-exclusive right and license to use this content for the worldwide marketing and advertising of The Conjuring in all media now known or hereafter devised, without any compensation or other obligation to me or others depicted.  I reviewed the content <a href="sweepstakes_rules.html" target="_blank" tabindex="1200" >Submission Requirements</a> in the <a href="http://www.warnerbros.com/privacy/terms.html"  target="_blank" tabindex="1300" >Terms of Use</a> and confirm that the content complies with these requirements.</span> 
				</div>
				<div id="submiterror">You need to select Story, Photo, or Video before you can submit your entry.</div>



								
								
								
				<div class="formRow buttonbox">
				
					<div id="cancelBtn" class="button_sq">CANCEL</div>
					<input id="submitBtn" class="button_sq" name="submit" type="submit" value="SUBMIT" />
					
					<!-- <div id="submitOff" class="button_sq">SUBMIT</div> -->
				</div>
				
			</form>
	
		</div>
		<div class="itemshare blackbox">
	</div>
	<!--end of form -->  
  
	

	
</div>

<? include('footer.html'); ?>



<script type="text/javascript" src="js/functions.submit.js"></script>  


</body>
</html>
