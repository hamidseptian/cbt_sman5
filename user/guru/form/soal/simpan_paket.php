<?php 
session_start();
include "../../../koneksi.php" ;

$np= $_POST['np'];
$jenis= $_POST['jenis'];
$kelas= $_POST['kelas'];
$idmapel = $_SESSION['id_mapel'];
	$perintah= "INSERT into paket 
			values('', '$np','Ya','$jenis','$idmapel','$kelas')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
 ?>
 
 <script type="text/javascript">
 	alert('Data Paket Soal Disimpan');
 	window.location.href="../../?a=soal";
 </script>