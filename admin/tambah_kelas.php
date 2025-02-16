<?php 
require 'functions_kelas.php';
require 'layouts/header.php';

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
	<div class="container">
	<h1>Tambah Data Kelas</h1>
	<form action="" method="post" enctype="multipart/form-data">
				<label for="id_kelas">ID KELAS :</label>
				<input type="number" name="id_kelas" id="id_kelas" required>
				<label for="nama_kelas">NAMA KELAS :</label>
				<input type="text" name="nama_kelas" id="nama_kelas">
				<label for="kompetensi_keahlian">KOMPETENSI KEAHLIAN :</label>
				<input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian">
				<button type="submit" name="submit">Tambah Data!</button>
	</form>
</div>

</body>
</html>