

<?php

include 'connect.php';

function getInfo(){
	$query = "SELECT * FROM tbmessages";
	$result = mysql_query($query);
	$get = array();
	if(mysql_num_rows($result) > 0){
		while($row = mysql_fetch_assoc($result)){
			$get[] = $row;
		}
	}
	return $get;
}
$get = getInfo();
?>
<body background="bg.jpg">
<center>
<font face = "Century Gothic" size="9"> Message List ! :> </font>
	<align="center">
	<table border = "1">

		<tr>
		<th><font face="Century Gothic">Name</th>
		<th><font face="Century Gothic">Email</th>
		<th><font face="Century Gothic">Messages</th>
		<th><font face="Century Gothic">Date Posted</th>
		<th><font face="Century Gothic">Is Approved</th>
		<th><font face="Century Gothic">Action</th>
		</tr>


	<?php foreach ($get as $getInfos): ?>
		
		<tr>
			<td> <?php echo $getInfos['name'];?> </td>
			<td> <?php echo $getInfos['email'];?> </td>
			<td> <?php echo $getInfos['message'];?> </td>
			<td> <?php echo $getInfos['date_posted'];?> </td>
			<td> <?php echo $getInfos['is_approved'];?> </td>
			
		<?php
			if($getInfos['is_approved'] == "N"){
		?>
		<td><a href="Approved.php?id=<?=$getInfos['id']?>">Approved</a><b></td>
		<?php
				}else{
		?>
		<td><a href="Reject.php?id=<?=$getInfos['id']?>">Reject</a><b></td>
		<?php
				}
		?>
		<form action = "deleteMessage.php?id=<?=$getInfos['id']?>" method = 'POST'>
			<td><input type = 'submit' name ='delete' value = 'Delete' ></form></td>
 		</tr>
	<?php endforeach;?>

	</table>
</center>
</body>
</html>
