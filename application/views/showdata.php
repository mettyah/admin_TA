<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<script src="<?php echo base_url(); ?>assets/jquery-2.2.3.min.js"></script>
<body>
<a href="<?php echo site_url('petugas/showinsert') ?>">Add Data</a>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>No Telp</td>
			<td>Status</td>
			<td>Username</td>
			<td>Passsword</td>
		</tr>
		<?php
		$n=1;
			foreach ($show->result() as $i) {
		 ?>
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $i->NAMA_ADMIN; ?></td>
			<td><?php echo $i->JENIS_KELAMIN ?></td>
			<td><?php echo $i->NO_TELP ?></td>
			<td><?php echo $i->STATUS ?></td>
			<td><?php echo $i->USERNAME_ADMIN ?></td>
			<td><?php echo $i->PASSWORD_ADMIN ?></td>
			<td>
				<!-- <?php echo $i->no?> -->
				<a href="#" onclick="updatedata('<?php echo $i->ID_ADMIN; ?>','<?php echo $i->NAMA_ADMIN; ?>','<?php echo $i->JENIS_KELAMIN; ?>','<?php echo $i->NO_TELP; ?>','<?php echo $i->STATUS; ?>','<?php echo $i->USERNAME_ADMIN; ?>','<?php echo $i->PASSWORD_ADMIN; ?>')">Update</a>
				<a href="#" onclick="deleted('<?php echo $i->ID_ADMIN; ?>')">Delete</a>
			</td>
		</tr>
		<?php $n++; } ?>
	</table>
<br>
<form method="post" id="updateform">
<table>
	<tr>
		<td>Id</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
			<td>No Telp</td>
			<td>Status</td>
			<td>Username</td>
			<td>Passsword</td>
	</tr>
	<tr>
		<td><input type="text" name="id" id="id" readonly></td>
		<td><input type="text" name="nama" id="nama"></td>
		<td><input type="text" name="jeniskelamin" id="jeniskelamin"></td>
		<td><input type="text" name="notelp" id="notelp"></td>
		<td><input type="text" name="status" id="status"></td>
		<td><input type="text" name="username" id="username"></td>
		<td><input type="text" name="password" id="password"></td>
	</tr>
</table>
<button type="submit">Save</button>
</form>
<script type="text/javascript">
	function updatedata(data1,data2,data3,data4,data5,data6,data7){
		$("#id").val(data1);
		$("#nama").val(data2);
		$("#jeniskelamin").val(data3);
		$("#notelp").val(data4);
		$("#status").val(data5);
		$("#username").val(data6);
		$("#password").val(data7);
		$("#updateform").attr("action","<?php echo site_url('petugas/updatedata') ?>");
	}
	function deleted(param){
		var proc = window.confirm('Are you sure delete this data?');
		if(proc){
			document.location='<?php echo base_url(); ?>index.php/petugas/deletedata/'+param;
		}
	}
</script>
</body>
</html>