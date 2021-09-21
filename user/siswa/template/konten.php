<?php 
//error_reporting(0);
@$menu=$_GET['m'];
if ($menu=='' or $menu=='biodata') {
	include "form/dashboard/dashboard.php";
}
elseif ($menu=='ujian') {
	include "form/soal/pilih_paket.php";
}




elseif ($menu=='perbaharui_biodata') {
	include "form/member/edit_data.php";
}





elseif ($menu=='paket') {
	include "form/soal/soal.php";
}
elseif ($menu=='hasil') {
	include "form/hasil/paket.php";
}
elseif ($menu=='infohasil') {
	include "form/hasil/detail_hasil.php";
}
elseif ($menu=='editakun') {
	include "form/dashboard/editakun.php";
}
elseif ($menu=='pembahasan') {
	include "form/hasil/pembahasan.php";
}
elseif ($menu=='rapor') {
	include "form/rapor/pilih_rapor.php";
}
elseif ($menu=='baca_modul') {
	include "form/modul/detail_modul.php";
}

elseif ($menu=='kritik_saran') {
	include "form/kritik_saran/list_kritik.php";
}
elseif ($menu=='peraturan') {
	include "form/soal/peraturan.php";
}

elseif ($menu=='detail_hasil') {
	include "form/hasil/detail_hasil_paket.php";
}

else{
	echo "Fitur ini tidak tersedia";
}

 ?>