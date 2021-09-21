<?php 
include "../../../koneksi.php" ;
$q=mysqli_query($conn, "SELECT max(id_soal) as max from soal")or die("query salah");
$dt=mysqli_fetch_array($q);
$nilaimax=$dt['max'];   
$barisbaru = $nilaimax+1;

$nomor= $_POST['nomor'];
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
	'D'=>[$skord=>$jawaband],
	'E'=>[$skore=>$jawabane]
];


foreach ($option  as $opt => $jwb) {

	foreach ($jwb as $skor => $isi) {
		echo "Pilihan :".$opt."<br> Skor :".$skor."<br> Isi :".$isi."<hr>";
		$perintah= "insert into jawaban 
				values('$nomor','$idp','$isi', '$opt','$skor')";
				$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
	}

}



$ekstensi_diperbolehkan	= array('jpg','JPEG','JPG','PNG','png', 'jpeg');
$lokasifile=$_FILES['file']['tmp_name'];
$file=$_FILES['file']['name'];
$x = explode('.', $file);
$ekstensi = strtolower(end($x));
$ukuran=$_FILES['file']['size'];

$namafile=$idp."-".$nomor."-".date('his').$file;
$folder="file/".$namafile;


if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){



	if ($ukuran>1500000 or $ukuran==0) {
			
			$_SESSION['pesan']="Foto gagal disimpan. Ukuran gambar terlalu besar. makximal ukuran gambar adalah 500kb";

		}
		else{
		$upload=move_uploaded_file($lokasifile, $folder);
	$perintah= "insert into soal 
			values('$barisbaru','$idp','$nomor', '$j', '$s','$namafile', '$kunci')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
			$_SESSION['pesan']='<div class="callout callout-info">
        <h4>soal dengan gambar berhasil ditambahkan</h4>
       
       
      </div>';
		}
		}
else {
	
				$perintah= "insert into soal 
			values('$barisbaru','$idp','$nomor', '$j', '$s','', '$kunci')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
			
	$_SESSION['pesan']='<div class="callout callout-success">
        <h4>Username dan password berhasil diperbaharui</h4>

       
      </div>';
}
header("Location:../../?a=detail_paket&id=$idp");


//  echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?m=wargapanti'>";
 ?>
 