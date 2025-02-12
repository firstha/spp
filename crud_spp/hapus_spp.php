<?php
require 'functions.php';

$id_spp = $_GET["id_spp"];
if( hapus($id_spp) > 0 ) {
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