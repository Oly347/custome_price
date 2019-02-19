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



        // var cab = document.getElementsByName('CAB');
        // var genValue = false;

        // for(var i=0; i<cab.length;i++){
        //     if(cpu[i].checked == true){
        //         genValue = true;
                
        //         break;
        //     }
        // }







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
// See:
// http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions