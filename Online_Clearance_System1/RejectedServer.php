<?php 

require_once 'ClearanceRequest.php';

$response = array(); 

if(isset($_POST['Request_ID2'])and isset($_POST['Remark'])and isset($_POST['program4'])){
		//operate the data further 
            if($_POST['Request_ID2']!="" && $_POST['Remark']!=""){
		$db = new ClearanceRequest(); 

		$result =  $db->update_Reject($_POST['Remark'],$_POST['Request_ID2']);				
								
								
		if($result == 1){
                   
			
	           $program= $_POST['program4'];
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