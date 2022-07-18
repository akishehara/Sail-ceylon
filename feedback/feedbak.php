<?php

    $name = $_POST['Name'];
    $customer_email = $_POST['Email'];
    $feedback = $_POST['Feedback'];


    $email_from = '';

    $email_subject = "New Feedback";

    $email_body = "user Name: $name.\n".

            "user Email: $visitor_email.\n".
            "user Message: $message.\n";



        $to = "ramokey2021@gmsil.com";

        $headers = "From: $email_form \r\n";

        $headers .= "reply-To: $vistor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location: feedback.html");






?>