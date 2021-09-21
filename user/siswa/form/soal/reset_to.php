<?php
include '../../../koneksi.php';
session_start();
$id_member=$_SESSION['id_user'];


$idp=$_GET['id'];
$sql="DELETE from ujian where id_siswa='$id_member' and id_paket='$idp'";
$result=mysqli_query($conn, $sql) or die(mysqli_error()) ;



		echo "<meta http-equiv='refresh' content='0;
	url=../../?m=peraturan&id=$idp&idsoal=1'>";
	
?>

