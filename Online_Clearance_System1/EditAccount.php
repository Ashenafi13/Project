<?php
 session_start();  
  $user_name = $_SESSION['user_name'];
$hostname = "localhost";
$username = "root";
$password = "";
 if (!isset($_SESSION['user_name'])) {
header('Location: login.php');
}
$databaseName = "online_clearance_system";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `user` where privilege='Student'";
$result1 = mysqli_query($connect, $query);


$query2 = "SELECT  user.UserId,  user.Full_name, user.username, user.password, offices.office_id, office_name,user.Active_status,user.Date
FROM         user INNER JOIN
                      offices ON user.Office = offices.office_id where privilege='Office'";
$result2 = mysqli_query($connect, $query2);
  ?>


<!DOCTYPE html>


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
        tr:hover{
            background-color: #ddd;
          
        }
        table{
            -webkit-box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.4) ;
box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.4) ;
        }
        #TRE{
            background: -webkit-linear-gradient(-45deg, rgba(40,24,150,1) 0, rgba(40,24,150,1) 8%, rgba(173,19,139,1) 13%, rgba(3,86,58,1) 40%, rgba(9,104,72,1) 58%, rgba(40,24,150,1) 85%, rgba(40,24,150,1) 100%);
background: -moz-linear-gradient(135deg, rgba(40,24,150,1) 0, rgba(40,24,150,1) 8%, rgba(173,19,139,1) 13%, rgba(3,86,58,1) 40%, rgba(9,104,72,1) 58%, rgba(40,24,150,1) 85%, rgba(40,24,150,1) 100%);
background: linear-gradient(135deg, rgba(40,24,150,1) 0, rgba(40,24,150,1) 8%, rgba(173,19,139,1) 13%, rgba(3,86,58,1) 40%, rgba(9,104,72,1) 58%, rgba(40,24,150,1) 85%, rgba(40,24,150,1) 100%);
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
    <script language="javascript">

      
   
        function hideCol() {

            var col = 1;

            if (isNaN(col) || col === "") {

              

                return;

            }
        
        
        
        
        

            col = parseInt(col, 10);

            col = col - 1;

            var tbl = document.getElementById("student");

            if (tbl !== null) {

               if (col < 0 || col >= tbl.rows.length - 1) {

                 

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

           

                return;

            }
        
        
        
        
        

            col = parseInt(col, 10);

            col = col - 1;

            var tbl = document.getElementById("office");

            if (tbl !== null) {

               if (col < 0 || col >= tbl.rows.length - 1) {

                   

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
    
    </head>
    <body onload="hideCol();hideCol2();">
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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
        </a>
           <div class="dropdown-menu " aria-labelledby="navbarDropdown1">
               <a class="dropdown-item " href="Create_Account.php">Create Account</a>
               <a class="dropdown-item active" href="EditAccount.php">Edit Account</a>
           </div>
      </li>  
     
     
      
       <li class="nav-item">
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
        <form action="EditAccount.php" method="post" id="edit"></form>
        <form action="delete.php" method="post" id="delete"></form>
        <form action="Active.php" method="post" id="active"></form>
        <form action="Deactive.php" method="post" id="deactive"></form>
        <form action="Update.php" method="post" id="update"></form>
        <input type="hidden" name="user_id3"  id="user_id3" form="deactive"/>
        
        <input type="hidden" value="<?php echo $user_name;?>" name="main_username"  form="delete"/>
        <input type="hidden" value="Delete Account" name="operation1" form="delete"/> 
        <input type="hidden" value="This user delete account" name="descreaption1" form="delete"/> 
        
        
        <input type="hidden" value="<?php echo $user_name;?>" name="main_username2"  form="deactive"/>
        <input type="hidden" value="Deactive Account" name="operation2" form="deactive"/> 
        <input type="hidden" value="This user deactive user account" name="descreaption2" form="deactive"/> 
        
        
        <input type="hidden" value="<?php echo $user_name;?>" name="main_username3"  form="active"/>
        <input type="hidden" value="Active Account" name="operation3" form="active"/> 
        <input type="hidden" value="This user active user account" name="descreaption3" form="active"/> 
        
        
        <input type="hidden" value="<?php echo $user_name;?>" name="main_username4" id="main_username4" />
        <input type="hidden" value="Update Account" name="operation4" id="operation4" /> 
        <input type="hidden" value="This user update user account" name="descreaption4" id="descreaption4"/> 
        
        
        <input type="hidden" name="Stu_ID"  id="Stu_ID" form="edit">
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
       <!---Student Account body -->
       <div class="table-responsive">
      <table class="table  table-bordered table-sm heavy-rain-gradient" id="student">
  
      <tr style="color: #ffffff" class="blue-gradient z-depth-5">
          <th>#</th>
      <th scope="col" style="width: auto;">Full name</th>
      <th scope="col" style="width: auto;">Institute</th>
      <th scope="col" style="width: auto;">Student ID</th>
      <th scope="col" style="width: auto;">Program</th>
      <th scope="col" style="width: auto;">Username</th>
      <th scope="col" style="width: auto;">Password</th>
      <th scope="col"style="width: auto;">Status</th>
      <th scope="col" style="width: auto;">Created Date</th>
    </tr>
 
  
       <?php while($row1 = mysqli_fetch_array($result1)):;?>

            

          
    <tr class="hoverable">
        <td ><?php echo $row1[0];?></td>
      <td style="width: auto;"><?php echo $row1[1];?></td>
      <td style="width: auto;"><?php echo $row1[2];?></td>
      <td style="width: auto;"><?php echo $row1[3];?></td>
      <td style="width: auto;"><?php echo $row1[4];?></td>
      <td style="width: auto;"><?php echo $row1[5];?></td>
      <td style="width: auto;"><?php echo $row1[6];?></td>
      <td style="width: auto;"><?php echo $row1[9];?></td>
      <td style="width: auto;"><?php echo $row1[10];?></td>
      
      <td style="width: auto;" >
        <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#exampleModalCenter" id="editbt"> <i class="fa fa-edit"></i> Edit</button>
  <button  class="btn btn-danger btn-rounded" form="delete"><i class="fa fa-trash"></i> Delete</button>
      <?php if($row1[9]=="Active"):;?>
  <button  class="btn btn-info btn-rounded" form="deactive"><i class="fa fa-window-close"></i> Deactivate</button>
  <?php elseif ($row1[9]=="Deactive"):;?>
  <button  class="btn btn-primary btn-rounded" form="active"><i class="fa fa-check-circle"></i> Activate</button>
     <?php endif;?>
          </div>
      </td>
          
    </tr>
    
      <?php endwhile;?>
 
</table>
       </div>        
       <div id="msg3"></div>
       
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Office Account
          <i class="fa fa-angle-down rotate-icon" style="font-weight: bold; color: #0062cc; "></i>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <!-- Office Account body-->
       <div id="msg4"></div>   
       <div class="table-responsive">
            <table class="table  table-bordered table-sm heavy-rain-gradient" id="office">
  <thead>
      <tr style="color: #ffffff" class="blue-gradient z-depth-5">
       <th>#</th>
      <th scope="col" style="width: auto;">Full name</th>
      <th scope="col" style="width: auto;">Username</th>
      <th scope="col" style="width: auto;">Password</th>
      <th scope="col" style="width: auto;">Office</th>
      <th scope="col"style="width: auto;">Status</th>
      <th scope="col" style="width: auto;">Created Date</th>
    </tr>
  </thead>
  <tbody>
       <?php while($row1 = mysqli_fetch_array($result2)):;?>

            

          
    <tr class="hoverable">
      
      <td><?php echo $row1[0];?></td>
      <td style="width: auto;"><?php echo $row1[1];?></td>
      <td style="width: auto;"><?php echo $row1[2];?></td>
      <td style="width: auto;"><?php echo $row1[3];?></td>
      <td style="width: auto;"><?php echo $row1[5];?></td> 
      <td style="width: auto;"><?php echo $row1[6];?></td>
      <td style="width: auto;" >
    
    
      <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#exampleModalCenter2" id="editbt"> <i class="fa fa-edit"></i> Edit</button>
  <button  class="btn btn-danger btn-rounded" form="delete"><i class="fa fa-trash"></i> Delete</button>
      <?php if($row1[6]=="Active"):;?>
  <button  class="btn btn-info btn-rounded" form="deactive"><i class="fa fa-window-close"></i> Deactivate</button>
  <?php elseif ($row1[6]=="Deactive"):;?>
  <button  class="btn btn-primary btn-rounded" form="active"><i class="fa fa-check-circle"></i> Activate</button>
     <?php endif;?>
          </div>
      </td>
    </tr>
    
      <?php endwhile;?>
  </tbody>
  <input type="hidden" name="user_id" value="" id="ID" form="delete"/>
  <input type="hidden" name="user_id2" value="" id="ID2" form="active"/>
  
   <input type="hidden" name="user_id4" value="" id="ID4" form="update"/>
   <input type="hidden" name="user_id7"  id="user_id7"/>
</table>
       </div>
       
      </div>
    </div>
  </div>
 
</div>
        
      
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Account info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="full_name">Full name</label>
      <input type="text" class="form-control" id="fullname" placeholder="Full name" name="fullname">
    </div>
    <div class="form-group col-md-6">
      <label for="ID">Student ID</label>
      <input type="text" class="form-control" id="sid" placeholder="Student ID" name="sid">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Institute</label>
    <input type="text" class="form-control" id="institute" placeholder="Institute" name="institute">
  </div>
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" data-validate = "Valid Username is required: ex">
  </div>
 <div class="form-group">
    <label for="program">Program</label>
    <input type="text" class="form-control" id="program" placeholder="Program" name="program" readonly="true">
   
  </div>
            <input type="hidden" name="userid5" value="" id="userid5" />
   <div id="msgerror">
      
      </div>
      <div id="msgsuccess">
      
      </div>
 
 
  

          
          
      
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
        <input type="button" id="up"  value="Update" class="btn btn-primary"/>
      </div>
    </div>
  </div>
</div>
        

        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle2">Edit Account info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="full_name">Full name</label>
      <input type="text" class="form-control" id="fullname2" placeholder="Full name" name="fullname2">
    </div>
  
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username2" placeholder="Username" name="username2">
  </div>
  <input type="hidden" name="userid6" value="" id="userid6" />
     
 <div id="msgerror2">
      
      </div>
      <div id="msgsuccess2">
      
      </div>
  

          
          
      
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="OFUP">Update</button>
      </div>
    </div>
  </div>
</div>        
                </section>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        
       <script src="js/account.js"></script>
            
            
               <script>
  var row1=document.getElementById('student'),rIndex;
  for(var i=1;i<row1.rows.length;i++){
      row1.rows[i].onclick=function (){
          rIndex=this.rowIndex;
   
          
          document.getElementsByName('user_id')[0].value=this.cells[0].innerHTML;
          document.getElementsByName('user_id2')[0].value=this.cells[0].innerHTML;
          document.getElementsByName('user_id3')[0].value=this.cells[0].innerHTML;
           document.getElementsByName('userid5')[0].value=this.cells[0].innerHTML;
          
           document.getElementsByName('fullname')[0].value=this.cells[1].innerHTML;
           document.getElementsByName('sid')[0].value=this.cells[3].innerHTML;
           document.getElementsByName('institute')[0].value=this.cells[2].innerHTML;
          document.getElementsByName('username')[0].value=this.cells[5].innerHTML;
           document.getElementsByName('program')[0].value=this.cells[4].innerHTML;
        
      };
  }
   
                   </script> 
                   
                   
                     <script>
  var row1=document.getElementById('office'),rIndex;
  for(var i=1;i<row1.rows.length;i++){
      row1.rows[i].onclick=function (){
          rIndex=this.rowIndex;
           console.log(rIndex);
           document.getElementsByName('userid6')[0].value=this.cells[0].innerHTML;
           document.getElementsByName('user_id3')[0].value=this.cells[0].innerHTML;
             document.getElementsByName('user_id2')[0].value=this.cells[0].innerHTML;
           document.getElementsByName('fullname2')[0].value=this.cells[1].innerHTML;
        document.getElementsByName('user_id')[0].value=this.cells[0].innerHTML;
         
          document.getElementsByName('username2')[0].value=this.cells[2].innerHTML;
        
        
      };
  }
   
                   </script> 
         
                   
                   <script>
       $(document).ready(function () {
                 
		$('#up').click(function () {
                  
		var fullname=$('#fullname').val();
		var institute=$('#institute').val();
                var sid=$('#sid').val();
                var username=$('#username').val();
                 var userid5=$('#userid5').val();
                 
                 
                  var main_username4=$('#main_username4').val();
                   var operation4=$('#operation4').val();
                    var descreaption4=$('#descreaption4').val();
                
		if(username!=='' && fullname!==''&&sid!==''&&institute!==''&&userid5!==''){
                    try{
			$.ajax({
				url:"StudentAccountUpdate.php",
				method:"POST",
				data:{fullname:fullname,institute:institute,sid:sid,username:username,userid5:userid5,main_username4:main_username4,operation4:operation4,descreaption4:descreaption4},
                                 
				success:function (data) {
                                    
                               
						switch(data){
                                                    case '3': 
							 $('#msgerror').html('<div class="alert alert-danger text-center">Required fields are missing!</div>');
                                                       
						     break;
						
                                                     case '1':   		
							  $('#msgerror').html('<div class="alert alert-success text-center">The Account is sucessfuly updated!</div>');
                                                             window.location.href='EditAccount.php';
                                                       break;
                                                      
                                                      case '2': 
							  $('#msgerror').html('<div class="alert alert-danger text-center">The username is taken please try again!</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
                    }catch(err){
                        alert(err);
                    }
		}else{
                 $('#msgerror').html('<div class="alert alert-danger text-center">One or more field are empty please try again!</div>');
                }
	});
});

     $(document).ready(function () {
                 
		$('#OFUP').click(function () {
                  
		var fullname2=$('#fullname2').val();             
                var username2=$('#username2').val();
                 var userid6=$('#userid6').val();
                 var main_username4=$('#main_username4').val();
                   var operation4=$('#operation4').val();
                    var descreaption4=$('#descreaption4').val();
		if(username2!=='' && fullname2!==''&&userid6!==''){
                    try{
			$.ajax({
				url:"OfficeAccountUpdate.php",
				method:"POST",
				data:{fullname2:fullname2,username2:username2,userid6:userid6,main_username4:main_username4,operation4:operation4,descreaption4:descreaption4},
                                 
				success:function (data) {
                                    
                               
						switch(data){
                                                    case '3': 
							 $('#msgerror2').html('<div class="alert alert-danger text-center">Required fields are missing!</div>');
                                                       
						     break;
						
                                                     case '1':   		
							  $('#msgsuccess2').html('<div class="alert alert-success text-center">The Account is sucessfuly updated!</div>');
                                                             window.location.href='EditAccount.php';
                                                       break;
                                                      
                                                      case '2': 
							  $('#msgerror2').html('<div class="alert alert-danger text-center">The username is taken please try again!</div>');
                                                       
						       break;
						}
                                                
					
				}
			});
                    }catch(err){
                        alert(err);
                    }
		}else{
                 $('#msgerror2').html('<div class="alert alert-danger text-center">One or more field are empty please try again!</div>');
                }
	});
});               

$(document).ready(function () {
   
		$('#deactivate2').click(function () {
                                     
		var user_id7=$('#user_id7').val();
              
		if(user_id7!==''){
			$.ajax({
				url:"Deactiveoffice.php",
				method:"POST",
				data:{user_id7:user_id7},
				success:function (data) {
                                    
                                      
                                        
						switch(data){
                                                    
						
                                                     case '1':   		
							$('#msg4').html('<div class="alert alert-success text-center">The Account is deactivated!</div>');
                                                        window.location.href='EditAccount.php';
                                                        break;
                                                        case '2': 
							$('#msg4').html('<div class="alert alert-danger text-center">Some error occurred please try again!</div>');
                                                       break;
						    
                                                      
                                                     
						}
                                                
					
				}
			});
		}else{
                    $('#msg4').html('<div class="alert alert-danger text-center">please try again!</div>');
                }
	});
});

                   </script>       
                    
            
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
