<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['emails'];
    $message = $_POST['message'];

    $mailTo = "info@salman-gishiev.de";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an E-Mail from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}