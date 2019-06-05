
<?php 

require_once 'Admin_Account.php';
require_once 'Student_Account.php';
require_once 'Registrar_Account.php';
require_once 'office_Account.php';

$response = array(); 


	if(isset($_POST['username']) and isset($_POST['password'])){
		$db = new Admin_Account(); 
                $result=$db->userLogin($_POST['username'], $_POST['password']);
		if($result==2){
                    
                    
                    $user2=$db->getprivilage($_POST['username']);
                    
                    if($user2==3){
                       
                 
                  
                     $user=$db->getprivilage2($_POST['username']); 
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
                    $Office = $user['Office'];
                    $_SESSION['Office'] = $Office;
                    
                    
                       $response=3; 
                   
                       
                 } else{
                     $response=4; 
			
                 }
                
                
			
		}else{
			$response=1; 
			
                        			
		}
               
	}

        

echo json_encode($response);