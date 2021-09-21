<?php 
session_start();
include "../../../koneksi.php";
$idpaket=$_GET['idp'];
$idmember=$_SESSION['id_user'];
// echo $idmember;
// echo $idpaket;
$q3=mysqli_query($conn, "SELECT max(nomor_soal) as nomormax from soal where id_paket='$idpaket'")or die("query salah");
$dd=mysqli_fetch_array($q3);
$nomorakhir=$dd['nomormax'];
for ($i=1; $i <= $nomorakhir; $i++) { 
	$q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$i'")or die("query salah");
	$d1=mysqli_fetch_array($q4);
	$idsoal=$d1['id_soal'];

	$q5=mysqli_query($conn, "SELECT * from try_out where id_paket='$idpaket' and id_soal='$idsoal'")or die("query salah");
	$d2=mysqli_fetch_array($q5);
	echo $idsto=$d2['id_soal'];

	if ($idsto==$i) {
		$q6=mysqli_query($conn, "INSERT into try_out values ('$idmember','$idpaket','$idsoal','Z','')")or die("query salah");
	}


}


//  $telah_berlalu = time() - $_SESSION["mulai"];
// $temp_waktu = (1*60) - $telah_berlalu;
//  echo $telah_berlalu."<br>".$temp_waktu;

// if ($temp_waktu <0) {
// 	echo "<br> waktu habis";
// }
unset( $_SESSION["mulai"]);
 unset( $_SESSION["paket"]);
header("Location:../../?m=infohasil&id=$idpaket");



 ?>
