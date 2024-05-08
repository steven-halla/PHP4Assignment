<?php
// Create short variable names
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Replace newlines and carriage returns in the feedback with spaces
$feedback = str_replace(array("\r\n", "\n", "\r"), ' ', $feedback);

// Set up some static information
$toaddress = "feedback@example.com";
$subject = "Feedback from web site";

$mailcontent = "Customer name: " . htmlspecialchars($name) . "\n" .
    "Customer email: " . htmlspecialchars($email) . "\n" .
    "Customer comments: " . htmlspecialchars($feedback) . "\n";

$fromaddress = "From: webserver@example.com";

// Invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

// Provide user feedback
echo "Thank you for your feedback.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</>
<br>

<p>Your feedback message is:</p>
<ul>
    <li>Your Name: <?php echo htmlspecialchars($name); ?></li>
    <li>Your Email: <?php echo htmlspecialchars($email); ?></li>
    <li>Your Feedback: <?php echo nl2br(htmlspecialchars($feedback)); ?></li>
</ul>
</body>
</html>
