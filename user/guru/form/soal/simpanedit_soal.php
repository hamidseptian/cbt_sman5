<?php 
session_start();

include "../../../koneksi.php" ;


$idp= $_POST['idp'];
$j= $_POST['jenis'];
$s= $_POST['soal'];
echo $s;

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

	$perintah= "UPDATE jawaban set jawaban='$jwb' where id_soal='$nomor' and id_paket='$idp' and pilihan='$opt'";
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

			$q1=mysqli_query($conn, "SELECT * FROM  soal where nomor_soal='$nomor' and id_paket='$idp'");
			$d1=mysqli_fetch_array($q1);
			$gambarlama=$d1['gambar'];
		$upload=move_uploaded_file($lokasifile, $folder);
		unlink("file/".$gambarlama);
	$perintah= "UPDATE soal set soal='$s', gambar='$namafile' where nomor_soal='$nomor' and id_paket='$idp'";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
			$_SESSION['pesan']='<div class="callout callout-info">
        <h4>soal dengan gambar berhasil ditambahkan</h4>
      </div>';
		}
		}
else {
	
				$perintah= "UPDATE soal set soal='$s' , gambar=''  where   nomor_soal='$nomor' and id_paket='$idp'";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());
			
	$_SESSION['pesan']='<div class="callout callout-success">
        <h4>Username dan password berhasil diperbaharui</h4>

       
      </div>';
}




header("Location:../../?a=detail_paket&id=$idp");



 ?>
 