<?php 

require_once 'ClearanceRequest.php';

$response = array(); 

if(isset($_POST['Approve_ID2'])and isset($_POST['Remark2'])and isset($_POST['R_Office'])and isset($_POST['rejected_by'])and isset($_POST['pro'])){
		//operate the data further 
            if($_POST['Approve_ID2']!="" && $_POST['Remark2']!=""&& $_POST['R_Office']!=""){
		$db = new ClearanceRequest(); 

		$result =  $db->update_Reject2($_POST['Remark2'],$_POST['rejected_by'],$_POST['R_Office'],$_POST['Approve_ID2']);				
								
								
		if($result == 1){
                   
		 $program= $_POST['pro'];
                     if($program=='Regular'){
                     header("Location: Sucess_reject.php");
                     
                     }else{
                     header("Location: Sucess_reject_1.php");
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