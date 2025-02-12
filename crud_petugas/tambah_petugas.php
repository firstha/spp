<?php 
require 'functions.php';

if( isset($_POST["submit"]) ) {
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Petugas</title>
</head>
<body>
	<h1>Tambah Data Petugas</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="id_petugas">ID PETUGAS :</label>
				<input type="number" name="id_petugas" id="id_petugas" required>
			</li>
			<li>
				<label for="username">USERNAME :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">PASSWORD :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="nama_petugas">NAMA PETUGAS :</label>
				<input type="text" name="nama_petugas" id="nama_petugas">
			</li>
			<li>
				<label for="level">Level :</label>
				<select name="level" id="level">
    				<option value="admin">Admin</option>
    				<option value="petugas">Petugas</option>
				</select>

			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>