<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');
//session_start();
// $total_price=0;
// foreach ($_POST['price'] as $price) {
//     $total_price+= $price;
// }


$obj_user = new user_inc ;


// $email = $_POST['email_address'];
// if($email != "") {
//     $result = mysql_query("SELECT * FROM emails where email='".$email."'");
//     $num_rows = mysql_num_rows($result);
//     if($num_rows >= 1){
//         echo "email exist";
//     }else{
//         $sql = mysql_query ("INSERT INTO emails (email) VALUES ('$email')");
//         echo "Thank you for Submitting. Redirecting back to Home Page";
//     }
// }
$insert_array=  array(
    'name' => $_POST['full_name'],
    'password' => $_POST['password'],
    'phone_number' => $_POST['phone_number'],
    'email_id' => $_POST['email_address'],
    'address' => $_POST['permanent_address'],
    
	
    

);
     

$insert= $obj_user->InsertIntoUserDetails($insert_array);
     if ($insert) {
        
        header('Location:Home.php');
        exit();

       
    }else {
        header('Location:index.php');
        exit();


}// class end









?>