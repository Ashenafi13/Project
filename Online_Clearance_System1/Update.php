
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
        <title></title>
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

         <script src="js/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    </head>
    <body>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
        </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <a class="dropdown-item" href="#">Create Account</a>
          <a class="dropdown-item" href="#">Edit Account</a>
           </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Search
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
          <a class="dropdown-item" href="#">Account Search</a>
          <a class="dropdown-item" href="#">Student action</a>
        </div>
      </li>
      <li class="nav-item">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Request
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
          <a class="dropdown-item" href="#">View Request</a>
          <a class="dropdown-item" href="#">Edit Request</a>
        </div>
      </li>
      <li class="nav-item">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Report
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
          <a class="dropdown-item" href="#">Approved Request Report</a>
          <a class="dropdown-item" href="#">Rejected Request Report</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Account Report</a>
        </div>
          </li>
      
       <li class="nav-item">
        <a class="nav-link" href="#">User log</a>
      </li>
        </div>
      
       
       
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      <form class="form-inline my-2 my-lg-0" style="margin-left: 1%;">
      <button  class="btn btn-outline-danger my-2 my-sm-0">Logout</button>
      </form>
  </div>
</nav>
          <form style="width: 60%;" method="post" action="Studentaccount.php">
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
  <input class="form-check-input" type="radio" name="program" id="inlineRadio1" value="post graduate">
  <label class="form-check-label" for="inlineRadio1">post graduate</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="program" id="inlineRadio2" value="Regular">
  <label class="form-check-label" for="inlineRadio2">Regular</label>
</div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="program" id="inlineRadio3" value="Other">
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>
  </div>             
 <button type="submit" class="btn btn-primary">Create</button>
</form>
    </body>
</html>
