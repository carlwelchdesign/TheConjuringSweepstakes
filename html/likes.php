<?php



  		require('required.php');
		
		global $model;
		
		if ($_POST['action']=="like"){
		//$sql ='SELECT * from submits WHERE id='.$_POST['id'];
			$sql ='UPDATE submits SET likes = likes + 1 WHERE id = '.$_POST['id'];
		}else{
			$sql ='UPDATE submits SET likes = likes - 1 WHERE id = '.$_POST['id'];
		}
		
		$results= $model->query($sql);
		 

		
	    
	    if($results === false)
	    {
	            //echo "There was problem in fetching multiple record.<BR>".$tmp_obj_db->getError();
	            return  "";        
	    }else{
		    
		    return  $results;
		    
	    }



?>

	

