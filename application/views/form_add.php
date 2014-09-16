<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Input Data</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>">
		<table>
			<tr>
				<td>No. Induk</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan" ></td>
			</tr>
		</table>
	</form>
</body>
</html>