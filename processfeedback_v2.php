<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Replace newlines in the feedback with " || "
$feedback = str_replace(array("\r\n", "\n", "\r"), ' || ', $feedback);

$toaddress = "feedback@example.com";
$subject = "Feedback from web site";

$mailcontent = "Customer name: " . $name . " " .
    "Customer email: " . $email . " " .
    "Customer comments: " . $feedback;

$fromaddress = "From: webserver@example.com";

// Send the email
mail($toaddress, $subject, $mailcontent, $fromaddress);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback (shown below) has been sent.</p>
<p><?php echo nl2br(htmlspecialchars($feedback)); ?></p>
</body>
</html>
