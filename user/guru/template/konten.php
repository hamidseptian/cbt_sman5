<?php 

@$menu=$_GET['a'];
if ($menu=='' or $menu=='profile') {
	include "form/dashboard/dashboard.php";
}
elseif ($menu=='hasil') {
	include "form/hasil/data_siswa.php";
}
elseif ($menu=='member') {
	include "form/member/data_member.php";
}
elseif ($menu=='reset_akses_to') {
	include "form/reset_akses_to/data_member.php";
}
elseif ($menu=='lihat_kelas') {
	include "form/hasil/lihat_data_siswa.php";
}
elseif ($menu=='data_siswa') {
	include "form/siswa/lihat_data_siswa.php";
}
elseif ($menu=='soal') {
	include "form/soal/data_paket.php";
}
elseif ($menu=='detail_paket') {
	include "form/soal/detail_paket.php";
}
elseif ($menu=='detail_pembahasan') {
	include "form/pembahasan/detail_pembahasan.php";
}
elseif ($menu=='add_soal') {
	include "form/soal/tambah_soal.php";
}
elseif ($menu=='listnilai') {
	include "form/hasil/list_nilai.php";
}
elseif ($menu=='pembayaran') {
	include "form/pembayaran/data_pembayaran_pending.php";
}
elseif ($menu=='baca_modul') {
	include "form/modul/baca_modul.php";
}
elseif ($menu=='cek_pembayaran') {
	include "form/pembayaran/detail_pembayaran.php";
}
elseif ($menu=='add_soal_tkp') {
	include "form/soal/tambah_soal_tkp.php";
}
elseif ($menu=='modul') {
	include "form/modul/daftar_modul.php";
}
elseif ($menu=='modul_gd') {
	include "form/modul/daftar_modul_gd.php";
}

elseif ($menu=='pembahasan') {
	include "form/pembahasan/data_paket.php";
}
elseif ($menu=='tambah_pembahasan') {
	include "form/pembahasan/tambah_pembahasan.php";
}
elseif ($menu=='set_password_manual') {
	include "form/login_member/set_username_password.php";
}
elseif ($menu=='ubahkunci') {
	include "form/soal/ubah_kunci.php";
}
elseif ($menu=='ubahkunci_tkp') {
	include "form/soal/ubah_kunci.php";
}
elseif ($menu=='editakun') {
	include "form/dashboard/editakun.php";
}
elseif ($menu=='perbaharui_pembahasan') {
	include "form/pembahasan/perbaharui_pembahasan.php";
}
elseif ($menu=='ubahsoal') {
	include "form/soal/ubah_soal.php";
}
elseif ($menu=='waktu_nilai') {
	include "form/waktu_nilai/waktu_nilai.php";
}
elseif ($menu=='ubahsoal_tkp') {
	include "form/soal/ubah_soal_tkp.php";
}
elseif ($menu=='soal-error') {
	include "form/soal/soal_error.php";
}
elseif ($menu=='rename_paket') {
	include "form/soal/rename_paket.php";
}
 ?>