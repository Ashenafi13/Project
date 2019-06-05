<?php
 session_start();  
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "online_clearance_system";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
  $Office = $_SESSION['Office'];
   $full_name = $_SESSION['full_name'];
  $user_name = $_SESSION['user_name'];
   if (!isset($_SESSION['user_name'])) {
header('Location: login.php');
}
 // Post gragualte
  if($Office==3){
  $query = "SELECT student_request.Request_ID, user.Full_name,user.Institute,user.Program,student_request.Student_ID,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,student_request.Sent_Date
FROM         user INNER JOIN
                      student_request ON user.Student_ID = student_request.Student_ID where student_request.Request_Status='Inprocess' and user.Program='post graduate'";
  $result1 = mysqli_query($connect, $query);

  }else if($Office==6){
      //tools center
         $query = "SELECT request_approve.Approve_ID, user.Full_name,user.Institute,user.Program,request_approve.Student_ID,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Approved_By,offices.office_name,request_approve.Approved_Date
FROM         user INNER JOIN
                      student_request ON user.Student_ID = student_request.Student_ID INNER JOIN request_approve ON user.Student_ID =request_approve.Student_ID INNER JOIN offices ON request_approve.Approved_Office=offices.office_id where request_approve.Approved_Office='3' and user.Program='post graduate' and request_approve.Status='Inprocess' OR request_approve.Approved_Office='3' and request_approve.Status='Approved'";
  $result1 = mysqli_query($connect, $query);

}else if($Office==1){
      //Advisor
         $query = "SELECT request_approve.Approve_ID, user.Full_name,user.Institute,user.Program,request_approve.Student_ID,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Approved_By,offices.office_name,request_approve.Approved_Date
FROM         user INNER JOIN
                      student_request ON user.Student_ID = student_request.Student_ID INNER JOIN request_approve ON user.Student_ID =request_approve.Student_ID INNER JOIN offices ON request_approve.Approved_Office=offices.office_id where request_approve.Approved_Office='6' and user.Program='post graduate' and request_approve.Status='Inprocess' OR request_approve.Approved_Office='6' and request_approve.Status='Approved'";
  $result1 = mysqli_query($connect, $query);
  }else if($Office==9){
      //tools center
         $query = "SELECT request_approve.Approve_ID, user.Full_name,user.Institute,user.Program,request_approve.Student_ID,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Approved_By,offices.office_name,request_approve.Approved_Date
FROM         user INNER JOIN
                      student_request ON user.Student_ID = student_request.Student_ID INNER JOIN request_approve ON user.Student_ID =request_approve.Student_ID INNER JOIN offices ON request_approve.Approved_Office=offices.office_id where request_approve.Approved_Office='1' and user.Program='post graduate' and request_approve.Status='Inprocess' OR request_approve.Approved_Office='1' and request_approve.Status='Approved'";
  $result1 = mysqli_query($connect, $query);
  
  

  

  }else if($Office==8){
      //Registrar
         $query = "SELECT request_approve.Approve_ID, user.Full_name,user.Institute,user.Program,request_approve.Student_ID,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Approved_By,offices.office_name,request_approve.Approved_Date
FROM         user INNER JOIN
                      student_request ON user.Student_ID = student_request.Student_ID INNER JOIN request_approve ON user.Student_ID =request_approve.Student_ID INNER JOIN offices ON request_approve.Approved_Office=offices.office_id where request_approve.Approved_Office='9' and user.Program='post graduate' OR request_approve.Approved_Office='9' and request_approve.Status='Approved'";
  $result1 = mysqli_query($connect, $query);

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
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="css/style_2.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style_1.css">  
  <style>
        tr:hover{
            background-color: #ddd;
        }
    </style>
    <script language="javascript">

        function hideCol() {

            var col = 1;

            if (isNaN(col) || col === "") {

            $('#msg').html('<div class="alert alert-danger text-center">No data found</div>');

                return;

            }

            col = parseInt(col, 10);

            col = col - 1;

            var tbl = document.getElementById("student");

            if (tbl !== null) {

                if (col < 0 || col >= tbl.rows.length - 1) {

                       $('#msg').html('<div class="alert alert-danger text-center">No data found</div>');

                    return;

                }

                for (var i = 0; i < tbl.rows.length; i++) {

                    for (var j = 0; j < tbl.rows[i].cells.length; j++) {

                        tbl.rows[i].cells[j].style.display = "";

                        if (j === col)

                            tbl.rows[i].cells[j].style.display = "none";

                    }

                }

            }

        }
function hideCol2() {

            var col = 1;

            if (isNaN(col) || col === "") {

            $('#msg2').html('<div class="alert alert-danger text-center">No data found</div>');

                return;

            }

            col = parseInt(col, 10);

            col = col - 1;

            var tbl = document.getElementById("student2");

            if (tbl !== null) {

                if (col < 0 || col >= tbl.rows.length - 1) {

                    $('#msg2').html('<div class="alert alert-danger text-center">No data found</div>');

                    return;

                }

                for (var i = 0; i < tbl.rows.length; i++) {

                    for (var j = 0; j < tbl.rows[i].cells.length; j++) {

                        tbl.rows[i].cells[j].style.display = "";

                        if (j === col)

                            tbl.rows[i].cells[j].style.display = "none";

                    }

                }

            }

        }
    </script>
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
    <body onload="hideCol();hideCol2();">
           <?php
       $privilege = $_SESSION['privilege'];
       
       
        ?>
        <section id="header" class="appear">
  
        
           <?php if ($privilege=="Office" && $Office==8):;?>   
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
      
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Request
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item active" href="ViewRequestPostgradualte.php">Post graduate student</a>
            <a class="dropdown-item " href="ViewRequest.php">Regular student</a>
          
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
     
        </div>
      
       
       

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
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Request
        </a>
        <div class="dropdown-menu active" aria-labelledby="navbarDropdown2">
           
            <a class="dropdown-item " href="ViewRequest.php">Regular student</a>
          
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
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Request
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item active" href="ViewRequestPostgradualte.php">Post graduate student</a>
            <a class="dropdown-item " href="ViewRequest.php">Regular student</a>
          
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
           
       
       <?php endif;?>
        
         </section>
        
        <section id="section-services" class="section pad-bot30 bg-white">
        <form method="post" action="ApprovedRequest.php" id="Approve"></form>
        <form method="post" action="Approve_Office.php" id="Approve2"></form>
        <input type="hidden" value="<?php echo $Office;?>" name="A_office" form="Approve2"/>
        <input type="hidden" name="Student_ID" id="Student_ID" form="Approve"/>
       
        
        
      <input type="hidden" name="Request_ID" id="Request_ID" form="Approve"/>
      <input type="hidden" name="program" id="program" form="Approve"/>
      <input type="hidden" name="Approved_BY" id="Approved_BY" value="<?php echo $full_name;?>" form="Approve"/>
      <input type="hidden" name="Approved_Office" id="Approved_Office" value="<?php echo $Office;?>" form="Approve"/>
      
      <input type="hidden" name="Student_ID2" id="Student_ID2" form="Approve2" />
      <input type="hidden" name="program2" id="program2" form="Approve2"/>
         <input type="hidden" name="Approve_ID" id="Approve_ID" form="Approve2"/>
      
       <input type="hidden" name="Office" id="Office" value="<?php echo $Office;?>" form="Approve2"/>
      <input type="hidden" name="Approved_by" id="Approved_by" value="<?php echo $full_name;?>" form="Approve2"/>
     
         <?php if($Office==3):; //Library?>
       <div id="msg"></div>
     <table class="table table-bordered heavy-rain-gradient" id="student">
  
         <tr style="color: #ffffff" class="morpheus-den-gradient">
          <th>#</th>
        <th scope="col" style="width: auto;">Full name</th>
      <th scope="col" style="width: auto;">Institute</th>
       <th scope="col" style="width: auto;">Program</th>
      <th scope="col" style="width: auto;">Student ID</th>
       <th scope="col" style="width: auto;">Reason</th>
        <th scope="col" style="width: auto;">Last class attend</th>
      <th scope="col" style="width: auto;">Request_type</th>
      <th scope="col" style="width: auto;">Sent Date</th>
     
    </tr>
 
  
       <?php while($row1 = mysqli_fetch_array($result1)):;?>

            

          
    <tr class="hoverable">
        <td><?php echo $row1[0];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[1];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[2];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[3];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[4];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[5];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[6];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[7];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[8];?></td>     
      <td style="width: auto; font-weight:bold;" ><button class="btn  btn-outline-info " form="Approve">Approve</button></td>
      <td style="width: auto; font-weight:bold;" ><button class="btn btn-outline-danger" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Reject</button></td>
   
    </tr>
    
      <?php endwhile;?>
 
</table>
        
        <?php else:; //Other Office?>
        <div id="msg2"></div>
         <table class="table table-bordered  heavy-rain-gradient" id="student2">
  
             <tr style=" color: #ffffff" class="morpheus-den-gradient">
          <th>#</th>
        <th scope="col" style="width: auto;">Full name</th>
      <th scope="col" style="width: auto;">Institute</th>
       <th scope="col" style="width: auto;">Program</th>
      <th scope="col" style="width: auto;">Student ID</th>
       <th scope="col" style="width: auto;">Reason</th>
        <th scope="col" style="width: auto;">Last class attend</th>
      <th scope="col" style="width: auto;">Request_type</th>
      <th scope="col" style="width: auto;">last approved By</th>
       <th scope="col" style="width: auto;">Approved Office</th>
        <th scope="col" style="width: auto;">Approved Date</th>
     
    </tr>
 
  
       <?php while($row1 = mysqli_fetch_array($result1)):;?>

            

          
    <tr class="hoverable" style="font-weight:bold;">
        <td><?php echo $row1[0];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[1];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[2];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[3];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[4];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[5];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[6];?></td>
      <td style="width: auto; font-weight:bold;"><?php echo $row1[7];?></td>
      <td style="width: auto;font-weight:bold;"><?php echo $row1[8];?></td>
       <td style="width: auto; font-weight:bold;"><?php echo $row1[9];?></td>
        <td style="width: auto; font-weight:bold;"><?php echo $row1[10];?></td>
      
      <td style="width: auto;" ><button class="btn btn-outline-info" form="Approve2">Approve</button>
     <button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Reject</button></td>
    
    </tr>
   
      <?php endwhile;?>
 
</table>
        <?php endif;?>
        <!-- Reason window For Library-->
       
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="rejected" action="RejectedServer.php" method="post">
          
              
          <div class="form-group">
            <label for="message-text" class="col-form-label">Rejected Reason</label>
            <textarea class="form-control" id="message-text" name="Remark"></textarea>
          </div>
                <input type="hidden" name="Student_ID4" id="Student_ID4" form="rejected" />
                <input type="hidden" name="program4" id="program4" form="rejected" />
                <input type="hidden" name="Request_ID2" id="Request_ID" form="rejected"/>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button   class="btn btn-primary" form="rejected">Reject</button>
        
      </div>
    </div>
  </div>
</div>
      <!-- Reason window For Other Offices-->
      
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="rejected2" action="RejectedServer2.php" method="post">
            <input type="hidden" value="<?php echo $Office;?>" name="R_Office"/>
            <input type="hidden" name="pro" id="pro" />
          <div class="form-group">
            <label for="message-text" class="col-form-label">Rejected Reason</label>
            <textarea class="form-control" id="message-text" name="Remark2"></textarea>
          </div>
                <input type="hidden" name="Student_ID5" id="Student_ID5" form="rejected2"/> 
                   <input type="hidden" name="Approve_ID2" id="Approve_ID2" form="rejected2"/>
                <input type="hidden" name="rejected_by" id="rejected_by" value="<?php echo $full_name;?>" form="rejected2" />
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button   class="btn btn-primary" form="rejected2">Reject</button>
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
      </section>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
       <script>
  var row1=document.getElementById('student'),rIndex;
  for(var i=1;i<row1.rows.length;i++){
      row1.rows[i].onclick=function (){
          rIndex=this.rowIndex;
  
          
          document.getElementsByName('Request_ID')[0].value=this.cells[0].innerHTML;
           document.getElementsByName('Request_ID2')[0].value=this.cells[0].innerHTML;
          document.getElementsByName('Student_ID')[0].value=this.cells[4].innerHTML;
          document.getElementsByName('Student_ID4')[0].value=this.cells[4].innerHTML;
          document.getElementsByName('program')[0].value=this.cells[3].innerHTML;
          document.getElementsByName('program4')[0].value=this.cells[3].innerHTML;
       
         
      };
  }
   
                   </script>  
                   
                   
           <script>
  var row1=document.getElementById('student2'),rIndex;
  for(var i=1;i<row1.rows.length;i++){
      row1.rows[i].onclick=function (){
          rIndex=this.rowIndex;
    
          
          document.getElementsByName('Approve_ID')[0].value=this.cells[0].innerHTML;
           document.getElementsByName('Approve_ID2')[0].value=this.cells[0].innerHTML;
          document.getElementsByName('Student_ID2')[0].value=this.cells[4].innerHTML;
                document.getElementsByName('Student_ID5')[0].value=this.cells[4].innerHTML;
           document.getElementsByName('program2')[0].value=this.cells[3].innerHTML;
          document.getElementsByName('pro')[0].value=this.cells[3].innerHTML;
          
         
      };
  }
   
                   </script>          
      
       <footer class="page-footer font-small blue" style="margin-top: 20%; width: 100%">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright &copy; EIABC 2019:
    Designed by Computer science section B students
  </div>
  <!-- Copyright -->

</footer>
    </body>
</html>
