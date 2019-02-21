<?php

	include_once("system/ClsLog.php");

/*===============================================================================================================*/

	class ClMySQLConnect
	{
		private $con;

		public function MySQLConnect()
		{
			$host = "localhost";
			$user = "root";
			$pw = "";

			$db = "mantrahe_data";

			$log = new log();


			$this->con=mysqli_connect($host,$user,$pw);

			if (!$this->con)
			{
				$log->general("Error: ".mysqli_connect_error());
				file_put_contents('system/error_log/connection.errors.txt', mysqli_connect_error().PHP_EOL,FILE_APPEND);
				die('Could not connect: ' . mysqli_connect_error());
			}

			$dbcon=mysqli_select_db($this->con,$db);

			if (!$dbcon)
			{
				$log->general("Error: ".mysqli_error($this->con));
				file_put_contents('system/error_log/connection.errors.txt', mysqli_error($this->con).PHP_EOL,FILE_APPEND);
				die('Error in database: ' . mysqli_error($this->con));
			}
			else
			{
				mysqli_set_charset($this->con,'utf8');
			}

			return $this->con;
		}

		public function closeMySqlCon()
		{
			if($this->con!=0)
			{
				mysqli_close($this->con);
			}
		}
	}

/*===============================================================================================================*/

	class ClSelectQuery
	{
		private $rs='';
		public function SelectQuery($query)
		{
			$cnn=new ClMySQLConnect();
			$con=$cnn->MySQLConnect();

			$log = new log();

			$this->rs=mysqli_query($con,$query);
			if (!$this->rs)
			{
				$log->general("Query: ".$query. " | Error: ".mysqli_error($con));
				die('Error: ' . mysqli_error($con));
				return false;
			}

			return $this->rs;
		}

		public function closeSelectQuery()
		{
			$this->rs=null;
			$cnn=new ClMySQLConnect();
			$con=$cnn->closeMySqlCon();
		}
	}

/*===============================================================================================================*/

	class ClInsertQuery
	{
		public function InsertQuery($query)
		{

			$cnn=new ClMySQLConnect();
			$con=$cnn->MySQLConnect();

			$log = new log();

			$rs=mysqli_query($con,$query);
			if (!$rs)
			{
				$log->general("Query: ".$query. " | Error: ".mysqli_error($con));
				die('Error: ' . mysqli_error($con));
			}
			else
			{
				return mysqli_insert_id($con);
			}

			$rs=null;
			$con=$cnn->closeMySqlCon();
		}
	}

/*===============================================================================================================*/

	class ClDeleteQuery
	{
		public function DeleteQuery($query)
		{

			$cnn=new ClMySQLConnect();
			$con=$cnn->MySQLConnect();

			$log = new log();

			$rs=mysqli_query($con,$query);
			if (!$rs)
			{
				$log->general("Query: ".$query. " | Error: ".mysqli_error($con));
				die('Error: ' . mysqli_error($con));
			}

			$rs=null;
			$con=$cnn->closeMySqlCon();
		}
	}

/*===============================================================================================================*/

?>