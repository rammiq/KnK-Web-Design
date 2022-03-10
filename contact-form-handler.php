<?php
    $name = $_POST['name'];
    $visitors_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'ramon.kramer@gmx.ch';

    $email_subject = 'New Form submission';

    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

    $to = "ramon.kramer71@gmail.com"

    $headers = "From: $email_from \r\n";

    $headers = "Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>