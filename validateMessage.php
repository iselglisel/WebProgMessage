
<?php
	require_once("config.php");		

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$approved = 'N';

	$message = array(
      'name' => $name,
      'email' => $email,
      'message' => $message,
      'is_approved' => $approved
      );

	$config = new Message($message);
	$_message = $config->getMessage();
	$_name = $config->getName();
	$_email = $config->getEmail();
	$_is_approved = $config->isApproved();

	$insert = new MessageDAO();
	$insert->create_message($_name, $_email, $_message, $_is_approved);
	header("location:view_all.php");
?>
