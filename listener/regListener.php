<?php

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$confirm = $_POST['confirm'];
	$public = $_POST['public'];

	if(!preg_match("/^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})$/is", $email))
		$JSON->write("email", "Invalid email.");
	if(API::select("SELECT * FROM `users` WHERE `email` = '$email'") != FALSE)
		$JSON->write("email", "This email address is already busy.");

	if($public == NULL)
		$JSON->write("public", "How can we call you?");

	if(strlen($pass) < 8)
		$JSON->write("pass", "The length of password must be more then 8.");
	if(strlen($pass) > 32)
		$JSON->write("pass", "The length of password must be less then 32.");
	if (preg_match("/'\{\}\[\]\(\)\`\"/",$pass))
		$JSON->write("pass", "Some symbols are not allowed.");

	if($confirm != $pass)
		$JSON->write("confirm", "Repeat password correctly.");
	if($confirm == '')
		$JSON->write("confirm", "Repeat password.");

	if($JSON->ok()) {
		if($SQL->query("
			INSERT INTO `users` (`email`, `pass`, `public`)
			VALUES ('$email', '".API::hashPass($pass, $email)."', '$public')
		")) {
			$key = base64_encode(API::hashPass($pass));
			$subject = "[".URL."] registration.";
			$headers = 'From: '.URL. "\r\n";
			$message = "To activate yout account follow this link: ".URL."/listener/listenerController.php?listener=email&key=".$key;
			if(!mail($email, $subject, $message, $headers)) {
				$SQL->query("
					DELETE FROM `users`
					WHERE `email` = '$email';
				");
				$JSON->write("system", "System error, try later. (#1)");
			}
		} else {
			$JSON->write("system", "System error, try later. (#0)");
		}

		API::fatalError('regListener', $JSON->pop());
	}
?>
