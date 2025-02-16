<?php 
$conn = mysqli_connect("localhost", "root", "", "db_spp");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[]= $row;
	}
	return $rows;;
}


function tambah($data) {
	global $conn;

	$id_pembayaran = htmlspecialchars($data["id_pembayaran"]);
	$id_petugas = htmlspecialchars($data["id_petugas"]);
	$nisn = htmlspecialchars($data["nisn"]);
	$tgl_bayar = htmlspecialchars($data["tgl_bayar"]);
	$bulan_dibayar = htmlspecialchars($data["bulan_dibayar"]);
	$tahun_dibayar = htmlspecialchars($data["tahun_dibayar"]);
	$id_spp = htmlspecialchars($data["id_spp"]);
	$jumlah_bayar = htmlspecialchars($data["jumlah_bayar"]);

	$query = "INSERT INTO pembayaran
				VALUES
				('$id_pembayaran', '$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id_pembayaran) {
	global $conn;
	mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran = $id_pembayaran");

	return mysqli_affected_rows($conn);
}


function ubah($data) {
		global $conn;

	$id_pembayaran = $data["id_pembayaran"];
	$id_petugas = htmlspecialchars($data["id_petugas"]);
	$nisn = htmlspecialchars($data["nisn"]);
	$tgl_bayar = htmlspecialchars($data["tgl_bayar"]);
	$bulan_dibayar = htmlspecialchars($data["bulan_dibayar"]);
	$tahun_dibayar = htmlspecialchars($data["tahun_dibayar"]);	
	$id_spp = htmlspecialchars($data["id_spp"]);	
	$jumlah_bayar = htmlspecialchars($data["jumlah_bayar"]);	

	$query = "UPDATE pembayaran SET 
				id_petugas = '$id_petugas',
				nisn = '$nisn',
				tgl_bayar = '$tgl_bayar',
				bulan_dibayar = '$bulan_dibayar',
				tahun_dibayar = '$tahun_dibayar',
				id_spp = '$id_spp',
				jumlah_bayar = '$jumlah_bayar'
				WHERE id_pembayaran = $id_pembayaran ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

 ?>