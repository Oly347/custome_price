// $(".next").click(function() {
//     if ($('input[name="muuttuminen"]:checked').length == 0) {
//       alert('please...');
//       return false; } 
//        else {
//        $.ajax({
//         //...
//       })
//     }
//     return false;
//  }); 






















 $(document).ready(function () {


    // alert();
    });
    
    function onSubmit(){
        if (insertValidation()) {
            $('#employeeForm').submit()
        }
        
    }
    
    
    function insertValidation()
    {
        if ($('input[name="CPU"]:checked').length == 0) {
            alert('please...');
            return false; } 
             else {
             $.ajax({
              //...
            })
          }
          return false;
    
    
    
        
        
        
        
        
    }
    