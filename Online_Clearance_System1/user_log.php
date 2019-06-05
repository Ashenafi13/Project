<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_log
 *
 * @author TK
 */
class user_log {
     private $con; 

		function __construct(){

			require_once 'DbConnect.php';

			$db = new DbConnect();

			$this->con = $db->connect();
                      
		}

    public function InsetUserLog($Username,$Operation,$discribtion){
			
				
				
				
				$stmt = $this->con->prepare("INSERT INTO `userlog` (`Username`, `Operation`,`Description`) VALUES (?,?,?);");
				$stmt->bind_param("sss",$Username,$Operation,$discribtion);
                               
				if($stmt->execute()){
					return 1; 
				}else{
					return 2; 
					 
				}
				 
			
		}
}
