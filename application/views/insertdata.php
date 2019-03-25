<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
</head>
<body>
<form method="post" action="<?php echo site_url('petugas/insertdata') ?>">
	<table>
		<tr>
			<td>Name</td>
			<td>:</td>
			<td><input type="text" name="namadata"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><textarea name="jkdata"></textarea></td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td>:</td>
			<td><textarea name="telpdata"></textarea></td>
		</tr><tr>
			<td>Status</td>
			<td>:</td>
			<td><textarea name="statusdata"></textarea></td>
		</tr><tr>
			<td>Username</td>
			<td>:</td>
			<td><textarea name="userdata"></textarea></td>
		</tr><tr>
			<td>Password</td>
			<td>:</td>
			<td><textarea name="passworddata"></textarea></td>
		</tr>
		<tr>
			<td><button type="reset">Reset</button></td>
			<td></td>
			<td><button type="submit">Add</button></td>
		</tr>
	</table>
	<a href="<?php echo site_url('petugas'); ?>">Back</a>
</form>
</body>
</html>