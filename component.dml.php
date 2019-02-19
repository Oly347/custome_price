<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');
$obj_comp = new component_inc ;




    $file =$_FILES['c_pic'];
    print_r($file);
    
    $fileName = $_FILES['c_pic']['name'];
    
    



$insert_array=  array(
    'component_name' => $_POST['c_name'],
    'component_details' => $_POST['c_dis'],
    'component_price' => $_POST['c_price'],
    'component_image' => $image,
   
	
	
    

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