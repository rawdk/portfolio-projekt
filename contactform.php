<?php

if (isset($_post['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "cph-rw49@cphbusiness.dk";
    $headers ="From: ".$mailFrom;
    $txt ="You have received an email from".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: indexphp?mailsent");
}