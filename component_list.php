<?php
// Include config file
include ('admin/system/database.php');
include ('admin/employee.cls.php');


$obj_comp = new component_inc ;


//$rowPrice = $obj_emp->getPrice();

$rowComponent = $obj_comp->getComponentDetails();
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
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="row button_custome">
    <a href="component_details.php" class="form-group btn btn-success pull-right button_custome">Add New Component</a><br>

    </div>
  <h2>Component Table</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Discriptrion</th>
        <th>Price</th>
        <th>Image of Component</th>
        
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
    <?php

    foreach ($rowComponent as  $row_component) {
                       
    ?>
      <tr>
        <td><?php echo $row_component['id'];?></td>
        <td><?php echo $row_component['component_name'];?></td>
        <td><?php echo $row_component['component_details'];?></td>
        <td><?php echo $row_component['component_price'];?></td>
        <td><img src ="upload/<?php echo $row_component['component_image'];?>" height=50 width=80 /> </td>
        
        <td>
        <a class="btn btn-danger" href="" role="button">Delete</a>
        <a class="btn btn-info" href="" role="button">Update</a>
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
