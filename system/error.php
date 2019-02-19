<?php
class clsError
{
    public static $err_arr=array();
    
    public static function initArray()
    {
        self::$err_arr['no_record_in_tab']='<font color="red" style="font:Verdana, Geneva, sans-serif" >No records found....</font>'; 
        self::$err_arr['data_succ_saved']='<font color="green" style="font:Verdana, Geneva, sans-serif">Data successfully saved...</font>';   
		self::$err_arr['incr_usr_pwd']='<font color="red" style="font:Verdana, Geneva, sans-serif" >Incorrect user name and Password</font>'; 
        self::$err_arr['data_unsucc_saved']='<font color="red" style="font:Verdana, Geneva, sans-serif" >Data failed to save..</font>'; 
		self::$err_arr['file_size_err']='<font color="red" style="font:Verdana, Geneva, sans-serif" >File size cross the limit..</font>'; 
        self::$err_arr['file_type_err']='<font color="red" style="font:Verdana, Geneva, sans-serif" >File type not supported..</font>'; 
        self::$err_arr['log_in_st']='<font color="red" style="font:Verdana, Geneva, sans-serif" >Hi! You are already logged in..</font>'; 
    }
       
    public static function getErrorMsg($arr_index)
    {   
       self::initArray();  
       $msg= self::$err_arr[$arr_index];
       return $msg;
    }
   
}
?>