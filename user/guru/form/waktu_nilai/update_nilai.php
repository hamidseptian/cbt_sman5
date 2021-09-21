<?php 
include "../../../koneksi.php" ;
$id=$_POST['id'];
$tiu=$_POST['tiu'];
$twk=$_POST['twk'];
$tkp=$_POST['tkp'];

$perintah= "UPDATE ketentuan_nilai set 
			tiu='$tiu',
			twk='$twk',
			tkp='$tkp'
			where id_ketentuan='$id'";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());

header("Location:../../?a=waktu_nilai");



 ?>
 