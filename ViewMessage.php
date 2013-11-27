<?php

include 'connect.php';
include 'view.php';


		@$name = $_POST['name'];
		@$email= $_POST['email'];
		@$message = $_POST['messages'];
		@$approved = 'n';

	$query = "INSERT INTO tbmessages (name,email,message,date_posted,is_approved) 
	VALUES ('$name','$email', '$message',CURRENT_DATE(),'$approved')";
		mysql_query($query);

?>
