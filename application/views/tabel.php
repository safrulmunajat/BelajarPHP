<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Mahasiswa</title>
</head>
<body>
	<table border="1" style="border-collapse:collapse; width:50%">
		<tr style="background:yellow; height:30px">
			<th>No. Induk</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php foreach ($data as $d) { ?>
		<tr>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td align="center">
				<a href="">Edit</a> ||
				<a href="">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<a href="<?php echo base_url()."index.php/crud/add_data"; ?>">Tambah Data</a>
</body>
</html>