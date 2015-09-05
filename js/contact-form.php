<?php
if(isset($_POST["submit"])){
	$name = $_POST['name'];

	$email = $_POST['email'];

	$phone = $_POST['message'];

	$message = $_POST['message'];

	$from = "Demo Contact Form";

	$to = "mikecarella@niagaratournaments.com";

	$subject = "Message from contact demo";

	$body = "From: $name\n Email: $email\n Message: \n $message";

}
// check if name has been entered
if (!$_POST['name']){
	$errName = "Please enter your name";
}
// check if email has been entered
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}
// Check if number has been entered 
if (!$_POST['phone']){
	$errPhone = "Please enter numbers";
}
// Check if message has been entered
if (!$_POST['message']){
	$errMessage = "Please enter a message.  It cannot be empty";
}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    	}
	}
}
