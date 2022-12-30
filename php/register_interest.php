<?php

    $errors = '';
    $myEmail = 'matty.tansley@gmail.com';
    
    $fnameError = $lnameError = $cmakeError = $cmodelError = $vregError = $emailError = $telephoneError = $selectedEventError = $messageError = "";
    
    $fname = $lname = $cmake = $cmodel = $vreg = $email = $telephone = $extraNotes = $selectedEvent = $message =  "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['fname'])) {
            $fnameError = "Forname is Required";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $fname)) {
                $fnameError = "Only Letters and White Space Are Allowed";
            }
        }

        if(empty($_POST['lname'])) {
            $lnameError = "Surname is Required";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $lname)) {
                $lnameError = "Only Letters and White Space Are Allowed";
            }
        }

        if(empty($_POST['cmake'])) {
            $cmakeError = "Car Make is Required";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $cmake)) {
                $cmakeError = "Only Letters and White Space Are Allowed";
            }
        }

        if(empty($_POST['cmodel'])) {
            $cmodelError = "Car Model is Required";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $cmodel)) {
                $cmodelError = "Only Letters and White Space Are Allowed";
            }
        }

        if(empty($_POST['vreg'])) {
            $vregError = "Vehicle Registration is Required";
        } else {
            if (!preg_match("/[A-Za-z0-9]*$/", $vreg)) {
                $vregError = "Only Letters/Numbers and White Space Are Allowed";
            }
        }

        if(empty($_POST['email'])) {
            $emailError = "Email is Required";
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Please Enter A Valid Email";
             }
        }

        if(empty($_POST['telephone'])) {
            $telephoneError = "Telephone is Required";
        } else {
            if (!preg_match('/^[0-9]*$/', $telephone)) {
                $subjectError = "Only Numbers Are Allowed";
            }
        }

        if(empty($_POST['selectedEvent'])) {
            $selectedEventError = "Please Select an Event";
            echo $_POST['selectedEvent'];
        } else {
            if (!preg_match('/^[0-9]*$/', $selectedEvent)) {
                $selectedEventError = "Only Numbers Are Allowed";
            }
        }
        
        if(empty($_POST['message'])) {
            $messageError = "message is Required";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $message)) {
                $messageError = "Only Letters and White Space Are Allowed";
            }
        }

        if(($fnameError == "") && ($lnameError == "") && ($cmakeError == "") && ($cmodelError == "") && ($vregError == "") &&($emailError == "") && ($telephoneError =="") && ($selectedEventError =="") &&($messageError == "")) {
            $fname = $_POST['fname']; 
            $lname = $_POST['lname']; 
            $cmake = $_POST['cmake']; 
            $cmodel = $_POST['cmodel']; 
            $vreg = $_POST['vreg']; 
            $email = $_POST['email']; 
            $telephone = $_POST['telephone']; 
            $extraNotes = $_POST['extraNotes']; 
            $selectedEvent = $_POST['selectedEvent']; 
            $message = $_POST['message']; 

            $sql = "INSERT INTO attendees (firstname, lastname, email)
                    VALUES "."('$fname','$lname','$cmake','$cmodel','$vreg','$email','$telephone','$extraNotes','$selectedEvent')";

            if ($conn->query($sql) === TRUE) {
              require __DIR__.'/../redirects/redirect_register_interest_success.php';
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        }
    }
?>