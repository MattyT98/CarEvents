<?php
    session_start();
    $page = $title = 'CarEvents';
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
                            <h1 class="h1-responsive font-weight-bold text-center my-4 form-padding-50">Event List</h1>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-sm-12 table-responsive margin-15">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Address 1</th>
                                        <th scope="col">Address 2</th>
                                        <th scope="col">City</th>
                                        <th scope="col">County</th>
                                        <th scope="col">PostCode</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Start Time</th>
                                        <th scope="col">End Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_assoc($result)) 
                                        {
                                            echo '<tr>
                                                    <td>'.$row["EventName"].'</td>
                                                    <td>'.$row["Address1"].'</td>
                                                    <td>'.$row["Address2"].'</td>
                                                    <td>'.$row["City"].'</td>
                                                    <td>'.$row["County"].'</td>
                                                    <td>'.$row["Postcode"].'</td>
                                                    <td>'.$row["Date"].'</td>
                                                    <td>'.$row["StartTime"].'</td>
                                                    <td>'.$row["EndTime"].'</td>
                                                </tr>
                                                ';
                                        }
                                    ?>
                                </tbody>
                            </table>
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