
<?php
include "../../../koneksi.php";


$id		= $_POST['id'];
$nama		= $_POST['nama'];
$nip		= $_POST['nip'];
$tmpl		= $_POST['tmpl'];
$tgll		= $_POST['tgll'];
$p_gol		= $_POST['p_gol'];
$p_tmt		= $_POST['p_tmt'];
$jab		= $_POST['jab'];
$tmt_jab		= $_POST['tmt_jab'];
$masa		= $_POST['masa'];
$diklat_nama		= $_POST['diklat_nama'];
$diklat_bln		= $_POST['diklat_bln'];
$diklat_thn		= $_POST['diklat_thn'];
$diklat_jam		= $_POST['diklat_jam'];
$pendidikan		= $_POST['pendidikan'];
$jurusan		= $_POST['jurusan'];
$asal		= $_POST['asal'];
$lulus		= $_POST['lulus'];

$mapel		= $_POST['mapel'];


	$sql = "UPDATE guru set 
		nama_guru='$nama',
		id_mapel='$mapel',
		nip='$nip',
		tmpl_guru='$nip',
		tgll_guru='$tmpl',
		pangkat_gol='$p_gol',
		pangkat_tmt='$p_tmt',
		jabatan='$jab',
		tmt_jabatan='$tmt_jab',
		masa_kerja='$masa',
		diklat_nama='$diklat_nama',
		diklat_bln='$diklat_bln',
		diklat_thn='$diklat_thn',
		diklat_jml_jam='$diklat_jam',
		pendidikan='$pendidikan',
		jurusan='$pendidikan',
		asal_pendidikan='$asal',
		tahun_lulus='$lulus'
		where id_guru='$id'
";

mysqli_query($conn, $sql);
?>
<script type='text/javascript'>
	alert('Data guru berhasil disimpan');
	window.location.href="../../index.php?a=guru"
</script>