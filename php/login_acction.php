<?php

include_once("login.php");

if (isset($_POST["log_username"]) AND isset($_POST["log_password"])){

$login = new login();
$result = $login->user_login($_POST["log_username"],$_POST["log_password"]);

echo $result;

}
exit();
?>