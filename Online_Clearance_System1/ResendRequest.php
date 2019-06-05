<?php 

require_once 'ClearanceRequest.php';

$response = array(); 

if(isset($_POST['student_id'])){
		//operate the data further 
            if($_POST['student_id']!=""){
		$db = new ClearanceRequest(); 

		$result = $db->Resend($_POST['student_id']);					
								
								
		if($result == 1){
                     header("Location: Success_resend.php");
			
		}elseif($result == 2){
			$response['error'] = true; 
			$response['message'] = "Some error occurred please try again";		
                }
		
}else{
                $response['error'] = true; 
		$response['message'] = "One or more field are empty please try again ";
}
	}else{
		$response['error'] = true; 
		$response['message'] = "Required fields are missing";
	}


echo json_encode($response);