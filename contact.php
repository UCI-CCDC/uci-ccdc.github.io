<?php

// define variables and set to empty values
$name = $email = $subject = $message = $headers = "";
// $message = "Im not empty!!!";

echo "<title />Contact Cyber @ UCI</title />";

function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
}



// validation expected data exists
if(!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['message'])) {
    died('We are sorry, but there appears to be a problem with the form you submitted.');
}



    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

  $error_message = "";
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

  //set up email content
  $to = "ucicyber@gmail.com";
  $subject = "[WEBSITE] Message from  $name ($email)";
  $headers = "Reply-to: $email";
  $message = "Message from  $name ($email) \r\n";
  $message .= "UTC Timestamp: ". gmdate("M d Y H:i:s", time());
  $message .= "\r\n\r\n";
  $message .= "MESSAGE BELOW\r\n";
  $message .= "=============================";
  $message .= "\r\n\r\n";
  $message .= $_POST["message"];

  $sent = mail($to, $subject, $message, $headers);

if ($sent) {
  syslog(LOG_INFO, "Contact form received from " . $_POST["email"]);
  echo 'Message Sent! We\'ll be getting back to you shortly...<br><br>';
  echo "Timestamp: ". gmdate("M d Y H:i:s", time());
}
else{
    syslog(LOG_WARNING, "Error processing contact form from " . $_POST["email"]);
    echo 'Message NOT sent :(. If this problem recurrs, contact a board member directly';
}

?>
