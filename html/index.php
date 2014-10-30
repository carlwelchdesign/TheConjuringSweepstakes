<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<?php include('meta.php'); ?>
	
	<link rel="stylesheet" href="css/fonts.css">
	
	<link rel='stylesheet' type='text/css' href='css/styles.php' />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="js/css_browser_selector.js"></script>
	<script type="text/javascript" src="js/jquery.bvalidator.js"></script>
	<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="js/date.js"></script>
	<script type="text/javascript" src="js/jquery.paginate.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/lang.js"></script>

</head>
<body>
<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=351899028271519";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="content">
	<div id="gamedesc">
		<div class="left">
			<img id="conjuringlogo" src="images/logo_tt.png" />
		
			<div id="yourstory">Your Haunted Story</div>
			<div class="txt haveyouhadparanormal">Have you or someone you know had a paranormal experience or lived in a haunted place?</div>
			<div class="youcansubmit">YOU CAN SUBMIT:</div>
			<img id="waystosubmit" src="images/waystosubmit.png" />
			<a id="submitstory" href="signup.php" border="0">SUBMIT YOUR STORY</a>
	
		</div>
		<div class="right">
		<?php include('social.php'); ?>	
				
		</div>
	</div>	
	
	<div id="entrycontrol">
		<div id="yourstory_a">Story Submissions</div>
		
		<div id="filters">
			<div id="filter_label" class="filterlabels">FILTER: </div>
			<img id="filter_story" class="filters" src="images/filter_story.png">
			<img id="filter_photo" class="filters" src="images/filter_photo.png">
			<img id="filter_video" class="filters" src="images/filter_vid.png">
			
			
			<div id="filterby_label" class="filterlabels">FILTER BY: </div>
			<select name="options" class="filters" id="options" class="dropdown">
				<option value="Latest">Latest</option>
				<option value="Oldest">Oldest</option>
				<option value="Popularity">Popularity</option>
				<option value="Photos">Photos</option>
				<option value="Videos">Videos</option>
				<option value="Story">Stories</option>
				<option value="All">All</option>
			</select>
		</div>
	</div>
	
	<div id="entriesContainer">
		<div id="entries"></div>
	</div>
		
</div>

<?php include('footer.html'); ?>
 

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


<script type="text/javascript" src="js/functions.index.js"></script>
<script type="text/javascript" src="js/lang.js"></script>


</body>
</html>
