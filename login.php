<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email_id']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM user WHERE email_id = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
        $_SESSION['errMsg'] = "Invalid username or password";
 }
   }
?>






<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Login Tilottama.tech </title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css">

      
</head>

<body>

  

<div class="cont">
  
  <div class="form">
    <form action = "" method = "post" enctype="multipart/form-data">
      <h1>Login</h1>
      <input type="text"  class="user" name="email_id" placeholder="Email Id"/>
      <input type="password" class="pass" name="password" placeholder="Password"/>
      <button class="login">Login</button>
      <a href="register.php"  class="btn btn-primary btn-outline" >I'm New <i class="fa fa-user-plus"></i></a>

      <a href="#"  class="btn btn-success btn-outline" style="float:right">forget Password <i class="fa fa-key" aria-hidden="true"></i></a>

    </form>
<!-- 
    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> -->

    <div id="errMsg">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>
  </div>
  
  
  
</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
