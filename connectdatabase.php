<?php

/**
  * 
  */
class connectiondatabase
{
	protected $username = "root";
	protected $password = "";
	protected $host = "localhost";
	protected $database = "infomation";

	protected $tableName;
	protected static $connectionInstance = null;


	function __construct()
	{
 		# code...
 		$this-> connect();
	}
	public function connect(){
		if (self::$connectiondatabase=== null) {
			# code...
			try {
				self:: $connectiondatabase= new PDO ('mysql:host ='.$this -> host.'dbname'.$this->database, $this ->username, $this -> password);
                self:: $connectiondatabase-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (Exception $e) {
				echo "ERROR".$e->getMessger;
				die();
			}
		}
		return self::$connectiondatabase;
	}
} 


?>