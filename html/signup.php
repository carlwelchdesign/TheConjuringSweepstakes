<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<? include('meta.php'); ?>
	
	<link href="css/fonts.css" rel="stylesheet" type="text/css" />
	<link rel='stylesheet' type='text/css' href='css/styles.php' />
	<link rel='stylesheet' type='text/css' href='css/signup.php' />

	<link href="css/bvalidator.css" rel="stylesheet" type="text/css" />
	
	
	    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/css_browser_selector.js"></script>
	<script type="text/javascript" src="js/jquery.bvalidator.js"></script>
	
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	
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

 
<?php include('inc/LoginRadiusVars.php'); ?>
</head>
<body class="thinBG">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=351899028271519";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	
<div id="container" >	

	<div id="storyhead" class="signup">
		<div class="left formhead">
			<a href="index.php" border="0"><img src="images/logo_tt.png" /></a>
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
					<p class="desc">You can continue from here and submit your scary story, photo, or video OR go back to the home page and checkout other's scary stories.</p>
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
		<div id="signupForm" class="">
			<div id="breadcrumb" class="first">
				
				<div class="breadlabel one">1. REGISTER</div>
				<div class="breadlabel two">2. UPLOAD</div>
				<div class="breadlabel three">3. FINISH</div>
				
			</div>
				
			<p class="signuptitles">SIGN UP WITH:</p>
			
			
			
			
		
			
			<div id="interface_containert">
				<a href="JavaScript:openPopup('https://conjuringsweepstakesscarystory.hub.loginradius.com/RequestHandlor.aspx?apikey=a4cfe549-bac9-4aaa-90f8-db5d34d5727d&provider=facebook&same_window=0&callback='+LOGINRADIUS_SOCIALLOGIN_CALLBACK)"><img src="images/login_facebook.png"/></a>
				<a href="JavaScript:openPopup('https://conjuringsweepstakesscarystory.hub.loginradius.com/RequestHandlor.aspx?apikey=a4cfe549-bac9-4aaa-90f8-db5d34d5727d&provider=twitter&same_window=0&callback='+LOGINRADIUS_SOCIALLOGIN_CALLBACK)"><img src="images/login_twitter.png"/></a>
				<a href="JavaScript:openPopup('https://conjuringsweepstakesscarystory.hub.loginradius.com/RequestHandlor.aspx?apikey=a4cfe549-bac9-4aaa-90f8-db5d34d5727d&provider=google&same_window=0&callback='+LOGINRADIUS_SOCIALLOGIN_CALLBACK)"><img src="images/login_google.png"/></a>

			</div>
			
			
			
			
			
			
			
			
			
			<div class="orsignup">
				<img class="short_line" src="images/short_line.png"/><p class="signuptitles short_line">OR SIGN UP:</p><img class="short_line" src="images/short_line.png"/>
			</div>
			
			<form action="submit.php" method="post" enctype="application/x-www-form-urlencoded" name="bones" id="bones"> 
			
				<div class="formRow">
	
					<span id="usernamelabel" class="formLabel">Username*</span>
					<input name="username" id="username" type="text"  class="textInput" tabindex="100" data-bvalidator="required" data-bvalidator-msg="A valid username is required." value="<? echo $ProfileName ?>"/>
	
				</div>
							
				<div class="formRow">
					<span id="emaillabel" class="formLabel">Email*</span>
					<input name="email" id="email" type="text"  class="textInput" tabindex="200" data-bvalidator="required,email" data-bvalidator-msg="A valid email address is required." value="<? echo $EmailValue ?>"/>
				</div>
				
				<div class="formRow">
					<span id="confirmemail" class="formLabel">Confirm Email*</span>
					<input name="email" id="email" type="text"  class="textInput confirmemail" tabindex="300" data-bvalidator="equalto[email],required" data-bvalidator-msg="Email address does not match." value="<? echo $EmailValue ?>"/>
					

					
				</div>
				
				<div id="birthDateSection" class="formRow">
					<span id="birthdatelabel" class="formLabel">Birth Date*</span>
					
					
					
										
					
	
				</div>	
				
				<div class="formRow">
					<span id="phonenumlabel" class="formLabel">Phone Number*</span>

					<input name="phonenum" id="phonenum" class="phonenum" type="text"  class="textInput" tabindex="500" onkeyup="enterNumber('phonenum');" data-bvalidator="required" data-bvalidator-msg="A phone number is required" value="<? echo $phonenumber ?>"/>
				</div>		
				
				
				
				<div class="formRowShort">	
				
				
					<div class="formRow short city">
						<span id="citylabel" class="formLabel">City*</span>
						<input name="city" id="city" type="text"  class="textInput" tabindex="600" data-bvalidator="required" data-bvalidator-msg="A valid city is required." value="<? echo $City ?>"/>
					</div>
					
					
						
					<div id="countryORstate" class="formRow short">
					
						<? 
						if($COUNTRY == "US"){
							include('us_states_dropdown.html');
						}else{
							include('countries_dropdown.html');
						}
						?>
					</div>
					
				
				
				</div>
				

				
				
<div class="formRow terms">
					<p id="termslabel_L">CHECK BELOW IF YOU WOULD LIKE TO ENTER THE SWEEPSTAKES</p>
					<input id="tnc" name="tnc" type="checkbox" value="tnc" data-bvalidator="required" data-bvalidator-msg="You must agree to the terms and conditions."/>
					<span id="termslabel" class="formLabelAgree">NO PURCHASE NECESSARY TO ENTER OR WIN. A PURCHASE WILL NOT INCREASE YOUR CHANCES OF WINNING. ODDS OF WINNING WILL DEPEND ON THE TOTAL NUMBER OF ENTRIES RECEIVED. VOID IN AK, HI, WHERE PROHIBITED BY LAW.  Sweepstakes only open to legal residents of the 48 contiguous U.S. or D.C., 18 years and older. Sweepstakes begins on or about 10:00 a.m. PDT on 6/28/13 and ends at 5:00 p.m. PDT on 7/1/13. ARV of all prizes: $2,650. Subject to full <a href="sweepstakes_rules.html" target="_blank" tabindex="1200" >Official Rules</a>. Sponsor: Warner Bros. Entertainment Inc., 4000 Warner Boulevard, Burbank, CA 91505.</span>
				</div>

				

								
				<div class="formRow buttonbox">
				
					<div id="cancelBtn" class="button_sq" tabindex="1100"><a href="index.php">CANCEL</a></div>
                    
					<input id="submitBtn" name="submit" tabindex="1200" class="inputBtn" type="submit" value="NEXT>" />
				</div>
				
			</form>
		</div>
		<div class="itemshare blackbox"></div>

	</div>
	<!--end of form -->  
  

	
</div>

<div id="agegate">
	<div id="agebox">
		<p class="title">SORRY!</p>
		<p class="desc">Sorry, you must be 18 or older to enter this contest.<br/>On the bright side, we won't stop you from reading the scary stories.</p>
		
		<p class="gobackhome button_sq">RETURN TO HOME</p>
	</div>
</div>


<div id="mobilblock">
	<div id="agebox">
		<p class="title">SORRY!</p>
		<p class="desc">Mobile devices are not supported<br/>Please use your desktop computer to submit your story. <br/>Thank you!</p>
		
		<p class="gobackhome button_sq">RETURN TO HOME</p>
	</div>
</div>


<? //include('footer.html'); ?>
<div class="footer">
	<div class="links right">
        <div class="credits"> 
            Credits
        </div>
        <div class="legal">
            <a href="http://www.warnerbros.com/#/page=privacy-policy/" target="_blank">Privacy Policy</a>
            <a href="http://www.warnerbros.com/#/page=terms-of-use/" target="_blank">Terms of Use</a>
            <a href="https://registration.warnerbros.com/yk5eu/MainPage.html" target="_blank">Register</a>
        </div>
    </div>
    <div class="date middle" style="padding-left: 321px !important;">
        <!-- <div class="release-date">July 19</div> -->
        &copy; 2013 Warner Bros. Ent. All Rights Reserved.
    </div>

</div>

<div class="billing-block">
    <div class="close">X CLOSE</div>
    <img border=0 src="images/billing-block.gif" width=895 height=149 alt="billing block">
    <div class="rating">THIS FILM IS NOT YET RATED</div>
</div>

<div class="overlay">
</div>

<script>
$(document).ready(function () {

    $('.credits').click(function(){
    	$('.billing-block').slideDown();
    });

    $('.billing-block').click(function(){
    	$(this).slideUp();
    }); 

    $('.social.left .sharing').toggle(function(){
            $('.share-sites').animate({'margin-left': 0}, 500);
            $(this).addClass('open');
        }, function() {
            $('.share-sites').animate({'margin-left': '-345px'}, 500);
            $(this).removeClass('open');
            
    }); 

    // function sharing() {     
    //     $('.social.left .sharing').show();
    // }

    //  // use setTimeout() to execute
    //  setTimeout(sharing, 1000)
    

    }); 
</script>


<script src="js/functions.signup.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	// Disable Mobile
	if($('html').hasClass('ipad')||$('html').hasClass('iphone')){
		
		//$('#submitstory').remove();
		$('#mobilblock').fadeIn();
	}

	  // place this within dom ready function




});	


</script>
<script type="text/javascript" src="js/lang.js"></script>
<script>
	//$('.middle').css('padding-left', '21px !important');
	
</script>
</body>
</html>