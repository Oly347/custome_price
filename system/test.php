<?php
include('database.php');
//include('error.php');
$obj=new clsConnection;
$sql="select * from test";
$x=$obj->SqlQueryExecute($sql); 

    if(count($x)!=0)
    {
        echo('<pre>');
        print_r($x);
        echo('</pre>');
    }
    else
    {
            $msg_val=clsError::getErrorMsg('no_record_in_tab');
            echo $msg_val;
    }

?>