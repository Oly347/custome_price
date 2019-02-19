<?php
// Include config file
include ('system/database.php');
include ('employee.cls.php');


$obj_emp = new employee_inc ;


// $rowPrice = $obj_emp->getPrice();

$rowEmployee = $obj_emp->getEmployee();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container"><a href="create.php" class="form-group btn btn-success pull-right">Add New Employee</a><br>
  <h2>Basic Table</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        <th>ID</th>
        <th>CPU</th>
        <th>CAB</th>
        <th>SMPS</th>
        <th>RAM</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
    <?php

    foreach ($rowEmployee as  $row_employee) {
                       
    ?>
      <tr>
        <td><?php echo $row_employee['id'];?></td>
        <td><?php echo $row_employee['CPU'];?></td>
        <td><?php echo $row_employee['CAB'];?></td>
        <td><?php echo $row_employee['SMPS'];?></td>
        <td><?php echo $row_employee['RAM'];?></td>
        <td><?php echo $row_employee['TOATAL'];?></td>
        <td>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row_employee['id'];?>" role="button">Delete</a>
        <a class="btn btn-info" href="update.php?id=<?php echo $row_employee['id'];?>" role="button">Update</a>
        </td>
      </tr>
      <?php
       }

      ?>
    
      
    </tbody>
  </table>
</div>

</body>
</html>
