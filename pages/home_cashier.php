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
        .zoimg{

            width: 60%;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <?php
        if (isset($_SESSION["user_type"])) {
            if ($_SESSION["user_type"] != "002") {
                header( "Location:../template/unauthorized.php" );
            } 

        }else {header( "Location:../template/unauthorized.php" );}

    ?>

</head>

<body onload="startTime()">
    <!-- Hedder -->
    <div class="container">
        <?php include_once("../template/hedder.php");

        if (isset($_GET["msg"]) and !empty($_GET["msg"]))
        { ?>

        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <?php echo $_GET["msg"]; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php 
        }
        ?>

        <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height: 100%; position: fixed; z-index: 1;
          top: 3rem; left: 0;">
            </br>
            <h5 class="card-title mx-auto">User Info</h5>
            </br>
            <img src="../img/userCash.svg" class="card-img-top zoimg mx-auto" alt="User">
            <?php
            if (isset($_SESSION["f_name"]))
            {?>

                <div class="card-header mx-auto">Welcome <?php echo $_SESSION["f_name"]; echo " "; echo $_SESSION["l_name"];?>
                <div class="card-body">        
                <p class="card-text ">Role : Cashier</p>
                <p class="card-text ">Last Login : </p>
                <p class="card-text "> <?php echo substr($_SESSION["last_login"],0,10);?>  at  <?php echo substr($_SESSION["last_login"],10);?></p>
                </div>
                 
                
           <?php
            }
            ?>
            
            <div class="card-footer text-muted mx-auto">
                    <h5 class="card-title mx-auto">
                        <div id="clock"></div>
                    </h5>
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
