<?php 
include "../../../koneksi.php" ;
$q=mysqli_query($conn, "SELECT max(id_soal) as max from soal")or die("query salah");
$dt=mysqli_fetch_array($q);
$nilaimax=$dt['max'];   
$barisbaru = $nilaimax+1;

$idp= $_POST['idp'];
$j= $_POST['jenis'];
$s= $_POST['soal'];

$jw= $_POST['jawaban'];
$skor= $_POST['skor'];
$gabung = implode("___", $jw);
$pecah = explode("___", $gabung);

$jawabana = $pecah[0];
$jawabanb = $pecah[1];
$jawabanc = $pecah[2];
$jawaband = $pecah[3];
$jawabane = $pecah[4];


$gabungskor = implode(",", $skor);
$pecahskor = explode(",", $gabungskor);

$skora = $pecahskor[0];
$skorb = $pecahskor[1];
$skorc = $pecahskor[2];
$skord = $pecahskor[3];
$skore = $pecahskor[4];

$option = [
	'A'=>[$skora=>$jawabana],
	'B'=>[$skorb=>$jawabanb],
	'C'=>[$skorc=>$jawabanc],
	'D'=>[$skore=>$jawaband],
	'E'=>[$skord=>$jawabane]
];


foreach ($option  as $opt => $jwb) {

	foreach ($jwb as $skor => $isi) {
		echo "Pilihan :".$opt."<br> Skor :".$skor."<br> Isi :".$isi."<hr>";
		$perintah= "insert into jawaban 
				values('$barisbaru','$idp','$isi', '$opt','$skor')";
				$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
	}

}

	$perintah= "insert into soal 
			values('$barisbaru','$idp','$j', '$s','$kunci')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());

header("Location:../../?a=detail_paket&id=$idp");


//  echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?m=wargapanti'>";
 ?>
 