<?php 
require 'functions.php';

$id_kelas = $_GET["id_kelas"];
$dta = query("SELECT * FROM kelas WHERE id_kelas = $id_kelas")[0];

if( isset($_POST["submit"]) ) {
	if( ubah($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Kelas</title>
</head>
<body>

	<h1>Edit Data Kelas</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_kelas" value="<?= $dta["id_kelas"]; ?>">
		<ul>
			<li>
				<label for="nama_kelas">NAMA KELAS :</label>
				<input type="text" name="nama_kelas" id="nama_kelas" required value="<?= $dta["nama_kelas"]; ?>">
			</li>
			<li>
				<label for="kompetensi_keahlian">KOMPETENSI KEAHLIAN :</label>
				<input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" required value="<?= $dta["kompetensi_keahlian"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>