	<script>
	
		var videoIcon = "<img class='indicator_icon' src='images/indicator_video.png'/>";
		var photoIcon = "<img class='indicator_icon' src='images/indicator_photo.png'/>";
		var storyIcon = "<img class='indicator_icon' src='images/indicator_story.png'/>";
		//var COUNTRY = window.COUNTRY;
	
	</script>

<?php 

	
	require('required.php');
	include('lang/settings.php');
	$APPROVED = 1;

	
	global $model;


	
	switch ($_POST['action']) {

	        
	    case 'Latest':
	        $sql ="SELECT * from submits WHERE approved='$APPROVED' AND sweepstakes_country='$COUNTRY' ORDER BY submitted DESC";

	        break;
	        
	    case 'Oldest':
	        $sql ="SELECT * from submits WHERE approved='$APPROVED' AND sweepstakes_country='$COUNTRY' ORDER BY submitted ASC";
	        break;
	        
	    case 'Photos':
	        $sql ="SELECT * from submits WHERE approved='$APPROVED' AND sweepstakes_country='$COUNTRY' and trim(coalesce(photo, '')) <>'' ORDER BY submitted DESC";
	        break;	
	        
	    case 'Story':
	        $sql ="SELECT * from submits WHERE approved='$APPROVED' AND sweepstakes_country='$COUNTRY' and trim(coalesce(story, '')) <>'' ORDER BY submitted DESC";
	        break;	
	        
	    case 'Videos':
	        $sql ="SELECT * from submits WHERE approved='$APPROVED' AND sweepstakes_country='$COUNTRY' and trim(coalesce(video, '')) <>'' ORDER BY submitted DESC";
	        break;	
	            
	    case 'Popularity':
	        $sql ="SELECT * from submits WHERE approved='$APPROVED' AND sweepstakes_country='$COUNTRY' ORDER BY likes DESC";
	        break;	
	        
	    case 'All':
	        $sql ="SELECT * from submits WHERE approved='$APPROVED' AND sweepstakes_country='$COUNTRY' ORDER BY submitted DESC";
	        break;	          
	    
	}

	

	$results= $model->query($sql);
	

	if($results){

		
		$html;

		
		
		for ($c=0;$c<count($results);$c++) {
			//$html .= $results[$c]['video'];
			$html .= "	 <div class='item' style='display:block' ref='".$results[$c]['id']."'>\n";
			$html .= "	 	<div class='blackbox likebox'>
							<div class='indicator'></div>
							<div class='likecount'>".$results[$c]['likes']."</div>
							<div  id='".$results[$c]['id']."' class='likebutton'>LIKE</div>
				
					 	</div> \n";
			$html .= "	 	<p class='itemtitle'>".$results[$c]['username']."</p>";
			
			if($results[$c]['state']!= ""){
				
				$place = $results[$c]['state'];
				
			}else{
				
				$place = $results[$c]['country'];
				
			}
			
			$html .= "	 	<p class='videoUser'>".$results[$c]['city']. ", ".$place."</p> \n";
			
			if($results[$c]['video']!=null){
				$html .= "	 <img class='videoImage' src='http://img.youtube.com/vi/".$results[$c]['video']."/mqdefault.jpg'/> \n";
				//$html .= "	 <img class='videoImage' src='images/Generic_image.jpg'/> \n";
				
				$html .= "	 <div class='playicon gotostory' ref='".$results[$c]['id']."'></div> \n";
			}else if($results[$c]['photo']!=null){
				//$html .= "	 <img class='photo' src='photos/".$results[$c]['photo']."'/> \n";
				
				$html .= "	<div class='photo gotostory' refimage='".$results[$c]['photo']."' ref='".$results[$c]['id']."' style='background: url(".$uploadpath . $results[$c]['photo'].") no-repeat center top;'> </div> \n";
				//$html .= "	 <div class='bwWrapper' ><img class='photo gotostory' src='photos/".$results[$c]['photo']."'/></div> \n";
				//$html .= $uploadpath;
			
			}
			if($results[$c]['story']!=null){
				$html .= "	 <p class='story'>".stripslashes(nl2br(substr($results[$c]['story'], 0, 600)))."...</p> \n";
			}
			$html .= "	 	 <p class='readmore gotostory' ref='".$results[$c]['id']."'>READ MORE</p> \n";
			$html .= "	 	 <div class='itemshare blackbox'>
							<img class='shareimg facebook stories' src='images/facebookicon.png'><img class='shareimg twitter stories' src='images/twittericon.png'><div class='sharelabel'>SHARE</div>
						 </div> \n";
	
			$html .= "	 </div> \n";
			
			if($results[$c]['video']!=null){
				$html .= "	<script>
								$('.item[ref=".$results[$c]['id']."]').addClass('vid');
								$('.item[ref=".$results[$c]['id']."] .indicator').append(videoIcon);
							</script>";								
			}
			
			if($results[$c]['photo']!=null){
				$html .= "	<script>
								$('.item[ref=".$results[$c]['id']."]').addClass('phto');
								$('.item[ref=".$results[$c]['id']."] .indicator').append(photoIcon);
							</script>";				
			}
			
			if($results[$c]['story']!=null){	
				$html .= "	<script>
								$('.item[ref=".$results[$c]['id']."]').addClass('stry');
								$('.item[ref=".$results[$c]['id']."] .indicator').append(storyIcon);
							</script>";							
							
			}
			
			
			
			
			
		}
		
		$html .= '<script type="text/javascript" src="js/lang.js"></script>';
		$html .= '<script type="text/javascript" src="js/like.js"></script>';
		$html .= '<script type="text/javascript" src="js/share.js"></script>';
		

	
		
		echo $html;
	}				
		 
?>
