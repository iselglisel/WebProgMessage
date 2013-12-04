<?php
require_once("config.php");

$arr = array(
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'message' => $_POST['message']
	);

$get = new Message($arr);
$insert = new MessageDAO();

$_name = $get->getName();
$_email = $get->getEmail();
$_message = $get->getMessage();

$insert->createMessage($_name, $_email, $_message);
header("location:view_all.php");

?>
