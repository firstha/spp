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

	$id_kelas = htmlspecialchars($data["id_kelas"]);
	$nama_kelas = htmlspecialchars($data["nama_kelas"]);
	$kompetensi_keahlian = htmlspecialchars($data["kompetensi_keahlian"]);
	$query = "INSERT INTO kelas
				VALUES
				('$id_kelas', '$nama_kelas', '$kompetensi_keahlian')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id_kelas) {
	global $conn;
	mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas = $id_kelas");

	return mysqli_affected_rows($conn);
}


function ubah($data) {
		global $conn;

	$id_kelas = $data["id_kelas"];
	$nama_kelas = htmlspecialchars($data["nama_kelas"]);
	$kompetensi_keahlian = htmlspecialchars($data["kompetensi_keahlian"]);
	$query = "UPDATE kelas SET 
				nama_kelas = '$nama_kelas',
				kompetensi_keahlian = '$kompetensi_keahlian'
				WHERE id_kelas = $id_kelas ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

 ?>