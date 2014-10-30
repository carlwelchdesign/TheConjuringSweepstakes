<?php
session_start();
require_once 'Zend/Loader.php'; // the Zend dir must be in your include_path
Zend_Loader::loadClass('Zend_Gdata_YouTube');
Zend_Loader::loadClass('Zend_Gdata_AuthSub');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<html>
<head>
<? 
include('meta.php'); 
?>


<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/signup.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="js/css_browser_selector.js"></script>


<script>

	function sendValue (s){
		//console.log(s);
		//alert(s);
		var selvalue = s;


		window.opener.document.getElementById('videolabel').style.display="block";
		window.opener.document.getElementById('video').style.display="block";
		window.opener.document.getElementById('browsefilevideo').style.display="none";
		window.opener.document.getElementById('video').value = selvalue;
		//alert(window.opener.document.getElementById('video').value);
		window.close();
	}
	

</script>

</head>
<body class="youtube">

<div id="storyhead" class="story">
	
	<div class="left">
		<img src="images/logo_tt.png" />
	</div>
	<!-- <img id="socialtemp" src="images/social_temp.png"/> -->
</div>


<div class="item ytuploader" style="display: block;">
<div class="blackbox likebox"></div>
<p class="itemtitle"></p>
<p class="videoUser"></p>
<p class="story yt">
  




<?php



function getAuthSubRequestUrl($CALLBACK_URL)
{
	$next = $CALLBACK_URL;
	$scope = 'http://gdata.youtube.com';
	$secure = false;
	$session = true;
	return Zend_Gdata_AuthSub::getAuthSubTokenUri($next, $scope, $secure, $session);
}

  if(isset($_GET['status']) && $_GET['status'] == '200'){
  		echo '<h1>Video Uploaded</h1>';
  		//echo $_GET['id'];
  	
  		//echo '<a href="javascript:hey('.$_GET['id'].');">CLOSE WINDOW</a>'; 
  		
  		//echo '<input type=button value="Close" onClick="javascript:sendValue('.$_GET['id'].');">';
  		
  		
  		echo '<form name="selectform">
  				<input id="details" name="details" value="'.$_GET['id'].'">
  				
  			</form> ';
  			
  			
  		echo '<script>
  				jQuery("#ytform").hide();
  				sendValue(jQuery("#details").attr("value"));
  			  </script>';
  			  
  	}else if (!isset($_SESSION['sessionToken']) && !isset($_GET['token']) ){
    
	  echo '
	  <p class="whichcontent"><span id="logintoyour">Log into your</span <span class="ytlogo"><img id="ytlogo" src="images/yt-brand-bw-logo.png"></span> <span id="ytaccount">account</span></p>
	  <img id="blackline" src="images/blackline.png">
	  <p id="youtubedesc" style="text-align:center;">YouTube account is required. Your video cannot already exist on or be uploaded from YouTube. Make sure you\'ve created a Youtube Channel to upload your videos to. Also, videos cannot be uploaded from any other online source. A locally stored copy of a video file is required to upload a video.</p>
	  <p class="button_yt"><a class="button_yt" href="' . getAuthSubRequestUrl($CALLBACK_URL) . '">LOG INTO YOUTUBE</a></p>
	  <script type="text/javascript" src="js/lang.js"></script>
	  
	  ';
	  
	  //if token has been requested but not saved to a session then save the new token to a session 
	} else if (!isset($_SESSION['sessionToken']) && isset($_GET['token'])) {
	  
	  $_SESSION['sessionToken'] = Zend_Gdata_AuthSub::getAuthSubSessionToken($_GET['token']);
	
	} 


if(isset($_SESSION['sessionToken'])) {

  //authenticat with youtube

  $httpClient = Zend_Gdata_AuthSub::getHttpClient($_SESSION['sessionToken']);
  $developerKey = 'AIzaSyBqu2Nv-2V5TxzXAD949wwN2lBmhJC00_0';
  $applicationId = 'theconjuringmovieyt';

  $yt = new Zend_Gdata_YouTube($httpClient, $applicationId, NULL, $developerKey);

  // create a new VideoEntry object
  $myVideoEntry = new Zend_Gdata_YouTube_VideoEntry();
  $myVideoEntry->setVideoTitle('My Conjuring Movie Sweepstakes entry.');
  $myVideoEntry->setVideoDescription('My Scary Story');
  $myVideoEntry->setVideoCategory('Autos'); // The category must be a valid YouTube category!

  $tokenHandlerUrl = 'http://gdata.youtube.com/action/GetUploadToken';
  $tokenArray = $yt->getFormUploadToken($myVideoEntry, $tokenHandlerUrl);
  $tokenValue = $tokenArray['token'];
  $postUrl = $tokenArray['url'];

  // place to redirect user after upload
  $nextUrl = $CALLBACK_URL;

  // build the form
 // echo $_GET['status'];
  if(isset($_GET['status']) && $_GET['status'] == '200'){
  		echo '<h1>Video Uploaded</h1>';
  		//echo $_GET['id'];
  	
  		//echo '<a href="javascript:hey('.$_GET['id'].');">CLOSE WINDOW</a>'; 
  		
  		//echo '<input type=button value="Close" onClick="javascript:sendValue('.$_GET['id'].');">';
  		

  		
  		echo '<form name="selectform">
  				<input id="details" name="details" value="'.$_GET['id'].'">
  				
  			</form> ';
  			
  			
  		echo '<script>
  				jQuery("#ytform").hide();
  				sendValue(jQuery("#details").attr("value"));
  			  </script>
  			  ';
  		
  }else{
	  echo '
	  <p class="whichcontent"><span id="logintoyour">Log into your</span <span class="ytlogo"><img id="ytlogo" src="images/yt-brand-bw-logo.png"></span> <span id="ytaccount">account</span></p>
	  <img id="blackline" src="images/blackline.png">
	  <p id="youtubedesc" style="text-align:center;">YouTube account is required. Your video cannot already exist on or be uploaded from YouTube. Make sure you\'ve created a Youtube Channel to upload your videos to. Also, videos cannot be uploaded from any other online source. A locally stored copy of a video file is required to upload a video.</p>';
	  
	  
	  
	  echo  '<form id="ytform" action="'. $postUrl .'?nexturl='. $nextUrl .'" method="post" enctype="multipart/form-data">'.
	  		'	<input type="file" name="file" id="IEfile" class="textInputName" accept="video/*" />'.
	  		'	<div class="upload yt">'.
	  		'		<input id="file" name="file" type="file" accept="video/*"/>'.
	  		'		<div id="uploadlabel">BROWSE FILE</div>'.
	  		'	</div>'.
	  		'	<input name="token" type="hidden" value="'. $tokenValue .'"/>'.
	  		' 	<input id="submitBtn" class="uploadvideo" value="UPLOAD VIDEO" type="submit" />'. 
	  		'</form>'.
	  		'<div id="filename"></div></p>
	  		
	  		<script type="text/javascript" src="js/lang.js"></script>
	  		
	  		';


	  
  }

}
?>



</p>
	
</div>


<script>

$(document).ready(function () {
	//$('#video').hide();
	
	$('#submitBtn').hide();
	
	$('#uploadlabel').click(function() {
	
		$('#file').click();

	});	
	//$('.ie .button_yt.submitBtn').show();
	
	jQuery("input[type=file]").change(function () {
	
		$('.upload.yt').hide();
    	$('#IEfile').hide();
    	$('.ytuploader div.upload').hide();
    	
		$('#submitBtn').show();
		//$('.upload.yt').show();
		
	});

	if($('html').hasClass('ie')){
		$('.upload.yt').remove();
	}else{
		$('#IEfile').remove();
	}

	
	$('input[type=file]').change(function(e){
		$in=$(this);
		inputNode = $in.val().replace("C:\\fakepath\\", "");
		$('#filename').html(inputNode);
	});
	
});	
</script>	
</body>
</html>