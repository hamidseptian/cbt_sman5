<?php 
include "../../../koneksi.php" ;
$id=$_POST['id'];
$waktu=$_POST['waktu'];

$perintah= "UPDATE waktu set 
			waktu='$waktu'
			where id_waktu='$id'";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());

header("Location:../../?a=waktu_nilai");



 ?>
 