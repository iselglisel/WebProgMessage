<?php

	$approved = $_GET['id'];
	mysql_connect ('localhost','root');
	mysql_select_db("messageme");

	$query = "UPDATE tbmessages SET is_approved='y' WHERE id='$approved'";
	$result = mysql_query($query);
	header('location:view.php');

?>
