<?php
include '../../../koneksi.php';

$id_paket=$_GET['idp'];


	$sql="UPDATE  paket set boleh_akses='Tidak' where id_paket='$id_paket'";
$result=mysqli_query($conn, $sql) or die(mysqli_error()) ;






	
header("Location:../../?a=soal")
?>

