<?php 
require 'functions.php';


// cek apakah tombol sumbit sudah ditekan apa belum
if (isset ($_POST["submit"])) {

	// cek apakah data berhasil di kirim atau enggak
	if (tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal ditambahkan!');
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
	<title>Tambah Data Dosen</title>
</head>
<body>
	<h3>Tambah Data Dosen</h3>
	<hr>
<form action="" method="post" enctype="multipart/form-data">
	<table border="0" width="100%">
		<tr>
			<td width="150">Nama</td>
			<td>: <input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td width="80">NIP</td>
			<td>: <input type="text" name="agama" required></td>
		</tr>
		<tr>
			<td width="120">Jabatan</td>
			<td>: <input type="text" name="jabatan" required></td>
		</tr>
		<tr>
			<td width="120">Pendidikan</td>
		<td>:
		<select name="pendidikan" >
				<option value="Pilihan" id="pendidikan">-Silahkan Pilih-</option>
				<option value="Sistem Informasi" id="pendidikan">Sistem Informasi</option>
				<option value="Teknik Informatika" id="pendidikan" >Teknik Informatika</option>
		</select>
	</table>
	<br>
			<td><a href="index.php" class="btn" style="text-decoration: none;">Kembali</a></td> |
			<td><button type="submit" name="submit">Simpan</button>
			</td>
</form>
</body>
</html>