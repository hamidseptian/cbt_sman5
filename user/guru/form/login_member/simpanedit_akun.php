<?php 
include "../../../koneksi.php";
session_start();
$id=$_POST['id'];
$user=$_POST['username'];
$pass=$_POST['password'];
$password= password_hash($pass, PASSWORD_DEFAULT);

echo $id;


$username=mysqli_query($conn, "SELECT * FROM user where username='$user'");
$jmluser=mysqli_num_rows($username);





if ($jmluser>=1) {
$_SESSION['pesan']='<div class="callout callout-danger">
        <h4>Username dan password gagal diperbaharui</h4>

      
      </div>';
   echo $_SESSION['pesan'];
   header("Location:../../?a=pembayaran");
}

else{
$perintah= "INSERT into user  set username='$user',	password='$password' , id_user='$id'";
			$sql=mysqli_query($conn, $perintah) or die (mysqli_error());


	$_SESSION['pesan']='<div class="callout callout-success">
        <h4>Username dan password berhasil diperbaharui</h4>

       
      </div>';
    echo $_SESSION['pesan'];
   header("Location:../../?a=pembayaran");
}



//header("Location:../../");
?>