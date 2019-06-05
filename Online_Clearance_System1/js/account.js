///Admin Account create
$(document).ready(function () {
      
		$('#create1').click(function () {
                   
		var full_name_admin=$('#full_name_admin').val();
		var username_admin=$('#username_admin').val();
                var Password_admin=$('#Password_admin').val();
                var main_username=$('#main_username').val();
                var operation1=$('#operation1').val();
                var descreaption1=$('#descreaption1').val();
               
		if(full_name_admin!=='' && username_admin!==''&&Password_admin!==''){
                    
			$.ajax({
				url:"Adminaccount.php",
				method:"POST",
				data:{full_name_admin:full_name_admin,username_admin:username_admin,Password_admin:Password_admin,main_username:main_username,operation1:operation1,descreaption1:descreaption1},
				success:function (data) {
                                  
                                       $sdf=data.split('');
                                       
						switch($sdf[1]){
                                                    case '3': 
							$('#msg1').html('<div class="alert alert-danger text-center">Some error occurred please try again!</div>');
                                                       
						     break;
						
                                                     case '1':   		
							$('#msg1').html('<div class="alert alert-success text-center">User registered successfully!</div>');
                                                        break;
                                                      
                                                      case '0': 
							 $('#msg1').html('<div class="alert alert-danger text-center">It seems you are already registered, please choose username</div>');
                                                       
						       break;
                                                    
                                                       case '5': 
							$('#msg1').html('<div class="alert alert-danger text-center">Please input alphabet characters only for full name!</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
                    }else{
                        $('#msg1').html('<div class="alert alert-danger text-center">One or more fields are empty pleace try again!</div>');
                    }
		
	});
});

//// OfficeAccount Create
$(document).ready(function () {
    
		$('#create2').click(function () {
                    
                    
		var Office_full_name=$('#Office_full_name').val();
                var office=$('#office').val();
		var Office_username=$('#Office_username').val();
                var Office_password=$('#Office_password').val();
                var main_username=$('#main_username').val();
                var operation2=$('#operation2').val();
                   
                var descreaption2=$('#descreaption2').val();
		if(Office_full_name!=='' && office!==''&&Office_username!==''&&Office_password!==''){
                    
			$.ajax({
				url:"Officeaccount.php",
				method:"POST",
				data:{Office_full_name:Office_full_name,office:office,Office_username:Office_username,Office_password:Office_password,main_username:main_username,operation2:operation2,descreaption2:descreaption2},
				success:function (data) {
                                
                                       $sdf=data.split('');
                                        
						switch($sdf[1]){
                                                    case '3': 
							$('#msg2').html('<div class="alert alert-danger text-center">Some error occurred please try again!</div>');
                                                       
						     break;
						
                                                     case '1':   		
							$('#msg2').html('<div class="alert alert-success text-center">User registered successfully!</div>');
                                                        break;
                                                      
                                                      case '0': 
							 $('#msg2').html('<div class="alert alert-danger text-center">It seems you are already registered, please choose username</div>');
                                                       
						       break;
                                                       
                                                      case '5': 
							$('#msg2').html('<div class="alert alert-danger text-center">Please input alphabet characters only for full name!</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
                     }else{
                        $('#msg2').html('<div class="alert alert-danger text-center">One or more fields are empty pleace try again!</div>');
                    }
		
	});
});

/// Student Account create
$(document).ready(function () {
   
		$('#create3').click(function () {
                 
                    
		var full_name=$('#full_name').val();
                var ID=$('#ID').val();
		var institute=$('#institute').val();
                
                
                if(document.getElementById('program1').checked) {  
                var program=$('#program1').val();
                }else{
                     var program=$('#program2').val();
                }
                
                 var username=$('#username').val();
                  var password=$('#password').val();
                var main_username=$('#main_username').val();
                var operation3=$('#operation3').val();
                var descreaption3=$('#descreaption3').val();
            
		if(full_name!=='' && ID!==''&&institute!==''&&program!=='' && username!=='' &&password!==''){
                   
    
			$.ajax({
				url:"Studentaccount.php",
				method:"POST",
				data:{full_name:full_name,ID:ID,institute:institute,program:program,username:username,password:password,main_username:main_username,operation3:operation3,descreaption3:descreaption3},
				success:function (data) {
                             
                                       $sdf=data.split('');
                                      
						switch($sdf[1]){
                                                    case '3': 
							$('#msg3').html('<div class="alert alert-danger text-center">Some error occurred please try again!</div>');
                                                       
						     break;
						
                                                     case '1':   		
							$('#msg3').html('<div class="alert alert-success text-center">User registered successfully!</div>');
                                                        break;
                                                      
                                                      case '0': 
							 $('#msg3').html('<div class="alert alert-danger text-center">It seems you are already registered, please choose username</div>');
                                                       
						       break;
                                                       
                                                       case '5': 
							$('#msg3').html('<div class="alert alert-danger text-center">Please input alphabet characters only for full name!</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
                       
                        
		}else{
                    $('#msg3').html('<div class="alert alert-danger text-center">One or more field are empty please try again!</div>');
                }
                 
	});
});


/////Deactivate account


$(document).ready(function () {
   
		$('#deactivate').click(function () {
                   
                    
		var user_id3=$('#user_id3').val();
              
		if(user_id3!==''){
			$.ajax({
				url:"Deactive.php",
				method:"POST",
				data:{user_id3:user_id3},
				success:function (data) {
                             
                                       
                                        
						switch(data){
                                                    case '2': 
							$('#msg3').html('<div class="alert alert-danger text-center">Some error occurred please try again!</div>');
                                                       
						     break;
						
                                                     case '1':   		
							$('#msg3').html('<div class="alert alert-success text-center">The Account is deactivated!</div>');
                                                        window.location.href='EditAccount.php';
                                                        break;
                                                      
                                                     
						}
                                                
					
				}
			});
		}else{
                    $('#msg3').html('<div class="alert alert-danger text-center">please try again!</div>');
                }
	});
});


