<?php include "header.php"; ?>

<h3>Tambah Data Admin</h3>
<form method="post" action="">
	<table>
		<tr>
			<td>Idadmin</td>
			<td><input type="number" name="idadmin" /></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" /></td>
		</tr>
		<tr>
			<td>NamaLengkap</td>
			<td><input type="text" name="namalengkap" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" /></td>
		</tr>
		
	</table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$idadmin = $_POST['idadmin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$namalengkap = $_POST['namalengkap'];
	
	
	if($idadmin=='' || $username=='' || $password=='' || $namalengkap=''){
		echo "Form belum lengkap!!!";		
	}else{
		//simpan data
		 $simpan = mysqli_query($konek, "insert into admin(idadmin,username,password,namalengkap)
                                    values ('$idadmin','$username','$password','$namalengkap')");
		
		
			header('location:tampil_admin.php');
	     }
	}
}
?>
<?php include "footer.php"; ?>
