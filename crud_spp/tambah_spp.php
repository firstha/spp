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
	<title>Tambah Data SPP</title>
</head>
<body>
	<h1>Tambah Data SPP</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="id_spp">ID SPP :</label>
				<input type="number" name="id_spp" id="id_spp" required>
			</li>
			<li>
				<label for="tahun">TAHUN :</label>
				<input type="number" name="tahun" id="tahun">
			</li>
			<li>
				<label for="nominal">NOMINAL :</label>
				<input type="number" name="nominal" id="nominal">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>