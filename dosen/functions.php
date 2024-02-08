<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "mhsdosen_db");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$total = mysqli_num_rows($result);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	};
	return $rows;
};


function tambah($data) {
	global $conn;
     
    // htmlspecialchars berfungsi untuk tidak menjalankan script
	$nama = htmlspecialchars($data["nama"]);
	$agama = htmlspecialchars($data["agama"]);
	$nip = htmlspecialchars($data["nip"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$pendidikan = htmlspecialchars($data["pendidikan"]);

	$query = "INSERT INTO dosen
				VALUES
				('', '$nama', '$agama', '$nip', '$jabatan','$pendidikan')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM dosen WHERE id = $id");

	return mysqli_affected_rows($conn);
}



function ubah($data) {
	global $conn;
     
    // htmlspecialchars berfungsi untuk tidak menjalankan script
    $id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$agama = htmlspecialchars($data["agama"]);
	$nip = htmlspecialchars($data["nip"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$pendidikan = htmlspecialchars($data["pendidikan"]);


	$query = "UPDATE dosen SET 
				nama = '$nama',
				agama = '$agama',
				nip = '$nip',
				jabatan = '$jabatan',
				pendidikan = '$pendidikan'
			  WHERE id = $id
			";
			
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}


 ?>