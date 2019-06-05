<?php 

	class Admin_Account{

		private $con; 

		function __construct(){

			require_once 'DbConnect.php';

			$db = new DbConnect();

			$this->con = $db->connect();
                      
		}

		
		
  
		
		
		public function userLogin($username, $password){
                   
			$pass= md5($password);
			$stmt = $this->con->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
			$stmt->bind_param("ss",$username,$pass);
			$stmt->execute();
			$stmt->store_result(); 
			 if($stmt->num_rows > 0){
                            
					return 2; 
                            
				}else{
					return 1; 
					
				}
		}
                public function userLogin2($username, $password){
                   
			$pass= md5($password);
			$stmt = $this->con->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
			$stmt->bind_param("ss",$username,$pass);
			$stmt->execute();
			$stmt->store_result(); 
			 if($stmt->num_rows > 0){
                            
					return 4; 
                            
				}else{
					return 3; 
					
				}
		}
		
		public function getprivilage($username){
                     
			$stmt = $this->con->prepare("SELECT * FROM user WHERE username = ? and Active_status='Active'");
			$stmt->bind_param("s",$username);
			$stmt->execute(); 
			$stmt->store_result(); 
			if($stmt->num_rows > 0){
                            
					return 3;
                                       
                            
				}else{
					return 4; 
					
				}
		}
                  
                public function getprivilage2($username){
                     
			$stmt = $this->con->prepare("SELECT * FROM user WHERE username = ?");
			$stmt->bind_param("s",$username);
			$stmt->execute(); 
                       return $stmt->get_result()->fetch_assoc();
			
		}
                
                public function getSearch($username){
                     
			$stmt = $this->con->prepare("SELECT * FROM user WHERE username = ?");
			$stmt->bind_param("s",$username);
			$stmt->execute(); 
                       return $stmt->get_result()->fetch_assoc();
			
		}
                
		public function createStudentAccount($full_name,$ID,$institute,$program,$username,$pass){
			if($this->isUserExist($username, $ID)){
				return 0; 
		    }else{
				$password = md5($pass);
				
				
				$stmt = $this->con->prepare("INSERT INTO `user` (`Full_name`, `Student_ID`, `Institute`,`Program`,`username`,`password`,`privilege`,`Active_status`) VALUES (?,?,?,?,?,?,'Student','Active');");
				$stmt->bind_param("ssssss",$full_name,$ID,$institute,$program,$username,$password);
                               
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
				 
			}
		}
                public function createOfficeAccount($full_name,$office,$username,$pass){
			if($this->isUserExist2($username)){
				return 0; 
		    }else{
				$password = md5($pass);
				
				
				$stmt = $this->con->prepare("INSERT INTO `user` (`Full_name`, `Office`,`username`,`password`,`privilege`,`Active_status`) VALUES (?,?,?,?,'Office','Active');");
				$stmt->bind_param("ssss",$full_name,$office,$username,$password);
                               
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
				 
			}
		}
                 public function createAdminAccount($full_name,$username,$pass){
			if($this->isUserExist3($username)){
				return 0; 
		    }else{
				$password = md5($pass);
				
				
				$stmt = $this->con->prepare("INSERT INTO `user` (`Full_name`,`username`,`password`,`privilege`,`Active_status`) VALUES (?,?,?,'Admin','Active');");
				$stmt->bind_param("sss",$full_name,$username,$password);
                               
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
				 
			}
		}
		
		private function isUserExist3($username){
			$stmt = $this->con->prepare("SELECT UserId FROM `user` WHERE username = ?");
			$stmt->bind_param("s", $username);
			$stmt->execute(); 
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}
		
		private function isUserExist($username, $id){
			$stmt = $this->con->prepare("SELECT UserId FROM `user` WHERE username = ? OR Student_ID = ?");
			$stmt->bind_param("ss", $username, $id);
			$stmt->execute(); 
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}
                private function isUserExist2($username){
			$stmt = $this->con->prepare("SELECT UserId FROM `user` WHERE username = ?");
			$stmt->bind_param("s", $username);
			$stmt->execute(); 
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}
		
		public function deleteUser($user_id){
                       $stmt = $this->con->prepare('DELETE FROM `user` WHERE UserId = ?');
                       $stmt->bind_param("s", $user_id);
                       $stmt->execute(); 
		       $stmt->store_result(); 
		       return $stmt->num_rows > 0; 
    
}
		
		
                        
                        
                        public function update_Active($user_id){
	          $stmt = $this->con->prepare("Update `user` set Active_status='Active' where UserId=?");
				$stmt->bind_param("s",$user_id);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        }
                        public function update_Account($full_name,$Institute,$Student_ID,$username,$user_id){
	          $stmt = $this->con->prepare("Update `user` set Full_name=?, 	Institute=?, Student_ID=?, username=? where UserId=?");
				$stmt->bind_param("sssss",$full_name,$Institute,$Student_ID,$username,$user_id);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        }
                        
                        
                        public function update_Account_Office($full_name,$username,$user_id){
	          $stmt = $this->con->prepare("Update `user` set Full_name=?, username=? where UserId=?");
				$stmt->bind_param("sss",$full_name,$username,$user_id);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        }
                        
                        
                        
                        public function update_Deactive($user_id){
	          $stmt = $this->con->prepare("Update `user` set Active_status='Deactive' where UserId=?");
				$stmt->bind_param("s",$user_id);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
                        }
                         public function update_password($pass,$username){
	              $password = md5($pass);
	          $stmt = $this->con->prepare("Update `user` set password=? where username=?");	                 
				$stmt->bind_param("ss",$password,$username);
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					
				}
	  
  }
   
                public function SerachByFull_name($full_name){
			
			$stmt = $this->con->prepare("SELECT * FROM user WHERE Full_name = ?");
			$stmt->bind_param("s",$full_name);
			$stmt->execute();
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}
		

	}