<?php
session_start();
if (isset($_SESSION["user_type"])) 
{        
    header( "Location:pages/home.php" );
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/customjs/login.js"></script>

    <!-- title -->
    <title>Star_Ref</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon-180x180.png" sizes="180x180">
    <link rel="icon" href="img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="json/manifest.json">
    <link rel="mask-icon" href="img/LOGO.svg" color="#563d7c">
    <link rel="icon" href="img/favicon.ico">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
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

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

</head>

<body>



    <body class="text-center">
        <form class="form-signin" method="post" id="login_form" onsubmit="return false" autocomplete="off">
            <img class="mb-4" src="img/LOGO.svg" alt="" width="96" height="96">
            <h1 class="h3 mb-3 font-weight-normal">PLEASE SIGN IN</h1>

            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" id="log_username" class="form-control" placeholder="Username" required autofocus name="log_username">  
            <small id="log_un_error" class="form-text text-danger"></small>
           
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="log_password" class="form-control" placeholder="Password" required name="log_password">        
            <small id="log_pw_error" class="form-text text-danger"></small>
            <br>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Sign in</button>

            <p class="mt-5 mb-3 text-muted">&copy; CHAMOD THANURA</p>
        </form>
    </body>


</body>

</html>
