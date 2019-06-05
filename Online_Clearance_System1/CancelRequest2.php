<?php 

require_once 'ClearanceRequest.php';

$response = array(); 

if(isset($_POST['Student_id'])){
		//operate the data further 
            if($_POST['Student_id']!=""){
		$db = new ClearanceRequest(); 

		$result = $db->Cancel2($_POST['Student_id']);					
								
								
		if($result == 1){
                   $db->Cancel($_POST['Student_id']);
			$response=1; 
			
			
		}elseif($result == 2){
			$response=2; 
					
                }
		
}else{
                $response['error'] = true; 
		
}
	}else{
		$response['error'] = true; 
		
	}


echo json_encode($response);