<?php
// get data from from forms
$name = $_POST['name'];
$mail = $_POST['mail'];
$tel = $_POST['phone'];
$message = $_POST['message'];

// transformation HTML symbols
$name = htmlspecialchars($name);
$mail = htmlspecialchars($mail);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);

// decode URL
$name = urldecode($name);
$mail = urldecode($mail);
$tel = urldecode($tel);
$message = urldecode($message);

// delete spaces before and after strings
$name = trim($name);
$mail = trim($mail);
$tel = trim($tel);
$message = trim($message);

// mail adress and subject
$to = "pastuh93@gmail.com";
$subject = "Hello. It`s a new message from DeutchSkill site";

// mail body
$messageBody = "Name: $name\n";
$messageBody .= "Email: $mail\n";
$messageBody .= "Phone: $phone\n";
$messageBody .= "Message:\n$message";



// Send data to e-mail
if (mail($to, $subject, $messageBody)) {
	// sucssesful code
	echo "Message sent successfully!";
} else {
	// error code
	echo "An error occurred while sending the message.";
}

?>