<?php 
session_start();
include "../../../koneksi.php" ;
$idmapel = $_SESSION['id_mapel'];
$qmapel = mysqli_query($conn, "SELECT * FROM mapel where id_mapel='$idmapel'")or die(mysqli_error());
$dmapel = mysqli_fetch_array($qmapel);
$namamapel = $dmapel['nama_mapel'];

$tingkat=$_GET['tingkat'];
$jenis= $_GET['jenis'];
	$perintah= "INSERT into paket (nama_paket, boleh_akses, jenis_ujian, id_mapel, tingkat_kelas)
			values('$jenis $namamapel Kelas $tingkat', 'Ya','$jenis','$idmapel','$tingkat')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
 ?>
 
 <script type="text/javascript">
 	alert('Data Paket Soal Disimpan');
 	window.location.href="../../?a=soal";
 </script>