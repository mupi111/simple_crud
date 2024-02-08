<?php
include 'koneksi.php';
?>
<h3>Tambah Data Mahasiswa</h3>
<hr>
<form action="mhs-insert.php" method="post">
<table border="0" width="100%">
<tr>
 <td width="120">NIM </td>
 <td>: <input type="text" name="nim" required></td>
</tr>
<tr>
 <td width="120">Nama Lengkap :</td>
 <td>: <input type="text" name="nama" required></td>
</tr>
<tr>
 <td width="120">Gender</td>
 <td>: <input type="radio" name="gender" value="L" checked> Laki-laki 
    <input type="radio" name="gender" value="P"> Perempuan 
 </td>
</tr>
<tr>
 <td width="120">Program Studi</td>
 <td>: <select name="idps">
    <option value="Pilihan" id="program_studi">-Silahkan Pilih-</option>
<?php
    $sql=mysqli_query($conn, "SELECT * FROM program_studi");
        while($d=mysqli_fetch_array($sql))
    {
        echo "<option value='$d[idps]'> $d[nama_ps] </option>";
    }
?>
    </select>
 </td>
</tr>
<tr>
 <td width="120">Kelas</td>
 <td>: <select name="idkls">
 <option value="Pilihan" id="kelas">-Silahkan Pilih-</option>
<?php
    $sql=mysqli_query($conn, "SELECT * FROM kelas");
        while($d=mysqli_fetch_array($sql))
    {
        echo "<option value='$d[idkls]'> $d[nama_kls] </option>";
    }
?>
</select>
 </td>
</tr>
</table>
<br>
<tr>
 <td width="120"></td>
 <td><a href="index.php" class="btn" style="text-decoration: none;">Kembali</a></td> |
 <td>&nbsp; <input type="submit" value="Simpan"></td>
</tr>
</form>