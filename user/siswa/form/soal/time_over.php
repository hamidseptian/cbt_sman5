<?php 
session_start();
include "../../../koneksi.php";
$idpaket=$_POST['idp'];
$idmember=$_SESSION['id_user'];
echo $idmember;
echo $idpaket;
date_default_timezone_set('Asia/Jakarta');


 $jadwal=date('Y-m-d-h-i');

 $q3=mysqli_query($conn, "UPDATE try_out set jadwal_ujian='$jadwal' where id_member='$idmember' and id_paket='$idpaket' and jadwal_ujian='' ")or die(mysqli_error());
//  $q4=mysqli_query($conn, "INSERT into  history values ('','$idmember','$idpaket','$jadwal')")or die(mysqli_error())	;



unset( $_SESSION["mulai"]);
 unset( $_SESSION["paket"]);
header("Location:../../?m=detail_hasil&id=$idpaket");



 ?>
