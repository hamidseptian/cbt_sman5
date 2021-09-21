<?php 
include "../../../koneksi.php";
session_start();
$id=$_POST['id'];
$user=$_POST['username'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];
if ($pass != $pass2) {
	$_SESSION['pesan']='<div class="callout callout-danger">
	        <h4>Username dan password Gagal diperbaharui. </h4>
	        Password dan konfirmasi password harus sama
	      </div>';
	    echo "<meta http-equiv='refresh' content='0; url=http:../../index.php'>";
}
else{
	$password= password_hash($pass, PASSWORD_DEFAULT);
	$username=mysqli_query($conn, "SELECT * FROM user where username='$user'");
	$jmluser=mysqli_num_rows($username);
	if ($jmluser>1) {
		$_SESSION['pesan']='<div class="callout callout-danger">
	        <h4>Username dan password gagal diperbaharui</h4>

	      
	      </div>';
	    echo "<meta http-equiv='refresh' content='0; url=http:../../index.php'>";
	}

	else{
	$perintah= "UPDATE user set username='$user',	password='$password', password_awal='sudah dirubah' where id='$id'";
				$sql=mysqli_query($conn, $perintah) or die (mysqli_error());


		$_SESSION['pesan']='<div class="callout callout-success">
	        <h4>Username dan password berhasil diperbaharui</h4>
	      </div>';
	    echo "<meta http-equiv='refresh' content='0; url=http:../../index.php'>";
	}
}




	header("Location:../../");
?>