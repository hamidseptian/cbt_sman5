<?php 
include "../koneksi.php";
  $id=$_GET['id'];
  $perintah="SELECT * From modul where id_modul='$id'";
  $jalan=mysqli_query($conn, $perintah)or die("salah");
  $data=mysqli_fetch_array($jalan);

   ?>


<embed width="100%" height="500" src="form/modul/file/<?php echo $data['namafile'] ?>" type="application/pdf"></embed>
<br>
<a href="?m=modul" class="btn btn-info">Kembali</a>