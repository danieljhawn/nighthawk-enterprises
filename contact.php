<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$email_from = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];




$email_subject = "New Form submission";

$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".


$to = "cooperdpearson@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email_from \r\n";

  mail($to,$email_subject,$email_body,$headers);


  ?>








// if (empty($name) || (empty($subject) || (empty($email) || (empty($phone) || (empty($message) {
//     echo "Please fill out all fields";
// }
// else 
// {
//     mail("cooperdpearson@gmail.com", "Portfolio message", $message, "From: $name <
//     $email>");
//     echo "<script type='text/javascript'>alert('your message sent successfully')</script>";
//     window.history.log(-1);
// }




