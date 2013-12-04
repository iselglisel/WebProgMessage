<?php

require_once("config.php");
include 'allApproved.php';
?>

<html>
<head>
	<title>Guestbook! </title>
</head><br><br><br>
<center>
<body>
	<hr width="50%">
	<font face="Century Gothic" size="10">Guestbook</font><br>
	<hr width="50%"><br><br>
	<form method="POST" action="insert.php">
		<font face="Century Gothic" size="4">
		Name : <input type="text" name="name" style="margin-left:30px"><br><br>
		Email : <input type="text" name="email" style="margin-left:34px"><br>
		<br>Message : <br><textarea name="message" cols="20" rows="10"></textarea><br><br>
		<br>
		<input type="Submit" name="save" value="POST MESSAGES">
		<a href="view_all.php"><input type="Submit" name="save" value="View Message List"></a>
	</font>
	</form>
</body>
</html>
