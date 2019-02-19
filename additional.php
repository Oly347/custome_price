<?php
// include ('system/database.php');
// include ('employee.cls.php');

// $obj_emp = new employee_inc ;
 
include ('system/database.php');
include ('employee.cls.php');


$obj_emp = new employee_inc ;


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
                    <form  action="employee.dml.php" method="post" id="employeeForm" >

                    
                        <div class="alert alert-danger fade in">
                           
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit"  class="btn btn-danger" value="Submit" onclick="return onSubmit();">
                                <a href="index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>