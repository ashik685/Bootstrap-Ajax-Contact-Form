<?php
/**
 * Developer: Syed Ashik Mahmud
 * Email : ashik685@gmail.com
 * Website : http://aaextensions.com
 * Date: 30-Apr-17
 */


// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "ashik685@gmail.com"; // Enter your personal contact here


$name = trim(htmlspecialchars($_POST['name']));
$email = trim(htmlspecialchars($_POST['email']));
$subject = trim(htmlspecialchars($_POST['subject']));
$message = trim(htmlspecialchars($_POST['message']));

$email_subject =  $subject;
$email_from = $email;



$email_message = "Form details below.\n\n";
$email_message .= "Client Name: ".$name."\n";
$email_message .= "Client Email: ".$email."\n";
$email_message .= "Subject: ".$subject."\n";
$email_message .= "Client Message: ".$message."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo '<div class="alert alert-success">Thank you for contacting us. We will be in touch with you very soon.</div>';


?>
