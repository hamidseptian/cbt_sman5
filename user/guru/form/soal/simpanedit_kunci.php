<?php 
$idp=$_POST['idp'];
$ids=$_POST['ids'];
$kunci=$_POST['kunci'];
$kuncisebelumnya=$_POST['kuncisebelumnya'];
$jenis=$_POST['jenis'];
include "../../../koneksi.php";
	

	// echo $kunci." ".$idp ." ".$ids;
	// die;
$perintah= "UPDATE  soal set kunci_jawaban='$kunci' where  id_paket='$idp' and nomor_soal='$ids'";
$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
			
$p1= "UPDATE  jawaban set poin='5' where  id_paket='$idp' and id_soal='$ids' and pilihan='$kunci'";
$q1=mysqli_query($conn, $p1)or die(mysqli_error());	
			
$p2= "UPDATE  jawaban set poin='0' where  id_paket='$idp' and id_soal='$ids' and pilihan='$kuncisebelumnya'";
$q2=mysqli_query($conn, $p2)or die(mysqli_error());	



header("Location:../../?a=detail_paket&id=$idp");



 ?>
 