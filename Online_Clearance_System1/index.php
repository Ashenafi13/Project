

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

         <script src="js/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    html, body, .container-table {
    height: 100%;
}
.container-table {
    display: table;
}
.vertical-center-row {
    display: table-cell;
    vertical-align: middle;
}
#dv{
    display: block;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
float: none;

z-index: auto;
width: auto;
height: auto;
opacity: 1;
overflow: visible;
border: none;
-webkit-border-radius: 12px;
border-radius: 12px;
color: rgba(255,255,255,1);
text-align: center;
-o-text-overflow: ellipsis;
text-overflow: ellipsis;
background: #e1e8ed;
-webkit-box-shadow: 3px 3px 6px 1px rgba(0,0,0,0.2) ;
box-shadow: 3px 3px 6px 1px rgba(0,0,0,0.2) ;
text-shadow: none;
-webkit-transition: none;
-moz-transition: none;
-o-transition: none;
transition: none;
-webkit-transform: none;
transform: none;

}
</style>
    </head>
    <body>
        
   <div class="container container-table">
      
       <div class="row vertical-center-row">
           <form style="width: auto;" action="test.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" >Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" style="width: 50%" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" style="width:50%;" name="password">
  </div>
 
               <button type="submit" class="btn btn-primary" >Login</button>
</form>
        </div>
   </div>
   
        
        
        
    </body>
</html>
