<?php
// Include config file

include ('system/database.php');
include ('employee.cls.php');


$obj_emp = new employee_inc ;
session_start();

// echo isset($_SESSION['user']);
if (!isset($_SESSION['user']))
 {
  if(!isset($_SESSION['temp_user']))
  {
    $obj_emp = new employee_inc ;

   $insert_array=  array(
	 'login_time' => date('Y-m-d'),
	);
     

 $insert= $obj_emp->InsertIntotempUser($insert_array);


 $_SESSION['temp_user'] = $insert;
}
}







?>


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <link rel="stylesheet" href="css/style.css"> 
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}


select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}


option {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}
.tab1{
  padding: 50px;

  background: #A1FFCE;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #FAFFD1, #A1FFCE);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #FAFFD1, #A1FFCE); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  
}


.tab2{
  padding: 50px;

background-color: lightblue;
}
.tab3{
  padding: 50px;

background-color: lightpink;
}
.tab4{
  padding: 50px;

background-color:honeydew;
}
button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
.radiotext {
    margin: 10px 10px 0px 0px;
}

.table-responsive tbody tr {
  cursor: pointer;
}
.table-responsive .table thead tr th {
  padding-top: 15px;
  padding-bottom: 15px;
}
.table-responsive .table tbody tr td {
  padding-top: 15px;
  padding-bottom: 10px;
}


*{font-family: 'Roboto', sans-serif;}

@keyframes click-wave {
  0% {
    height: 40px;
    width: 40px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 100px;
    width: 100px;
    margin-left: -35px;
    margin-top: -40px;
    opacity: 0;
  }
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 40px;
  width: 40px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #40e0d0;
}
.option-input:checked::before {
  height: 40px;
  width: 40px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 40px;
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}
.option-input.radio {
  border-radius: 20%;
}
.option-input.radio::after {
  border-radius: 20%;
}
.img_d{
  border-radius: 8px;
  padding:5px ;
}
.img_d:hover {
  transform: scale(2.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
/* body {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: box;
  background: #e8ebee;
  color: #9faab7;
  font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  text-align: center;
}
body div {
  padding: 5rem;
}
body label {
  display: block;
  line-height: 40px;
} */
</style>
<body>

<form id="regForm" action="employee.dml.php" method="post">
  <h1>Choose Your PC</h1>
  
  <div class="tab tab1" style="overflow-x:auto;" >Choose Your CPU
    
    <div class="table-responsive">
        <table class="table  table-borderless" >
          <thead>
            <tr>
              <th>CPU Name</th>
              <th>DIscription</th>
              <th>Image</th>
              <th>Price</th>
              <th >Choose your option</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                 CPU1
              </td>
              <td>3.4 GHz	6Core</td>
              <td><img src="andres-jasso-1159243-unsplash.jpg" class="img_d" alt="" style="width:50px; "></td>
              <td>₹17253.00</td>
              <td><input type="radio" class="option-input radio" name="CPU"  value="1" /></td>
            </tr>
            <tr>
                <td>
                   CPU2
                </td>
                <td>Regular Shipping</td>
                <td><img src="andres-jasso-1159243-unsplash.jpg" class="img_d" alt="" style="width:50px; "></td>
                <td>₹17253.00</td>
                <td><input type="radio" class="option-input radio" name="CPU"  value="2" /></td>
              </tr>
              <tr>
                  <td>
                     CPU3
                  </td>
                  <td>Regular Shipping</td>
                  <td><img src="andres-jasso-1159243-unsplash.jpg"  class="img_d" alt="" style="width:50px; "></td>
                  <td>₹17253.00</td>
                  <td><input type="radio" class="option-input radio" name="CPU"  value="3" /></td>
                </tr>
                <tr>
                    <td>
                       CPU4
                    </td>
                    <td>Regular Shipping</td>
                    <td><img src="andres-jasso-1159243-unsplash.jpg" class="img_d" alt="" style="width:50px; "></td>
                    <td>₹17253.00</td>
                    <td><input type="radio" class="option-input radio" name="CPU"  value="4" /></td>
                  </tr>
            <!-- <tr>
              <td>
                <input type="radio" name="radios" id="radio2" value="2"/>
                <input type="text"  disabled value="JNE">
                <input type="radio" name="radios" id="radio2" value="2"/>
               -- <label for="radio2">JNE</label> -->
              
            
          </tbody>
        </table>
      </div>

    

    
      
    </div>
    <div class="tab tab2" style="overflow-x:auto;" >Choose Your Cabenet
      <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
      <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
      <div class="table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th>Cabinat Name</th>
                <th>Discription</th>
                <th>Image</th>
                <th>Price</th>
                <th >Choose your option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                   CAB1
                </td>
                <td>Regular Shipping</td>
                <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                <td>₹17253.00</td>
                <td><input type="radio" class="option-input radio" name="CAB"  value="5" /></td>
              </tr>
              <tr>
                  <td>
                     CAB2
                  </td>
                  <td>Regular Shipping</td>
                  <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                  <td>₹17253.00</td>
                  <td><input type="radio" class="option-input radio" name="CAB"  value="6" /></td>
                </tr>
                <tr>
                    <td>
                       CAB3
                    </td>
                    <td>Regular Shipping</td>
                    <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                    <td>₹17253.00</td>
                    <td><input type="radio" class="option-input radio" name="CAB"  value="7" /></td>
                  </tr>
                  <tr>
                      <td>
                         CAB4
                      </td>
                      <td>Regular Shipping</td>
                      <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                      <td>₹17253.00</td>
                      <td><input type="radio" class="option-input radio" name="CAB"  value="8" /></td>
                    </tr>
              <!-- <tr>
                <td>
                  <input type="radio" name="radios" id="radio2" value="2"/>
                  <input type="text"  disabled value="JNE">
                  <input type="radio" name="radios" id="radio2" value="2"/>
                 -- <label for="radio2">JNE</label> -->
                
              
            </tbody>
          </table>
        </div>
  
      
  
      
        
      </div>


   
      <div class="tab tab3" style="overflow-x:auto;" >Choose Your SMPS
          <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
          <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
          <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>SMPS Name</th>
                    <th>Discription</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th >Choose your option</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                       SMPS1
                    </td>
                    <td>Regular Shipping</td>
                    <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                    <td>₹17253.00</td>
                    <td><input type="radio" class="option-input radio" name="SMPS"  value="9" /></td>
                  </tr>
                  <tr>
                      <td>
                         SMPS2
                      </td>
                      <td>Regular Shipping</td>
                      <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                      <td>₹17253.00</td>
                      <td><input type="radio" class="option-input radio" name="SMPS"  value="10" /></td>
                    </tr>
                    <tr>
                        <td>
                           SMPS3
                        </td>
                        <td>Regular Shipping</td>
                        <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                        <td>₹17253.00</td>
                        <td><input type="radio" class="option-input radio" name="SMPS"  value="11" /></td>
                      </tr>
                      <tr>
                          <td>
                             SMPS4
                          </td>
                          <td>Regular Shipping</td>
                          <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                          <td>₹17253.00</td>
                          <td><input type="radio" class="option-input radio" name="SMPS"  value="12" /></td>
                        </tr>
                  <!-- <tr>
                    <td>
                      <input type="radio" name="radios" id="radio2" value="2"/>
                      <input type="text"  disabled value="JNE">
                      <input type="radio" name="radios" id="radio2" value="2"/>
                     -- <label for="radio2">JNE</label> -->
                    
                  
                </tbody>
              </table>
            </div>
      
          
      
          
            
          </div>




          <div class="tab tab4" style="overflow-x:auto;" >Choose Your RAM
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
              <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>RAM1 Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                           RAM1
                        </td>
                        <td>Regular Shipping</td>
                        <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                        <td>₹17253.00</td>
                        <td><input type="radio" class="option-input radio" name="RAM" id="radio1" value="16" /></td>
                      </tr>
                      <tr>
                          <td>
                             RAM2
                          </td>
                          <td>Regular Shipping</td>
                          <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                          <td>₹17253.00</td>
                          <td><input type="radio" class="option-input radio" name="RAM" id="radio2" value="15" /></td>
                        </tr>
                        <tr>
                            <td>
                               RAM3
                            </td>
                            <td>Regular Shipping</td>
                            <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                            <td>₹17253.00</td>
                            <td><input type="radio" class="option-input radio" name="RAM" id="radio3" value="14" /></td>
                          </tr>
                          <tr>
                              <td>
                                 RAM4
                              </td>
                              <td>Regular Shipping</td>
                              <td><img src="andres-jasso-1159243-unsplash.jpg" alt="" style="width:50px; "></td>
                              <td>₹17253.00</td>
                              <td><input type="radio" class="option-input radio" name="RAM" id="radio4" value="13" /></td>
                            </tr>
                      <!-- <tr>
                        <td>
                          <input type="radio" name="radios" id="radio2" value="2"/>
                          <input type="text"  disabled value="JNE">
                          <input type="radio" name="radios" id="radio2" value="2"/>
                         -- <label for="radio2">JNE</label> -->
                        
                      
                    </tbody>
                  </table>
                </div>
          
              
          
              
                
              </div>

              <!-- <div class="tab tab4" >User Name
              <p><input placeholder="Username..." oninput="this.className = ''" name="email_id" ></p>
              
              </div> -->


              <!-- <input type="hidden" name="temp_id"  class="form-control" value="<?php echo $_SESSION['session_id'];?>"></p> -->
              
              
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    
  </div>
</form>

<script>


$('.table tbody tr').click(function(event) {
  if (event.target.type !== 'radio') {
    $(':radio', this).trigger('click');
  }
});
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  
  var cpu = document.getElementsByName('CPU');
        var genValue = false;

        for(var i=0; i<cpu.length;i++){
            if(cpu[i].checked == true){
                genValue = true;    
            }
        }
        if(!genValue){
          sweetAlert("Oops...", "Please choose your option!", "error");
            return false;
        }



  // If the valid status is true, mark the step as finished and valid:
  if (genValue) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return genValue; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
