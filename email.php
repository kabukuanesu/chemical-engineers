<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['newsletter'];

    $to = 'sbicez09@gmail.com';
    $subject = 'New Form Submission';
    $body = 'I want to join';

    if (mail($to, $subject, $body)) {
        echo 'Message received!';
    } else {
        echo 'Error sending message.';
    }
}
?>
