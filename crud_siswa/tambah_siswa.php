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
	<title>Tambah Data Siswa</title>
</head>
<body>
	<h1>Tambah Data Siswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nisn">NISN :</label>
				<input type="number" name="nisn" id="nisn" required>
			</li>
			<li>
				<label for="nis">NIS :</label>
				<input type="number" name="nis" id="nis">
			</li>
			<li>
				<label for="nama">NAMA :</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="id_kelas">ID KELAS :</label>
				<input type="number" name="id_kelas" id="id_kelas">
			</li>
			<li>
				<label for="alamat">ALAMAT :</label>
				<textarea name="alamat" id="alamat"></textarea>
			</li>
			<li>
				<label for="no_telp">NO TELP :</label>
				<input type="number" name="no_telp" id="no_telp">
			</li>
			<li>
				<label for="id_spp">ID SPP :</label>
				<input type="number" name="id_spp" id="id_spp">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>