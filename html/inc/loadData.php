<?php
    
	//load classes and config
	//require('inc/config.php');
 	require('../../html-config/config.php');
   
	require('inc/utils.php');
	
	global $model;
	

	$sql ='SELECT * from submits WHERE approved=1 ORDER BY submitted DESC';
	
	
	$results= $model->query($sql);
	
	//echo $results;
	if($results){
	
	//var_dump($result);
	return $results; 
	}else{
		return false;
	}
	
	//$results = $tmp_obj_db->fetch_array_pdo($tmp_str_sql,$tmp_arr_queryParams);
	
	
	
	if($results === false)
	{
	    //echo "There was problem in fetching multiple record.<BR>".$tmp_obj_db->getError();
	    return  "";        
	}    


?>