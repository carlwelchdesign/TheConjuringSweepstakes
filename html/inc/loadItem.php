<?php
    
	//load classes and config
	//require('inc/config.php');
	require('../../html-config/config.php');
	require('inc/utils.php');
	
	global $model;
	

	$sql ='SELECT * from submits WHERE id='.$_GET['s'];
	echo $_GET['s'];
	
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