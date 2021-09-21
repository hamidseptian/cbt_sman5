<?php 

include "../../../koneksi.php" ;


$idp= $_POST['idp'];
$ids= $_POST['ids'];
$pembahasan= $_POST['pembahasan'];

				$perintah= "UPDATE soal set pembahasan='$pembahasan' where id_paket='$idp' and nomor_soal='$ids'";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
			

header("Location:../../?a=detail_pembahasan&id=$idp");



 ?>
 