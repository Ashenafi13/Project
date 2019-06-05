

<?php
require_once 'Admin_Account.php';
require_once 'Student_Account.php';
require_once 'Registrar_Account.php';
require_once 'office_Account.php';
require_once 'user_log.php';
$response = array(); 


	if(isset($_POST['C_pass']) and isset($_POST['username']) and isset($_POST['N_pass']) and isset($_POST['R_pass'])){
		
        
		$db = new Admin_Account(); 
                     $db2 = new user_log(); 
                $result4=$db->userLogin2($_POST['username'], $_POST['C_pass']);
          if($result4==4){
              if($_POST['N_pass']==$_POST['R_pass']){
		$result = $db->update_password($_POST['N_pass'],$_POST['username']);
		
		
		
		   if($result == 1){
                       $db2->InsetUserLog($_POST['username'],$_POST['operation'],$_POST['discrbion']);
			$response=1; 
					
		   }
              }else{
                   $response=2; 
		
              }
          }else{
                $response=3; 
		
          }
	}else{
		$response['error'] = true; 
		$response['message'] = "Required fields are missing";
	}


echo json_encode($response);