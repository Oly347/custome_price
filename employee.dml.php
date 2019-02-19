<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');
session_start();
// $total_price=0;
// foreach ($_POST['price'] as $price) {
//     $total_price+= $price;
// }


// $obj_emp = new employee_inc ;

// $insert_array=  array(
// 	'CPU' => $_POST['CPU'],
// 	'CAB' => $_POST['CAB'],
// 	'SMPS' => $_POST['SMPS'],
// 	'RAM' => $_POST['RAM'],
//     'Total' => $_POST['RAM']+$_POST['SMPS']+$_POST['CAB']+$_POST['CPU'],
//     // 'email_id' => $_POST['email_id'],
//     'temp_id' => $_SESSION['temp_user'],
    

// );
     

// $insert= $obj_emp->InsertIntoEmployees($insert_array);
//      if ($insert) {
        
//         header('Location:Home.php');
//         exit();

       
//     }else {
//         header('Location:create.php');
//         exit();


// }


   $obj_comp = new component_inc ;




    // $file =$_FILES['c_pic'];
    // print_r($file);
    
    // $fileName = $_FILES['c_pic']['name'];
    
    

    $f1=$_FILES['c_pic']['name'];
    $randomFileName = time().$f1;
    $path='upload/'.$randomFileName;
    $t=$_FILES['c_pic']['tmp_name'];
    move_uploaded_file($t,$path);
   
   $insert_array=  array(
    'component_name' => $_POST['c_name'],
    'component_details' => $_POST['c_dis'],
    'component_price' => $_POST['c_price'],
    'component_image' => $randomFileName,
   
	
	
    

);
     

$insert= $obj_comp->InsertIntoComponentDetails($insert_array);
     if ($insert) {
        
        header('Location:component_details.php');
        exit();

       
      }








?>