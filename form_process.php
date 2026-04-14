<?php
	$currentPage = "Contact Form";
	include "assets/inc/head.php";

    include('../../../dbConn.php');

	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phoneNumber = $_POST['phoneNumber'];
		$reason = $_POST['reason'];
		$message = $_POST['message'];

		$statement = $mysqli->prepare("INSERT INTO contactMessages (`fname`, `lname`, `email`, `phoneNumber`, `reason`, `message`, `date`) VALUES (?, ?, ?, ?, ?, ?,  now())");
		$statement->bind_param("sssssss", $fname, $lname, $email, $phoneNumber, $reason, $message);
		$statement->execute();
		$statement->close();
	}
?>

<body>
	<?php
    $currentPage = "Contact Form";
    include "assets/inc/nav.php";
    ?>

	<h1>Thanks For Reaching Out!</h1>
	<p>Your message was received. We'll reply within 24 hours.</p>
	<!-- maybe back to home? -->
</body>
</html>

<?php
    include "assets/inc/footer.php";
	$mysqli->close();
?>
