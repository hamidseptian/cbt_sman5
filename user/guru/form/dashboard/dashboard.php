<?php 
  $idus= $_SESSION['id_user'];
  $level= $_SESSION['level'];
  
  $q = mysqli_query($conn, "SELECT * from guru as a left join ptk as b on a.id_ptk=b.id_ptk
    left join mapel as c on a.id_mapel = c.id_mapel
    where a.id_guru='$idus'");
  $d = mysqli_fetch_array($q);

$namauser = $d['nama_ptk'];
$mapel = $d['nama_mapel'];
if (isset($_SESSION['pesan'])) {
  echo  $_SESSION['pesan'];
  unset($_SESSION['pesan']);
}

 ?>

<div class="col-md-12">

<div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h5 class="widget-user-desc">Selamat datang di halaman guru aplikasi Computer Based Test SMAN 5 Pariaman</h5>
              <h3 class="widget-user-username"><?php echo $namauser ?></h3>
              <h4><?php echo $mapel ?></h4>
            </div>

    </div>