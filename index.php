<?php
 
// ==== Control Vars =======
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<Response>TestMSG</Response>'; //Place the desired response (if any) here

$to = "ccordova@koresystems.net"; // Your email address
$subject = "Message from {$_REQUEST['From']} at {$_REQUEST['To']}";
$message = "You have received a message from {$_REQUEST['From']}.
Body: {$_REQUEST['Body']}";
$headers = "From: reports@koresystems.net"; // Who should it come from?
	 
mail($to, $subject, $message, $headers);
