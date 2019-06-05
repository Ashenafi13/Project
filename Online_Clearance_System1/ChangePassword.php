<?php
session_start();
 if (!isset($_SESSION['user_name'])) {
header('Location: login.php');
}
?>
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
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
       <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style_2.css" rel="stylesheet">      
  
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style_1.css">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
      
	<link rel="stylesheet" type="text/css" href="css/main_1.css">
       

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
    <style>
          .card-header{
   background: -webkit-linear-gradient(45deg, rgba(58,9,26,1) 0, rgba(6,86,153,1) 26%, rgba(6,86,153,1) 74%, rgba(58,9,26,1) 82%, rgba(44,120,201,1) 100%);
background: -moz-linear-gradient(45deg, rgba(58,9,26,1) 0, rgba(6,86,153,1) 26%, rgba(6,86,153,1) 74%, rgba(58,9,26,1) 82%, rgba(44,120,201,1) 100%);
background: linear-gradient(45deg, rgba(58,9,26,1) 0, rgba(6,86,153,1) 26%, rgba(6,86,153,1) 74%, rgba(58,9,26,1) 82%, rgba(44,120,201,1) 100%);
background-position: 50% 50%;
-webkit-background-origin: padding-box;
background-origin: padding-box;
-webkit-background-clip: border-box;
background-clip: border-box;
-webkit-background-size: auto auto;
background-size: auto auto;
color:white;
}
    </style>
    </head>
    <body style="background-color: #d2d5db;">
      
         <?php
       $privilege = $_SESSION['privilege'];
        $Office = $_SESSION['Office'];
        $user_name = $_SESSION['user_name'];
       if($privilege=="Admin"):;
        ?>
       <div class="card">
  <div class="card-header" id="header">
    
      <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

    
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
          
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="Home.php">Main Page <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
        </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
               <a class="dropdown-item" href="Create_Account.php">Create Account</a>
          <a class="dropdown-item" href="EditAccount.php">Edit Account</a>
         
           </div>
      </li>
      
      
      
      
      
      
      <li class="nav-item">
          <a class="nav-link" href="UserLog.php">User log</a>
      </li>
     
       <li class="nav-item active">
           <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
      
       <li class="nav-item">
           <a class="nav-link" href="About.php">About</a>
      </li>
      
       
       
     
    </ul>
    
      <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
        <a class="nav-link" href="#">
         Administrator Account
         
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
            <img src="img/user.png" width="30" height="30" alt="user"/>
            <?php echo ' '?><?php echo $user_name;?></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4" style="width: 10%;">
        <form method="post" action="logout.php">
            <button class="dropdown-item">Log out</button>
        </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>
       </div>
       <?php elseif ($privilege=="Student"):;?>  
       
          <div class="card">
  <div class="card-header" id="header">
      <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-3"></div>
      <div class="col-md-3"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>
      </div>
      
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
             
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item " >
            <a class="nav-link " href="Home.php" >Main Page <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Student_profile.php">View Profile</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Request.php">Request</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
      
     <li class="nav-item">
         <a class="nav-link" href="About.php">About</a>
      </li> 

    </ul>
   <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
        <a class="nav-link" href="#">
        Student Account
         
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
            <img src="img/user.png" width="30" height="30" alt="user"/>
            <?php echo ' '?><?php echo $user_name;?></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4" style="width: 10%;">
        <form method="post" action="logout.php">
            <button class="dropdown-item">Log out</button>
        </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>
          </div>
           <?php elseif ($privilege=="Office" && $Office==8):;?>   
        <div class="card">
  <div class="card-header" id="header">
    
      <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

      
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
         
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="Home.php">Main Page <span class="sr-only">(current)</span></a>
      </li>
      
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Request
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="ViewRequestPostgradualte.php">Post graduate student</a>
            <a class="dropdown-item" href="ViewRequest.php">Regular student</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Report
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="PDFreportApproved.php">Approved Student</a>
            <a class="dropdown-item" href="PDFreportRejected.php">Rejected student</a>
             <div class="dropdown-divider"></div>
           <a class="dropdown-item" data-toggle="modal" data-target="#orangeModalSubscription" >Individual</a>
        </div>
      </li>
      <li class="nav-item active">
          <a class="nav-link " href="ChangePassword.php">Setting</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="About.php">About</a>
      </li> 
     
       
      
       
       

    </ul>
     <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
        <a class="nav-link" href="#">
         <?php if($Office==1):;?>
        EIABC Advisor
         <?php elseif ($Office==2):;?>
        Student Service
         <?php elseif ($Office==3):;?>
        Library
         <?php elseif ($Office==4):;?>
        Student business Affairs
         <?php elseif($Office==5):;?>
        Under graduate director
         <?php elseif ($Office==6):;?>
        EIABC central tools center
        
         <?php elseif ($Office==8):;?>
        Registrar
         <?php elseif ($Office==9):;?>
        Graduate programs director
         <?php endif;?>
         
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
            <img src="img/user.png" width="30" height="30" alt="user"/>
            <?php echo ' '?><?php echo $user_name;?></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4" style="width: 10%;">
        <form method="post" action="logout.php">
            <button class="dropdown-item">Log out</button>
        </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>
        </div>
             <?php elseif ($privilege=="Office" && $Office==1|| $Office==9):;?>  
         <div class="card">
  <div class="card-header" id="header">
    
      <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

     
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
             
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="Home.php">Main Page <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Request
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
           
            <a class="dropdown-item" href="ViewRequestPostgradualte.php">Post graduated students</a>
          
        </div>
      </li>
     
      <li class="nav-item active">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
     <li class="nav-item">
         <a class="nav-link" href="About.php">About</a>
      </li> 
     
       
      
       
       

    </ul>
   <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
         <?php if($Office==1):;?>
        EIABC Advisor
         <?php elseif ($Office==2):;?>
        Student Service
         <?php elseif ($Office==3):;?>
        Library
         <?php elseif ($Office==4):;?>
        Student business Affairs
         <?php elseif($Office==5):;?>
        Under graduate director
         <?php elseif ($Office==6):;?>
        EIABC central tools center
        
         <?php elseif ($Office==8):;?>
        Registrar
         <?php elseif ($Office==9):;?>
        Graduate programs director
         <?php endif;?>
         
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
            <img src="img/user.png" width="30" height="30" alt="user"/>
            <?php echo ' '?><?php echo $user_name;?></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4" style="width: 10%;">
        <form method="post" action="logout.php">
            <button class="dropdown-item">Log out</button>
        </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>
           
             <?php elseif ($privilege=="Office" && $Office==2|| $Office==4 || $Office==5):;?>  
         <div class="card">
  <div class="card-header" id="header">
    
      <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

     
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
         
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="Home.php">Main Page <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Request
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
           
            <a class="dropdown-item" href="ViewRequest.php">Regular student</a>
          
        </div>
      </li>
     
      <li class="nav-item active">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
     <li class="nav-item">
         <a class="nav-link" href="About.php">About</a>
      </li> 
     
       
      
       
       

    </ul>
   <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <?php if($Office==1):;?>
        EIABC Advisor
         <?php elseif ($Office==2):;?>
        Student Service
         <?php elseif ($Office==3):;?>
        Library
         <?php elseif ($Office==4):;?>
        Student business Affairs
         <?php elseif($Office==5):;?>
        Under graduate director
         <?php elseif ($Office==6):;?>
        EIABC central tools center
        
         <?php elseif ($Office==8):;?>
        Registrar
         <?php elseif ($Office==9):;?>
        Graduate programs director
         <?php endif;?>
         
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
            <img src="img/user.png" width="30" height="30" alt="user"/>
            <?php echo ' '?><?php echo $user_name;?></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4" style="width: 10%;">
        <form method="post" action="logout.php">
            <button class="dropdown-item">Log out</button>
        </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>
           
         <?php elseif ($privilege=="Office"):;?>  
            <div class="card">
  <div class="card-header" id="header">
    
      <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

     
      
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
           
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="Home.php">Main Page <span class="sr-only">(current)</span></a>
      </li>
      
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Request
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="ViewRequestPostgradualte.php">Post graduate student</a>
            <a class="dropdown-item" href="ViewRequest.php">Regular student</a>
          
        </div>
      </li>
     
      <li class="nav-item active">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="About.php">About</a>
      </li> 
     
        
      
       
       

    </ul>
    <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
        <a class="nav-link" href="#">
          <?php if($Office==1):;?>
        EIABC Advisor
         <?php elseif ($Office==2):;?>
        Student Service
         <?php elseif ($Office==3):;?>
        Library
         <?php elseif ($Office==4):;?>
        Student business Affairs
         <?php elseif($Office==5):;?>
        Under graduate director
         <?php elseif ($Office==6):;?>
        EIABC central tools center
        
         <?php elseif ($Office==8):;?>
        Registrar
         <?php elseif ($Office==9):;?>
        Graduate programs director
         <?php endif;?>
         
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
            <img src="img/user.png" width="30" height="30" alt="user"/>
            <?php echo ' '?><?php echo $user_name;?></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4" style="width: 10%;">
        <form method="post" action="logout.php">
            <button class="dropdown-item">Log out</button>
        </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>
            </div>     
  
       <?php endif;?>
        
      
        
        
        <div class="container-login100 col-md-8 ">
            
       <div class="wrap-login100 col-md-9" >
          
           <div  style=" color: #000;" id="all"  class="login100-form validate-form" >
               <label for="all" style="margin-left: 30%; font-size: 28px; color: #000; ">Change Password</label>
               
    <label for="current_pass">Current Password</label>            
  <div class="wrap-input100 validate-input" style="color: #000;">
   
    <input type="password" class="input100"  placeholder="Current Password" name="C_pass" data-validate = "Password is required" id="C_pass">
   <span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
  </div>
      <label for="new_pass">New Password</label>            
  <div class="wrap-input100 validate-input" style="color: #000;">
 
    <input type="password" class="input100"  placeholder="New Password" name="N_pass" data-validate = "Password is required" id="N_pass">
   <span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
  </div>
   <label for="new_retype">Retype Password</label>
 <div class="wrap-input100 validate-input" style="color: #000;">
    
    <input type="password"class="input100"  placeholder="Retype Password" name="R_pass" data-validate = "Password is required" id="R_pass">
   <span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
 </div>
                <div id="msg"></div>
           
      
           <input type="hidden" value="<?php echo $user_name;?>" name="username" id="username"/>     
  <button  class="btn btn-primary" id="ch">Change</button>
 <input type="hidden" value="Change password" name="operation" id="operation"/>   
  <input type="hidden" value="The user change password" name="discrbion" id="discrbion"/>   
</div>
          
        </div>
        </div>
             <form action="PDF.php" method="post" id="pdf"></form>
       
 <div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-warning" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Search</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="md-form mb-5">
        
          <input type="text"  class="form-control validate" id="Student_id" name="Student_id" form="pdf">
          <label data-error="wrong" data-success="right" for="Student_id">Student ID</label>
        </div>

        
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
          <button class="btn btn-outline-warning waves-effect" form="pdf">Submit <i class="fa fa-search"></i></button>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
           
      	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
        
                       <!-- Classic tabs -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <footer class="page-footer font-small blue" style="margin-top: 20%; width: 100%">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright &copy; EIABC 2019:
    Designed by Computer science section B students
  </div>
  <!-- Copyright -->

</footer>
        <script>
    $(document).ready(function () {
       
		$('#ch').click(function () {
		var C_pass=$('#C_pass').val();
                var N_pass=$('#N_pass').val();
                var R_pass=$('#R_pass').val();               
		var username=$('#username').val();
                var operation=$('#operation').val();
                 var discrbion=$('#discrbion').val();
		if(username!=='' && C_pass!=='' && N_pass!=='' && R_pass!=='' ){
                    try{
			$.ajax({
				url:"ChangePasswordServer.php",
				method:"POST",
				data:{C_pass:C_pass,username:username,N_pass:N_pass,R_pass:R_pass,operation:operation,discrbion:discrbion},
				success:function (data) {
                                  
                                       $sdf=data.split('');
                                       
						switch($sdf[2]){
                                                    case '3': 
							$('#msg').html('<div class="alert alert-danger text-center">Invalid Password!</div>');
                                                       
						     break;
						
                                                     case '1':   		
							$('#msg').html('<div class="alert alert-success text-center">Password successfully updated!</div>');
                                                        break;
                                                      
                                                      case '2': 
							 $('#msg').html('<div class="alert alert-danger text-center">Password does not much!!</div>');
                                                       
						       break;
                                                       
						}
                                                
					
				}
			});
		}catch(err){
                alert(err);
            }
            }else{
                alert('empty');
            }
	});
});
</script>
 
       
  
  
        
    </body>
</html>
