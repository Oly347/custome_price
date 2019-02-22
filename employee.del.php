<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');

session_start();
$obj_emp = new employee_inc ;  

$delete= $obj_emp->DeleteFrom($_POST['emp_id']);
     

if ($delete) {
        
header('Location:home.php');
}
else{
header('Location:home.php');
}
?>