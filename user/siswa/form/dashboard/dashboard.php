<?php 


  include "../../koneksi.php";
  $idus= $_SESSION['id_user'];

    
$prt=mysqli_query($conn, "SELECT * from siswa as a 
  left join kelas as b on a.id_kelas = b.id_kelas
 where a.id_siswa='$idus'")or die("salah");
$data=mysqli_fetch_array($prt);
$namauser=$data['nama_siswa'];

if (isset($_SESSION['pesan'])) {
  
echo $_SESSION['pesan'];

unset($_SESSION['pesan']);
}
 ?>

<div class="col-md-12">

<div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $namauser ?></h3>
              <h5 class="widget-user-desc">siswa SMA 5 Pariaman</h5>
              <h5 class="widget-user-desc">Kelas <?php echo $data['nama_kelas'] ?></h5>
            </div>
           <!--  <div class="widget-user-image">
              
              <img class="" src="../admin/images/user.jpg" alt="User Avatar">
            </div> -->
            
          </div>

    </div>


          