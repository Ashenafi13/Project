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
$query = "SELECT * FROM `userlog`";
$result1 = mysqli_query($connect, $query);

  ?>


<!DOCTYPE html>



<html>
    <head>
        <title>Student online Clearance System </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo.png"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
       <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style_2.css" rel="stylesheet"> 

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
       
        <link rel="stylesheet" href="css/style_1.css">
        
        
         <style>
      table{
            -webkit-box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.4) ;
box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.4) ;
        }
        #TRE{
           background: -webkit-linear-gradient(0deg, rgba(150,150,150,1) 0, rgba(114,110,110,1) 1%, rgba(119,109,109,1) 81%, rgba(38,34,34,1) 100%);
background: -moz-linear-gradient(90deg, rgba(150,150,150,1) 0, rgba(114,110,110,1) 1%, rgba(119,109,109,1) 81%, rgba(38,34,34,1) 100%);
background: linear-gradient(90deg, rgba(150,150,150,1) 0, rgba(114,110,110,1) 1%, rgba(119,109,109,1) 81%, rgba(38,34,34,1) 100%);
background-position: 50% 50%;
-webkit-background-origin: padding-box;
background-origin: padding-box;
-webkit-background-clip: border-box;
background-clip: border-box;
-webkit-background-size: auto auto;
background-size: auto auto;
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
          <a class="nav-link" href="Home.php">Main Page</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
        </a>
           <div class="dropdown-menu " aria-labelledby="navbarDropdown1">
               <a class="dropdown-item " href="Create_Account.php">Create Account</a>
               <a class="dropdown-item" href="EditAccount.php">Edit Account</a>
           </div>
      </li>  
     
     
      
       <li class="nav-item active">
           <a class="nav-link" href="UserLog.php">User log</a>
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
                  <div class="table-responsive">
        <table class="table table-bordered" style="width: 70%; margin-left: 5%;">
  
      <tr style=" color: #ffffff" id="TRE">
          <th>#</th>
     
      <th scope="col" style="width: auto;">Username</th>
      <th scope="col" style="width: auto;">Operation</th>
      <th scope="col"style="width: auto;">Description</th>
      <th scope="col" style="width: auto;">Registered Date</th>
    </tr>
       
  <?php $count=1;?>
       <?php while($row1 = mysqli_fetch_array($result1)):;?>

            
        
          
    <tr>
        <td><?php echo $count?></td>
      <td style="width: auto;"><?php echo $row1[1];?></td>
      <td style="width: auto;"><?php echo $row1[2];?></td>
      <td style="width: auto;"><?php echo $row1[3];?></td>
      <td style="width: auto;"><?php echo $row1[4];?></td>
    <?php $count++;?>
    </tr>
   
      <?php endwhile;?>
   
</table>
                  </div>
           </section>
        
             
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
