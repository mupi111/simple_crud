<?php
include 'koneksi.php';
$id_mahasiswa   = $_GET['nim'];
$query="DELETE from mahasiswa where nim='$id_mahasiswa'";
mysqli_query($conn, $query);
$pesan = "Data berhasil dihapus";

?>
<script>
 alert('<?php echo $pesan;?>');
 location='index.php?p=mahasiswa';
</script>