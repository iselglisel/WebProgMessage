<?php

	$reject = $_GET['id'];
	mysql_connect ('localhost','root');
	mysql_select_db("messageme");

	$query = "UPDATE tbmessages SET is_approved='n' WHERE id='$reject'";
	$result = mysql_query($query);
	header('location:view.php');

?>
