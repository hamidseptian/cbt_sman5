<?php 
include "../koneksi.php";

@$menu=$_GET['a'];
if ($menu=='' or $menu=='profile') {
	echo "Wellcome to Administrator Page";
}
elseif ($menu=='addmember') {
	echo "Penambahan Member Baru";
}
elseif ($menu=='member') {
	echo "Data Member";
}
elseif ($menu=='detail_member') {
	    $id=$_GET['id'];
		$perintah= "SELECT * from member  where id_member='$id'";
		$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
		$jumlah=mysqli_num_rows($sql);
		$data=mysqli_fetch_array($sql); 
		echo "Biodata ".$data['nama'];
}
elseif ($menu=='soal') {
	echo "Manajemen Paket Ujian Try Out";
}
elseif ($menu=='detail_paket') {
	  $id=$_GET['id'];
		$perintah= "SELECT * from paket  where id_paket='$id'";
		$sql = mysqli_query($conn, $perintah)or die("salah");
$data=mysqli_fetch_array($sql); 
	echo "Manajemen Soal ".$data['nama_paket'];
}
elseif ($menu=='detail_pembahasan') {
	  $id=$_GET['id'];
		$perintah= "SELECT * from paket  where id_paket='$id'";
		$sql = mysqli_query($conn, $perintah)or die("salah");
$data=mysqli_fetch_array($sql); 
	echo "Pembahasan Soal ".$data['nama_paket'];
}

elseif ($menu=='add_soal') {
	echo "Tambah Soal";
}
elseif ($menu=='pembayaran') {
	echo "Aktivasi Akun ";
}
elseif ($menu=='reset_akses_to') {
	echo "Pengajuan Ujian Ulang";
}
elseif ($menu=='modul') {
	echo "Manajemen Modul";
}
elseif ($menu=='rename_paket') {
	echo "Perbaharui Nama Paket";
}
elseif ($menu=='baca_modul') {
	


	  $id=$_GET['id'];
	  $perintah="SELECT * From modul where id_modul='$id'";
	  $jalan=mysqli_query($conn, $perintah)or die("salah");
	  $data=mysqli_fetch_array($jalan);
	  echo "Modul ".$data['nama_modul'];



}
elseif ($menu=='pembayaran_lunas') {
	echo "Data Pembayara Lunas";
}
elseif ($menu=='cek_pembayaran') {
	echo "Cek Data Pembayaran";
}
elseif ($menu=='add_soal_tkp') {
	echo "Tambah Soal";
}
elseif($menu=='pembahasan'){
	echo "Manajemen Pembahasan Soal Try Out";
}
elseif($menu=='modul_gd'){
	echo "Modul Dari Google Drive";
}
elseif($menu=='ubahkunci'){
	echo "Ganti kunci jawaban";
}
elseif($menu=='ubahsoal'){
	echo "Perbaharui Soal";
}
elseif($menu=='ubahsoal_tkp'){
	echo "Perbaharui Soal";
}
else{
	echo "Judul belum ditentukan";
}
 ?>
