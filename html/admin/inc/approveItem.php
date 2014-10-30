<?php

    
	//load classes and config
	require('../../html-config/config.php');

    
	require('inc/utils.php');
	
	global $model;
	

	//$sql ='SELECT * from submits WHERE approved=1 ORDER BY submitted DESC';
	
	$id = $_GET['id'];
	$sql = 'UPDATE submits SET approved=1 WHERE id='. $id ;
	echo $id;
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