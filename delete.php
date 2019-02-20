<?php
include ('system/database.php');
include ('employee.cls.php');

$obj_emp = new employee_inc ;
 
// $rowPrice = $obj_emp->getPrice();

// $rowEmployee = $obj_emp->getEmployee();
// //echo $_GET['id'];

// // $rowEmployee = $obj_emp->getEmployeeById($_GET['id']);

// // $rowDelete = $obj_emp->DeleteFrom($id);
// // echo "<pre>";
// // print_r($rowEmployee);
// // echo "</pre>";

// foreach ($rowEmployee as $key => $value) {
//     $name=$value['name'];
//     $address=$value['address'];
//     $salary=$value['salary'];
//     $exprience=$value['exprience'];
//     $price=$value['price'];

// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form  action="employee.del.php" method="post" id="employeeForm" >

                    <input type="hidden" name="emp_id"  class="form-control" value="<?php echo $_GET['id']; ?>">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value=""/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit"  class="btn btn-danger" value="Submit" >
                                <a href="home.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>