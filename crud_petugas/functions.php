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

	$id_petugas = htmlspecialchars($data["id_petugas"]);
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$nama_petugas = htmlspecialchars($data["nama_petugas"]);
	$level = htmlspecialchars($data["level"]);

	$query = "INSERT INTO petugas
				VALUES
				('$id_petugas', '$username', '$password', '$nama_petugas', '$level')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id_petugas) {
	global $conn;
	mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas = $id_petugas");

	return mysqli_affected_rows($conn);
}


function ubah($data) {
		global $conn;

	$id_petugas = $data["id_petugas"];
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$nama_petugas = htmlspecialchars($data["nama_petugas"]);
	$level = htmlspecialchars($data["level"]);
	$query = "UPDATE petugas SET 
				username = '$username',
				password = '$password',
				nama_petugas = '$nama_petugas',
				level = '$level'
				WHERE id_petugas = $id_petugas ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

 ?>