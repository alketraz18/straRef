<?php

/**
 * 
 */
class database
{
	public $con;
	public function connect()
	{
		include_once("db_setings.php");
		$con=new mysqli(server,user,pw,db);
		if ($con) {
			return $con;
		}
		return "Database refused to connect";
	}

	
}
?>