<?php
if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (!empty($name) && !empty($email) && !empty($message)) {
        $from = 'From: ' . $name . '<' . $email . '> \r\n Reply-to: ' . $email;
        $subject = "Contact Form Enquiry";
        if (mail("iamhssingh@ities.xyz", $subject, $message, $from)) {
            echo "success";
        } else {
            echo "Failed";
        }
    }
}
?>