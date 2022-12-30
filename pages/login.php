
<?php
    session_start();
    $page = $title = 'Login';
    include "../partials/header.php";
    require("../database/conn.inc.php");    

    $sql = "SELECT * FROM events";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <body class="body">
        <div class="container-fluid sticky-footer-wrapper">
            <?php
                include "../partials/navbar.php"
            ?>

            <div class="row vh90 no-gutters padding-top-100 text-white">                
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="h1-responsive font-weight-bold text-center my-4 form-padding-50">Login Management</h1>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-sm-12 margin-15">   
                            <form action="../PHP/login_staff.php" method="post">
                                <div class="row padding-top-50">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 padding-top-10">
                                        <input type="text" id="username" name="username" class="form-control" vale="<?=$name?>" placeholder="Username">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>

                                <div class="row padding-top-50">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 padding-top-10">
                                        <input class="form-control" id="password" name="password" type="password" class="form-control" placeholder="Enter Password">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>

                                <div class="row padding-top-50">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 padding-top-10">
                                        <input type="submit" value="Login" class="btn btn-dark btn-block form-send-opacity" data-mdb-ripple-color="dark"/>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </form>                 
                        </div>
                    </div>
                </div>
            </div>
            <?php
            ?>
            <div class="row footer">
                <div class="col-sm-12 text-center text-white padding-top-50">
                    <?php
                        include "../partials/footer.php" 
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>