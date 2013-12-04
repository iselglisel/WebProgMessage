<?php

	require_once("config.php");
	$get = new MessageDAO();
	$id = $_GET['id'];

	$is_approved = $get->view_info($id);
	if($is_approved['is_approved'] == 'N'){
		$get->approveMessage($id);
		 header("location:view_all.php");
	}else{
		$get->rejectMessage($id);
		 header("location:view_all.php");
	}
?>
