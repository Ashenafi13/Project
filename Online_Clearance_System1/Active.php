<?php 

require_once 'Admin_Account.php';
require_once 'user_log.php';

$response = array(); 


	if(isset($_POST['user_id2']) and isset($_POST['main_username3']) and isset($_POST['operation3']) and isset($_POST['descreaption3'])){
		$db = new Admin_Account(); 
                $db2 = new user_log(); 
		$result=$db->update_Active($_POST['user_id2']);
                if($result==1){
                     $db2->InsetUserLog($_POST['main_username3'],$_POST['operation3'],$_POST['descreaption3']);
                header("Location: Success_activate.php");
                       
                }else{
                    
                }        	
               
	} else {
             $response['message'] = "Error "; 
             }

        

echo json_encode($response);
