<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');
session_start();
// $total_price=0;
// foreach ($_POST['price'] as $price) {
//     $total_price+= $price;
// }


$obj_emp = new employee_inc ;

$insert_array=  array(
	'CPU' => $_POST['CPU'],
	'CAB' => $_POST['CAB'],
	'SMPS' => $_POST['SMPS'],
	'RAM' => $_POST['RAM'],
    'Total' => $_POST['RAM']+$_POST['SMPS']+$_POST['CAB']+$_POST['CPU'],
    // 'email_id' => $_POST['email_id'],
    'temp_id' => $_SESSION['temp_user'],
    

);
     

$insert= $obj_emp->InsertIntoEmployees($insert_array);
     if ($insert) {
        
        header('Location:Home.php');
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}// class end









?>