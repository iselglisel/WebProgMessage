<?php

include 'connect.php';


		$name = $_POST['name'];
		$email= $_POST['email'];
		$message = $_POST['messages'];
		$approved = 'n';

	$query = "INSERT INTO tbmessages (id, name, email, message, date, is_approved) VALUES ('$name','$email', '$message', (CURRENT_DATE()), '$approved')";
		mysql_query($query);
	
?>
