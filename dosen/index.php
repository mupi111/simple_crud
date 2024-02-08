<?php  
require 'functions.php';

$dosen = query("SELECT * FROM dosen");
?>

<!DOCTYPE html>
<html>
<style type="text/css">
 body {
  margin:5px;
  font-family: verdana;
  font-size: 12px;
 }
 a { text-decoration: none; color: blue; }
 a:hover { text-decoration: underline; color: green; }
 </style>
<head>
<title>Aplikasi mahasiswa dengan PHP dan MySQL</title>
</head>
	<h1 align="center">Aplikasi Data Mahasiswa dan Dosen</h1>
	<hr>
	<a href="../index.php?p=mahasiswa">Mahasiswa </a> |
	<a href="index.php"> Dosen</a>
	<hr>
	<h2>Daftar Data Dosen</h2>
	<hr>
	<button><a href="tambah.php">Tambah Data</a> <span></button><hr>
	<table width="100%" cellpadding="4" cellspacing="1" bgcolor="#ccc">
		<tr>
		<th bgcolor="#eee" width="30">No</th>
		<th bgcolor="#eee">Nama Lengkap</th>
		<th bgcolor="#eee" width="140">Agama</th>
		<th bgcolor="#eee" width="130">NIP</th>
		<th bgcolor="#eee" width="170">Jabatan</th>
		<th bgcolor="#eee" width="180">Pendidikan</th>
		<th bgcolor="#eee" width="70">Edit</th>
		<th bgcolor="#eee" width="70">Hapus</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach( $dosen as $ds ) : ?>
	    <tr>
	    	<td bgcolor='#fff'><?= $i; ?></td>
	    	<td bgcolor='#fff'><?= $ds["nama"]; ?></td>
	    	<td bgcolor='#fff'><?= $ds["agama"]; ?></td>
	    	<td bgcolor='#fff'><?= $ds["nip"]; ?></td>
	    	<td bgcolor='#fff'><?= $ds["jabatan"]; ?></td>
	    	<td bgcolor='#fff'><?= $ds["pendidikan"]; ?></td>
	    	<td bgcolor='#fff'><a href="ubah.php?id=<?= $ds["id"]; ?>">Edit</a></td>
	    	<td bgcolor='#fff'><a href="hapus.php?id=<?= $ds["id"]; ?>" onclick="return confirm('yakin menghapus?');">Hapus</a></td>
	    	
	    </tr>
	    <?php $i++; ?>
	    <?php endforeach; ?>
	</table>
	<hr>
	<div align="center">
	&copy; 2022 - Hesti Aulia Pratiwi</a>
</div>
</body>
</html>