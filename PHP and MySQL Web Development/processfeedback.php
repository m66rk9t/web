<?php
#create the variables of basic information
$name = $_POST["name"];
$email = $_POST["email"];
$feedback = $_POST["feedback"];
#set up some static information
$toaddress = "localhost";
$subject = "Feedback from web site";
$mailcontent = "Customer name: " . filter_var($name) . "\n" .
               "Customer email: " . $email . "\n" .
               "Customer comments:\n" . $feedback . "\n";
$fromaddress = "From: Webserver@example.com";
#invoke function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bob's Auto Parts - Feedback Submitted</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Feedback submitted</h1>
    <p>Your feedback (shown below) has been sent.</p>
    <p><?php echo nl2br(htmlspecialchars($feedback))?></p>
</body>

</html>