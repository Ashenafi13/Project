
<?php 

require_once 'Admin_Account.php';
require_once 'user_log.php';
$response = array(); 

if(isset($_POST['full_name']) and isset($_POST['ID']) and isset($_POST['institute']) and isset($_POST['program']) and  isset($_POST['username']) and isset($_POST['password'])and isset($_POST['main_username'])and isset($_POST['operation3'])and isset($_POST['descreaption3'])){
		//operate the data further 
		$name=$_POST['full_name'];
            if($_POST['full_name']!=""&& $_POST['ID']!=""&&$_POST['institute']!=""&&$_POST['program']!="" && $_POST['program']!=""&& $_POST['username']!="" && $_POST['password']!=""){
		 $db = new Admin_Account();
                if (preg_match ("/^[a-zA-Z\s]+$/",$name)) {
                
                
                $db2 = new user_log(); 
		$result = $db->createStudentAccount($_POST['full_name'], $_POST['ID'],$_POST['institute'],$_POST['program'],$_POST['username'],$_POST['password']);					
								
								
		if($result == 1){
			$response=1; 
			
			$db2->InsetUserLog($_POST['main_username'],$_POST['operation3'],$_POST['descreaption3']);
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
