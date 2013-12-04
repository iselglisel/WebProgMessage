<?php 
	require_once("config.php");
	$get = new MessageDAO();
	$views = $get->getAllMessages();
?>
<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
<center><br><br><br>
<font face = "Century Gothic" size="9"> Message List ! :> </font><br><br><br>
	<align="center">
	<table border = "1">
			<tr>
				<td>No.</td>
				<td>Name</td>
				<td>Email</td>
				<td>Message</td>
				<td>Date Posted</td>
				<td>Approved</td>
				<td>Actions</td>
			</tr>
			<?php foreach ($views as $view):?>
			<tr>
				<td><?php echo $view['id'];?></td>
				<td><?php echo $view['name'];?></td>
				<td><?php echo $view['email'];?></td>
				<td><?php echo $view['message'];?></td>
				<td><?php echo $view['date_posted'];?></td>
				<td><?php echo $view['is_approved'];?></td>
					<form action = "is_approved.php?id=<?php echo $view['id'];?>" method = 'POST'>
			<?php
				if($view['is_approved'] == 'Y'){
					echo "<td><input type = 'submit' name = 'approved' value='Reject'></td>";
				}else{
					echo "<td><input type = 'submit' name = 'reject' value='Approve'></td>";
				}
			?>
					</form>
					<form action = "is_delete.php?id=<?php echo $view['id'];?>" method = 'POST'>
					<td>
						<input type = 'submit' name ='delete2' value = "DELETE" class =>
						</form>
					</td>
			<?php endforeach;?>
		</table>
		<br><br>
		<a href="index.php"><button class = "btn btn-info">View Approved Message</button></a></center>
