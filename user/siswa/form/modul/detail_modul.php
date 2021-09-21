<?php 
include "../../koneksi.php.php";
  $id=$_GET['id'];
 
  $perintah="SELECT * From modul where id_modul='$id'";
  $jalan=mysqli_query($conn, $perintah);
  $data=mysqli_fetch_array($jalan);

   ?>



<embed width="100%" height="500" src="../admin/form/modul/file/<?php echo $data['namafile'] ?>" type="application/pdf"></embed>
<br>
<a href="?m=modul" class="btn btn-info">Kembali</a>
<a href="../admin/form/modul/file/<?php echo $data['namafile'] ?>" target="_blank" class="btn btn-info">Baca Full Screen</a>