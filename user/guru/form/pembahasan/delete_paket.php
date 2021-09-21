<?php
include '../../../koneksi.php';

$id_paket=$_GET['idp'];

$sql="DELETE from soal where id_paket='$id_paket'";
$result=mysqli_query($conn, $sql) or die(mysqli_error()) ;

$sql2="DELETE from jawaban where id_paket='$id_paket'";
$result2=mysqli_query($conn, $sql2) or die(mysqli_error()) ;

$sql3="DELETE from paket where id_paket='$id_paket'";
$result3=mysqli_query($conn, $sql3) or die(mysqli_error()) ;


	
header("Location:../../?a=soal")
?>

