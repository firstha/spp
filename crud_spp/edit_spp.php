<?php 
require 'functions.php';

$id_spp = $_GET["id_spp"];
$dta = query("SELECT * FROM spp WHERE id_spp = $id_spp")[0];

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
	<title>Ubah Data spp</title>
</head>
<body>

	<h1>Ubah Data spp</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_spp" value="<?= $dta["id_spp"]; ?>">
		<ul>
			<li>
				<label for="tahun">tahun :</label>
				<input type="number" name="tahun" id="tahun" required value="<?= $dta["tahun"]; ?>">
			</li>
			<li>
				<label for="nominal">nominal :</label>
				<input type="number" name="nominal" id="nominal" value="<?= $dta["nominal"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>