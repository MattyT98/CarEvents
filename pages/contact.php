<?php
    session_start();
    $page = $title = 'ContactUs';
    include "../partials/header.php";
    include "../php/contact_form.php";
?>
<!Doctype html>
<html>
    <body class="body">
        <div class="container-fluid sticky-footer-wrapper">
            <?php
                include "../partials/navbar.php"
            ?>
            
            <div class="row vh90 no-gutters">
                <div class="col-sm-12">
                    <div class="padding-top-100 text-white">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="h1-responsive font-weight-bold text-center my-4 form-padding-50">Contact Us</h1>
                            </div>    
                        </div>
                        <form id="contact-form" name="contact-form" action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                            <div class="row padding-top-50">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 padding-top-10">
                                    <label for="name">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control" vale="<?=$name?>" placeholder="Enter Your Name">
                                    <span class="form-error text-danger"><?=$nameError?></span>
                                </div>
                                <div class="col-sm-4 padding-top-10">
                                    <label for="email">Your email</label>
                                    <input type="text" id="email" name="email" class="form-control" vale="<?=$email?>" placeholder="Enter Your Email">
                                    <span class="form-error text-danger"><?=$emailError?></span>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row padding-top-10">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8 align-content-center">
                                    <label for="subject">Telephone</label>
                                    <input type="tel" id="telephone" name="telephone" class="form-control" vale="<?=$subject?>" placeholder="Enter Telephone">
                                    <span class="form-error text-danger"><?=$telephoneError?></span>
                                </div>
                                <div class="col-sn-2"></div>  
                            </div>
                            <div class="row padding-top-10">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8 align-content-center">
                                    <label for="message" class="label-text-orange" style="resize:none;">Message</label>
                                    <input type="text" id="message" name="message" class="form-control" style="resize:none;" maxlength="1000" cols="25" rows="6" vale="<?=$message?>" placeholder="Enter Your Message">
                                    <span class="form-error text-danger"><?=$messageError?></span>                       
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row padding-top-50">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <a class="btn btn-dark btn-block form-send-opacity" onclick="document.getElementById('contact-form').submit();">Send</a>
                                </div>
                                <div class="col-sm-4"></div>                                            
                            </div>
                        </form>
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



