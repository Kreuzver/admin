<?php include "header.php"; ?>

<h3>Data Admin</h3>
<a href="tambah_admin.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>Idadmin</th>
		<th>Username</th>
		<th>Password</th>
        <th>NamaLengkap</th>
	</tr>
	<?php
	$sql=mysqli_query($konek, "SELECT * FROM admin ORDER BY idadmin ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$d[idadmin]</td>
			<td>$d[username]</td>
			<td>$d[password]</td>
			<td>$d[namalengkap]</td>
			<td>
				<a href='edit_admin.php?id=$d[idadmin]'>Edit</a> /
				<a href='hapus_admin.php?id=$d[idadmin]'>Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>
</table>

<?php include "footer.php"; ?>