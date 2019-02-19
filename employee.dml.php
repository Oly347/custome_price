<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');

$total_price=0;
foreach ($_POST['price'] as $price) {
    $total_price+= $price;
}


$obj_emp = new employee_inc ;

$insert_array=  array(
	'CPU' => $_POST['CPU'],
	'CAB' => $_POST['CAB'],
	'SMPS' => $_POST['SMPS'],
	'RAM' => $_POST['RAM'],
    'TOTAL' => $_POST['RAM']+$_POST['SMPS']+$_POST['CAB']+$_POST['CPU'],
    // 'email_id' => $_POST['email_id'],
    'session_id' => $_POST['temp_id'],
    

);
     

$insert= $obj_emp->InsertIntoEmployees($insert_array);
     if ($insert) {
        
        header('Location:Home.php');
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}


$obj_comp = new component_inc ;




    // $file =$_FILES['c_pic'];
    // print_r($file);
    
    // $fileName = $_FILES['c_pic']['name'];
    
    



$insert_array=  array(
    'component_name' => $_POST['c_name'],
    'component_details' => $_POST['c_dis'],
    'component_price' => $_POST['c_price'],
    'component_image' => $_POST['c_pic'],
   
	
	
    

);
     

$insert= $obj_comp->InsertIntoComponentDetails($insert_array);
     if ($insert) {
        
        header('Location:component_details.php');
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}





?>