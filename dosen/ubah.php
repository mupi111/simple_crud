<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data buku berdasarkan id
$dosen = query("SELECT * FROM dosen WHERE id = $id")[0];


// cek apakah tombol sumbit sudah ditekan apa belum
if (isset ($_POST["submit"])) {
	

	

	// cek apakah data berhasil di ubah atau enggak
	if (ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}
}



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Ubah Data</title>
</head>
<body>
	<h3>Edit Data Dosen</h3><hr>
	<form action="" method="post" enctype="multipart/form-data">
	<table border="0" width="50%">
		<input type="hidden" name="id" value="<?= $dosen["id"];  ?>">
		<tr>
			<td><label for="nama" width="150">Nama</label></td>
			<td>: <input type="text" name="nama" id="nama" value="<?= $dosen["nama"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="agama" width="100">Agama</label></td>
			<td>: <input type="text" name="agama" id="agama" value="<?= $dosen["agama"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="nip" width="90">NIP</label></td>
			<td>: <input type="number" name="nip" id="nip" value="<?= $dosen["nip"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="jabatan" width="150">Jabatan</label></td>
			<td>: <input type="text" name="jabatan" id="jabatan" value="<?= $dosen["jabatan"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="pendidikan" width="150">Pendidikan</label></td>
			<td>:
				<!-- <input type="text" name="pendidikan" id="pendidikan" required> -->
				<select name="pendidikan" >
					<option value="Sistem Informasi" id="pendidikan">Sistem Informasi</option>
					<option value="Teknik Informatika" id="pendidikan" >Teknik Informatika</option>
				</select>
		</tr>	
		</table>
		<br>
			<td><a href="index.php" class="btn" style="text-decoration: none;">Kembali</a></td> |
			<td><button type="submit" name="submit">Simpan</button>
			</td>
	</form>
</body>
</html>