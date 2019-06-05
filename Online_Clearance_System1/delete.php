
<?php 

require_once 'Admin_Account.php';
require_once 'user_log.php';
$response = array(); 


	if(isset($_POST['user_id']) and isset($_POST['main_username']) and isset($_POST['operation1']) and isset($_POST['descreaption1'])){
		$db = new Admin_Account(); 
               $db2 = new user_log(); 
		$db->deleteUser($_POST['user_id']);
                $db2->InsetUserLog($_POST['main_username'],$_POST['operation1'],$_POST['descreaption1']);
                header("Location: Success_delete.php");
                       
                      	
               
	} else {
             $response['message'] = "Error "; 
             }

        

echo json_encode($response);