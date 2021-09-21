
<?php
include "../../../koneksi.php";

$kelas		= $_POST['kelas'];

$nama_siswa		= $_POST['nama_siswa'];
$nis		= $_POST['nis'];
$nisn		= $_POST['nisn'];
$tmpl		= $_POST['tmpl'];
$tgll		= $_POST['tgll'];
$jk		= $_POST['jk'];
$agama		= $_POST['agama'];
$sdk		= $_POST['sdk'];
$anak_ke		= $_POST['anak_ke'];
$alamat		= $_POST['alamat'];
$no_telp		= $_POST['no_telp'];
$sekolah_asal		= $_POST['sekolah_asal'];
$nama_ayah		= $_POST['nama_ayah'];
$nama_ibu		= $_POST['nama_ibu'];
$kerja_ayah		= $_POST['kerja_ayah'];
$kerja_ibu		= $_POST['kerja_ibu'];
$email_siswa		= $_POST['email_siswa'];
$password		= $_POST['password'];


$sql = "INSERT into siswa set
nama_siswa='$nama_siswa',
id_kelas='$kelas',
nis='$nis',
nisn='$nisn',
tmpl='$tmpl',
tgll='$tgll',
jk='$jk',
agama='$agama',
sdk='$sdk',
anak_ke='$anak_ke',
alamat='$alamat',
no_telp='$no_telp',
sekolah_asal='$sekolah_asal',
nama_ayah='$nama_ayah',
nama_ibu='$nama_ibu',
kerja_ayah='$kerja_ayah',
kerja_ibu='$kerja_ibu',
email_siswa='$email_siswa',
password='$password '
";

mysqli_query($conn, $sql);
?>
<script type='text/javascript'>
	alert('Data siswa berhasil disimpan');
	window.location.href="../../index.php?a=data_siswa&id=<?php echo $kelas ?>"
</script>