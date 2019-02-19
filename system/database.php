<?php

include ('error.php');
include ('adodb/adodb.inc.php'); # load code common to ADOdb
class clsConnection
{
    private $db_host;
    private $db_user;
    private $db_pwd;
    private $db_name;
    private $dbLink;


    function clsConnection()
    {
        if (strstr($_SERVER['HTTP_HOST'], "192.168.1.") || $_SERVER['HTTP_HOST'] =="localhost")
        {
           

            $this->db_host = "localhost";
            $this->db_user = "root";
            $this->db_pwd = "";
            $this->db_name = "tilottama_tech";

        }
        else
        {
            $this->db_host = "localhost";
            $this->db_user = "root";
            $this->db_pwd = "";
            $this->db_name = "reborndb";


        }

        $this->dbLink = ADONewConnection('mysqli'); # create a connection
        $this->dbLink->PConnect($this->db_host, $this->db_user, $this->db_pwd, $this->db_name); # connect to MySQL, agora db
        if (!$this->dbLink) die("Could not connect to database. " . mysqli_error());


    }


    public function GetAllRows($sqlQuery = "")
    {
        $recordSet = $this->dbLink->Execute($sqlQuery);
        $row_count = $recordSet->RecordCount();
        $rows = array();


        if (!$recordSet)
        {
            print $this->dbLink->ErrorMsg();
        }
        else
        {
            while (!$recordSet->EOF)
            {
                $rows[] = $recordSet->fields;
                $recordSet->MoveNext();
            }
        }
        $recordSet->Close();

        return $rows;

    }

    public function GetNoOfRows($sqlQuery = "")
    {
        $recordSet = $this->dbLink->Execute($sqlQuery);
        $row_count = $recordSet->RecordCount();
        if ($row_count > 0)
        {
            return $row_count;
        }
        else
        {
            return 0;
        }

    }
    public function RowInsert($records,$sqlins="")
    {
        $rs=$this->dbLink->Execute($sqlins);
        $insertSQL = $this->dbLink->GetInsertSQL($rs, $records); 
        $ins_rs=$this->dbLink->Execute($insertSQL);
        if(!$ins_rs)
        {
            return 0;
        }
        else
        {
            return 1;
        }
        
    }

    public function RowInsertId($records,$sqlins="")
    {
        $rs=$this->dbLink->Execute($sqlins);
        $insertSQL = $this->dbLink->GetInsertSQL($rs, $records); 
        $ins_rs=$this->dbLink->Execute($insertSQL);
        $ins_rs=$this->dbLink->insert_Id();
        if(!$ins_rs)
        {
            return 0;
        }
        else
        {
            return $ins_rs;
        }
        
    }
    public function RowUpdate($records,$sqlupdate="")
    {
        $rs=$this->dbLink->Execute($sqlupdate);
        $updateSQL=$this->dbLink->GetUpdateSQL($rs,$records);
		$up_rs=$this->dbLink->Execute($updateSQL);
        if(!$up_rs)
        {
            return 0;
        }
        else
        {
            return 1;
        }
        
    }
    public function getSingleRows($sql_single="")
    {
        
       $recordSet=$this->dbLink->Execute($sql_single);
       
        if (!$recordSet)
        {
            print $this->dbLink->ErrorMsg();
        }
        else
        {
            while (!$recordSet->EOF)
            {
                $rows[] = $recordSet->fields;
                $recordSet->MoveNext();
            }
        }
        $recordSet->Close();

        return $rows;
       
    }
    public function deleteRow($sql)
    {
        $record=$this->dbLink->Execute($sql);
        if(!$record)
        {
            $result= $this->dbLink->ErrorMsg();
        }
        else
        {
            $result=true;
        }
        
        
    }


}

?>