<?php
// Include config file

include ('admin/system/database.php');
include ('admin/employee.cls.php');


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
 $_SESSION['userName']= "Guest";






 
}
}

$obj_comp = new component_inc ;


//$rowPrice = $obj_emp->getPrice();

$rowCPUComponent = $obj_comp->getComponentDetailsCPU();
$rowMBComponent = $obj_comp->getComponentDetailsMB();
$rowCABComponent = $obj_comp->getComponentDetailsCB();
$rowSMPSComponent = $obj_comp->getComponentDetailsSMPS();
$rowHDDComponent = $obj_comp->getComponentDetailsHDD();
$rowMemoryComponent = $obj_comp->getComponentDetailsMemory();
$rowGraphicComponent = $obj_comp->getComponentDetailsGraphicCard();
$rowSoundComponent = $obj_comp->getComponentDetailsSoundCard();
$rowDVDComponent = $obj_comp->getComponentDetailsDvdDrive();
$rowWirelessAdapterComponent = $obj_comp->getComponentDetailsWirelessAdapter();
$rowSSDComponent = $obj_comp->getComponentDetailsSSD();






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

<body>
<!-- welcome <?php //echo $_SESSION['userName']; ?> -->
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

          <?php
                
                    foreach ($rowCPUComponent as  $row_cpu_component) {
                                       
                    ?>
            <tr>
              <td><?php echo $row_cpu_component['component_name'];?></td>
              <td><?php echo $row_cpu_component['component_details'];?></td>
              
              <td><img src ="admin/upload/<?php echo $row_cpu_component['component_image'];?>" height=50 width=80 /> </td>
              <td><?php echo $row_cpu_component['component_price'];?></td>
              <td><input type="radio" class="option-input radio" name="CPU"  value="<?php echo $row_cpu_component['id'];?>" /></td>
            </tr>
            <?php
                       }
                
                      ?>
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

          <?php
                
                    foreach ($rowCABComponent as  $row_cpu_component) {
                                       
                    ?>
            <tr>
              <td><?php echo $row_cpu_component['component_name'];?></td>
              <td><?php echo $row_cpu_component['component_details'];?></td>
              
              <td><img src ="admin/upload/<?php echo $row_cpu_component['component_image'];?>" height=50 width=80 /> </td>
              <td><?php echo $row_cpu_component['component_price'];?></td>
              <td><input type="radio" class="option-input radio" name="CAB"  value="<?php echo $row_cpu_component['id'];?>" /></td>
            </tr>
            <?php
                       }
                
                      ?>
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

                      <?php
                            
                                foreach ($rowSMPSComponent as  $row_smps_component) {
                                                  
                                ?>
                        <tr>
                          <td><?php echo $row_smps_component['component_name'];?></td>
                          <td><?php echo $row_smps_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_smps_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_smps_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="SMPS"  value="<?php echo $row_smps_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
              </table>
            </div>
      
          
      
          
            
          </div>




          <div class="tab tab4" style="overflow-x:auto;" >Choose Your Motherboard
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
              <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>RAM Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    
                                      <tbody>

                      <?php
                            
                                foreach ($rowMBComponent as  $row_motherboard_component) {
                                                  
                                ?>
                        <tr>
                          <td><?php echo $row_motherboard_component['component_name'];?></td>
                          <td><?php echo $row_motherboard_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_motherboard_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_motherboard_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="MB"  value="<?php echo $row_motherboard_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
                  </table>
                </div>
          
              
          
              
                
              </div>

              <div class="tab tab1" style="overflow-x:auto;" >Choose Your Hard Disk Drive
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
              <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>HDD Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    
                      <tbody>

                      <?php
                            
                      foreach ($rowHDDComponent as  $row_harddrive_component) {
                                                  
                      ?>
                        <tr>
                          <td><?php echo $row_harddrive_component['component_name'];?></td>
                          <td><?php echo $row_harddrive_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_harddrive_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_harddrive_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="HDD"  value="<?php echo $row_harddrive_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
                  </table>
                </div>
          
              
          
              
                
              </div>
              <div class="tab tab1" style="overflow-x:auto;" >Choose Your Memory(RAM)
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
              <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>RAM Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    
                      <tbody>

                      <?php
                            
                      foreach ($rowMemoryComponent as  $row_memory_component) {
                                                  
                      ?>
                        <tr>
                          <td><?php echo $row_memory_component['component_name'];?></td>
                          <td><?php echo $row_memory_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_memory_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_memory_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="RAM"  value="<?php echo $row_memory_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
                      </tbody>
                  </table>
                </div>
          
              
          
              
                
              </div>

              <div class="tab tab1" style="overflow-x:auto;" >Choose Your Graphic card
              <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
              <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>Graphic Card Name</th>
                        <th>Discription</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th >Choose your option</th>
                      </tr>
                    </thead>
                    
                      <tbody>

                      <?php
                            
                      foreach ($rowGraphicComponent as  $row_graphic_component) {
                                                  
                      ?>
                        <tr>
                          <td><?php echo $row_graphic_component['component_name'];?></td>
                          <td><?php echo $row_graphic_component['component_details'];?></td>
                          
                          <td><img src ="admin/upload/<?php echo $row_graphic_component['component_image'];?>" height=50 width=80 /> </td>
                          <td><?php echo $row_graphic_component['component_price'];?></td>
                          <td><input type="radio" class="option-input radio" name="GCARD"  value="<?php echo $row_graphic_component['id'];?>" /></td>
                        </tr>
                        <?php
                        }
                            
                        ?>
                        
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
