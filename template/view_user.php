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

    <!-- Custom styles -->
    <link rel="stylesheet" href="../css/signin.css">
    <!--<link rel="stylesheet" href="../css/loading.css">-->

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/customjs/edit_user.js"></script>

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
        .main {
          margin-left: 19rem;
        }
    </style>

        <?php
        if (isset($_SESSION["user_type"])) {
            if ($_SESSION["user_type"] == "001") {
                
            } else{header( "Location:../template/unauthorized.php" );}

        }else {header( "Location:../template/unauthorized.php" );}

    ?>

</head>



<body class="main" onload="startTime()">
    <!--Loading-->

    <?php include_once("../template/hedder.php");?>


<div class="container">    
    <div id = "sucsess"></div>
    <div class="container text-center">
        <h2>View All Users</h2>
    </div>
    <div class="container">
        <table class="table">
                <thead>
                    <tr>
                        <th class="col-xs-2">#</th>
                        <th class="col-xs-2">Name</th>
                        <th class="col-xs-2">User Name</th>
                        <th class="col-xs-2">Role</th>
                        <th class="col-xs-2">Status</th>
                        <th class="col-xs-2">Actions</th>
                    </tr>
                </thead> 
                <tbody id="det_datah"></tbody>
            </table>
    </div>
    <br/>
    <div class="text-center">
        <a href="../pages/home.php" class="btn btn-secondary">Close</a>
    </div>
</div>

        <!-- Modal for confirm delete-->
        <div class="modal fade" id="delete_dialog" tabindex="-1" role="dialog" aria-labelledby="DELETE_DIALOG" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title mx-auto">Warning!</h5>
              </div>
              <div class="modal-body">
                This Will Delete User Permently and System will refuse to let loggin this user in future
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger del_conf" id="" onclick ="delete_confirm(this)">Delete User</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for view user-->

        <div class="modal fade" id="view_model" tabindex="-1" role="dialog" aria-labelledby="View_user" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header bg-info">
                <h5 class="modal-title mx-auto">User Info</h5>
              </div>
              <div class="modal-body">
              <table class="table text-center" id="view_data_here"></table>                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="../js/jquery-3.4.1.min.js"></script>-->
    <script src="../js/popper.min.js"></script>    
    <script src="../js/customjs/clock.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!--<script src="../js/bootstrap.min.js"></script>-->
</body>

</html>