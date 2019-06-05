<?php
session_start();
  $user_name = $_SESSION['user_name'];
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
   	
	<link rel="icon" type="image/png" href="images/logo.png"/>
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="css/style_2.css" rel="stylesheet"> 

	 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
       
        <link rel="stylesheet" href="css/style_1.css">
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
    <body>
          <?php
       $privilege = $_SESSION['privilege'];
        $Office = $_SESSION['Office'];
       if($privilege=="Admin"):;
        ?>
        <section id="header" class="appear">
  
          <div class="card">
  <div class="card-header" id="header">
    
      <div style="margin-left: 40%;"> <img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

   
      
 

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
     
       <li class="nav-item">
           <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
      
     
       <li class="nav-item active">
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
      <div class="col-md-3"> <img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

      </div>
      
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
          
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item" style="color: #00F;">
            <a class="nav-link" href="Home.php">Main Page <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Student_profile.php">View Profile</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Request.php">Request</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
      
       <li class="nav-item active">
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
      <li class="nav-item">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
     <li class="nav-item active">
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
           
            <a class="dropdown-item " href="ViewRequestPostgradualte.php">Post graduated students</a>
          
        </div>
      </li>
     
      <li class="nav-item">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
     <li class="nav-item active">
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
            <?php elseif ($privilege=="Office" && $Office==2|| $Office==4 ||$Office==5):;?>  
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
     
      <li class="nav-item">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
     <li class="nav-item active">
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
      <li class="nav-item">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
      </li>
      <li class="nav-item active">
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
      
   
            
        
           <div class="jumbotron text-center blue-grey lighten-5">

  <!-- Title -->
 
  <h2 class="card-title h2 text-info  my-4" style="text-shadow: 2px 2px 2px rgba(0,0,0,0.5) ;">Student online Clearance System</h2>
 <hr class="my-4 pb-2">
  <!-- Subtitle -->
 
 

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-xl-7 pb-2">

      <p class=" w-responsive mx-auto mb-5 text-success">
     This system allows the users to check their clearance 
        status as whether they are in any way obligated to the university, 
        fill and submit their clearance form,
        and obtain their clearance letter. </p>
  
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  
<section class="team-section text-center my-5 ">

  
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
      <div class="avatar md-6">
        <img src="images/user3.png" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Seble Teferie</h5>
      <p class="text-uppercase blue-text"><strong>Graphic designer</strong></p>
      
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
      <div class="avatar mx-auto">
        <img src="images/user3.png" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Konjit Assefa</h5>
      <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
   
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
      <div class="avatar mx-auto">
        <img src="images/user2.png" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Zelalem Asegidewu</h5>
      <p class="text-uppercase blue-text"><strong>Docmentation</strong></p>
      
      
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6">
      <div class="avatar mx-auto">
        <img src="images/user3.png" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Menbere Molla</h5>
      <p class="text-uppercase blue-text"><strong>Back end developer </strong></p>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.1 -->    
  
  
  

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
</div>              <!-- Classic tabs -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
    </body>
</html>
