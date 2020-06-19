<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome CSS 
    <link rel="stylesheet" href="../css/fontawesome.min.css">-->

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">

    <!-- title -->
    <title>Star_Ref</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../img/favicons/apple-touch-icon-180x180.png" sizes="180x180">
    <link rel="icon" href="../img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="../json/manifest.json">
    <link rel="mask-icon" href="../img/LOGO.svg" color="#563d7c">
    <link rel="icon" href="../img/favicon.ico">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <meta name="msapplication-config" content="../img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .card-icon{
            position:absolute;
            top:-3rem;
            border-radius:50%;
            align-self: center;
        }
        .mt-custom{
            margin-top: 5rem !important;
        }
        .ttop{

            margin-top: -15rem !important;
        }

        .wraper{
            position: relative;
        }
        .wraper a{
            position: absolute;
            width:100%;
            height:100%;
            top:0px;
            left:0px;
            text-decoration: none;
        }


        .alert{
            height: 3rem;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }


        .main {
            position: relative;
        }

        .bottom_layer{
            /*margin-top: 25%;*/
            margin-top:12rem !important;
        }

        /*-----------------------*/

    </style>

    <?php
        if (isset($_SESSION["user_type"])) {
            if ($_SESSION["user_type"] == "001") {
                
            } else{header( "Location:../template/unauthorized.php" );}

        }else {header( "Location:../template/unauthorized.php" );}

    ?>

</head>

<body class="main" onload="startTime()">



<div class="container">
    <div class="row w-100">
        <!-- Hedder and alert -->
        <?php include_once("../template/hedder.php");

        //alert
        if (isset($_GET["msg"]) and !empty($_GET["msg"]))
        { ?>

        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <?php echo  $_GET["msg"];?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php 
        }
        ?>
    </div>
    <div class="row w-100">
        <div class="col-md-4">
            <div class="wraper">
                <a href="../template/add_user.php">
                    <div class="card text-center bg-info mx-sm-1 p-3 ttop">
                        <div class="card border-info shadow text-info p-3 card-icon" >
                            <svg class="bi bi-person-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="text-white text-center mt-2 mt-custom">
                            <h4>Create</h4>
                            <h1>New User</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wraper">
                <a href="../template/view_user.php">
                    <div class="card text-center bg-success mx-sm-1 p-3 ttop">
                        <div class="card border-success shadow text-success p-3 card-icon" >
                            <svg class="bi bi-people-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                        </div>
                        <div class="text-white text-center mt-2 mt-custom">
                            <h4>Customise</h4>
                            <h1>Users</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wraper">
                <a href="#">
                    <div class="card text-center bg-danger mx-sm-1 p-3 ttop">
                        <div class="card border-danger shadow text-danger p-3 card-icon" >
                            <svg class="bi bi-lock-fill" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <rect width="11" height="9" x="2.5" y="7" rx="2"/>
                              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                            </svg>
                        </div>
                        <div class="text-white text-center mt-2 mt-custom">
                            <h4>Change User</h4>
                            <h1>Password</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/customjs/clock.js"></script>
    <script type="text/javascript" src="../js/customjs/insert_user.js"></script>
</body>

</html>
