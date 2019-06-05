<?php
session_start();
  $user_name= $_SESSION['user_name'];
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
  <style>
          input.hidden {
    position: absolute;
    left: -9999px;
}
  

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	
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
         <div class="card">
  <div class="card-header" id="header">
     <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-3"></div>
      <div class="col-md-4"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>
     </div>
      
      
 

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
      <li class="nav-item active">
          <a class="nav-link active" href="Student_profile.php">View Profile</a>
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
         <section id="section-services" class="section pad-bot30 bg-white">
        <?php 
        $Student_ID = $_SESSION['Student_ID'];
        
        $full_name= $_SESSION['full_name'];
        $institute= $_SESSION['institute'];
        $program= $_SESSION['program'];
       
        
        ?>
             <div class="card col-md-8 light-blue lighten-3" style="margin-top: 1%; margin-left: 2%;">
                 <div class="card-header info-color-dark font-weight-bold" style="color:#f8f8f8;">
   Student profile
  </div>
  <div class="card-body">
   
 
      
                     
        <div class="container" style="color: #000000;">
	<div class="row">
		
        
        
            <div class="col-md-7 " style="margin-top: 2%;">

<div class="panel panel-default">
 
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-5" align="center">
      <div class="avatar md-6">
        <img src="images/user.png" class="rounded-circle z-depth-1"
             alt="Sample avatar" width="80" height="80">
      </div>
    
      
    </div>
                

           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#f8f8f8;"><?php echo $full_name;?> </h4></span>
                          
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Full Name:</div><div class="col-sm-7 col-xs-6 "><?php echo $full_name;?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >ID Number:</div><div class="col-sm-7"> <?php echo $Student_ID;?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Institute:</div><div class="col-sm-7"><?php echo $institute;?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Program:</div><div class="col-sm-7"><?php echo $program;?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Username:</div><div class="col-sm-7"><?php echo $user_name;?></div>

 


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    
    
       
       
       
       
       
       
       
       
   </div>
</div>     
          
    </div>
</div>          
             
      <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
         <!-- Classic tabs -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
        </section>     
  
  <footer class="page-footer font-small blue" style="margin-top: 20%; width: 100%">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright &copy; EIABC 2019:
    Designed by Computer science section B students
  </div>
  <!-- Copyright -->

</footer>
        
        
        
    </body>
</html>
