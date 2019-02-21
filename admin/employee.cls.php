<?php

class employee_inc{

 private $db_con;
 function employee_inc()
	{
	 $this->db_con=new clsConnection;

    }
    
    

 public function InsertIntotempUser($post_fileds)
  {
  $sSql="SELECT * FROM login_id WHERE id=-1";
  $insrt_id=$this->db_con->RowInsertId($post_fileds,$sSql);
  ;
  if($insrt_id>0)
   {
    return $insrt_id;
    }
    else
    {
    return 0;
    }
            
    }  
   function getEmployee(){
    $sSql = "SELECT * FROM price_list";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
    }

    function getPrice(){
       $sSql = "SELECT * FROM price_master";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
    }


    function getEmployeeById($id){
        $sSql="SELECT * FROM price_list WHERE temp_id='".$id."' ";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
    }

  
                public function InsertIntoEmployees($post_fileds)
                {
                $sSql="SELECT * FROM price_list WHERE id=-1";
                $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
                if($insrt==0)
                {
                    return false;
                }
                else
                {
                    return true;
                }
                
                }


                function SetUpdateEmployees($post_fields,$id)
                    {
                        $sSql="SELECT * FROM employees WHERE id='".$id."' ";
                        
                        
                        echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
                        if($update==0)
                        {
                            return false;
                        }
                        else
                        {
                            return true;
                        }
                }


    function DeleteFrom($id)
       {
        $del_sql="DELETE FROM price_list WHERE id=".$id;
        $delete=$this->db_con->deleteRow($del_sql);

        if($delete)
        {
            return true;
        }
        else
        {
            return false;
        }
       }



       public function InsertIntoComponentDetails($post_fileds)
       {
       $sSql="SELECT * FROM component_details WHERE id=-1";
       $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
       if($insrt==0)
       {
           return false;
       }
       else
       {
           return true;
       }
       
       }    





}//end of classs





class component_inc{

private $db_con;
function component_inc()
       {
        $this->db_con=new clsConnection;
   
       }
      function getEmployee(){
       $sSql = "SELECT * FROM employees";
           $rows = $this->db_con->GetAllRows($sSql);
           return $rows;
       }
   
       function getPrice(){
          $sSql = "SELECT * FROM price_master";
           $rows = $this->db_con->GetAllRows($sSql);
           return $rows;
       }
   
   
       function getEmployeeById($id){
           $sSql="SELECT * FROM price_list WHERE id='".$id."' ";
           $rows = $this->db_con->GetAllRows($sSql);
           return $rows;
       }
   
       function getComponentDetails(){
        $sSql = "SELECT * FROM component_details";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
        }
    
        function getComponentDetailsCPU(){
            $sSql = "SELECT * FROM component_details_cpu";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
        }    
            
            
        function getComponentDetailsMB(){
                $sSql = "SELECT * FROM component_details_mboard";
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
        }  
                
                

        function getComponentDetailsCB(){
                    $sSql = "SELECT * FROM component_details_cab";
                        $rows = $this->db_con->GetAllRows($sSql);
                        return $rows;
        }  



        function getComponentDetailsSMPS(){
            $sSql = "SELECT * FROM component_details_smps";
                $rows = $this->db_con->GetAllRows($sSql);
                return $rows;
     }  


     function getComponentDetailsHDD(){
        $sSql = "SELECT * FROM component_details_hdd";
            $rows = $this->db_con->GetAllRows($sSql);
            return $rows;
  }  



  function getComponentDetailsMemory(){
    $sSql = "SELECT * FROM component_details_memory";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   }  



   function getComponentDetailsGraphicCard(){
    $sSql = "SELECT * FROM component_details_graphic_card";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   }
   
   
   function getComponentDetailsSoundCard(){
    $sSql = "SELECT * FROM component_details_sound_card";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 
   
   
   function getComponentDetailsDvdDrive(){
    $sSql = "SELECT * FROM component_details_dvd_drive";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 


   function getComponentDetailsWirelessAdapter(){
    $sSql = "SELECT * FROM component_details_wireless_adapter";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 



   function getComponentDetailsSSD(){
    $sSql = "SELECT * FROM component_details_ssd";
        $rows = $this->db_con->GetAllRows($sSql);
        return $rows;
   } 









   
   
       function SetUpdateEmployees($post_fields,$id)
                       {
                           $sSql="SELECT * FROM employees WHERE id='".$id."' ";
                           
                           
                           echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
                           if($update==0)
                           {
                               return false;
                           }
                           else
                           {
                               return true;
                           }
                   }
   
   
       function DeleteFrom($id)
          {
           $del_sql="DELETE FROM employees WHERE id=".$id;
           $delete=$this->db_con->deleteRow($del_sql);
   
           if($delete)
           {
               return true;
           }
           else
           {
               return $delete;
           }
          }
   
   
   
 public function InsertIntoComponentDetailsCpu($post_fileds)
  {
  $sSql="SELECT * FROM component_details_cpu WHERE id=-1";
  $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
  if($insrt==0)
   {
    return false;
    }
    else
    {
    return true;
    }
            
    }    
    
    
    public function InsertIntoComponentDetailsMotherBoard($post_fileds)
  {
  $sSql="SELECT * FROM component_details_mboard WHERE id=-1";
  $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
  if($insrt==0)
   {
    return false;
    }
    else
    {
    return true;
    }
            
    }    


    public function InsertIntoComponentDetailsCabinet($post_fileds)
  {
  $sSql="SELECT * FROM component_details_cab WHERE id=-1";
  $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
  if($insrt==0)
   {
    return false;
    }
    else
    {
    return true;
    }
            
    }    



    public function InsertIntoComponentDetailsSmps($post_fileds)
  {
  $sSql="SELECT * FROM component_details_smps WHERE id=-1";
  $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
  if($insrt==0)
   {
    return false;
    }
    else
    {
    return true;
    }
            
    }    
    
    public function InsertIntoComponentDetailsHDD($post_fileds)
    {
    $sSql="SELECT * FROM component_details_hdd WHERE id=-1";
    $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
    if($insrt==0)
     {
      return false;
      }
      else
      {
      return true;
      }
              
    }  
    
    
    public function InsertIntoComponentDetailsMemory($post_fileds)
      {
      $sSql="SELECT * FROM component_details_memory WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoComponentDetailsGraphicCard($post_fileds)
      {
      $sSql="SELECT * FROM component_details_graphic_card WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 
    
    public function InsertIntoComponentDetailsSoundCard($post_fileds)
      {
      $sSql="SELECT * FROM component_details_sound_card WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoComponentDetailsDvdDrive($post_fileds)
      {
      $sSql="SELECT * FROM component_details_dvd_drive WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 



    public function InsertIntoComponentDetailsWirelessAdapter($post_fileds)
      {
      $sSql="SELECT * FROM component_details_wireless_adapter WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 

    public function InsertIntoComponentDetailsSSD($post_fileds)
      {
      $sSql="SELECT * FROM component_details_ssd WHERE id=-1";
      $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
      if($insrt==0)
       {
        return false;
        }
        else
        {
        return true;
        }
                
    } 
   
   
    }



    



    
   
   
   
    



    class user_inc{

        private $db_con;
        function user_inc()
               {
                $this->db_con=new clsConnection;
           
               }
              function getEmployee(){
               $sSql = "SELECT * FROM employees";
                   $rows = $this->db_con->GetAllRows($sSql);
                   return $rows;
               }
           
               function getPrice(){
                  $sSql = "SELECT * FROM price_master";
                   $rows = $this->db_con->GetAllRows($sSql);
                   return $rows;
               }


               function getUserDetails(){
                $sSql = "SELECT * FROM user";
                 $rows = $this->db_con->GetAllRows($sSql);
                 return $rows;
             }
           
           
               function getEmployeeById($id){
                   $sSql="SELECT * FROM price_list WHERE id='".$id."' ";
                   $rows = $this->db_con->GetAllRows($sSql);
                   return $rows;
               }
           
               function getComponentDetails(){
                $sSql = "SELECT * FROM component_details";
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                }
            
                function checkLogin($email_id,$password){
                    $sSql="SELECT * FROM user WHERE email_id='".$email_id."' AND password='".$password."'  " ;
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                } 
                
                







                function checkAdmin($user_name,$password){
                    $sSql="SELECT * FROM admin_details WHERE user_name='".$user_name."' AND password='".$password."'  " ;
                    $rows = $this->db_con->GetAllRows($sSql);
                    return $rows;
                } 
           
           
               function SetUpdateEmployees($post_fields,$id)
                               {
                                   $sSql="SELECT * FROM employees WHERE id='".$id."' ";
                                   
                                   
                                   echo $update=$this->db_con->RowUpdate($post_fields,$sSql);
                                   if($update==0)
                                   {
                                       return false;
                                   }
                                   else
                                   {
                                       return true;
                                   }
                           }
           
           
               function DeleteFrom($id)
                  {
                   $del_sql="DELETE FROM employees WHERE id=".$id;
                   $delete=$this->db_con->deleteRow($del_sql);
           
                   if($delete)
                   {
                       return true;
                   }
                   else
                   {
                       return $delete;
                   }
                  }
           
           
           
         public function InsertIntoUserDetails($post_fileds)
          {
          $sSql="SELECT * FROM user WHERE id=-1";
          $insrt=$this->db_con->RowInsert($post_fileds,$sSql);
          if($insrt==0)
           {
            return false;
            }
            else
            {
            return true;
            }
                    
            }    
            
         
           
           
           
            }
        




?>