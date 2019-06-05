
    $(document).ready(function () {
        alert('jhajhdjsahsdjhajs');
		$('#update').click(function () {
                    alert('jhajhdjsahsdjhajs');
		var full_name=$('#full_name').val();
		var Institute=$('#Institute').val();
                var S_ID=$('#S_ID').val();
                var username=$('#username').val();
                 var ID5=$('#ID5').val();
                
		if(username!=='' && full_name!==''&&S_ID!==''&&Institute!==''){
			$.ajax({
				url:"StudentAccountUpdate.php",
				method:"POST",
				data:{full_name:full_name,Institute:Institute,S_ID:S_ID,ID5:ID5},
				success:function (data) {
                                   
                                       $sdf=data.split('');
                                       
						switch($sdf[1]){
                                                    case '1': 
							$('#msgsuccess').html('<div class="alert alert-danger text-center">The Account updated successfully!</div>');
                                                        
                                                       
						     break;
						
                                                     case '2':   		
							$('#msgerror').html('<div class="alert alert-danger text-center">Some error occurred please try again!</div>');
                                                        
                                                          break;
                                                      
                                                      case '3': 
							 $('#msgerror').html('<div class="alert alert-danger text-center">One or more field are empty please try again!</div>');
                                                       
						       break;
                                                       
                                                       case '4': 
							 $('#msgerror').html('<div class="alert alert-danger text-center">Required fields are missing!</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
		}
	});
});

                   

