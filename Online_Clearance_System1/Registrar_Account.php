<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registrar_Account
 *
 * @author TK
 */
class Registrar_Account {
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
}
