<?php
include '../../../../koneksi.php';
$id=$_POST['id'];
$file=$_POST['file'];

unlink("file/$file");
//error_reporting(0);



$sql="DELETE from modul where id_modul='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');

header("Location:../../?a=modul")
?>

