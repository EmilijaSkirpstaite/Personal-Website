<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "emilijaskirpstaite@gmail.com";

mail($recipient, "New message, emilija.org", $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;700&display=swap" rel="stylesheet">

        <title>Message Sent</title>
    </head>
    <body>
        <div class="container">
            <div class="message-confirm">
                <h1>Thank you for contacting me! <br> Your message has been submitted.</h1>
                <p class="back">Go back to the <a href="index.html">Home Page</a>.</p>
            </div>
        </div>
    </body>
</html>

';

?>