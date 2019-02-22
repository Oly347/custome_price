<?php
// Include config file

//echo  $_SESSION['session_id'];

//create a session and assign a value
//$_SESSION['session_id'] =rand(10,1000);

session_start();


//print session
// print($_SESSION['session_id']);
//remove/destroy particular session or
// unset($_SESSION['session_name']);
// //destroy all the sessions'
// // remove all session variables
// session_unset();
// // destroy the session
// session_destroy();

include ('admin/system/database.php');
include ('admin/employee.cls.php');


$obj_emp = new employee_inc ;


$rowEmployee = $obj_emp->getEmployeeById($_SESSION['temp_user']);


$obj_comp = new component_inc ;

$rowCPUComponent = $obj_comp->getComponentDetailsCPU();

//$cpuRow = $obj_comp->getCPUById($rowEmployee['CPU']);



// $rowEmployee = $obj_emp->getEmployee();
// $rowEmployee = $obj_emp->getEmployeeById($_GET['id']);
// echo $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

<?php


// echo $_SESSION['userName'];
?>

<div class= " banner_success">


<div class="center-outer">
<div class="center-inner">

<div class="bubbles">
<h1>Your CPU is Ready</h1>
</div>

</div>
</div>



</div>


<div class="container">



<!-- <div class="success-message">
    <svg viewBox="0 0 76 76" class="success-message__icon icon-checkmark">
        <circle cx="38" cy="38" r="36"/>
        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.7,40.9l10.9,10.9l28.7-28.7"/>
    </svg>
    <h1 class="success-message__title">Your CPU is ready to Go</h1>
    <div class="success-message__content">
        <p>You can buy with in 34 minutes</p>
    </div>
</div> -->



<div class="alert custome_alert alert-info" >
  <strong>Info!</strong> You Can choose only one configuration setep at a time
</div>
<div class="row"  style="display: none;" >
  <h2>Basic Table</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        <th>ID</th>
        
        <th>CPU</th>
        <th>CAB</th>
        <th>SMPS</th>
        <th>Mothetr Board</th>
        <th>Haed Drive</th>
        <th>RAM</th>
        <th>Graphic Card</th>

        <th>TOTAL</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($rowEmployee as  $row_employee) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_employee['id'];?> </td>
        <td><?php echo $row_employee['CPU'];?> </td>
        <td><?php echo $row_employee['CAB'];?></td>
        <td><?php echo $row_employee['SMPS'];?></td>
        <td><?php echo $row_employee['Morherboard'];?> </td>
        <td><?php echo $row_employee['Harddrive'];?> </td>
        <td><?php echo $row_employee['RAM'];?> </td>
        <td><?php echo $row_employee['GCARD'];?> </td>
        <td><?php echo $row_employee['Total'];?></td>
        <td><a class="btn btn-danger"  href="delete.php?id=<?php echo $row_employee['id'];?>" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>
           Delete</a> 
        
        </td>
        
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


</div>

<?php

$rowCPUComponent = $obj_comp->getComponentDetailsCPU();
$cpuRow = $obj_comp->getCPUById($row_employee['CPU']);
$cabinetRow = $obj_comp->getCABById($row_employee['CAB']);
$smpsRow = $obj_comp->getSMPSById($row_employee['SMPS']);
$motherBoardRow = $obj_comp->getMotherBoardById($row_employee['Morherboard']);
$hardDriveRow = $obj_comp->getHardDriveById($row_employee['Harddrive']);
$memoryRow = $obj_comp->getRAMById($row_employee['RAM']);
$graphicCardRow = $obj_comp->getGCARDById($row_employee['GCARD']);



?>




<div class="row" style="overflow-x:auto;" >
  <h2>CPU Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>CPU Model</th>
        <th>CPU Price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($cpuRow as  $row_cpu_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_cpu_component['component_name'];?> </td>
        <td><?php echo $row_cpu_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>


<div class="row" style="overflow-x:auto;" >
  <h2>Cabinet Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>Cabinet Model </th>
        <th>Cabinet price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($cabinetRow as  $row_cab_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_cab_component['component_name'];?> </td>
        <td><?php echo $row_cab_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>


<div class="row" style="overflow-x:auto;" >
  <h2>SMPS Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>SMPS Model </th>
        <th>Cabinet price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($smpsRow as  $row_smps_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_smps_component['component_name'];?> </td>
        <td><?php echo $row_smps_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>


<div class="row" style="overflow-x:auto;" >
  <h2>Motherboard Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>Mother board Model </th>
        <th>Mother board price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($motherBoardRow as  $row_mother_board_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_mother_board_component['component_name'];?> </td>
        <td><?php echo $row_mother_board_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>

<div class="row" style="overflow-x:auto;" >
  <h2>Hard Drive Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>HDD Model </th>
        <th>HDD price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($hardDriveRow as  $row_hard_drive_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_hard_drive_component['component_name'];?> </td>
        <td><?php echo $row_hard_drive_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>



<div class="row" style="overflow-x:auto;" >
  <h2>Memory(RAM) Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>RAM Model </th>
        <th>RAM price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($memoryRow as  $row_memory_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_memory_component['component_name'];?> </td>
        <td><?php echo $row_memory_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>




<div class="row" style="overflow-x:auto;" >
  <h2>Graphic Card Choose</h2>
            
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        
        
        <th>Graphic Card Model </th>
        <th>Graphic Card price</th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php

    foreach ($graphicCardRow as  $row_graphic_card_component) {
                       
    ?>
    
    <tr>
        <td><?php echo $row_graphic_card_component['component_name'];?> </td>
        <td><?php echo $row_graphic_card_component['component_price'];?> </td> 
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


  


</div>


<?php
$total=$row_cab_component['component_price']+$row_cpu_component['component_price']+
$row_smps_component['component_price']+$row_mother_board_component['component_price']+
$row_hard_drive_component['component_price']+$row_memory_component['component_price']+
$row_graphic_card_component['component_price'];
?>

<div class="row" style="overflow-x:auto;" >
  <h2>Total amount</h2>
            
  <table class='table table-bordered table-striped'>
    <!-- <thead>
      <tr>
        
        
        <th>CPU- Model</th>
        <th>CPU- Price</th>
        
        
      </tr>
    </thead> -->
    <tbody>

    <?php

    foreach ($cabinetRow as  $row_cab_component) {
                       
    ?>
    
    <tr>
        <td>Total Amount</td>
        <td><?php echo $total; ?></td> 
      </tr>
      <?php
       }

      ?>


    </tbody>
  </table>


  


</div>

<a class="btn  btn-default edit_btn" href="login.php">Buy CPU Now <i class="fa fa-shopping-cart"></i></a>
<a class="btn  btn-default edit_btn" href="#">Buy with Monitor & Accessories <i class="fa fa-desktop"></i></a>
</div>
</body>



<script>
function PathLoader(el) {
	this.el = el;
    this.strokeLength = el.getTotalLength();
	
    // set dash offset to 0
    this.el.style.strokeDasharray =
    this.el.style.strokeDashoffset = this.strokeLength;
}

PathLoader.prototype._draw = function (val) {
    this.el.style.strokeDashoffset = this.strokeLength * (1 - val);
}

PathLoader.prototype.setProgress = function (val, cb) {
	this._draw(val);
    if(cb && typeof cb === 'function') cb();
}

PathLoader.prototype.setProgressFn = function (fn) {
	if(typeof fn === 'function') fn(this);
}

var body = document.body,
    svg = document.querySelector('svg path');

if(svg !== null) {
    svg = new PathLoader(svg);
    
    setTimeout(function () {
        document.body.classList.add('active');
        svg.setProgress(1);
    }, 200);
}

document.addEventListener('click', function () {
    
    if(document.body.classList.contains('active')) {
        document.body.classList.remove('active');
        svg.setProgress(0);
        return;
    }
    document.body.classList.add('active');
    svg.setProgress(1);
});








// Created for an Articles on:
// https://www.html5andbeyond.com/bubbling-text-effect-no-canvas-required/

jQuery(document).ready(function($){
 
 // Define a blank array for the effect positions. This will be populated based on width of the title.
 var bArray = [];
 // Define a size array, this will be used to vary bubble sizes
 var sArray = [4,6,8,10];

 // Push the header width values to bArray
 for (var i = 0; i < $('.bubbles').width(); i++) {
     bArray.push(i);
 }
  
 // Function to select random array element
 // Used within the setInterval a few times
 function randomValue(arr) {
     return arr[Math.floor(Math.random() * arr.length)];
 }

 // setInterval function used to create new bubble every 350 milliseconds
 setInterval(function(){
      
     // Get a random size, defined as variable so it can be used for both width and height
     var size = randomValue(sArray);
     // New bubble appeneded to div with it's size and left position being set inline
     // Left value is set through getting a random value from bArray
     $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
      
     // Animate each bubble to the top (bottom 100%) and reduce opacity as it moves
     // Callback function used to remove finsihed animations from the page
     $('.individual-bubble').animate({
         'bottom': '100%',
         'opacity' : '-=0.7'
     }, 3000, function(){
         $(this).remove()
     }
     );


 }, 350);

});


  </script>
</html>
