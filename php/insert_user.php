<?php
session_start();
/**
 * 
 */
class insert_user
{
	private $con;
	
	function __construct()
	{
		include_once("../db/database.php");
		$datab = new database();
		$this->con = $datab->connect();
		date_default_timezone_set('Asia/Colombo');
	}


public function create_account($f_name,$l_name,$username,$password,$gender,$contact,$address,$user_type,$nicno)
{

	$last_login = date('Y-m-d h:i:s');
	$createdby = $_SESSION["f_name"]." ".$_SESSION["l_name"]."(".$_SESSION["username"].")";
	$pw_hash = password_hash($password, PASSWORD_BCRYPT,["cost"=>8]);

	if ($this->check_username($username)) {		

		echo "exist";

	}
	else 
	{
        $sql = "INSERT INTO `user`(`f_name`, `l_name`, `username`, `password`, `gender`, `contact`, `address`, `user_type`, `nicno`, `last_login`, `createdby`) VALUES ('$f_name','$l_name','$username','$pw_hash','$gender' ,'$contact','$address','$user_type', '$nicno','$last_login','$createdby')"; 

	    $result = $this->con->query($sql);

	    if ($result) {

            echo "Succsess";

	    } else {

           echo "Fail";
        } 
	}
}

// 

public function check_username($username)
{		
		$sql = "SELECT 'username' FROM `user` WHERE username = '$username'";

	    $result = $this->con->query($sql);

	   	if ($result->num_rows > 0) {

            return true;

	    } else {

           return false;
        } 
}
}
?>