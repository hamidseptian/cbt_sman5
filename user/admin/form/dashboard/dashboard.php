<?php 
  $idus= $_SESSION['id_user'];
  $level= $_SESSION['level'];

  $prt=mysqli_query($conn, "SELECT * from admin where id='$idus'")or die("salah");
  $data=mysqli_fetch_array($prt);
  $namauser=$data['nama_admin'];

  $qsiswa = mysqli_query($conn, "SELECT * from siswa");
  $jsiswa = mysqli_num_rows($qsiswa); 

  $qkelas = mysqli_query($conn, "SELECT * from kelas");
  $jkelas = mysqli_num_rows($qkelas); 

  $qmapel = mysqli_query($conn, "SELECT * from mapel");
  $jmapel = mysqli_num_rows($qmapel); 

  $qptk = mysqli_query($conn, "SELECT * from ptk");
  $jptk = mysqli_num_rows($qptk); 

  $qguru = mysqli_query($conn, "SELECT * from guru");
  $jguru = mysqli_num_rows($qguru); 

  $qsiswa = mysqli_query($conn, "SELECT * from siswa");
  $jsiswa = mysqli_num_rows($qsiswa); 

 ?>

<div class="col-md-12">

<div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h5 class="widget-user-desc">Selamat datang di halaman Administrator aplikasi Computer Based Test SMAN 5 Pariaman</h5>
              <h3 class="widget-user-username"><?php echo $namauser ?></h3>
              <h4><?php echo  $data['level'] ?></h4>
            </div>
           <!--  <div class="widget-user-image">
              
              <img class="" src="../admin/images/user.jpg" alt="User Avatar">
            </div> -->
            <div class="box-footer">







      <div class="row">

        
      <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jkelas ?></h3>

              <p>Jumlah Kelas</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">
              Kelola <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
      <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jmapel ?></h3>

              <p>Total Mata Pelajaran</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">
              Kelola <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
      <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jptk ?></h3>

              <p>Total Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">
              Kelola <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
      <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jguru ?></h3>

              <p>Total Guru</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">
              Kelola <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
      <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jsiswa ?></h3>

              <p>Total Siswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">
              Kelola <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
        
      <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Logout</h3>

              <p>Keluar dari halaman Administrator</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="../logout.php" class="small-box-footer">
             Sign Out<i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>








          
      







   
              <!-- /.row -->
            </div>
          </div>

    </div>