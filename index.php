<?php
// Include config file


session_start();


if (isset($_SESSION['user'])) {
  // logged in
} else {
  $_SESSION['session_id'] =rand(10,1000);
}



//create a session and assign a value
//$_SESSION['session_id'] =rand(10,1000);



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

</style>
<body>

<form id="regForm" action="employee.dml.php" method="post" id="employeeForm">
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
              <td><input type="radio" class="option-input radio" name="CPU"   value="1" /></td>
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

              <div class="tab tab4" >User Name
              <p><input type="text" placeholder="Username..."  ></p>
              
              </div>


              <input type="hidden" name="temp_id"  class="form-control" value="<?php echo $_SESSION['session_id'];?>"></p>
              
              
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
    <span class="step"></span>
    
  </div>
</form>
<script src="js/index.js"></script>
<!-- <script>

function validateForm() {
    var radios = document.getElementsByName("CPU");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

    if (!formValid) alert("Must check some option!");
    return formValid;
}​

</script> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="valid.js"></script>
</body>
</html>
