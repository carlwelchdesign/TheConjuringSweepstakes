<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<? include('meta.php'); ?>
	
	<link rel="stylesheet" href="css/fonts.css">
	<link rel='stylesheet' type='text/css' href='css/styles.php' />
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.bvalidator.js"></script>
	<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
	<script src="http://connect.facebook.net/en_US/all.js"></script>
	<script type="text/javascript" src="js/date.js"></script>
	<script type="text/javascript" src="js/formHandling.js"></script>
	<script type="text/javascript" src="js/jquery.paginate.js"></script>
	<script type="text/javascript" src="js/css_browser_selector.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>


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

<div class="content">
	
	<div id="storyhead" class="story">
		
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
			
	<a id='back' border='0' href='index.php'> <em>< BACK</em></a>
	<div id="entriesContainer" class="story">
		<div id="entries">
			
		<?php 
				//load classes and config
		///require('inc/config.php');
		require('required.php');
		
		global $model;
		
	
		$sql ='SELECT * from submits WHERE id='.$_GET['s'];
		//echo $_GET['s'];
		
		 $results= $model->query($sql);
		 
		 //echo $results;
	/*
		 if($results){
		
			//var_dump($result);
			return $results; 
		 }else{
			 return false;
		 }
	*/
		
	    
	    if($results === false)
	    {
	            //echo "There was problem in fetching multiple record.<BR>".$tmp_obj_db->getError();
	            return  "";        
	    }    
	    
		//	echo $_GET['s'];
			
			for ($c=0;$c<count($results);$c++) {
				//echo $results[$c]['video'];
				echo "		<div class='item full' style='display:block' ref='".$results[$c]['id']."'>\n";

				echo "			<div class='blackbox likebox'>
									<div class='likecount'>".$results[$c]['likes']."</div>
									<div  id='".$results[$c]['id']."' class='likebutton'>LIKE</div>
								</div>";
				echo "			<div class='storytitle'>".$results[$c]['username']."</div>";
				echo "			<p class='videoUser'>".$results[$c]['city'].", ".$results[$c]['state']."</p> \n";
								
				if($results[$c]['video']!=null){
				
					echo "		<iframe width='940' height='700' src='http://www.youtube.com/embed/".$results[$c]['video']."?wmode=transparent' frameborder='0' allowfullscreen wmode=transparent></iframe> \n";
					
					echo "		<p class='story'>".nl2br($results[$c]['videodesc'])."</p> \n";
					
				}
				
				if($results[$c]['story']!=null){
					
					echo "			<p class='story'>".stripslashes(nl2br($results[$c]['story']))."</p> \n";
					
				}
				
				if($results[$c]['photo']!=null){
				
					
					
					echo "			<img class='photo' src='".$uploadpath.$results[$c]['photo']."'/> \n";
					echo "			<p class='story'>".stripslashes(nl2br($results[$c]['photodesc']))."</p> \n";
					
					
				}
				
				echo "<a id='submitstory_s' border='0' href='signup.php'> SUBMIT YOUR STORY </a>";
				
				
				echo "	 	 <div class='itemshare blackbox'>
									<img class='shareimg facebook stories' src='images/facebookicon.png'><img class='shareimg twitter stories' src='images/twittericon.png'><div class='sharelabel'>SHARE</div>
								 </div> \n";
								
				echo "		</div> \n";
			}
			
					echo '<script>
		
						$(".likebutton").each(function() {
						    
						    //alert( this.id );
			    			var cookieName = "Conjuring_"+this.id;
		
							// Give it a value (string, number)
							var cookieValue = 1;
							                
							// Check if cookie exists
							if ($.cookie(cookieName)) 
							{
							
								$(this).css("background","#363636");
							
							}
						    
						});		
											
				  </script>
				   <script type="text/javascript" src="js/lang.js"></script>
				  <script type="text/javascript" src="js/like.js"></script>
				  <script type="text/javascript" src="js/share.js"></script>
				 
				  ';
		 
		?>	
		
			
		</div>
	</div>
	
	<div id="ieShim"></div>

		  
</div> 

<? include('footer.html'); ?>


<!-- <div class="rotate"></div> -->
<!-- START THE CONJURING US GOOGLE ANALYTICS -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25021351-41']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- END  THE CONJURING US GOOGLE ANALYTICS -->

<!-- START  THE CONJURING US OMNITURE -->
<!-- SiteCatalyst code version: H.15.1. 
Copyright 1997-2008 Omniture, Inc.
More info available at http://www.omniture.com -->
<script src="js/jquery.cookie.js"></script>


</body>



</html>
