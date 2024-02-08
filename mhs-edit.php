<?php
include 'koneksi.php';
if(isset($_POST['save'])){

$nim = $_POST['nim'];
$nama  = $_POST['nama'];
$gender = $_POST['gender'];
$idps  = $_POST['idps'];
$idkls  = $_POST['idkls'];
$query="UPDATE mahasiswa SET nama='$nama',gender='$gender',idps='$idps',idkls='$idkls' where nim='$nim'";
mysqli_query($conn, $query);
$pesan = "Data berhasil di-update";
?>
<script>
 alert('<?php echo $pesan;?>');
 location='index.php?p=mahasiswa';
</script>
<?php
}
?>