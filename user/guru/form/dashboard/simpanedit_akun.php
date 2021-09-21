<?php 
include "../../../koneksi.php";
session_start();
$id=$_POST['id'];
$user=$_POST['username'];
$password=$_POST['password'];





$username=mysqli_query($conn, "SELECT * FROM guru where username='$user'");
$jmluser=mysqli_num_rows($username);





if ($jmluser>=1) {
$_SESSION['pesan']='<div class="callout callout-danger">
        <h4>Username dan password gagal diperbaharui</h4>

      
      </div>';
    echo "<meta http-equiv='refresh' content='0; url=http:../../index.php'>";
}

else{
$perintah= "UPDATE guru set username='$user',	password='$password' where id_guru='$id'";
			$sql=mysqli_query($conn, $perintah) or die (mysqli_error());


	$_SESSION['pesan']='<div class="callout callout-success">
        <h4>Username dan password berhasil diperbaharui</h4>

       
      </div>';
   
}




	header("Location:../../");
?>