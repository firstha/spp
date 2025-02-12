<?php
require 'functions.php';

$id_kelas = $_GET["id_kelas"];
if( hapus($id_kelas) > 0 ) {
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