<?php 

require_once 'Admin_Account.php';
require_once 'user_log.php';

try{
    $response = array(); 
if(isset($_POST['fullname'])and isset($_POST['institute'])and isset($_POST['sid'])and isset($_POST['username'])and isset($_POST['userid5']) and isset($_POST['main_username4']) and isset($_POST['operation4']) and isset($_POST['descreaption4'])){
		//operate the data further 
          
		$db = new Admin_Account(); 
                $db2 = new user_log(); 
		$result =  $db->update_Account($_POST['fullname'],$_POST['institute'],$_POST['sid'],$_POST['username'],$_POST['userid5']);				
								
								
		if($result == 1){
                    $db2->InsetUserLog($_POST['main_username4'],$_POST['operation4'],$_POST['descreaption4']);
			$response=1; 
			
			
		}else if($result == 2){
			$response=2; 
				
                }
		
}
	
}catch (exception $e) {
    $response=$e;
}

echo json_encode($response);