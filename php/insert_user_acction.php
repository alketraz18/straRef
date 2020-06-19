<?php

include_once("insert_user.php");
include_once("log.php");

if (isset($_POST["password"]) AND isset($_POST["username"])){
$name_created = $_POST["f_name"]." ".$_POST["l_name"]." (".$_POST["username"].")";
$insert_user = new insert_user();
$result = $insert_user->create_account($_POST["f_name"],$_POST["l_name"],$_POST["username"],$_POST["password"],$_POST["gender"],$_POST["p_no"],$_POST["address"],$_POST["usertype"],$_POST["nicno"]);

echo $result;

}
else
{
echo "No data received";
}
$log = new create_log();
echo $log->log_this($name_created." Sucsessfuly Created");
exit();

?>