<?php 
include "../../../koneksi.php" ;
$id=$_POST['id'];
$waktu=$_POST['waktu'];
$jenis=$_POST['jenis'];

$perintah= "UPDATE waktu set 
			waktu='$waktu',
			jenis_ujian='$jenis'
			where id_waktu='$id'";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
 ?>
 <script type="text/javascript">
 	alert('Waktu Ujian dierbaharui')
 	window.location.href="../../?a=waktu"
 </script>