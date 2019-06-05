<?php 

require_once 'Admin_Account.php';
require_once 'user_log.php';
$response = array(); 


	if(isset($_POST['user_id3']) and isset($_POST['main_username2']) and isset($_POST['operation2']) and isset($_POST['descreaption2'])){
		$db = new Admin_Account(); 
                $db2 = new user_log(); 

		$result=$db->update_Deactive($_POST['user_id3']);
                if($result==1){
                     $db2->InsetUserLog($_POST['main_username2'],$_POST['operation2'],$_POST['descreaption2']);
                  header("Location: Success_deactivate.php");
                       
                } else {
                $response=2;    
                }         	
               
	} else {
             $response['message'] = "Error "; 
             }

        

echo json_encode($response);