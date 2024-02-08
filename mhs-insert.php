<?php
include 'koneksi.php';
$nim  = $_POST['nim'];
$nama  = $_POST['nama'];
$gender = $_POST['gender'];
$idps  = $_POST['idps'];
$idkls  = $_POST['idkls'];

$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim'"));
if ($cek == 0)
{
 $sql = "INSERT INTO mahasiswa (nim, nama, gender, idps, idkls) VALUES 
    ('$nim', '$nama', '$gender', '$idps', '$idkls') ";
 mysqli_query($conn, $sql);
 $pesan = "Data berhasil tersimpan";
}
else { $pesan = "Maaf NIM telah terdaftar"; }
?>
<script>
 alert('<?php echo $pesan;?>');

 location='index.php?p=mahasiswa';
</script>