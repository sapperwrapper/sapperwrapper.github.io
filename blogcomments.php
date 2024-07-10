<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
$subject = $_POST['subject'];
$message = $_POST['body'];
$headers = $_POST['email'];

mail('sapperwrapper@gmail.com', $subject, $message, $headers);

die('Thank you for your comment');
}