<?php 

require_once 'Admin_Account.php';

$response = array(); 


	if(isset($_POST['user_id7'])){
		$db = new Admin_Account(); 
                
		$result=$db->update_Deactive($_POST['user_id7']);
                if($result==1){
                $response=1;
                       
                } else {
                $response=2;    
                }         	
               
	} else {
             $response['message'] = "Error "; 
             }

        //#f0f2e8

echo json_encode($response);