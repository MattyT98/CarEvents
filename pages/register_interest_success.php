<?php
    session_start();
    $page = $title = 'Submission Success';
    include "../partials/header.php";
?>
<!DOCTYPE html>
<html>
    <body class="body">
        <div class="container-fluid sticky-footer-wrapper">
            <?php
                include "../partials/navbar.php"
            ?>

            <div class="row vh90 no-gutters padding-top-100 text-white align-items-center justify-content-center text-center">                
                <div class="col-sm-3"></div>                
                <div class="col-sm-6">
                    <h1>Event Interest Submission Successful!</h1>
                    <p class="contact-success-filler">
                    <h2>Thank You For Submitting Your Details Through The Contact Form,</h2>
                    <h2>We Will Be In Touch With More Details of The Event when Tickets become Available</h2>
                </div>
                <div class="col-sm-3"></div>
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