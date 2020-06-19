<?php
session_start();

include_once("db_oparations.php");
include_once("log.php");

// view_all_users function call
// view_all_users(table) -> gives all elements of table

if (isset($_POST["getUsers"]) ){

$dboparations = new dboparations();
$rows = $dboparations->view_all_users("user");
$i = 1;
foreach ($rows as $row) {
	echo "<tr>
			<td col-xs-2>".$i++."</td>
			<td col-xs-2>".$row["f_name"]." ".$row["l_name"]."</td>
			<td col-xs-2>".$row["username"]."</td>
			<td col-xs-2>".$row["user_type"]."</td>";
	if ($row["status"] == 1) {
		if ($row["username"] == $_SESSION["username"]) {
			echo	"<td col-xs-2><button class='btn btn-outline-success btn-sm' disabled>Active</button></td>";
		}else{

			echo "<td col-xs-2><button class='btn btn-outline-success btn-sm' id=".$row["id"]." onclick ='deact_user(this)'>Active</button></td>";
		}}else{
			echo	"<td col-xs-2>&nbsp<button class='btn btn-outline-danger btn-sm' id=".$row["id"]." onclick ='act_user(this)'>Inactive</button></td>";
		}

	echo	"<td col-xs-2><button class='btn btn-info btn-sm' onclick ='view_user(this)' id = " .$row["id"]. " value =" .$row["id"]. ">View More</button>&nbsp";

	echo	"&nbsp<button class='btn btn-warning btn-sm' id=".$row["id"]." onclick ='edit_user(this)'>Edit</button>&nbsp";

	if ($row["username"] != $_SESSION["username"]) {
		echo	"&nbsp<button class='btn btn-danger delete btn-sm' onclick ='delete_user(this)' id = " .$row["id"]. " value =" .$row["id"]. ">Delete</button></td></tr>";
	}else
	{
		echo 	"&nbsp<button type='button' class='btn btn-danger btn-sm' disabled>Delete</button></td></tr>";
	}
}
exit();

}

// delete user function call
//delete_user(id) will delete selected quary

if (isset($_POST["delete_id"]) ){

	if ($_SESSION["user_type"] == "001") {

		if ($_POST["delete_id"] != $_SESSION["id"]) {
		
			$dboparations = new dboparations();
			$rows = $dboparations->view_user($_POST["delete_id"]);

			foreach ($rows as $row) {
				$name_deleted = $row["f_name"]." ".$row["l_name"]." (".$row["username"].")";
			}

			$result = $dboparations->delete_me($_POST["delete_id"]);
			echo $result;

		}else{ echo "same_user_error";}

	}else{ echo "user_type_error";}

$log = new create_log();
echo $log->log_this($name_deleted." Sucsessfuly deleted");

exit();
	}


if (isset($_POST["getUserData"]) ){

$dboparations = new dboparations();
$rows = $dboparations->view_user($_POST["getUserData"]);
foreach ($rows as $row) {
	echo "<tr><td>Name</td><td> : </td><td>".$row["f_name"]." ".$row["l_name"]."</td></tr>";
	echo "<tr><td>Username</td><td> : </td><td>".$row["username"]."</td></tr>";
	echo "<tr><td>User Type</td><td> : </td><td>".$row["user_type"]."</td></tr>";
	echo "<tr><td>Contact Number</td><td> : </td><td>".$row["contact"]."</td></tr>";
	echo "<tr><td>Gender</td><td> : </td><td>".$row["gender"]."</td></tr>";
	echo "<tr><td>Address</td><td> : </td><td>".$row["address"]."</td></tr>";
	echo "<tr><td>NIC No</td><td> : </td><td>".$row["nicno"]."</td></tr>";
	echo "<tr><td>CReated Date</td><td> : </td><td>".$row["created_date"]."</td></tr>";
	echo "<tr><td>Created By</td><td> : </td><td>".$row["createdby"]."</td></tr>";
	echo "<tr><td>Last Login</td><td> : </td><td>".$row["last_login"]."</td></tr>";
}

exit();

}

//activate deactivated user

if (isset($_POST["act_id"]) ){

	if ($_SESSION["user_type"] == "001") {

		if ($_POST["act_id"] != $_SESSION["id"]) {
		
			$dboparations = new dboparations();
			$rows = $dboparations->view_user($_POST["act_id"]);

			foreach ($rows as $row) {
				$name_activated = $row["f_name"]." ".$row["l_name"]." (".$row["username"].")";
			}

			$result = $dboparations->active_me($_POST["act_id"]);
			echo $result;

		}else{ echo "same_user_error";}

	}else{ echo "user_type_error";}

$log = new create_log();
echo $log->log_this($name_activated." Sucsessfuly activated");

exit();
	}

if (isset($_POST["deact_id"]) ){

	if ($_SESSION["user_type"] == "001") {

		if ($_POST["deact_id"] != $_SESSION["id"]) {
		
			$dboparations = new dboparations();
			$rows = $dboparations->view_user($_POST["deact_id"]);

			foreach ($rows as $row) {
				$name_deactivated = $row["f_name"]." ".$row["l_name"]." (".$row["username"].")";
			}

			$result = $dboparations->deactive_me($_POST["deact_id"]);
			echo $result;

		}else{ echo "same_user_error";}

	}else{ echo "user_type_error";}

$log = new create_log();
echo $log->log_this($name_deactivated." Sucsessfuly deactivated");

exit();
	}

?>