<?php
include '../../../../koneksi.php';
$id=$_GET['id'];




$sql="DELETE from modul_gd where id_modul='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');

header("Location:../../?a=modul_gd")
?>

