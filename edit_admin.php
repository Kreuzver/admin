<?php include "header.php"; ?>

<?php
$sqlEdit = mysqli_query($konek, "SELECT * FROM admin WHERE idadmin='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);
?>

<h3>Edit Data Admin</h3>
<form method="post" action="">
	<input type="hidden" name='idadmin' value="<?php echo $e['idadmin']; ?>" />
	<table>
		<tr>
			<td>Idadmin</td>
			<td><input type="number" name="idadmin" value="<?php echo $e['idadmin']; ?>" maxlength="10"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo $e['username']; ?>" maxlength="40"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="<?php echo $e['password']; ?>" maxlength="40"></td>
		</tr>
		<tr>
			<td>NamaLengkap</td>
			<td><input type="text" name="namalengkap" value="<?php echo $e['namalengkap']; ?>" maxlength="40"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update" /></td>
		</tr>
	
	</table>
</form>

<!-- proses edit data -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

	//variabel untuk menampung inputan dari form
	$idadmin = $_POST['idadmin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$namalengkap = $_POST['namalengkap'];

	if($idadmin=='' || $username=='' || $password==''){
		echo "Form Belum lengkap....";
	}else{
		$update = mysqli_query($konek, "UPDATE idadmin SET idadmin='$idadmin',
											username='$username',
											password='$password',
											namalengkap='$namalengkap',
										WHERE idadmin='$id'");

		if(!$update){
			echo "Update data gagal...";

		}else{
			header('location:tampil_admin.php');
		}
	}
}
?>

<?php include "footer.php" ?>