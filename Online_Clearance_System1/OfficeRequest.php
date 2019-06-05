
<?php
session_start();
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
        <title></title>
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

         <script src="js/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Withdrawal Student
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <!--Withdrawal Student -->
         <?php
       $Office = $_SESSION['Office'];
      $sql=$s;
        if($Office==2):;
        $s='SELECT * FROM offices';
        endif;
       ?>
           <?php
// connect to database
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'online_clearance_system');

// define how many results you want per page
$results_per_page = 5;

// find out the number of results stored in database

$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql2=$sql. $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql2);
?>
       
       
    <table border="1">
        <tr>
            <th>ID</th>
             <th>Office</th>
        </tr>
<?php while($row = mysqli_fetch_array($result)) {?>
        <tr>
        <td><?php echo $row[0]?></td> 
     <td><?php echo $row[1]?></td> 
        </tr>
<?php }?>
    </table>
    <?php
// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="OfficeRequest.php?page=' . $page . '">' . $page . '</a> ';
}

?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Graduate Student
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <!--Graduate Student -->
          
          
      </div>
    </div>
  </div>
 
</div>
    </body>
</html>
