<?php
 
session_start();
  $user_name = $_SESSION['user_name'];
   if (!isset($_SESSION['user_name'])) {
header('Location: login.php');
}
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "online_clearance_system";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `offices`";
$result1 = mysqli_query($connect, $query);
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
       <title>Online Clearance System </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo.png"/>
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
       <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style_2.css" rel="stylesheet"> 	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
       
    <style>
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
    
      <div style="margin-left: 40%;"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>

      
      
 

  </div>
  <div class="card-body">
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
           
              </a>
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="Home.php">Main Page</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
        </a>
           <div class="dropdown-menu " aria-labelledby="navbarDropdown1">
               <a class="dropdown-item active " href="Create_Account.php">Create Account</a>
               <a class="dropdown-item" href="EditAccount.php">Edit Account</a>
           </div>
      </li>  
      
       <li class="nav-item">
           <a class="nav-link" href="UserLog.php">User log</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="ChangePassword.php">Setting</a>
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
         <section id="section-services" class="section pad-bot30 bg-white">
        
   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Student Account
          <i class="fa fa-angle-down rotate-icon" style="font-weight: bold; color: #0062cc; "></i>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
          <!-- Student Body-->
          <div style="width: 60%;">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="full_name">Full Name</label>
      <input type="text" class="form-control" id="full_name" placeholder="Enter full name" name="full_name">
    </div>
    <div class="form-group col-md-6">
      <label for="ID">Student ID</label>
      <input type="text" class="form-control" id="ID" placeholder="Enter student id" name="ID">
    </div>
  </div>
  <div class="form-group">
    <label for="institute">Institute</label>
    <input type="text" class="form-control" id="institute" placeholder="Enter institute" name="institute">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Program</label><br/>
   <div class="form-check form-check-inline">
       <label class="form-check-label" for="program">post graduate</label>
       
       <input class="form-check-input" type="radio" name="program" id="program1" value="post graduate">
  
</div>
<div class="form-check form-check-inline">
     <label class="form-check-label" for="program">Regular</label>
     
  <input class="form-check-input" type="radio" name="program" id="program2" value="Regular" >
 
</div>
   
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>
  </div>              
 <button  class="btn btn-primary" id="create3">Create</button>
 <div id="msg3"></div>
</div>
  </div>
  
        <input type="hidden" value="<?php echo $user_name;?>" name="main_username" id="main_username"/>
        <input type="hidden" value="Create Account" name="operation1" id="operation1"/> 
        <input type="hidden" value="This user create admin account" name="descreaption1" id="descreaption1"/> 
        
        
        
        <input type="hidden" value="Create Account" name="operation2" id="operation2"/> 
        <input type="hidden" value="This user create Office account" name="descreaption2" id="descreaption2"/> 
        
        <input type="hidden" value="Create Account" name="operation3" id="operation3"/> 
        <input type="hidden" value="This user create Student account" name="descreaption3" id="descreaption3"/> 
        
         
      </div>
    </div>
  
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Offices Account
         <i class="fa fa-angle-down rotate-icon" style="font-weight: bold; color: #0062cc; "></i>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
     <!-- Staff body-->
     <div style="width: 60%;">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="full_name">Full Name</label>
      <input type="text" class="form-control" id="Office_full_name" placeholder="Enter full name" name="full_name">
    </div>
    <div class="form-group col-md-6">
      <label for="offices">Offices</label><br/>
     <select class="form-control" name="office" id="office">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">username</label>
      <input type="text" class="form-control" id="Office_username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="Office_password" placeholder="Enter Password" name="password">
    </div>
  </div>  
 <button class="btn btn-primary" id="create2">Create</button>
 
 <div id="msg2"></div>
</div>
     
     
     
      </div>
    </div>
  </div>
 <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
         Administrator Account
         <i class="fa fa-angle-down rotate-icon" style="font-weight: bold; color: #0062cc; "></i>
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
       <!---  Administrator Account -->
       
       <div style="width: 20%;">
  <div class="form-group">
    <label for="full_name">Full Name</label>
    <input type="text" class="form-control" id="full_name_admin"  placeholder="Enter full name" name="full_name_admin">
  
  
  </div>
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username_admin"  placeholder="Enter username" name="username_admin">
  
  
  </div>        
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password_admin" placeholder="Password" name="Password_admin">
  </div>
  
  <button  class="btn btn-primary" id="create1">Submit</button>
  <div id="msg1"></div>
</div>
       
       
       
       
      </div>
    </div>
  </div>
</div>
     
        
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        
       <script src="js/account.js"></script>
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
