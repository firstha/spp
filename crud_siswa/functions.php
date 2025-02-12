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

	$nisn = htmlspecialchars($data["nisn"]);
	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$id_kelas = htmlspecialchars($data["id_kelas"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);
	$id_spp = htmlspecialchars($data["id_spp"]);

	$query = "INSERT INTO siswa
				VALUES
				('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($nisn) {
	global $conn;
	mysqli_query($conn, "DELETE FROM siswa WHERE nisn = $nisn");

	return mysqli_affected_rows($conn);
}


function ubah($data) {
		global $conn;

	$nisn = $data["nisn"];
	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$id_kelas = htmlspecialchars($data["id_kelas"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);	
	$id_spp = htmlspecialchars($data["id_spp"]);	

	$query = "UPDATE siswa SET 
				nis = '$nis',
				nama = '$nama',
				id_kelas = '$id_kelas',
				alamat = '$alamat',
				no_telp = '$no_telp',
				id_spp = '$id_spp'
				WHERE nisn = $nisn ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

 ?>