<?php

session_start();

?>
<html>
   
   <head>
      <title>Welcome </title>


       <!-- Bootstrap CSS --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>
   
   <body>
   <?php  echo  $_SESSION['user'] ?>;
      


   



      <h2><a href="logout.php"  class="btn btn-primary btn-outline" style="float:right" >Logout <i class="fa fa-sign-in"></i></a></h2>
   </body>
   
</html>