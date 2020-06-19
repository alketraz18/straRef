
    <div class="sidenav text-center">


        <div class="card text-white bg-dark mb-3 side_nav">


                <br>
                <h4 class="card-title text-warning">Star_Ref</h4> 
                <h4 class="card-title text-warning">Inventory System</h4>
                </br>
                <h4 class="card-title">Dashboard</h4>
                <img src="../img/userAdmin.svg" class="card-img-top zoimg mx-auto" alt="User">
                <?php
                if (isset($_SESSION["f_name"]))
                {?>

            <div class="card-header mx-auto">Welcome <?php echo $_SESSION["f_name"]; echo " "; echo $_SESSION["l_name"];?>
                            
                <h6 class="card-text ">Role : ADMIN</h6>
                <h6 class="card-text ">Last Login : </h6>
                <h6 class="card-text "> <?php echo substr($_SESSION["last_login"],0,10);?>  at  <?php echo substr($_SESSION["last_login"],10);?></h6>
                                 
                    
               <?php
                }
                ?>
                
                
                <h5 class="card-title text-muted mx-auto">
                    <br>
                    <div id="clock"></div>
                </h5>
                
            </div>
            <br>
            <form class="form-inline mt-2 mt-md-0 logout" id = "logout" action="../php/logout.php">
                <button class="btn btn-outline-danger mx-auto" type="submit" style="color: #f8f9fa" >Log Out</button>
            </form>
            <br>
            <div class="card-footer">
                <small class="text-muted">&copy; CHAMOD THANURA</small>
            </div>
        </div> 
    </div>