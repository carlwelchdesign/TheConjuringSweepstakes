<?
	//photo upload path
	$uploadpath = "photos/";

	//Two letter (capital letters) country code
	$COUNTRY = "US";

	// YOUTUBE VIDEO UPLOAD CALLBACK URL
	$CALLBACK_URL = 'http://yourhauntedstories.theconjuringmovie.com/yt.php';
	
	
	$SITE_PATH = 'http://yourhauntedstories.theconjuringmovie.com/';
?>

<script type="text/javascript">

/* FACE BOOK SHARE APP ID */
window.FB_SHARE_APP_ID = 351899028271519;


/* SITE_PATH is the url used for Facebook Share and Twitter Share */
SITE_PATH = '<? echo $SITE_PATH ?>'; 


/* LOGIN RADIUS SOCIAL LOGIN CALLBACK URL */
LOGINRADIUS_SOCIALLOGIN_CALLBACK = 'http://yourhauntedstories.theconjuringmovie.com/signup.php';


/* DO NOT EDIT THIS!!! */
window.UPLOADPATH = '<? echo $uploadpath ?>'; 
window.FACEBOOK_STORY_SHARE_MSG;
window.TWITTER_STORY_SHARE_MSG;	
window.TWITTER_SHARE_MSG;	
window.COUNTRY = '<? echo $COUNTRY ?>';   
</script>