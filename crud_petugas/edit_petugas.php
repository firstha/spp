<?php 
require 'functions.php';

$id_petugas = $_GET["id_petugas"];
$dta = query("SELECT * FROM petugas WHERE id_petugas = $id_petugas")[0];

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
	<title>Ubah Data petugas</title>
</head>
<body>

	<h1>Ubah Data petugas</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_petugas" value="<?= $dta["id_petugas"]; ?>">
		<ul>
			<li>
				<label for="username">USERNAME :</label>
				<input type="text" name="username" id="username" required value="<?= $dta["username"]; ?>">
			</li>
			<li>
				<label for="password">PASSWORD :</label>
				<input type="password" name="password" id="password" value="<?= $dta["password"]; ?>">
			</li>
			<li>
				<label for="nama_petugas">NAMA PETUGAS :</label>
				<input type="text" name="nama_petugas" id="nama_petugas" value="<?= $dta["nama_petugas"]; ?>">
			</li>
			<li>
				<label for="level">level :</label>
				<select name="level" id="level">
				    <option value="admin" <?= ($dta['level'] == 'admin') ? 'selected' : '' ?>>Admin</option>
				    <option value="petugas" <?= ($dta['level'] == 'petugas') ? 'selected' : '' ?>>Petugas</option>
				</select>
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>