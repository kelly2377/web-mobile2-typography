<?php
    include('../../../dbConn.php');

	$firstNameErr = "";
	$lastNameErr = "";
	$emailErr = "";
	$phoneNumberErr = "";
	$messageErr = "";
	$reasonErr = "";
	$success = false;

	$firstName = $lastName = $email = $phoneNumber = $message = $contactReason = "";

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	if (isset($_POST['submit'])) {
		if (empty($_POST['firstName'])){
			$firstNameErr = "First name is required!";
		} else{
			$firstName = test_input($_POST['firstName']);

			if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
				$firstNameErr = "Only letters and white space allowed";
			}
		}

		if (empty($_POST['lastName'])){
			$lastNameErr = "Last name is required!";
		} else{
			$lastName = test_input($_POST['lastName']);

			if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
				$lastNameErr = "Only letters and white space allowed";
			}
		}

		if (empty($_POST['contactReason'])){
			$reasonErr = "Reason is required!";
		} else{
			$contactReason = test_input($_POST['contactReason']);
		}

		if (empty($_POST['email'])){
			$emailErr = "Email is required!";
		}else{
			$email = test_input(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));

			if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
				$emailErr = "Invalid email!";
			}
		}

		if (!empty($_POST['phoneNumber'])) {
			$phoneNumber = test_input($_POST['phoneNumber']);

			if (!preg_match("/^(\([0-9]{3}\)|[0-9]{3})[ -]?[0-9]{3}[ -]?[0-9]{4}$/", $phoneNumber)) {
				$phoneNumberErr = "Invalid phone number format!";
			}
			if (strlen($phoneNumber) < 10) {
				$phoneNumberErr = "Please provide a phone number of 10 digits!";
			}
		}

		if (empty($_POST['message'])){
			$messageErr = "Message is required!";
		} else{
			$message = test_input($_POST['message']);
		}

		if ($firstNameErr == "" && $lastNameErr == "" && $emailErr == "" && $phoneNumberErr == "" && $messageErr == ""){
			$statement = $mysqli->prepare("INSERT INTO contactMessages (`firstName`, `lastName`, `email`, `phoneNumber`, `contactReason`, `message`, `date`) VALUES (?, ?, ?, ?, ?, ?,  now())");
			$statement->bind_param("ssssss", $firstName, $lastName, $email, $phoneNumber, $contactReason, $message);
			$statement->execute();
			$statement->close();
			$success = true;
		}
	}

	$mysqli->close();
?>
