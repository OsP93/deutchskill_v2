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



// Send data to e-mail
if (
	mail(
		"pastuh93@gmail.com",
		// to
		"Hello. It`s a new message from DeutchSkill site",
		// subject
		"Hello" //message
	)
) {
	// code...
	echo ("Done!");
} else {
	echo ("Fail.");
}

?>