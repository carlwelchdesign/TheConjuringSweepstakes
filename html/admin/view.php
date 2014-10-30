<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>THE CONJURING - SCARY STORY SWEEPSTAKES</title>
<meta name="description" content="The Conjuring. Before there was Amityville, there was Harrisville. Based on a true story. In theaters July 19.">
<meta name="keywords" content="The Conjuring, The Conjuring movie, The Conjuring official site, Conjuring, Vera Farmiga, Patrick Wilson, Joey King, Ron Livingston, Lili Taylor, James Wan, James Wan Director, horror, suspense, thriller, scary, scary movies, Amityville, paranormal, Ed and Lorraine Warren, demons, demonic, demonic entity, demonologists, warner bros. pictures, film, movie, cinema, warner bros, warner bros pictures, wb, warner brothers, New Line, newline.">

<meta property="og:title" content="THE CONJURING- Movie Trailer, Photos, Synopsis"> 
<meta property="video:release_date" content="July 19, 2013">
<meta property="og:image" content=""> 
<meta property="og:description" content="The Conjuring. Before there was Amityville, there was Harrisville. Based on a true story. In theaters July 19."> 
<meta property="og:url" content="http://www.theconjuringmovie.com">

<meta name="viewport" content="width=device-width,initial-scale=0.8">

<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/styles.css">


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.bvalidator.js"></script>
<script type="text/javascript" src="js/jquery.masonry.min.js"></script>

<script type="text/javascript" src="js/date.js"></script>
<script type="text/javascript" src="js/formHandling.js"></script>
<script type="text/javascript" src="js/jquery.paginate.js"></script>




</head>
<body>
<? include('nav.php'); ?>
<div class="content">
	
<a id='back' border='0' href='index.php'> <em>< BACK</em></a>

	<div id="entriesContainer" class="story">
		<div id="entries">
			
		<?php 
				//load classes and config
		require('../../html-config/config.php');

	    
		require('inc/utils.php');
		include('../lang/settings.php');
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
								echo "			<p class='controls'><a href='view.php?s=". $results[$c]['id'] ."'>VIEW</a> | <a class='function' ref='approve' id='". $results[$c]['id'] ."' href='#'>APROVE</a> | <a class='function' ref='reject' id='". $results[$c]['id'] ."' href='#'>REJECT</a></p>";
				echo "		<div class='item full' style='display:block' ref='".$results[$c]['id']."'>\n";

				echo "			<div class='blackbox likebox'>
									<div class='likecount'>LIKES: ".$results[$c]['likes']."</div>
								</div>";
				echo "			<div class='storytitle'>".$results[$c]['username']."</div>";
				echo "			<p class='videoUser'>".$results[$c]['city']."</p> \n";
								
				if($results[$c]['video']!=null){
				
					echo "		<iframe width='940' height='700' src='http://www.youtube.com/embed/".$results[$c]['video']."' frameborder='0' allowfullscreen></iframe> \n";
					
					echo "		<p class='story'>Video Description: ".stripslashes(nl2br($results[$c]['videodesc']))."</p> \n";
					
				}
				
				if($results[$c]['story']!=null){
					
					echo "			<p class='story'>Story: ".stripslashes(nl2br($results[$c]['story']))."</p> \n";
					
				}
				
				if($results[$c]['photo']!=null){
				
					
					
					echo "			<img class='photo' src='../".$uploadpath.$results[$c]['photo']."'/> \n";
					echo "			<p class='story'>Photo Description: ".stripslashes(nl2br($results[$c]['photodesc']))."</p> \n";
					
					
				}
				
	
				echo "		</div> \n";
			}
			
			
		 
		?>	
		
			
		</div>
	</div>
	

		  
</div> 





<div class="rotate">
</div>
	
	<script>

		
		$(document).ready(function () {
		
			$('.function').click(function(event) {
			    console.log($(this).attr('ref'));
			    
			    $.ajax({ 
			    	
			    	url: 'functions.php',
					data: {
						action: $(this).attr('ref'),
						id: event.target.id
					},
					type: 'post',
					
					success: function(output) {

						//$('#'+event.target.id).parent().parent().remove();
						window.location = "pending.php";
						
					}
				});
				
				
			});
		
		
		});
		
		
		
		
	</script>
</body>



</html>
