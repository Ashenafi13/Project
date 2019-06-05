
<?php 

require_once 'Admin_Account.php';
require_once 'user_log.php';
$response = array(); 

if(isset($_POST['full_name_admin'])  and  isset($_POST['username_admin']) and isset($_POST['Password_admin'])and isset($_POST['main_username'])and isset($_POST['operation1'])and isset($_POST['descreaption1'])){
		//operate the data further 
             $name=$_POST['full_name_admin'];
            if($_POST['full_name_admin']!=""&& $_POST['username_admin']!="" && $_POST['Password_admin']!=""){
                $db = new Admin_Account(); 
                 if (preg_match ("/^[a-zA-Z\s]+$/",$name)) {
		
             $db2 = new user_log();
		$result = $db->createAdminAccount($_POST['full_name_admin'],$_POST['username_admin'],$_POST['Password_admin']);					
								
								
		if($result == 1){
			$response=1; 
			
			$db2->InsetUserLog($_POST['main_username'],$_POST['operation1'],$_POST['descreaption1']);
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
