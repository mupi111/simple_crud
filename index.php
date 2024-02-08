<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi mahasiswa dengan PHP dan MySQL</title>
 <style type="text/css">
 body {
  margin:5px;
  font-family: verdana;
  font-size: 12px;
 }
 a { text-decoration: none; color: blue; }
 a:hover { text-decoration: underline; color: green; }
 </style>
</head>
<body>
<h1 align="center">Aplikasi Data Mahasiswa dan Dosen</h1>
<hr>
<!-- <a href="index.php">Beranda</a>  -->
<a href="index.php?p=mahasiswa">Mahasiswa </a> |
<a href="dosen/index.php"> Dosen</a>
<hr>
<?php
$p = isset($_GET['p'])?$_GET['p']:'';

if($p == "mahasiswa") { include "mahasiswa.php"; }
else { include "mahasiswa.php"; }
?>
<hr>
<div align="center">
&copy; 2022 - Hesti Aulia Pratiwi</a>
</div>
</body>
</html>