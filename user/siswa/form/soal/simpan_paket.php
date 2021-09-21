<?php 
include "../../../koneksi.php" ;

$np= $_POST['np'];





	$perintah= "insert into paket 
			values('', '$np')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());

header("Location:../../?a=soal");


//  echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?m=wargapanti'>";
 ?>
 