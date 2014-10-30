<?php


	require('../../html-config/config.php');
    require('inc/pdo.php');
	require('inc/utils.php');

	include('../lang/settings.php');
	
	//create connection
    $tmp_obj_db = Database::obtain(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
		
    if($tmp_obj_db->connect_pdo() === false)
    {
            echo "There was problem in connecting to the database.<BR>".$tmp_obj_db->getError();
            return  "";
    }

	
	
	if(isset($_POST['action']) && !empty($_POST['action'])) 
	{
	    $action = $_POST['action'];
	    $id = $_POST['id'];
	    
	    switch($action) 
	    {
	        case 'approve' : 

	        
	        	$data = array(
		
					'approved' => 1
				);
				
				$idArr = array(
					'id' => $id
				);
				
				$tmp_int_last_id = $tmp_obj_db->update_pdo(TBL_NAME1,$data, $idArr);
				return $id;

				break;
				
				
			 case 'reject' : 

	        	$data = array(
		
					'approved' => 2
				);
				
				$idArr = array(
					'id' => $id
				);
				
				$tmp_int_last_id = $tmp_obj_db->update_pdo(TBL_NAME1,$data, $idArr);
				return $id;
	        
				break;

	    }
	}
		

	
	
?>
	

