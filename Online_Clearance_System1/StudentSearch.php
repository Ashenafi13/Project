
<?php 

require_once 'Admin_Account.php';

$response = array(); 


	if(isset($_POST['full_name'])){
		$db = new Admin_Account(); 

		if($db->SerachByFull_name($_POST['full_name'])){
                    
                 $user = $db->SerachByFull_name($_POST['full_name']);
                 if($user['Active_status']=="Active"){
                    $response['error'] = false; 
                    session_start();
		   $privilege = $user['privilege'];
                   $_SESSION['privilege'] = $privilege;
                    
                    $user_name = $user['username'];
                    $_SESSION['user_name'] = $user_name;
                    
                    $Student_ID = $user['Student_ID'];
                    $_SESSION['Student_ID'] = $Student_ID;
                    
                    $full_name = $user['Full_name'];
                    $_SESSION['full_name'] = $full_name;
                    
                    $institute = $user['Institute'];
                    $_SESSION['institute'] = $institute;
                    
                     $program = $user['Program'];
                    $_SESSION['program'] = $program;
                    
                    
                    
                    
                    header("Location:Home.php");
                       
                 } else{
                     $response['error'] = true; 
			$response['message'] = "User Account is Deactivated";
                 }
			
		}else{
			$response['error'] = true; 
			$response['message'] = "Invalid username or password";
                        			
		}
               
	}

        

echo json_encode($response);