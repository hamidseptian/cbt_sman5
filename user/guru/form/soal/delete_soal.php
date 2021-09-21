<?php
include '../../../koneksi.php';

$id_soal=$_GET['nms'];
$id_paket=$_GET['idp'];

$sql="DELETE from soal where nomor_soal='$id_soal' and id_paket='$id_paket' ";
$result=mysqli_query($conn, $sql) or die(mysqli_error()) ;

$sql2="DELETE from jawaban where id_soal='$id_soal' and id_paket='$id_paket'";
$result2=mysqli_query($conn, $sql2) or die(mysqli_error()) ;


header("Location:../../?a=detail_paket&id=$id_paket")
	
?>

