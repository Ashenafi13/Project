<?php
session_start();
 $user_name= $_SESSION['user_name'];
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "online_clearance_system";
$Student_ID = $_SESSION['Student_ID'];
if (!isset($_SESSION['Student_ID'])) {
header('Location: login.php');
}
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "Select * from `student_request` where Student_ID=?";
$stmt = mysqli_prepare($connect, $query);
      mysqli_stmt_bind_param($stmt, "s", $Student_ID);
      mysqli_stmt_execute($stmt);
$query2 = "SELECT student_request.Request_ID, user.Full_name,user.Institute,user.Program,student_request.Student_ID,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,student_request.Request_Status,student_request.Remark,student_request.Sent_Date
FROM         user INNER JOIN
                      student_request ON user.Student_ID = student_request.Student_ID where student_request.Student_ID='{$Student_ID}' and Request_Status!='Cancel'";

$query3 = "Select * from request_approve where Student_ID='{$Student_ID}'";

$query4 = "SELECT request_approve.Approve_ID, user.Full_name,user.Institute,user.Program,request_approve.Student_ID,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Status,request_approve.Approved_By,offices.office_name,request_approve.Approved_Date,request_approve.Remark
FROM         user INNER JOIN
                      student_request ON user.Student_ID = student_request.Student_ID INNER JOIN request_approve ON user.Student_ID =request_approve.Student_ID INNER JOIN offices ON request_approve.Approved_Office=offices.office_id where request_approve.Student_ID='{$Student_ID}' and Status!='Cancel'";


$query5 = "SELECT request_approve.Approve_ID, user.Full_name,user.Institute,user.Program,request_approve.Student_ID,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Status,request_approve.Approved_By,request_approve.Approved_Date,request_approve.Remark,offices.office_name
FROM         user INNER JOIN
                      student_request ON user.Student_ID = student_request.Student_ID INNER JOIN request_approve ON user.Student_ID =request_approve.Student_ID INNER JOIN offices ON request_approve.Status_Office=offices.office_id where request_approve.Student_ID='{$Student_ID}' and Status!='Cancel'";


$result1 = mysqli_stmt_get_result($stmt);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
$result5 = mysqli_query($connect, $query5);
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
              
#card-body1{
  background-image: -webkit-linear-gradient(0deg, rgba(117,155,173,0.24) 0, rgba(117,155,173,0.51) 92%, rgba(0,0,0,0.72) 97%, rgba(0,0,0,0.72) 100%);
background-image: -moz-linear-gradient(90deg, rgba(117,155,173,0.24) 0, rgba(117,155,173,0.51) 92%, rgba(0,0,0,0.72) 97%, rgba(0,0,0,0.72) 100%);
background-image: linear-gradient(90deg, rgba(117,155,173,0.24) 0, rgba(117,155,173,0.51) 92%, rgba(0,0,0,0.72) 97%, rgba(0,0,0,0.72) 100%);
background-position: 50% 50%;
-webkit-background-origin: padding-box;
background-origin: padding-box;
-webkit-background-clip: border-box;
background-clip: border-box;
-webkit-background-size: auto auto;
background-size: auto auto;
}
#card-body2{
    background-image: -webkit-linear-gradient(0deg, rgba(117,155,173,0.82) 0, rgba(117,155,173,0.51) 92%, rgba(0,0,0,0.72) 97%, rgba(0,0,0,0.72) 100%);
background-image: -moz-linear-gradient(90deg, rgba(117,155,173,0.82) 0, rgba(117,155,173,0.51) 92%, rgba(0,0,0,0.72) 97%, rgba(0,0,0,0.72) 100%);
background-image: linear-gradient(90deg, rgba(117,155,173,0.82) 0, rgba(117,155,173,0.51) 92%, rgba(0,0,0,0.72) 97%, rgba(0,0,0,0.72) 100%);
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
    <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-3"></div>
      <div class="col-md-3"><img src="images/logo.png" width="50" height="50" alt="logo"/>Student online Clearance System</div>
    </div>
      
      
 

  </div>
  <div class="card-body">
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
          
            <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Main Page <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Student_profile.php">View Profile</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="Request.php">Request</a>
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
        <form action="ResendRequest.php" method="post" id="Resend"></form>
          <form action="ResendRequest2.php" method="post" id="Resend2"></form>
        <input type="hidden" value="<?php echo $Student_ID  ?>" name="student_id" form="Resend"/>
        <input type="hidden" value="<?php echo $Student_ID  ?>" name="student_id2" form="Resend2"/>
<div class="accordion" id="accordionExample">
    <div class="card">
       <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true"
        aria-controls="collapseOne">
        <h5 class="mb-0">
         Send Request <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <!-- Send Request body-->
<div class="card col-md-7  teal lighten-2">
  <div class="card-body">
     
      <div class="col-md-7">
                  <div id="msg5"></div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="color:#ffffff;">Last Class Attend</label>
                       
                     
                        <input type="date" class="form-control"   placeholder="Enter your last class attend" name="Last_Class_Attend" id="Last_Class_Attend"> 
                   
                  
         
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" style="color:#ffffff;">Reason</label>
                        <textarea class="form-control"  rows="3" name="Reason" id="Reason"></textarea>
                    </div>
                  <label style="color:#ffffff;">Clearance request type</label><br/>          
                    <div class="form-group custom-radio" style="color:#ffffff;">
                        <input class="form-group-input" type="radio" name="Request_type" id="Request_type1" value="Withdrawal" checked>
                        <label class="form-control-label" for="Request_type">Withdrawal</label>
                    </div>
                    <div class="form-group custom-radio" style="color:#ffffff;">
                        <input class="form-control-input" type="radio" name="Request_type" id="Request_type2" value="Graduate">
                        <label class="form-control-label" for="Request_type">Graduate</label>
                    </div>
                     <div class="form-group custom-radio" style="color:#ffffff;">
                        <input class="form-control-input" type="radio" name="Request_type" id="Request_type3" value="End of the year">
                        <label class="form-control-label" for="Request_type">End of the year</label>
                    </div><br/>

                    <input type="hidden" value="<?php echo $Student_ID; ?>" name="Student_ID" id="Student_ID"/>         
<input type="hidden" value="<?php echo $Student_ID; ?>" name="Student_id" id="Student_id"/>
   </div>

                    <button  class="btn btn-primary" id="send">Submit</button>

             
       </div>
</div>

            </div>
        </div>
    </div>
    <div class="card">
        
        
        <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="true"
        aria-controls="collapseTwo">
        <h5 class="mb-0">
         View Request progress <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body" id="card-body2">
                <!--   View Request progress body-->
              
                <?php
                  
                  
                while ($row1 = mysqli_fetch_array($result1)):;
                 
                    if ($row1[5] == "Inprocess" ):;
                        ?>
                <div class="table-responsive">
                <table class="table table-bordered" style="border-color: #000; color:#000; ">
                            <thead>

                                <tr style="background-color: #ddd; border-color: #000;">

                                    <th scope="col">Name</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Request Reason</th>
                                    <th scope="col">Last class attend</th>
                                    <th scope="col">Request type</th>
                                    <th scope="col">Request Status</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Send Date</th>
                                </tr>
                            </thead>
                            <tbody>
        <?php while ($row2 = mysqli_fetch_array($result2)):; ?>
                                <tr style="color: #000;">
                                        <td style="color: #000;"><?php echo $row2[1]; ?></td>
                                        <td style="color: #000;"><?php echo $row2[4]; ?></td>
                                        <td><?php echo $row2[5]; ?></td>
                                        <td><?php echo $row2[6]; ?></td>
                                        <td><?php echo $row2[7]; ?></td>
                                        <td style="color: red; font-size:22px; "><?php echo $row2[8]; ?></td>
                                        <td>Library</td>
                                        <td><?php echo $row2[10]; ?></td>
                                        <td><button  class="btn btn-info"  data-toggle="modal" data-target="#exampleModal">Cancel</button></td>

                                    </tr>
        <?php endwhile; ?>
                            </tbody>
                            
                        </table>
                </div>
                            <div id="msg"></div>

    <?php elseif ($row1[5] == "Rejected"):; ?>
                            <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>

                                <tr style="background-color: #ddd; border-color: #000;">

                                    <th scope="col">Name</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Request Reason</th>
                                    <th scope="col">Last class attend</th>
                                    <th scope="col">Request type</th>
                                    <th scope="col">Request Status</th>
                                    <th scope="col">Office Rejected</th>
                                    <th scope="col">Rejected Reason</th>
                                    <th scope="col">Rejected Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
        <?php while ($row2 = mysqli_fetch_array($result2)):; ?>
                                    <tr>
                                        <td><?php echo $row2[1]; ?></td>
                                        <td><?php echo $row2[4]; ?></td>
                                        <td><?php echo $row2[5]; ?></td>
                                        <td><?php echo $row2[6]; ?></td>
                                        <td><?php echo $row2[7]; ?></td>
                                        <td style="color: red; font-size:22px;"><?php echo $row2[8]; ?></td>
                                        <td>Library</td>

                                        <td><?php echo $row2[9]; ?></td>
                                        <td><?php echo $row2[10]; ?></td>
                                        <td><button class="btn btn-outline-info" form="Resend">Resend</button></td>


                                    </tr>
        <?php endwhile; ?>
                            </tbody>
                           
                        </table>
                            </div>
               
                    
                       
    <?php elseif ($row1[5] == "Approved"):;
      while($row3 =mysqli_fetch_array($result3)):;
           if($row3[6] == "Approved"):;   
    ?>
      <div class="table-responsive">       
<table class="table table-bordered">
                            <thead>

                                <tr style="background-color: #ddd; border-color: #000;">

                                    <th scope="col">Name</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Request Reason</th>
                                    <th scope="col">Last class attend</th>
                                    <th scope="col">Request type</th>
                                    <th scope="col">Request Status</th>
                                    <th scope="col">Approved By</th>
                                    <th scope="col">Office Approved</th>
                                    <th scope="col">Approved Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php while ($row4 = mysqli_fetch_array($result4)):; ?>
                                    <tr>
                                        <td><?php echo $row4[1]; ?></td>
                                        <td><?php echo $row4[4]; ?></td>
                                        <td><?php echo $row4[5]; ?></td>
                                        <td><?php echo $row4[6]; ?></td>
                                        <td><?php echo $row4[7]; ?></td>
                                        <td style="color: red; font-size:22px;"><?php echo $row4[8]; ?></td>
                                        <td><?php echo $row4[9]; ?></td>
                                        <td><?php echo $row4[10]; ?></td>
                                        <td><?php echo $row4[11]; ?></td>
                                       <?php if($row3[7]!=="8"):;?>   
                                        <td><button  class="btn btn-info"  data-toggle="modal" data-target="#exampleModal2">Cancel</button></td>
                                       <?php endif; ?>
                                    </tr>
                                      <?php endwhile; ?>
                            </tbody>
                        </table>
      </div>
              <div id="msg"></div>
  <?php elseif ($row3[6] == "Rejected"):; ?>
              <div class="table-responsive">
  <table class="table table-bordered">
                            <thead>

                                <tr style="background-color: #ddd; border-color: #000;">

                                    <th scope="col">Name</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Request Reason</th>
                                    <th scope="col">Last class attend</th>
                                    <th scope="col">Request type</th>
                                    <th scope="col">Request Status</th>
                                   
                                    <th scope="col">Office Rejected</th>
                                    <th scope="col">Rejected Reason</th>
                                    <th scope="col">Rejected Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php while ($row5 = mysqli_fetch_array($result5)):; ?>
                                    <tr>
                                        <td><?php echo $row5[1]; ?></td>
                                        <td><?php echo $row5[4]; ?></td>
                            
                                        <td><?php echo $row5[5]; ?></td>
                                        <td><?php echo $row5[6]; ?></td>
                                        <td><?php echo $row5[7]; ?></td>
                                        <td style="color: red; font-size:22px;"><?php echo $row5[8];?></td>
                                       
                                        <td><?php echo $row5[11]; ?></td>
                                        <td><?php echo $row5[12]; ?></td>
                                         <td><?php echo $row5[10]; ?></td>
                                         <td><button class="btn btn-outline-info" form="Resend2">Resend</button></td>
                                        


                                    </tr>
                                      <?php endwhile; ?>
                            </tbody>
                        </table>
              </div>
 <?php elseif ($row3[6] == "Inprocess"):; ?>
              <div class="table-responsive">
<table class="table table-bordered">
                            <thead>

                                <tr style="background-color: #ddd;">

                                    <th scope="col">Name</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Request Reason</th>
                                    <th scope="col">Last class attend</th>
                                    <th scope="col">Request type</th>
                                    <th scope="col">Request Status</th>
                                    <th scope="col">Approve Office</th>
                                    <th scope="col">Approved Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php while ($row2 = mysqli_fetch_array($result2)):; ?>
                                    <tr>
                                         <td><?php echo $row2[1]; ?></td>
                                        <td><?php echo $row2[4]; ?></td>
                                        <td><?php echo $row2[5]; ?></td>
                                        <td><?php echo $row2[6]; ?></td>
                                        <td><?php echo $row2[7]; ?></td>
                                        <td style="color: red; font-size:22px;"><?php echo $row2[8]; ?></td>
                                        <td>Library</td>
                                        <td><?php echo $row2[10]; ?></td>
                                        <td><button  class="btn btn-info" data-toggle="modal" data-target="#exampleModal2">Cancel</button></td>

                                    </tr>
                                      <?php endwhile; ?>
                            </tbody>
                        </table>
              </div>
                                 
                             <div id="msg"></div>     

                  <?php endif; ?>
                <?php endwhile; ?>
                  <?php endif; ?>
                
              
<?php endwhile; ?>
               






            </div>
        </div>
    </div>

</div>  
        
        
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conformation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are you sure you want to cancel the request? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" id="cancel1" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
        
        
        
        
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Conformation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Are you sure you want to cancel the request? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" id="cancel2" data-dismiss="modal">Cancel</button>
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
        </section>     
  
  <footer class="page-footer font-small blue" style="margin-top: 20%; width: 100%">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright &copy; EIABC 2019:
    Designed by Computer science section B students
  </div>
  <!-- Copyright -->

</footer>
         
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function () {
       
		$('#cancel1').click(function () {
                    
		var Student_id=$('#Student_id').val();
		try{
		if(Student_id!==''){
			$.ajax({
				url:"CancelRequest.php",
				method:"POST",
				data:{Student_id:Student_id},
				success:function (data) {
                                   
                                     
                                        
						switch(data){
                                                  
						
                                                     case '1':   		
							$('#msg').html('<div class="alert alert-success text-center">The Request canceled successfully!</div>');
                                                        break;
                                                      
                                                      case '2': 
							 $('#msg').html('<div class="alert alert-danger text-center">Some error occurred please try again</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
		}
            }catch(err){
                
            }
	});
});

$(document).ready(function () {
       
		$('#cancel2').click(function () {
                    
		var Student_id=$('#Student_id').val();
		try{
		if(Student_id!==''){
			$.ajax({
				url:"CancelRequest2.php",
				method:"POST",
				data:{Student_id:Student_id},
				success:function (data) {
                                 
                                     
                                        
						switch(data){
                                                  
						
                                                     case '1':   		
							$('#msg').html('<div class="alert alert-success text-center">The Request canceled successfully!</div>');
                                                        break;
                                                      
                                                      case '2': 
							 $('#msg').html('<div class="alert alert-danger text-center">Some error occurred please try again</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
		}
            }catch(err){
                
            }
	});
});


  $(document).ready(function () {
       
		$('#send').click(function () {
                   
		var Student_ID=$('#Student_ID').val();
                var Reason=$('#Reason').val();
                var Last_Class_Attend=$('#Last_Class_Attend').val();
                if(document.getElementById('Request_type1').checked===true){
                    var Request_type=$('#Request_type1').val();
                }else if(document.getElementById('Request_type2').checked===true){
                    var Request_type=$('#Request_type2').val(); 
                }else if(document.getElementById('Request_type3').checked===true) {
                    var Request_type=$('#Request_type3').val(); 
                }
               // 
		try{
		if(Student_ID!==''&&Reason!==''&&Last_Class_Attend!==''&&Request_type!==''){
			$.ajax({
				url:"Student_Request_server.php",
				method:"POST",
				data:{Student_ID:Student_ID,Reason:Reason,Last_Class_Attend:Last_Class_Attend,Request_type:Request_type},
				success:function (data) {
                                $da=data.split('');
                                    
                                        
						switch($da[1]){
                                                  
						
                                                     case '1':   		
							$('#msg5').html('<div class="alert alert-success text-center">The Request sent successfully! To see the request progress refresh the page</div>');
                                                        break;
                                                      
                                                      case '2': 
							 $('#msg5').html('<div class="alert alert-danger text-center">Some error occurred please try again!</div>');
                                                       
						       break;
                                                       
                                                        case '0': 
							 $('#msg5').html('<div class="alert alert-danger text-center">Cancel your pervious request first before sending a new one!</div>');
                                                       
						       break;
                                                        case '5': 
							 $('#msg5').html('<div class="alert alert-danger text-center">You enterd invalid date please try again!</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
		}else{
                     $('#msg5').html('<div class="alert alert-danger text-center">Some error occurred please try again!</div>');
                                                       
                }
            }catch(err){
                
            }
	});
});
        $("dob").mouseenter(function() {

            $("#dob").datepicker();
        });
   

</script>


</body>
</html>
