<?php 
//error_reporting(0);
//print_r($_SESSION);
@$menu=$_GET['m'];
if ($menu=='' or $menu=='profile') {
	echo "Selamat datang di halaman siswa";
}

elseif ($menu=='baca_modul') {
	include "../../koneksi.php.php";
	  $id=$_GET['id'];
	 
	  $perintah="SELECT * From modul where id_modul='$id'";
	  $jalan=mysqli_query($conn, $perintah);
	  $data=mysqli_fetch_array($jalan);
	  echo "Modul ".$data['nama_modul'];

}
elseif ($menu=='paket') {
	
include "../koneksi.php";
    $id=$_GET['id'];
  //  echo $id;
$idmember=$_SESSION['id_user'];


$perintah= "SELECT * from paket  where id_paket='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlahsoal=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 

echo $data['nama_paket']; 

}
elseif ($menu=='detail_hasil') {
	
include "../koneksi.php";
    $id=$_GET['id'];
  //  echo $id;
$idmember=$_SESSION['id_user'];


$perintah= "SELECT * from paket  where id_paket='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlahsoal=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 

echo "Hasil Try Out ".$data['nama_paket']; 

}
elseif($menu=='ujian'){
	echo "Pilih paket ujian anda";
}
elseif($menu=='editakun'){
	echo "Set Username Dan Password";
}

elseif($menu=='pembahasan'){
	    $id=$_GET['idp'];
		$perintah= "SELECT * from paket  where id_paket='$id'";
		$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
		$jumlahsoal=mysqli_num_rows($sql);

		$data=mysqli_fetch_array($sql); 
		echo "Pembahasan ".$data['nama_paket'];
}
elseif($menu=='peraturan'){
	      $idp=$_GET['id'];
		$perintah= "SELECT *  from paket  where id_paket='$idp'";
		$sql = mysqli_query($conn, $perintah) or die("query salah");
		
		$data=mysqli_fetch_array($sql);
		$namapaket=$data['nama_paket'];

		$data=mysqli_fetch_array($sql); 
		echo "Try Out ".$namapaket;
}
elseif($menu=='biodata'){
	    echo "Selamat datang di halaman siswa";
}
elseif($menu=='modul'){
	    echo "Modul dan Bahan Ajar";
}

elseif($menu=='hasil'){
	    echo "Data Hasil Ujian Siswa";
}
else{
	echo "judul belum ditentukan";
}

 ?>