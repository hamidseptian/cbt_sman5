
<?php
include "../../../koneksi.php";


$ket		= $_POST['ket'];
$tgl	=date('Y-m-d');

$ekstensi_diperbolehkan	= array('pdf');
$lokasifile=$_FILES['file']['tmp_name'];
$file=$_FILES['file']['name'];
$x = explode('.', $file);
$ekstensi = strtolower(end($x));
$ukuran=$_FILES['file']['size'];
$namafile=date('Ymdhis').$file;
$folder="file/".$namafile;


if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		$upload=move_uploaded_file($lokasifile, $folder);
		$sql = "insert into modul (nama_modul, namafile)
				 values('$ket', '$namafile')";

		$result	= mysqli_query($conn, $sql);
			if($result){
			    echo "<script type='text/javascript'>
			   		alert('file Berhasi Disimpan');
				    </script>";

			    echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?a=modul'>";
				}
			else{
				echo "<script type='text/javascript'>
					onload =function(){
					alert('file Gagal Disimpan!');
					}
					</script>";
					
			    echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?a=modul'>";
				}
		}
else {
	echo "<script type='text/javascript'>
	onload =function(){	alert('File Gagal Disimpan, Extensi File Tidak Di Perbolehkan');
	}
	</script>";
			    echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?a=modul'>";
}



?>