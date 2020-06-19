<?php
	session_start();
    if (isset($_SESSION["user_type"])) {
        if ($_SESSION["user_type"] == "001") {
            header( "Location:home_admin.php" );
        } 
        else if ($_SESSION["user_type"] == "002") {
            header( "Location:home_cashier.php" );
        }
        else if ($_SESSION["user_type"] == "003") {
            header( "Location:home_technician.php" );
        }
        else{
            header( "Location:../template/unauthorized.php" );
        }


    }else {
    	header( "Location:../template/unauthorized.php" );
    }   


?>