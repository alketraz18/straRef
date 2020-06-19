<?php
session_start();
/**
 * 
 */
class login
{
	private $con;
	
	function __construct()
	{
		include_once("../db/database.php");
		$datab = new database();
		$this->con = $datab->connect();
		date_default_timezone_set('Asia/Colombo');
	}



	public function user_login($username,$password)
	{		
			$sql = "SELECT *
					FROM `user` 
					WHERE username = '$username'";

		    $result = $this->con->query($sql);
		    

		    if ($result->num_rows < 1) 
		    {
		    	return "User_error";

		    }
		    else
		    {
		    	$row = $result->fetch_assoc();

		    	if (password_verify($password, $row["password"])) 
		    	{
		    		if ($row["status"] == 1) {

		    		$_SESSION["username"] = $row["username"];
		    		$_SESSION["id"] = $row["id"];
		    		$_SESSION["user_type"] = $row["user_type"];	    		
		    		$_SESSION["last_login"] = $row["last_login"];
		    		$_SESSION["f_name"] = $row["f_name"];
		    		$_SESSION["l_name"] = $row["l_name"];

		    		//updating last login

		    		$last_login = date('Y-m-d h:i:s');
		    		$stmt = $this->con->prepare("UPDATE user SET last_login = ? WHERE username = ?");
		    		$stmt->bind_param("ss",$last_login,$username);
		    		$result = $stmt->execute() or die($this->con->error);

		    		if ($result) 
		    		{

		    			return "lets_go";

		    		}else 
		    		{

		    			return 0;

		    		}

		    	}else
		    	{
		    		return "status_error";	
		    	}
		    	}
		    	else
		    	{
		    		return "PW_error";
		    	}
		    }

	}
}
?>