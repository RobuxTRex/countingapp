<?php

if (isset($_POST['submit'])) {
    $email = $_POST[''];
    $suggestiontitle = $_POST[''];
    $message = $_POST[''];

    $mailTo = "robuxtrex@gmail.com"; // This is my public e-mail address shared on my YouTube channel.
    $headers = "From: CountingApp Feedback"
    $txt = "CountingApp has feedback!\n\n".$message;

    mail($email, $suggestiontitle, $txt, $headers);
    header("Location: index.php")
}

// Feature is temporarily disabled.