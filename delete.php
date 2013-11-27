<?php

	$delete_id = $_GET['id'];
	mysql_connect ('localhost','root');
	mysql_select_db("messageme");

	$query = "DELETE FROM tbmessages WHERE id ='$delete_id'";
	$result = mysql_query($query);
	header('location:view.php');

?>
