<?php 
session_start();
include "../../../koneksi.php";
$idpaket=$_GET['idp'];
$idmember=$_SESSION['id_user'];
// echo $idmember;
// echo $idpaket;
$q3=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'")or die("query salah");
while($dd=mysqli_fetch_array($q3)){
$idsoal=$dd['id_soal'];
		$q4=mysqli_query($conn, "SELECT * from try_out where id_paket='$idpaket' and id_soal='$idsoal' ")or die("query salah");
$d1=mysqli_fetch_array($q4);
 $idsto=$d1['id_soal'];
 //echo $idsto;

 if($idsoal!==$idsto){

 	//perbaiki lagi karena jika user lain yg akses tidak bisa disimpan
 	$q6=mysqli_query($conn, "INSERT into try_out values ('$idmember','$idpaket','$idsoal','Z','')")or die("query salah");
 //	echo $idsoal."-".$idsto."tidak terjawab<br>";
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
