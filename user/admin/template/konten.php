<?php 

@$menu=$_GET['a'];
if ($menu=='') {
	include "form/dashboard/dashboard.php";
}
else if($menu=='siswa'){
	include "form/siswa/data_siswa.php";
}
else if($menu=='guru'){
	include "form/guru/data_guru.php";
}
else if($menu=='ptk'){
	include "form/ptk/data_ptk.php";
}
else if($menu=='tambah_guru'){
	include "form/guru/tambah_guru.php";
}
else if($menu=='tambah_ptk'){
	include "form/ptk/tambah_ptk.php";
}
else if($menu=='edit_ptk'){
	include "form/ptk/edit_ptk.php";
}
else if($menu=='akses_guru'){
	include "form/akses_guru/data_akses_guru.php";
}
else if($menu=='mapel'){
	include "form/mapel/data_mapel.php";
}
else if($menu=='guru_mapel'){
	include "form/guru_mapel/data_guru_mapel.php";
}
else if($menu=='kelas'){
	include "form/kelas/data_kelas.php";
}
else if($menu=='siswa_kelas'){
	include "form/siswa/data_kelas.php";
}
else if($menu=='nilai_kelas'){
	include "form/nilai/data_kelas.php";
}
else if($menu=='data_siswa'){
	include "form/siswa/data_siswa_perkelas.php";
}
else if($menu=='data_nilai_siswa'){
	include "form/nilai/data_nilai_siswa_perkelas.php";
}
else if($menu=='lihat_nilai'){
	include "form/nilai/nilai_siswa.php";
}
else if($menu=='tambah_siswa'){
	include "form/siswa/tambah_siswa.php";
}
else if($menu=='edit_siswa'){
	include "form/siswa/edit_siswa.php";
}
else if($menu=='edit_mapel'){
	include "form/mapel/edit_mapel.php";
}
else if($menu=='edit_guru'){
	include "form/guru/edit_guru.php";
}
else if($menu=='edit_kelas'){
	include "form/kelas/edit_kelas.php";
}
else if($menu=='tambah_akses_guru'){
	include "form/akses_guru/tambah_akses_guru.php";
}
elseif ($menu=='waktu') {
	include "form/waktu/waktu.php";
}
elseif ($menu=='pembagian_kelas') {
	include "form/pembagian_kelas/data_pembagian_kelas.php";
}
elseif ($menu=='pembagian_mapel') {
	include "form/pembagian_mapel/data_pembagian_mapel.php";
}
elseif ($menu=='kelola_kelas') {
	include "form/pembagian_kelas/kelola_kelas.php";
}
elseif ($menu=='kelola_mapel') {
	include "form/pembagian_mapel/kelola_mapel.php";
}
else{
echo "fitur ini belum tersedia";
}
 ?>
