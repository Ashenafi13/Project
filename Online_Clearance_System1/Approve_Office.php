<?php 

require_once 'ClearanceRequest.php';

$response = array(); 

if(isset($_POST['Office']) and isset($_POST['Approved_by'])and isset($_POST['A_office'])and isset($_POST['program2']) and isset($_POST['Approve_ID'])){
		//operate the data further 
            if($_POST['Approve_ID']!=""&& $_POST['Office']!=""){
		$db = new ClearanceRequest(); 

		$result = $db->update_Office($_POST['Office'],$_POST['Approved_by'],$_POST['A_office'],$_POST['Approve_ID']);					
								
								
		if($result == 1){
                    $program= $_POST['program2'];
                     if($program=='Regular'){
                     header("Location: Success_Approve.php");
                     
                     }else{
                     header("Location: Success_Approve_1.php");
                     }
			
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