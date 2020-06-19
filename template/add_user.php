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
    <!-- <link rel="stylesheet" href="../css/loading.css"> -->

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/customjs/insert_user.js"></script>

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

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    
</head>



<body class="main" onload="startTime()">
    <!--Loading-->

    <?php include_once("../template/hedder.php");?>

     <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8 order-md-1">

                <div class="py-5 text-center">
                  <h2>Create New User</h2>
                </div>

                <form method="post" id="create_new_user" onsubmit="return false" autocomplete="off">
                    <!-- -------------------------- First Name block ------------------------------- -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z" />
                                            <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                            <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="First Name" aria-label="f_name" aria-describedby="addon-wrapping" oninvalid="this.setCustomValidity('Please Enter your First Name to Continue')" oninput="setCustomValidity('')" required id="f_name" name="f_name">
                            </div>
                        </div>
                        <!-- ------------------------------------ Last Name block ------------------------------------------------ -->
                        <div class="col-md-6 mb-3">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z" />
                                            <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                            <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Last Name" aria-label="l_name" aria-describedby="addon-wrapping" oninvalid="this.setCustomValidity('Please Enter your Last Name to Continue')" oninput="setCustomValidity('')" required id="l_name" name="l_name">
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------------------ Username block ------------------------------------------------ -->
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><svg class="bi bi-person-plus-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7.5-3a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd" />
                                    </svg></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username - This will use identify user in future login" oninvalid="this.setCustomValidity('Please Enter Unique Username')" oninput="setCustomValidity('')" required id="username" name="username">
                        </div>
                        <small id="user_error" class="form-text text-muted"></small>
                    </div>
                    <!-- ------------------------------------ Password block ------------------------------------------------ -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg class="bi bi-shield-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.187 1.025C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815zm3.328 6.884a1.5 1.5 0 10-1.06-.011.5.5 0 00-.044.136l-.333 2a.5.5 0 00.493.582h.835a.5.5 0 00.493-.585l-.347-2a.5.5 0 00-.037-.122z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" aria-describedby="addon-wrapping" oninvalid="this.setCustomValidity('Please Enter your Password')" oninput="setCustomValidity('')" required  id="password" name="password">
                            </div>
                        </div>
                        <!-- ------------------------------------ Conform Password block ------------------------------------------------ -->
                        <div class="col-md-6 mb-3">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg class="bi bi-shield-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.187 1.025C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815zm3.328 6.884a1.5 1.5 0 10-1.06-.011.5.5 0 00-.044.136l-.333 2a.5.5 0 00.493.582h.835a.5.5 0 00.493-.585l-.347-2a.5.5 0 00-.037-.122z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <input type="password" class="form-control" placeholder="Confirm" aria-describedby="addon-wrapping" oninvalid="this.setCustomValidity('Please Re-enter your Password')" oninput="setCustomValidity('')" required  id="confirm" name="confirm">
                            </div>
                            <small id="pw-error" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <!-- ------------------------------------ Gender block ------------------------------------------------ -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg class="bi bi-people-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 100-6 3 3 0 000 6zm-5.784 6A2.238 2.238 0 015 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 005 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <select class="form-control" id="gender" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <!-- ------------------------------------ Phone number block ------------------------------------------------ -->
                        <div class="col-md-6 mb-3">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg class="bi bi-chat-square-dots-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2h-2.5a1 1 0 00-.8.4l-1.9 2.533a1 1 0 01-1.6 0L5.3 12.4a1 1 0 00-.8-.4H2a2 2 0 01-2-2V2zm5 4a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Contact Numbre" aria-label="p_no" aria-describedby="addon-wrapping" oninvalid="this.setCustomValidity('Please Enter your Phone number')" oninput="setCustomValidity('')" required id="p_no" name="p_no">
                            </div>
                            <small id="p_no_error" class="form-text text-muted"></small>
                        </div>
                    </div>

                    <!-- ------------------------------------ Username block ------------------------------------------------ -->
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><svg class="bi bi-house-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd" />
                                    </svg></span>
                            </div>
                            <input type="text" class="form-control" id="address" placeholder="Enter Address" oninvalid="this.setCustomValidity('Please Enter your Postal Address')" oninput="setCustomValidity('')" required id="address" name="address">
                        </div>
                    </div>
                    <!-- ------------------------------------ Gender block ------------------------------------------------ -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg class="bi bi-people-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 100-6 3 3 0 000 6zm-5.784 6A2.238 2.238 0 015 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 005 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <select class="form-control" id="usertype" name="usertype">
                                    <option value="0003">Technician</option>
                                    <option value="0001">Admin</option>
                                    <option value="0002">Cashier</option>
                                </select>
                            </div>
                        </div>
                        <!-- ------------------------------------ Phone number block ------------------------------------------------ -->
                        <div class="col-md-6 mb-3">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg class="bi bi-chat-square-dots-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2h-2.5a1 1 0 00-.8.4l-1.9 2.533a1 1 0 01-1.6 0L5.3 12.4a1 1 0 00-.8-.4H2a2 2 0 01-2-2V2zm5 4a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="NIC Number" aria-label="p_numb" aria-describedby="addon-wrapping" oninvalid="this.setCustomValidity('Please Enter valid NIC Number')" oninput="setCustomValidity('')" required id="nicno" name="nicno">
                            </div>
                            <small id="nic-error" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="modal-footer mx-auto">
                    <button type="button" class="btn btn-secondary" id="quit_add">Close</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="../js/jquery-3.4.1.min.js"></script>-->
    <script src="../js/popper.min.js"></script>    
    <script src="../js/customjs/clock.js"></script>
    <!--<script src="../js/bootstrap.min.js"></script>-->
</body>

</html>