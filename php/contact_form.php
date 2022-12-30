<?php
    $errors = '';
    $myEmail = 'matty.tansley@gmail.com';
    
    $nameError = $emailError = $telephoneError = $messageError = "";
    $name = $telephone = $email = $message =  "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['name'])) {
            $nameError = "Name is Required";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                $nameError = "Only Letters and White Space Are Allowed";
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
        
        if(empty($_POST['message'])) {
            $messageError = "message is Required";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $message)) {
                $messageError = "Only Letters and White Space Are Allowed";
            }
        }

        if(($nameError == "") && ($emailError == "") && ($telephoneError =="") && ($messageError == "")) {
            $name = $_POST['name']; 
            $email = $_POST['email']; 
            $telephone = $_POST['subject']; 
            $message = $_POST['message']; 

            $to = $myEmail;
            $emailSubject = "Contact form submission: $name";
            $emailBody = "You have received a new message. \n\n".
            "Here are the details:\n Name: $name \n ".
            "Email: $email\n Telephone: $telephone \n Message \n $message";
            $headers = "From: $myEmail\n";
            $headers .= "Reply-To: $email";
            
            if(mail($to,$emailSubject,$emailBody,$headers)) {
                $name = $telephone = $email = $message = "";
                require __DIR__.'/../redirects/redirect_contact_success.php';
            }
        }
    }
?>