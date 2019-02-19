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
    
 
   
   
   
    }




?>