<?php
// submitting the form
$myemail = "angeliqueclery02@gmail.com";

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Thank you for your form submission",$msg);
echo 'Thank you for your submission.  Please <a href="index.html">Click here to return to our homepage.';

?>
