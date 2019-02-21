<?php
Class log { 
  // 
	
	const USER_ERROR_DIR = 'system/error_log/site_user_errors.log'; 
	const GENERAL_ERROR_DIR = 'system/error_log/site_general_errors.log'; 
	
	const USER_ERROR_DIR2 = 'admin/system/error_log/site_user_errors.log'; 
	const GENERAL_ERROR_DIR2 = 'admin/system/error_log/site_general_errors.log'; 

  /* 
   User Errors... 
  */ 
    public function user($msg,$username) 
    { 
		$date = date('d-m-Y h:i:s'); 
		$log = $msg."   |  Date:  ".$date."  |  User:  ".$username."\n"; 
		
		if(basename(getcwd())=='admin')
		{
			error_log($log, 3, self::USER_ERROR_DIR);
		}
		else
		{
			error_log($log, 3, self::USER_ERROR_DIR2);
		}

    } 
    /* 
   General Errors... 
  */ 
    public function general($msg) 
    { 
		$date = date('d-m-Y h:i:s'); 
		$log = $msg."   |  Date:  ".$date."\n";

		if(basename(getcwd())=='admin')
		{
			error_log($log, 3, self::GENERAL_ERROR_DIR);
		}
		else
		{
			error_log($log, 3, self::GENERAL_ERROR_DIR2);
		}
    } 

} 

//$log = new log(); 
//$log->user($msg,$username); //use for user errors 
//$log->general($msg); //use for general errors 
?>