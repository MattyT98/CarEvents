<?php
    session_start();
    $page = $title = 'RegisterEventInterest';
    include "../partials/header.php";
    include "../php/register_interest.php";
    require("../database/conn.inc.php");
?>
<!DOCTYPE html>
</html>
    <body class="body">
        <div class="container-fluid sticky-footer-wrapper">
            <?php
                include "../partials/navbar.php"
            ?>

            <div class="row vh90 no-gutters padding-top-100 text-white">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="h1-responsive font-weight-bold text-center my-4 form-padding-50">Event Interest</h1>
                        </div>    
                    </div>
                    <form id="interestform" name="interestform" action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="row form-group">                               
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <label>Your Name</label>
                                <input type="text" id="fname" class="form-control" name="fname" placeholder="Forename" required>
                                <span class="form-error text-danger"><?=$fnameError?></span>
                            </div>
                            <div class="col-sm-4 align-self-end">
                                <input type="text" id="lname" class="form-control" name="lname" placeholder="Surname" required>
                                <span class="form-error text-danger"><?=$lnameError?></span>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row form-group padding-top-10">
                            <div class="col-sm-2"></div>
                            <div class="col-md">
                                <label>Your Car Details</label>
                                <input type="text" id="cmake" class="form-control" name="cmake" placeholder="Car Make" required>
                                <span class="form-error text-danger"><?=$cmakeError?></span>

                            </div>
                            <div class="col-md align-self-end">
                                <input type="text" id="cmodel" class="form-control" name="cmodel" placeholder="Car Model" required>
                                <span class="form-error text-danger"><?=$cmodelError?></span>

                            </div>
                            <div class="col-md align-self-end">
                                <input type="text" id="vreg" class="form-control" name="vreg" placeholder="Vehicle Registration" required>
                                <span class="form-error text-danger"><?=$vregError?></span>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row form-group padding-top-10">                               
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <label>Your Contact Details</label>
                                <input type="text" id="telephone" class="form-control" name="telephone" placeholder="telephone" required>
                                <span class="form-error text-danger"><?=$telephoneError?></span>
                            </div>
                            <div class="col-sm-4 align-self-end">
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                                <span class="form-error text-danger"><?=$emailError?></span>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row form-group padding-top-10">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <label>Event Interested</label>
                                <select type="select" id="ename" class="form-control" name="ename" placeholder="Select Event..." required>
                                    <option value="" disabled selected>Select your option</option>
                                    <?php                                                        
                                        $sql = "SELECT EventName FROM events";
                                        $result = $conn->query($sql);
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='".$row["EventName"]."'>".$row['EventName']."</option>";
                                        }
                                    ?>
                                </select>
                                <span class="form-error text-danger"><?=$selectedEventError?></span>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row form-group padding-top-10">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <label>Extra Notes</label>
                                <textarea id="extranotes" class="form-control" name="extraNotes" placeholder="Extra Notes"></textarea>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row form-group padding-top-50">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <a class="btn btn-dark btn-block form-send-opacity" onclick="document.getElementById('interestform').submit();">Submit Interest</a>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </form>
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