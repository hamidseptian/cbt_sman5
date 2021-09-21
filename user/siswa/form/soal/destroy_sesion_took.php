<?php 
session_start();
include "../../../koneksi.php";
$idpaket=$_GET['idp'];
$idmember=$_SESSION['id_user'];
// echo $idmember;
// echo $idpaket;






//  $telah_berlalu = time() - $_SESSION["mulai"];
// $temp_waktu = (1*60) - $telah_berlalu;
//  echo $telah_berlalu."<br>".$temp_waktu;

// if ($temp_waktu <0) {
// 	echo "<br> waktu habis";
// }
unset( $_SESSION["mulai"]);
 unset( $_SESSION["paket"]);
header("Location:../../?m=infohasil&id=$idpaket");



 ?>
