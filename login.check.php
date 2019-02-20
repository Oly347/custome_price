<?php
// include ('system/database.php');
// include ('employee.cls.ph');
// Grab User submitted information
// $email = $_POST["email_id"];
// $pass = $_POST["password"];

// $result = mysql_query("SELECT email_id, password FROM user WHERE email_id = $email");

// $row = mysqli_fetch_array($result);

// if($row["email_id"]==$email && $row["password"]==$pass)
//     echo"You are a validated user.";
// else
//     echo"Sorry, your credentials are not valid, Please try again.";







// session_start();
// // If form submitted, insert values into the database.
// if (isset($_POST['email_id'])){
//         // removes backslashes
// 	$username = stripslashes($_POST['email_id']);
//         //escapes special characters in a string
// 	$username = mysqli_real_escape_string($this->dbLink,$username);
// 	$password = stripslashes($_POST['password']);
// 	$password = mysqli_real_escape_string($this->dbLink,$password);
// 	//Checking is user existing in the database or not
//         $query = "SELECT * FROM `user` WHERE email_id='$username'
//         and password='".md5($password)."'";
// 	$result = mysqli_query($this->dbLink,$query) or die(mysql_error());
// 	$rows = mysqli_num_rows($result);
//         if($rows==1){
// 	    $_SESSION['username'] = $username;
//             // Redirect user to index.php
// 	    header("Location: index.php");
//          }else{
// 	echo "<div class='form'>
// <h3>Username/password is incorrect.</h3>
// <br/>Click here to <a href='login.php'>Login</a></div>";
// 	}
//     }







?>