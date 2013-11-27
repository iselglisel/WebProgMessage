
<html>
<head>
	<title>Post Messages</title>
</head>
<body background="bg.jpg">

	<center>
		<font face="Century Gothic" size="10">List of Approval! :></font><br><br>
		<table border = "1">

		<tr>
		<th><font face="Century Gothic">Name</th>
		<th><font face="Century Gothic">Email</th>
		<th><font face="Century Gothic">Messages</th>
		<th><font face="Century Gothic">Date Posted</th>
		<th><font face="Century Gothic">Is Approved</th>
		</tr>
	</center>

	
<?php
mysql_connect('localhost','root') && mysql_select_db('messageme');
		$query =  "SELECT * FROM tbmessages where is_approved ='Y' ";
		$result = mysql_query($query);
		$get = array();
		if(mysql_num_rows($result) >0){
			while($row = mysql_fetch_assoc($result)){
					$get[] = $row;
			}
}
?>
	<?php foreach ($get as $getInfos): ?>
		
		<tr>
			<td><?php echo $getInfos['name'];?> </td>
			<td> <?php echo $getInfos['email'];?> </td>
			<td> <?php echo $getInfos['message'];?> </td>
			<td> <?php echo $getInfos['date_posted'];?> </td>
			<td> <?php echo $getInfos['is_approved'];?> </td>
			
	<?php endforeach;?>
	

</table>
<center>
	<br><br><br>
	<font face="Century Gothic" size="9">POST MESSAGES</font>
	<br><br>
	<form method="POST" action="ViewMessages.php">
			<font face="Century Gothic" size="4">
			Name : <input type="text" name="name" style='margin-left:12px'><br><br>
			Email : <input type="text"  name="email" style='margin-left:20px'><br><br>
			Message : <br><br><textarea cols="30" rows="5" name="messages" name="messages"></textarea><br><br>
			<input type="submit" value="POST MESSAGES">	
			<input type="submit" value="VIEW MESSAGE LIST"><a href="view.php"></a>
	</font>
	</center>

	</form>
</body>

</html>
