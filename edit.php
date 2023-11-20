<?php
include 'database.php';
$db = new database();
// $data_user = $db->tampil_data();
?>
<h3>edit data </h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $data){
?>
    <table>
        <tr>
            <td>id</td>
            <td>:</td>
            <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"/></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"/></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"/></td>
        </tr>

        <tr>
            <td>Usia</td>
            <td>:</td>
            <td><input type="text" name="usia" value="<?php echo $data['usia'] ?>"/></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="tombol" value="Simpan"/></td>
            <td></td>
            <td><button><a href="tampil.php">Batal</a></button></td>
        </tr>
    </table>

    <?php
}
?>
</form>