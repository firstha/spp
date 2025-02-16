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

	$id_spp = htmlspecialchars($data["id_spp"]);
	$tahun = htmlspecialchars($data["tahun"]);
	$nominal = htmlspecialchars($data["nominal"]);

	$query = "INSERT INTO spp
				VALUES
				('$id_spp', '$tahun', '$nominal')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id_spp) {
	global $conn;
	mysqli_query($conn, "DELETE FROM spp WHERE id_spp = $id_spp");

	return mysqli_affected_rows($conn);
}


function ubah($data) {
		global $conn;

	$id_spp = $data["id_spp"];
	$tahun = htmlspecialchars($data["tahun"]);
	$nominal = htmlspecialchars($data["nominal"]);
	$query = "UPDATE spp SET 
				tahun = '$tahun',
				nominal = '$nominal'
				WHERE id_spp = $id_spp ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

 ?>