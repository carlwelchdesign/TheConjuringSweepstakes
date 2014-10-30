<?php
    
	//load classes and config
	require('../../html-config/config.php');
    
	require('inc/utils.php');
	include('../lang/settings.php');
	global $model;
	
	echo "Country: ".$COUNTRY;
	$sql ="SELECT * from submits WHERE approved=0 AND sweepstakes_country='$COUNTRY' ORDER BY submitted DESC";

	
	 $results= $model->query($sql);
	 
	 //echo $results;
	 if($results){
	
		//var_dump($result);
		return $results; 

		
	 }else{
		 return false;
	 }
	
    
    if($results === false)
    {
            //echo "There was problem in fetching multiple record.<BR>".$tmp_obj_db->getError();
            return  "";        
    }    
    

?>