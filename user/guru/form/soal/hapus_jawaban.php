<?php
include '../../../koneksi.php';

$idj=$_GET['id'];
$id_paket=$_GET['idp'];

$sql2="DELETE from jawaban where idj='$idj' ";
$result2=mysqli_query($conn, $sql2) or die(mysqli_error()) ;


header("Location:../../?a=detail_paket&id=$id_paket")
	
?>

