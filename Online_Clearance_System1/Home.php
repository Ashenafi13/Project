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
     
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
       <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style_2.css" rel="stylesheet">
    <style>
        .chip.chip-md {
  height: 42px;
  line-height: 42px;
  border-radius: 21px;
}
.chip.chip-md img {
  height: 42px;
  width: 42px;
}

.chip.chip-lg {
  height: 52px;
  line-height: 52px;
  border-radius: 26px;
}
.chip.chip-lg img {
  height: 52px;
  width: 52px;
}
.modal-notify .modal-header {
    border-radius: 3px 3px 0 0;
}
.modal-notify .modal-content {
    border-radius: 3px;
}
#modalbody{

color:white;
}

#header{
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
       
        <section id="header" class="appear" style="background: #000">
             

    
  <div class="card">
  <div class="card-header" id='header'>
      <div class="chip chip-lg z-depth-5" style="margin-left:50%;  font-weight:bold;">
   <img src="images/logo.png"  alt="logo"/>Student online Clearance System
   
</div>
      
      
 

  </div>
  <div class="card-body">
    
      
      
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
            
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
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
      
      <li class="nav-item">
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
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4 " style="width: 10%;">
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
           <div class="card-header" id='header'>
               <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-3"></div>
               <div class="col-md-4"><img src="images/logo.png" width="50" height="50" alt="logo"/> Student online Clearance System</div>
                   </div>
  </div>
  <div class="card-body">
          <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
           
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active" style="color: #00F;">
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
             <?php echo $user_name;?></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4" style="width: 10%;">
        <form method="post" action="logout.php" >
            <button class="dropdown-item" >Log out</button>
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
          <div class="card-header" id='header'>
              <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/> Student online Clearance System</div>
 
  </div>
  <div class="card-body">
      
      
       <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
         
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
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
  <div class="card-header" id='header' >
    
      <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Online Clearance System</div>

     
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
             
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
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
     
      <li class="nav-item">
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
  <?php elseif ($privilege=="Office" && $Office==2|| $Office==4 || $Office==5):;?>  
         <div class="card">
  <div class="card-header" id='header'>
    
      <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

     
 

  </div>
  <div class="card-body">
  
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
           
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
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

     
     
             
         <?php elseif ($privilege=="Office"):;?>  
          <div class="card">
  <div class="card-header" id='header'>
      <div class="chip chip-lg">
          <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online clearance system</div>
  
</div>
      
      
 

  </div>
  <div class="card-body">
   
  

 <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
          
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
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
        
            </section>     
  
   <section id="section-services" class="section pad-bot30">
  
       <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-body blue-gradient">
        <div class="row">       
          <div class="col-lg-12">
            <h2 class="h2-responsive product-name">
                 <span class="deep-orange-text">
              <strong>Working flow of the system</strong>
                 </span>
            </h2>
            <h4 class="h4-responsive">
              <span class="white-text">
                  <small>Every time the student send clearance request it will go to different offices </small>
              </span>
             
            </h4>

            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header info-color" role="tab" id="headingOne1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">
                    <h5 class="mb-0 text-white">
                      Post graduate students <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                  data-parent="#accordionEx">
                  <div class="card-body blue lighten-4">
                  When the post graduate students send clearance request the flow will be as follows:<br/>
                  <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Library:-</label> if the chief library officer reject the request the request will be back 
                                                                         to the student but if the chief library officer approve the request it will go to 'Tools center'.<br/>
                  <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Tools center:-</label> if the officer reject the request the request will be back 
                                                                         to the student but if  officer approve the request it will go to 'EIABC Advisor'.<br/>  
                                                                        
                  <i class="fa fa-caret-right"></i> <label style="font-weight: bold">EIABC Advisor:-</label> if the EIABC Advisor reject the request the request will be back 
                                                                         to the student but if  EIABC Advisor approve the request it will go to 'Graduate programs director'.<br/>     
                  <i class="fa fa-caret-right"></i> <label style="font-weight: bold"> Graduate programs director:-</label> if the director reject the request the request will be back 
                                                                         to the student but if  director approve the request it will go to 'registrar office '.<br/> 
                  <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Registrar office:-</label> if the officer reject the request the request will be back 
                                                                         to the student but if  officer approve the request. The student will be informed so he/she will go to registrar office and take the final approved form.<br/>  
                                 </div>
                </div>

              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header info-color" role="tab" id="headingTwo2">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                    aria-expanded="false" aria-controls="collapseTwo2">
                    <h5 class="mb-0 text-white">
                      Regular students <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                  data-parent="#accordionEx">
                  <div class="card-body blue lighten-4">
                 When the regular students send clearance request the flow will be as follows:<br/>
                 <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Library:-</label> if the chief library officer reject the request the request will be back 
                                                                         to the student but if the chief library officer approve the request it will go to 'student service office'.<br/>
                 <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Student service office:-</label> if the officer reject the request the request will be back 
                                                                         to the student but if  officer approve the request it will go to ' student business affairs'.<br/>     
                 <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Student business affairs:-</label> if the officer reject the request the request will be back 
                                                                         to the student but if  officer approve the request it will go to 'under graduate director'.<br/>  
                 <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Under graduate director:- </label>if the director reject the request the request will be back 
                                                                         to the student but if  director approve the request it will go to 'Tools center '.<br/> 
                 <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Tools center:-</label> if the officer reject the request the request will be back 
                                                                         to the student but if  officer approve the request it will go to 'registrar office'.<br/>  
                 <i class="fa fa-caret-right"></i> <label style="font-weight: bold">Registrar office:-</label> if the officer reject the request the request will be back 
                                                                         to the student but if  officer approve the request. The student will be informed so he/she will go to registrar office and take the final approved form.<br/>  
                                                                         
                                                                       
                                                                         
                                                                             
                                                                
                      
                      
                      
                  </div>
                </div>

              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              

            </div>
            <!-- Accordion wrapper -->


            <!-- Add to Cart -->
            <div class="card-body">
              
              <div class="text-center">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
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
<div class="card card-image col-sm-9" style="background-image: url(images/back.jpg); margin-left: 5%; margin-top: 2%; height: 10%;" >
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
        <h2 class="card-title h1-responsive pt-3 mb-3 font-bold animated bounce infinite"><strong>Student online clearance system</strong></h2>
      <p class="mx-2 mb-2">
          
        Online student clearance system allows the users to check their clearance status as whether they are in any way obligated to the university, fill and submit their clearance form, and obtain their clearance letter. There are many other advantage of student’s online clearance system.<br/> Some of them are listed below:-
      </p>
     <div class="d-flex justify-content-md-start animated fadeInRight fast"><br/>
         <label class="hoverable"><i class="fa fa-quote-left z-depth-1"></i> It is very convenient to use it right from the dormitories, office or anywhere in the campus.</label><br/>
          <label class="hoverable"><i class="fa fa-quote-left z-depth-1"></i> Information processing is very fast and delays can be minimized.</label><br/>
        
          <label class="hoverable"><i class="fa fa-quote-left z-depth-1"></i> Provides a reliable and transparent clearance processing system.</label><br/>
          <label class="hoverable"><i class="fa fa-quote-left z-depth-1"></i> It provides a reliable and transparent system devoid of person interest and inclination.</label><br/> 
         <div class="d-flex justify-content-start">...</div>
<div class="d-flex justify-content-end">...</div>
<div class="d-flex justify-content-center">...</div>
<div class="d-flex justify-content-between">...</div>
<div class="d-flex justify-content-around">...</div>
      </div>    
     
       <button class="btn btn-outline-white btn-md" data-toggle="modal" data-target="#modalQuickView"><i class="fa fa-angle-double-right ml-2"></i> Read More</button
    </div>
  </div>
</div>
              </div>


              </section>
        
        
         <!-- Classic tabs -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
        
  
  <footer class="page-footer font-small blue" style="margin-top: 19%;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright &copy; EIABC 2019:
    Designed by Computer science section B students
  </div>
  <!-- Copyright -->

</footer>

  
 
    </body>
</html>
