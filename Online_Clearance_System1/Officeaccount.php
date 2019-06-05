
<?php 

require_once 'Admin_Account.php';
require_once 'user_log.php';
$response = array(); 

if(isset($_POST['Office_full_name']) and isset($_POST['office']) and  isset($_POST['Office_username']) and isset($_POST['Office_password'])and isset($_POST['main_username'])and isset($_POST['operation2'])and isset($_POST['descreaption2'])){
		//operate the data further 
               $name=$_POST['Office_full_name'];
            if($_POST['Office_full_name']!=""&& $_POST['office']!=""&& $_POST['Office_username']!="" && $_POST['Office_password']!=""){
                $db = new Admin_Account(); 
                if (preg_match ("/^[a-zA-Z\s]+$/",$name)) {
		
                $db2 = new user_log(); 
		$result = $db->createOfficeAccount($_POST['Office_full_name'], $_POST['office'],$_POST['Office_username'],$_POST['Office_password']);					
								
								
		if($result == 1){
			$response=1; 
			$db2->InsetUserLog($_POST['main_username'],$_POST['operation2'],$_POST['descreaption2']);
			
		}elseif($result == 2){
			$response=2; 
					
		}elseif($result == 0){
			$response=0; 
								
		}
                }else{
                    $response=5; 
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
