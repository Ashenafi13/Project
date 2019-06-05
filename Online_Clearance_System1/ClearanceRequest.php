<?php


class ClearanceRequest{

		private $con; 

		function __construct(){

			require_once 'DbConnect.php';

			$db = new DbConnect();

			$this->con = $db->connect();
                      
		}
                
        public function SendRequest($Student_ID,$Reason,$Last_Class_Attend,$Request_type){
			if($this->isRequestExist($Student_ID)){
				return 0; 
		    }else{
				
				
				
				$stmt = $this->con->prepare("INSERT INTO `student_request` (`Student_ID`, `Reason`, `Last_Class_Attend`,`Request_type`,`Request_Status`,`Office`) VALUES (?,?,?,?,'Inprocess','3');");
				$stmt->bind_param("ssss",$Student_ID,$Reason,$Last_Class_Attend,$Request_type);
                               
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
				 
			
		} 
        }
        private function isRequestExist($Student_ID){
			$stmt = $this->con->prepare("SELECT Request_ID FROM `student_request` WHERE Student_ID = ? and Request_Status='Approved' or Request_Status='Inprocess' OR Request_Status='Rejected'");
			$stmt->bind_param("s", $Student_ID);
			$stmt->execute(); 
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}
                //Request_Status='Approved' and Student_ID = ? OR Request_Status='Inprocess' and Student_ID = ? OR Request_Status='Rejected' and Student_ID = ?
                
       public function InsetApprovedRequest($Student_ID,$Request_ID,$Approved_BY,$Approved_Office){
			
				
				
				
				$stmt = $this->con->prepare("INSERT INTO `request_approve` (`Student_ID`, `Request_ID`, `Approved_By`,`Approved_Office`,`Status`) VALUES (?,?,?,?,'Inprocess');");
				$stmt->bind_param("ssss",$Student_ID,$Request_ID,$Approved_BY,$Approved_Office);
                               
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
				 
			
		}   
                
                
                  
                
                
public function update_Active($Request_ID){
	          $stmt = $this->con->prepare("Update `student_request` set Request_Status='Approved',Sent_Date=now() where Request_ID=?");
				$stmt->bind_param("s",$Request_ID);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        }  
                        public function update_Reject($Remark,$Request_ID){
	          $stmt = $this->con->prepare("Update `student_request` set  Request_Status='Rejected',Remark=?,Office=3,Sent_Date=now() where Request_ID=?");
				$stmt->bind_param("ss",$Remark,$Request_ID);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        }  
                        
                           public function Resend($Student_ID){
	          $stmt = $this->con->prepare("Update `student_request` set  Request_Status='Inprocess',Sent_Date=now(),Remark='' where Student_ID=?");
				$stmt->bind_param("s",$Student_ID);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        } 
                        public function Resend2($Student_ID){
	          $stmt = $this->con->prepare("Update `request_approve` set  Status='Inprocess',Approved_Date=now(),Remark='' where Student_ID=?");
				$stmt->bind_param("s",$Student_ID);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        } 
                        
                        
                        
                         public function Cancel($Student_ID){
	          $stmt = $this->con->prepare("Update `student_request` set  Request_Status='Cancel',Sent_Date=now() where Student_ID=?");
				$stmt->bind_param("s",$Student_ID);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        } 
                        public function Cancel2($Student_ID){
	          $stmt = $this->con->prepare("Update `request_approve` set  Status='Cancel',Approved_Date=now() where Student_ID=?");
				$stmt->bind_param("s",$Student_ID);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        } 
                        
                        
                         public function update_Reject2($Remark,$reject_by,$Rejected_Office,$Approve_ID){
	          $stmt = $this->con->prepare("Update `request_approve` set  Status='Rejected',Remark=?,Approved_By=?,Approved_Date=now(),Status_Office=? where Approve_ID=?");
				$stmt->bind_param("ssss",$Remark,$reject_by,$Rejected_Office,$Approve_ID);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        }  
                        
                      
                        
                public function update_Office($Office,$Approved_by,$A_office,$Approve_ID){
	          $stmt = $this->con->prepare("Update `request_approve` set Approved_Office=?,Approved_By=?,Status_Office=?,Approved_Date=now(),Status='Approved'  where Approve_ID=?");
				$stmt->bind_param("ssss",$Office,$Approved_by,$A_office,$Approve_ID);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        }                
                
                
}