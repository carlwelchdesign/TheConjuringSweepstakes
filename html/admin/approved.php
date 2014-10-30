<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>THE CONJURING - STORY ADMIN</title>
<meta name="viewport" content="width=device-width,initial-scale=0.8">
<link rel="stylesheet" href="css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/cookie.js"></script>

<script type="text/javascript">

// Set your cookie name
var cookieName = 'tpadmin';

// Give it a value (string, number)
var cookieValue = 1;
                
// Check if cookie exists
if ($.cookie(cookieName)) 
{
 

}else{
// If cookie DOES NOT exist (first visit)
	window.location = "../index.php";
}


</script> 
</head>
<body>

<? include('nav.php'); ?>

	
	<div class="entriesContainer">
	
		<h2>APPROVED</h2>
		<div id="entries">
			
		<?php 
			include('inc/loadApproved.php');
			include('../lang/settings.php');
			//print $stories;
	
			for ($c=0;$c<count($results);$c++) {
				//echo $results[$c]['video'];
				echo "		<div class='item' style='display:block' ref='".$results[$c]['id']."'>\n";
				echo "			<p class='itemtitle'>".$results[$c]['username']."</p>";
				echo "			<p class='videoUser'><em>".$results[$c]['city'].", ".$results[$c]['state'].", ".$results[$c]['country']."</em></p> \n";
				echo "			<p class='videoUser'>Birthday: <em>".$results[$c]['birthdate']."</em></p> \n";
				echo "			<p class='videoUser'>Phone: <em>".$results[$c]['phonenumber']."</em></p> \n";
				
				if($results[$c]['video']!=null){
	
					
					echo "			<img class='videoImage' src='http://img.youtube.com/vi/".$results[$c]['video']."/mqdefault.jpg'/> \n";
					
					echo "			<img class='playicon' src='../images/playicon.png'/> \n";
					
					echo "			<p class='story'>".stripslashes(substr($results[$c]['videodesc'], 0, 600))."</p> \n";

					
				}else if($results[$c]['photo']!=null){
				
					echo "			<div class='photo' style='background: url(../".$uploadpath.$results[$c]['photo'].") no-repeat center top;'> </div> \n";
					echo "			<p class='story'>".stripslashes(substr($results[$c]['photodesc'], 0, 600))."</p> \n";
				}
				
				if($results[$c]['story']!=null){
					
					echo "			<p class='story'>".stripslashes(substr($results[$c]['story'], 0, 600))."</p> \n";
					
				}
				
				echo "			<p class='controls'><a href='view.php?s=". $results[$c]['id'] ."'>VIEW</a> | <a class='function' ref='approve' id='". $results[$c]['id'] ."' href='#'>APROVE</a> | <a class='function' ref='reject' id='". $results[$c]['id'] ."' href='#'>REJECT</a></p>";
				
	
				echo "		</div> \n";
			}
		 
		?>	
			
			
		</div>
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

						$('#'+event.target.id).parent().parent().remove();
						
						
					}
				});
				
				
			});
		
		
		});
		
		
		
		
	</script>

</body>
</html>
