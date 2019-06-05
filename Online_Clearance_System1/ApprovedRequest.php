<?php 

require_once 'ClearanceRequest.php';

$response = array(); 

if(isset($_POST['Student_ID']) and isset($_POST['Request_ID']) and isset($_POST['Approved_BY']) and isset($_POST['Approved_Office'])and isset($_POST['program'])){
		//operate the data further 
            if($_POST['Student_ID']!=""&& $_POST['Request_ID']!=""&&$_POST['Approved_BY']!=""&&$_POST['Approved_Office']!=""){
		$db = new ClearanceRequest(); 

		$result = $db->InsetApprovedRequest($_POST['Student_ID'], $_POST['Request_ID'],$_POST['Approved_BY'],$_POST['Approved_Office']);					
								
								
		if($result == 1){
                    $db->update_Active($_POST['Request_ID']);
                     $program= $_POST['program'];
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