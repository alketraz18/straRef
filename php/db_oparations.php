<?php

/**
 * 
 */
class dboparations
{
	private $con;
	
	function __construct()
	{
		include_once("../db/database.php");
		$data = new database();
		$this->con = $data->connect();
	}


	public function view_all_users($table)
	{		
			$sql = "SELECT * FROM $table";

		    $result = $this->con->query($sql);
		    $rows = array();

		    if ($result->num_rows > 0) {
		    	while ( $row = $result->fetch_assoc()) {
		    		$rows[] = $row;
		    	}
		    	return $rows;
		    }else
		    {
		    	return "No data";
		    }


	}

	public function delete_me($id)
	{
		$sql = "DELETE FROM user WHERE id = $id";
		$result = $this->con->query($sql);
		if ($result) {

            echo "Succsess";

	    } else {

           echo "Fail";
        }
	}

		public function view_user($id)
	{		
			$sql = "SELECT * FROM user WHERE id = $id";
		    $result = $this->con->query($sql);
		    $rows = array();

		    if ($result->num_rows > 0) {
		    	while ( $row = $result->fetch_assoc()) {
		    		$rows[] = $row;
		    	}
		    	return $rows;
		    }else
		    {
		    	return "No data";
		    }


	}
	public function active_me($id)
	{
		$sql = "UPDATE `user` SET `status`= 1 WHERE `id`=$id";
		$result = $this->con->query($sql);
		if ($result) {

            echo "Succsess";

	    } else {

           echo "Fail";
        }
	}

		public function deactive_me($id)
	{
		$sql = "UPDATE `user` SET `status`= 0 WHERE `id`=$id";
		$result = $this->con->query($sql);
		if ($result) {

            echo "Succsess";

	    } else {

           echo "Fail";
        }
	}

}

//$test = new dboparations();
//echo "<pre>";
//print_r($test->view_all_users("user"));
?>