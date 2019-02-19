<?php
// Include config file


session_start();

//create a session and assign a value
$_SESSION['session_id'] =rand(10,1000);



//print session
// print($_SESSION['session_id']);
//remove/destroy particular session or
// unset($_SESSION['session_name']);
// //destroy all the sessions'
// // remove all session variables
// session_unset();
// // destroy the session
// session_destroy();

include ('system/database.php');
include ('employee.cls.php');


$obj_comp = new component_inc ;


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Component Details</h2>
  <form action="employee.dml.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="c_name">Name</label>
      <input type="text" class="form-control" id="c_name" placeholder="Enter Component Name" name="c_name">
    </div>


    <div class="form-group">
      <label for="c_dis">Discriptrion</label>
      <input type="text" class="form-control" id="c_dis" placeholder="Enter Discription" name="c_dis">
    </div>


    <div class="form-group">
      <label for="c_price">Price</label>
      <input type="text" class="form-control" id="c_price" placeholder="Enter Price" name="c_price">
    </div>
    <div class="form-group">
      <label for="c_price">Image of Component</label>
      <input type="file" class="form-control" id="c_pic"  name="c_pic">
    </div>


    
    
    
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
