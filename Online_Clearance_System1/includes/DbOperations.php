<?php 

	class DbOperations{

		private $con; 

		function __construct(){

			require_once dirname(__FILE__).'/DbConnect.php';

			$db = new DbConnect();

			$this->con = $db->connect();
                      
		}

		
		
  
		
		
		public function userLogin($username, $pass){
			
			$stmt = $this->con->prepare("SELECT * FROM logintable WHERE username = ? AND password = ?");
			$stmt->bind_param("ss",$username,$pass);
			$stmt->execute();
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}
		
		
		
		
		
		
		
		
		
		

	}