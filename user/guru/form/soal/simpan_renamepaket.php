<?php 
include "../../../koneksi.php" ;

$idp= $_POST['idp'];
$np= $_POST['np'];





	$perintah= "UPDATE  paket set nama_paket ='$np' where id_paket='$idp'";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());

header("Location:../../?a=soal");


//  echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?m=wargapanti'>";
 ?>
 