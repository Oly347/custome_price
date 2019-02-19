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

include ('system/database.php');
include ('employee.cls.php');


$obj_emp = new employee_inc ;


$rowEmployee = $obj_emp->getEmployeeById($_SESSION['temp_user']);



// $rowEmployee = $obj_emp->getEmployee();
// $rowEmployee = $obj_emp->getEmployeeById($_GET['id']);
// echo $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
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



<div class="success-message">
    <svg viewBox="0 0 76 76" class="success-message__icon icon-checkmark">
        <circle cx="38" cy="38" r="36"/>
        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.7,40.9l10.9,10.9l28.7-28.7"/>
    </svg>
    <h1 class="success-message__title">Your CPU is ready to Go</h1>
    <div class="success-message__content">
        <p>You can buy with in 34 minutes</p>
    </div>
</div>
<div class="row" style="overflow-x:auto;" >
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
        <td><?php echo $row_employee['id'];?> </td>
        <td><?php echo $row_employee['CPU'];?> </td>
        <td> <?php echo $row_employee['CAB'];?></td>
        <td> <?php echo $row_employee['SMPS'];?></td>
        <td><?php echo $row_employee['RAM'];?> </td>
        <td> <?php echo $row_employee['Total'];?></td>
        
      </tr>
      <?php
       }

      ?>
    </tbody>
  </table>


</div>

<a class="btn  btn-default edit_btn" href="#">But CPU Now »</a>
<a class="btn  btn-default edit_btn" href="#">Buy with Monitor & Accessories »</a>
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
