<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student online Clearance System </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
         <link href="css/mdb.min.css" rel="stylesheet">
       <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style_2.css" rel="stylesheet">
<!--===============================================================================================-->
 <link rel="stylesheet" href="css/style_1.css">
<style>
   
</style>
    </head>
    <body class=" heavy-rain-gradient">
         <div class="limiter">
         <div class="alert alert-light" role="alert" style="color: #fff; font-size: 20px;background: -webkit-linear-gradient(-145deg, rgba(0,27,61,1) 0, rgba(11,102,193,0.69) 20%, rgba(0,2,5,0.72) 31%, rgba(122,177,211,1) 98%, rgba(122,177,211,1) 100%);
background: -moz-linear-gradient(235deg, rgba(0,27,61,1) 0, rgba(11,102,193,0.69) 20%, rgba(0,2,5,0.72) 31%, rgba(122,177,211,1) 98%, rgba(122,177,211,1) 100%);
background: linear-gradient(235deg, rgba(0,27,61,1) 0, rgba(11,102,193,0.69) 20%, rgba(0,2,5,0.72) 31%, rgba(122,177,211,1) 98%, rgba(122,177,211,1) 100%);
background-position: 50% 50%;
-webkit-background-origin: padding-box;
background-origin: padding-box;
-webkit-background-clip: border-box;
background-clip: border-box;
-webkit-background-size: auto auto;
background-size: auto auto;" >
             <div class="row">
             <div class="col-md-3"></div>
             
             <div class="col-md-3"> <img src="images/login.png" width="35" height="35" alt="login"/>  Student online Clearance System </div>           
           </div>
             </div>
        
      
            
          
		<div class="container-login100 heavy-rain-gradient">
                  
            
                    <div class="wrap-login100 " >
                            
				<div class="login100-pic js-tilt" data-tilt>
                                  
					<img src="images/logo.png" alt="IMG">
				</div>
                               
				<form class="login100-form validate-form"  >
                                 
                                   
                                    <span class="login100-form-title" style="color: #ffffff">
						Login Page
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Username is required: ex">
						<input class="input100" type="text" name="username" placeholder="Username" id="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                                               
					</div>
					
					<div class="container-login100-form-btn">
                                            <input type="button" id="login"  value="Login" class="login100-form-btn"/>
                                           
					</div>
                                   <div id="msg" style="margin-top: 2%;">
                                   </div>
                                   <input type="hidden" id="DA"/>

					
				</form>
			</div>
		</div>
	</div>
       
                
         <!-- Classic tabs -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
        
  
  
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
        <script>
          function hh(){
              var username=$('#username').val();
		var password=$('#password').val();
		if(username!=='' && password!==''){
			$.ajax({
				url:"userLogin.php",
				method:"POST",
				data:{username:username,password:password},
				success:function (data) {
                                   
                                       $sdf=data.split('');
                                        
						switch($sdf[1]){
                                                    case '3': 
							window.location.href='Home.php';
                                                       
						     break;
						
                                                     case '1':   		
							$('#msg').html('<div class="alert alert-danger text-center">Invalid Username or Password. Please try again!</div>');
                                                        
                                                        break;
                                                      
                                                      case '4': 
							 $('#msg').html('<div class="alert alert-danger text-center">User Account is deactivated please contact the administrator</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
		}else{
                    $('#msg').html('<div class="alert alert-danger text-center">Invalid Username or Password. Please try again!</div>');
                                                       
                }
          }  
            
            
    $(document).ready(function () {
       
		$('#login').click(function () {
	 hh();
	});
});



 $(document).on("keypress", function(e){
        if(e.which === 13){
           hh();
        }
    });
</script>


  <footer class="page-footer font-small blue-gradient" >

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright &copy; EIABC 2019:
    Designed by Computer science section B students
  </div>
  <!-- Copyright -->

</footer>
    </body>
</html>
