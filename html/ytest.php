<?php
session_start();

require_once 'Zend/Loader.php'; // the Zend dir must be in your include_path
Zend_Loader::loadClass('Zend_Gdata_YouTube');
Zend_Loader::loadClass('Zend_Gdata_AuthSub');

function getAuthSubRequestUrl()
{
	$next = 'http://dev.yourhauntedstories.theconjuringmovie.com/yt.php';
	$scope = 'http://gdata.youtube.com';
	$secure = false;
	$session = true;
	return Zend_Gdata_AuthSub::getAuthSubTokenUri($next, $scope, $secure, $session);
}


//generate link if no session or token has been requested
if (!isset($_SESSION['sessionToken']) && !isset($_GET['token']) ){
    
  echo '<a href="' . getAuthSubRequestUrl() . '">Login to YouTube API!</a>';
  
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
  $myVideoEntry->setVideoTitle('My Test Movie');
  $myVideoEntry->setVideoDescription('My Test Movie');
  $myVideoEntry->setVideoCategory('Autos'); // The category must be a valid YouTube category!

  $tokenHandlerUrl = 'http://gdata.youtube.com/action/GetUploadToken';
  $tokenArray = $yt->getFormUploadToken($myVideoEntry, $tokenHandlerUrl);
  $tokenValue = $tokenArray['token'];
  $postUrl = $tokenArray['url'];

  // place to redirect user after upload
  $nextUrl = 'http://dev.yourhauntedstories.theconjuringmovie.com/ytest.php';

  // build the form
  echo '<form action="'. $postUrl .'?nexturl='. $nextUrl .
          '" method="post" enctype="multipart/form-data">'. 
          '<input name="file" type="file"/>'. 
          '<input name="token" type="hidden" value="'. $tokenValue .'"/>'.
          '<input value="Upload Video File" type="submit" />'. 
          '</form>';

  if(isset($_GET['status']) && $_GET['status'] == '200'){
  		echo '<h1>Video Uploaded</h1>';
  }

}
?>