<html>
<center><br><br><br>
	<hr width="50%">
		<font face="Century Gothic" size="10">List of Approval! :></font><br>
		<hr width="50%"><br>
		<table border = "2">
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
			<td> <?php echo $getInfos['name'];?> </td>
			<td> <?php echo $getInfos['email'];?> </td>
			<td> <?php echo $getInfos['message'];?> </td>
			<td> <?php echo $getInfos['date_posted'];?> </td>
			<td> <?php echo $getInfos['is_approved'];?> </td>
		</tr>	
	<?php endforeach;?>
</table>
</html>
