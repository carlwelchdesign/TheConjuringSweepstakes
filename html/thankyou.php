<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
		
	if (get_magic_quotes_gpc()) {
	    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
	    while (list($key, $val) = each($process)) {
	        foreach ($val as $k => $v) {
	            unset($process[$key][$k]);
	            if (is_array($v)) {
	                $process[$key][stripslashes($k)] = $v;
	                $process[] = &$process[$key][stripslashes($k)];
	            } else {
	                $process[$key][stripslashes($k)] = stripslashes($v);
	            }
	        }
	    }
	    unset($process);
	}
	
	
	
	
	
	include('lang/settings.php'); 
	
	$success = 1;
	//print '<pre>'; print_r($_FILES); print '</pre>';
	
	
	if($_FILES["file"]["name"]!=null){
	
	
	

		$newFileName = time()."_".urlencode($_FILES["file"]["name"]);		 
		$tempFile =  $_FILES['file']['tmp_name'];  // path of the temp file created by PHP during upload
		$imginfo_array = getimagesize($tempFile);   // returns a 0 if not a valid image file
		 
		if ($imginfo_array !== 0) {
		    $mime_type = $imginfo_array['mime'];
		    
		    /* echo $mime_type; */
		    switch($mime_type) {
		 
			    case "image/gif":
					$success = 1;
					break;
			    
			    case "image/jpeg":
					$success = 1;
					break;
			    
			    case "image/pjpeg":
					$success = 1;
					break;
			    
			    case "image/x-png":
					$success = 1;
					break;
			    
			    case "image/png":
					$success = 1;
					break;
			    
			    case "image/jpg":
					$success = 1;
					break;
		    }
		   
		}
		else {
		    //echo "This is not a valid image file";
		    $success = 0;
		}


		if($success){
		
			  	move_uploaded_file($_FILES["file"]["tmp_name"], $uploadpath . $newFileName);

		}

	}
	
	


	require('required.php');
	
	//create connection
    $tmp_obj_db = Database::obtain(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
		
    if($tmp_obj_db->connect_pdo() === 0)
    {
            echo "There was problem in connecting to the database.<BR>".$tmp_obj_db->getError();
            return  "";
    }
    

	
	$salt = 'jkfdsfsaKJjdsf';
	
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
	    //clean vars
	    $id = cleanVar($_POST['id']);
	    $storyAuthor = cleanVar($_POST['username']);
	    
	    //addslashes($str);
		//$title = cleanVar($_POST['title']);
		
		$story = cleanVar($_POST['story']);
		$story = addslashes($story);
		
		$video = cleanVar($_POST['video']);
		
		$phonenumber = cleanVar($_POST['phonenum']);
		
		$videodesc = cleanVar($_POST['videodesc']);
		$videodesc = addslashes($videodesc);
		
		$photodesc = cleanVar($_POST['photodesc']);
		$photodesc = addslashes($photodesc);

		$photo = $newFileName;
		
		$data = array(
		//'title' => mysql_real_escape_string($title),
		'story' => $story,
		'photo' => $photo,
		'photodesc' => $photodesc,
		'videodesc' => $videodesc,
		'phonenumber' => $phonenumber,
		'video' => $video
		);
		
		$idArr = array(
			'id' => $id
		);
		
    };
		
	
	$tmp_int_last_id = $tmp_obj_db->update_pdo(TBL_NAME1,$data, $idArr);

?> 




	<? include('meta.php'); ?>
	
	<link rel="stylesheet" href="css/fonts.css">
	<link rel='stylesheet' type='text/css' href='css/styles.php' />
	<link rel='stylesheet' type='text/css' href='css/signup.php' />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="js/css_browser_selector.js"></script>
	
	<script type="text/javascript" src="js/lang.js"></script>
	


</head>
<body class="thinBG">
<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=351899028271519";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="content">
	
	<div id="storyhead" class="thankyou">
		
		<div class="left">
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
	
		

		
	</div>
	
	<div class="bgtexure">
		<div class='blackbox likebox'></div>
		
		<div id="signupForm" class="thankyou">
			<div id="breadcrumb" class="third">
				
				<div class="breadlabel one">1. REGISTER</div>
				<div class="breadlabel two">2. UPLOAD</div>
				<div class="breadlabel three">3. FINISH</div>
				
			</div>
			<?
			if($success!=0){
			?>
				<p id="submityourstory" class="success">Thank You.</p>
				<p id="thankyoumessage" class="success">Don't forget to watch <em>The Conjuring</em> in theaters starting on July 19th!</p>
				
				<img id="blackline" src="images/blackline.png"/>
				
				<p id="storytitle"><? echo $title ?></p>
				<div id="authorHolder">
					<span id="storyauthor">By:</span> <span id="authorName"><? echo $storyAuthor ?></span><br/>
					<div id="backtohome">BACK TO HOME</div>
				</div>
			<?	
			}else{
			?>
			
				<p id="submityourstory" class="fail">SORRY.</p>
				<p id="thankyoumessage" class="fail">There was a problem with your entry. Please try again</p>
				
				<img id="blackline" src="images/blackline.png"/>
				<div id="tryagainTY">TRY AGAIN</div>	
				
			<?	
			}
			?>

		</div>
		<div class="itemshare blackbox"></div>
	</div>
	
</div>
<? include('footer.html'); ?>
<script type="text/javascript" src="js/functions.thankyou.js"></script>

</body>
</html>