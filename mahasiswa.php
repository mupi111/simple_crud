<?php
include 'koneksi.php';
?>
<h2>Daftar Data Mahasiswa</h2>
<hr>
<button><a href="mhs-tambah.php">Tambah Data</a></button>
<hr>
<table width="100%" cellpadding="4" cellspacing="1" bgcolor="#ccc">
<tr>
 <th bgcolor="#eee" width="30">No</th>
 <th bgcolor="#eee" width="120">NIM</th>
 <th bgcolor="#eee">Nama Lengkap</th>
 <th bgcolor="#eee" width="100">Gender</th>
 <th bgcolor="#eee" width="150">Program Studi</th>
 <th bgcolor="#eee" width="110">Kelas</th>
 <th bgcolor="#eee" width="70">Edit</th>
 <th bgcolor="#eee" width="70">Hapus</th>
</tr>
<?php
$sql = "SELECT mahasiswa.*, program_studi.nama_ps, kelas.nama_kls FROM mahasiswa
   LEFT JOIN program_studi ON mahasiswa.idps=program_studi.idps
   LEFT JOIN kelas ON mahasiswa.idkls = kelas.idkls ORDER BY nim ASC";
$query = mysqli_query($conn ,$sql);
$total = mysqli_num_rows($query);

$no = 1;
while ($data=mysqli_fetch_array($query))
{
 if($data['gender'] == "L") { 
    $gender = "Laki-laki";
 echo "<tr>
   <td bgcolor='#fff'>$no</td>
   <td bgcolor='#fff'>$data[nim]</td>
   <td bgcolor='#fff'>$data[nama]</td>
   <td bgcolor='#fff'>$gender</td>
   <td bgcolor='#fff'>$data[nama_ps]</td>
   <td bgcolor='#fff'>$data[nama_kls]</td>
   <td bgcolor='#fff'>
   <a href='view-edit.php?nim=".$data['nim']."'>Edit</a>
   </td>
   <td bgcolor='#fff'>
   <a href='mhs-delete.php?nim=".$data['nim']."'>Hapus</a>
   </td>
    </tr>";
 }else{
    $gender = "Perempuan";
    echo "<tr>
   <td bgcolor='#fff'>$no</td>
   <td bgcolor='#fff'>$data[nim]</td>
   <td bgcolor='#fff'>$data[nama]</td>
   <td bgcolor='#fff'>$gender</td>
   <td bgcolor='#fff'>$data[nama_ps]</td>
   <td bgcolor='#fff'>$data[nama_kls]</td>
   <td bgcolor='#fff'>
   <a href='view-edit.php?nim=".$data['nim']."'>Edit</a>
   </td>
   <td bgcolor='#fff'>
   <a href='mhs-delete.php?nim=". $data['nim']."'>Hapus</a>
   </td>
    </tr>";
    }
$no++;
}
?>
<tr>
 <td colspan="8" bgcolor="#999" style="color: #fff;" >
  Total : <?php echo "$total Data";?>
 </td>
</tr>
</table>