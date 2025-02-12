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
	<title>Tambah Data Kelas</title>
</head>
<body>
	<h1>Tambah Data Kelas</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="id_kelas">ID KELAS :</label>
				<input type="number" name="id_kelas" id="id_kelas" required>
			</li>
			<li>
				<label for="nama_kelas">NAMA KELAS :</label>
				<input type="text" name="nama_kelas" id="nama_kelas">
			</li>
			<li>
				<label for="kompetensi_keahlian">KOMPETENSI KEAHLIAN :</label>
				<input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>