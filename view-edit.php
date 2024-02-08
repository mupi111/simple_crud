<?php
    include 'koneksi.php';

    $nim = $_GET['nim'];
    $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = $nim");
?>
<div>
    <h3>Edit Data Mahasiswa</h3>
<hr>
<form method="post" action="mhs-edit.php"> 
    <?php
        while($row = mysqli_fetch_assoc($mahasiswa)){
    ?>
<table border="0" width="100%">
    <input type="text" name="nim" hidden value="<?= $row['nim'] ?>"/>
    <input type="text" name="nama" value="<?= $row['nama'] ?>"/>
    <p><input type="text" name="gender" placeholder="Enter Name" 
    required value="<?= $row["gender"]; ?>" /></p>
    <?php }?>
    <p><select name="idps">
        <?php
            $sql=mysqli_query($conn, "SELECT * FROM program_studi");
                while($d=mysqli_fetch_array($sql))
            {
                echo "<option value='$d[idps]'> $d[nama_ps] </option>";
            }
        ?>
    </select></p>
    <p><select name="idkls">
        <?php
            $sql=mysqli_query($conn, "SELECT * FROM kelas");
                while($d=mysqli_fetch_array($sql))
            {
                echo "<option value='$d[idkls]'> $d[nama_kls] </option>";
            }
        ?>
    </select></p>
</table>
    <br>
    <tr>
        <td width="120"></td>
        <td><a href="index.php" class="btn" style="text-decoration: none;">Kembali</a></td> |
        <td>&nbsp; <input type="submit" value="Simpan"></td>
    </tr>
</form>