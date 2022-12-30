<?php
    include "relativePath.php"
?>
<!DOCTYPE html>
<html>
    <nav class="navbar navbar-ontop navbar-expand-lg navbar-light bg-dark fixed-top">        
        <div class="nav-logo">
            <a href="<?php echo $Path.'/'?>"><img src="<?php echo ($Path)?>/images/CarEventLogo.png" class="img-fluid rounded-circle mx-auto d-block" alt="Logo Image"></a>
        </div>  
        
        <a class="navbar-brand" href="./index.php"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-pills mr-auto ">

                <li class="nav-item active rounded">
                    <a class="<?php echo ($page == "Home" ? "nav-link active" : "nav-link")?>" href="<?php echo $Path.'/'?>">Home</a>
                </li>
                <li class="nav-item rounded">
                    <a class="<?php echo ($page == "CarEvents" ? "nav-link active" : "nav-link")?>" href="<?php echo $Path.'/pages/events.php'?>">Car Events</a>
                </li>
                <li class="nav-item rounded">
                    <form class="form-inline" method="post" action="<?php echo $Path.'/pages/login.php'?>">
                        <a class="<?php echo ($page == "Login" ? "nav-link active" : "nav-link")?>" href="<?php echo $Path.'/pages/login.php'?>" type="submit">Login</a>
                    </form>  
                </li>
                <li class="nav-item rounded">
                    <a class="<?php echo ($page == "RegisterEventInterest" ? "nav-link active" : "nav-link")?>" href="<?php echo $Path.'/pages/registerInterest.php'?>">Register Event Interest</a>
                </li>
                <li class="nav-item rounded">
                    <a class="<?php echo ($page == "ContactUs" ? "nav-link active" : "nav-link")?>" href="<?php echo $Path.'/pages/contact.php'?>">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Enter Search Term" aria-label="Search">
                <button class="btn my-2 my-sm-0 text-white" type="submit">Search</button>
            </form>
        </div>     
    </nav>
</html>


