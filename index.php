<?php
    session_start();
    $page = $title = 'Home';
    include "partials/header.php";
?>
<!DOCTYPE html>
<html>
    <body class="body">
        <div class="container-fluid sticky-footer-wrapper">
            <?php
                include "partials/navbar.php"
            ?>

            <div class="row padding-top-100 margin-15">
                <div class="col-sm-6 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block " src="images/home/sliderImage.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block " src="images/home/sliderImage1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block " src="images/home/sliderImage2.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-white">
                    <h1 class="text-center">Heres A Quick Overview</h1>
                    <p class="justify-content">CarEvents is a website to allow you to view all your favourite car events in a singular place across the country. 
                        Events consisting of older antique cars or newer super cars to those quirky ones that aren't quite to everyones taste.</p>
                            
                        <table>
                            <tr><th>Events Consist of:</th></tr>
                            <tr><td>- Food and Refreshments Stalls</td></tr>
                            <tr><td>- Information Stands</td></tr>
                            <tr><td>- Group meetings</td></tr>
                            <tr><td>- Exclusive Merchandise</td></tr>
                            <tr><td>- First Aid</td></tr>
                        </table>
                </div>
            </div>

            <div class="padding-top-50">
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h3 class="text-light">Featured Events</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <p class="text-light">Shire Farm Sports Cars</p>
                    </div>
                </div>
                <div class="row margin-15">
                    <div class="col-sm-6">
                        <img src="images/home/shireFarm.png" class="img-responsive img-home" alt="Image">
                    </div>
                    <div class="col-sm-6">
                        <div class="map-responsive map-home">
                            <iframe class="iframe iframe-home" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19118.46729273114!2d-0.035890352035838076!3d53.203352122172035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487877f1c3f4a315%3A0x7dc9591ec0d4d530!2sHagworthingham%2C%20Spilsby%20PE23%204LY!5e0!3m2!1sen!2suk!4v1582144260639!5m2!1sen!2suk" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="padding-top-50">
                <div class="row text-center">
                    <div class="col-sm-12">
                        <p class="text-light">Stables Wood Fancy Bikes</p>
                    </div>
                </div>
                <div class="row margin-15">
                    <div class="col-sm-6">
                        <img src="images/home/stablesWoodFarm.jpeg" class="img-responsive img-home" alt="Image">
                    </div>
                    <div class="col-sm-6">
                        <div class="map-responsive map-home">
                            <iframe class="iframe iframe-home" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9573.944650571535!2d-0.7004166031817675!3d53.137368951430815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48784eaedb869063%3A0xcea7b1410d1dd1ee!2sSwinderby%2C%20Lincoln%20LN6%209QQ!5e0!3m2!1sen!2suk!4v1582144049325!5m2!1sen!2suk" frameborder="0"  allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>            
            
            <div class="row footer">
                <div class="col-sm-12 text-center text-white padding-top-50 padding-bottom-20">
                    <?php
                        include "partials/footer.php" 
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
    


