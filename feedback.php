<?php

$name = $_POST['name'];
$message = $_POST['message'];

$to = "ibrahiimmfarhan@gmail.com";
$subject = "New Cafy Feedback";

$body = "Name: " . $name . "\n\n";
$body .= "Feedback:\n" . $message;

if(mail($to, $subject, $body)) {
    echo "<h1>Thank you!</h1>";
    echo "<p>Your feedback has been sent.</p>";
} else {
    echo "<h1>Error</h1>";
    echo "<p>The message could not be sent.</p>";
}

?>