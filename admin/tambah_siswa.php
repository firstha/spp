<?php 
require 'functions_siswa.php';
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
	<h1>Tambah Data Siswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
				<label for="nisn">NISN :</label>
				<input type="number" name="nisn" id="nisn" required>
				<label for="nis">NIS :</label>
				<input type="number" name="nis" id="nis">
				<label for="nama">NAMA :</label>
				<input type="text" name="nama" id="nama">
				<label for="id_kelas">ID KELAS :</label>
				<input type="number" name="id_kelas" id="id_kelas">
				<label for="alamat">ALAMAT :</label>
				<textarea name="alamat" id="alamat"></textarea>
				<label for="no_telp">NO TELP :</label>
				<input type="number" name="no_telp" id="no_telp">
				<label for="id_spp">ID SPP :</label>
				<input type="number" name="id_spp" id="id_spp">
				<button type="submit" name="submit">Tambah Data!</button>
	</form>
</div>

</body>
</html>