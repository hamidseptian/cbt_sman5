
<?php
include "../../../koneksi.php";


$ket		= $_POST['ket'];
$link		= $_POST['link'];


		$sql = "insert into modul_gd (nama_file, link_download)
				 values('$ket', '$link')";

		mysqli_query($conn, $sql);
			    echo "<script type='text/javascript'>
			   		alert('Link Berhasi Disimpan');
				    </script>";

			    echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?a=modul_gd'>";
			

?>