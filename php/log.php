<?php
/**
 * 
 */
class create_log
{
	private $con;
	
	function __construct()
	{
		include_once("../db/database.php");
		$datab = new database();
		$this->con = $datab->connect();
	}

	public function log_this($inform)
	{		
		$current_user = $_SESSION["f_name"]." ".$_SESSION["l_name"]." (".$_SESSION["username"].")";

		$sql = "INSERT INTO `log`(`log_user`, `log_detail`) VALUES ('$current_user', '$inform')";
		
		$result = $this->con->query($sql);

		date_default_timezone_set('Asia/Colombo');
		$timestamp = date("D M d 'y h.i A");
	}
}
/*$frr = new create_log();
$frr -> log_this("teeeeeeeeeeeeeee");*/
?>