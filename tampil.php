<?php 
include 'database.php';
$db = new database();
$data_user = $db->tampil_data();
?>
<h1>CRUD OOP PHP</h1>
<h3>Data User</h3>

<a href="tambah_data.php">Input data</a>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>

	<?php
	$no = 1;
	foreach($data_user as $row){
	?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['usia']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $row['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php
	}
	?>
</table>