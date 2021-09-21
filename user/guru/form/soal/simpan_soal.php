<?php 
session_start();
include "../../../koneksi.php" ;
$q=mysqli_query($conn, "SELECT max(id_soal) as max from soal")or die("query salah");
$dt=mysqli_fetch_array($q);
$nilaimax=$dt['max'];   
$barisbaru = $nilaimax+1;

$idp= $_POST['idp'];

$s= $_POST['soal'];
$kunci= $_POST['kunci'];
$nomor= $_POST['nomor'];

$jw= $_POST['jawaban'];
$gabung = implode("___", $jw);
$pecah = explode("___", $gabung);

$jawabana = $pecah[0];
$jawabanb = $pecah[1];
$jawabanc = $pecah[2];
$jawaband = $pecah[3];
$jawabane = $pecah[4];

$option = ['A'=>$jawabana,'B'=>$jawabanb,'C'=>$jawabanc,'D'=>$jawaband,'E'=>$jawabane];


foreach ($option  as $opt => $jwb) {
	if ($kunci==$opt) {
		$skor=5;
	}

	else{
		$skor = 0;
	}


	$perintah= "insert into jawaban 
			values('','$nomor','$idp','$jwb', '$opt','$skor')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
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
	$perintah= "INSERT into soal 
			values('$barisbaru','$idp','$nomor', '$s','$namafile', '$kunci','')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
			$_SESSION['pesan']='<div class="callout callout-info">
        <h4>soal dengan gambar berhasil ditambahkan</h4>
       
       
      </div>';
		}
		}
else {
	
				$perintah= "INSERT into soal 
			values('$barisbaru','$idp','$nomor', '$s','', '$kunci','')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
			
	$_SESSION['pesan']='<div class="callout callout-success">
        <h4>Username dan password berhasil diperbaharui</h4>

       
      </div>';
}




header("Location:../../?a=detail_paket&id=$idp");



 ?>
 