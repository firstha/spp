<?php
require 'functions_petugas.php';

$id_petugas = $_GET["id_petugas"];
if( hapus($id_petugas) > 0 ) {
	echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = 'index.php';
		</script>";
} else {
	echo "<script>
			alert('data gagal dihapus');
			document.location.href = 'index.php';
			</script>";
}
?>