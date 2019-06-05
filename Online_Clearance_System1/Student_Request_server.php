
<?php 

require_once 'ClearanceRequest.php';

$response = array(); 

if(isset($_POST['Student_ID']) and isset($_POST['Reason']) and isset($_POST['Last_Class_Attend']) and isset($_POST['Request_type'])){
		//operate the data further 
            if($_POST['Student_ID']!=""&& $_POST['Reason']!=""&&$_POST['Last_Class_Attend']!=""&&$_POST['Request_type']!=""){
		$db = new ClearanceRequest(); 
$date1 = date("Y-m-d");
$date2 = $_POST['Last_Class_Attend'];
 
if ($date1 >= $date2){
		$result = $db->SendRequest($_POST['Student_ID'], $_POST['Reason'],$_POST['Last_Class_Attend'],$_POST['Request_type']);					
								
								
		if($result == 1){
                    
			$response=1; 
			
			
		}elseif($result == 2){
			$response=2; 
				
                }elseif($result==0){
                    $response=0;
                }
                
}else {
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
