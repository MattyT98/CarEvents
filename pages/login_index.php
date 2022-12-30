
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
                                      
                        </div>
                    </div>
                </div>
            </div>

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