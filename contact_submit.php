<?php
// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","mail.example.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'admin@relaxfuzz.com');

//define variables and set to empty values
$username_error = $message_error = $email_error = "";
$username = $email = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = test_input($_POST["username"]);
	//check if name only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z]*$/",$username)) {
		$username_error = "Only letters and spaces allowed";
	}
	else if(empty($username)) {
		$username_error = "Username Empty";
	}
	
	if (empty($_POST["email"])) {
		$email_error = "Email is required";
	}
	else {
		$email = test_input($_POST["email"]);
		//check if name only contains letters and whitespace
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "Invalid email format";	
		}
	}
	if (empty($_POST["message"])) {
		$message_error = "Message is required";
	} 
	else {
		$message = test_input($_POST["message"]);
	}
	
	
	if ($username_error == '' and $email_error == '' and $message_error == '') {
		$message_body = '';
		unset($_POST['submit']);
		foreach ($_POST as $key => $value) {
			$message_body .= "$key: $value\n";
		}
		
		$to = 'admin@relaxfuzz.com';
		$subject = 'RelaxFuzz Contact Form - ' . $email;
		if (mail($to, $subject, $message_body)) {
			$success = "Message sent. We will endeavour to get back to you as soon as possible.";
			$username = $email = $message = '';
			header("location: index.php?page=contact");
		}
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>