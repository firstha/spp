<?php
require 'functions.php';

$nisn = $_GET["nisn"];
if( hapus($nisn) > 0 ) {
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