<?php 
session_start();
$tanggalsekarang = date('Ymd');
$masaberlaku = 20210831 ;
//echo $tanggalsekarang;

if ($_SESSION['login']!=true) {
   header('location:../../');
}
elseif ($_SESSION['level']!=='Guru') {
   header('location:../../');
}
else{
  include "../../koneksi.php";
  $idus= $_SESSION['id_user'];
  $qguru = mysqli_query($conn, "SELECT * From guru 
  join ptk on guru.id_ptk=ptk.id_ptk
  join mapel on mapel.id_mapel=guru.id_mapel
  where guru.id_guru='$idus'")or die(mysqli_error());
  $dguru = mysqli_fetch_array($qguru);
  $namauser = $dguru['nama_ptk'];
  $mapel = $dguru['nama_mapel'];

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Guru - Aplikasi CBT </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../adminlte/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../adminlte/navigasi_soal.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../adminlte/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CBT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CBT SMAN 5</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
        
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/user.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $namauser; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/user.jpg" class="" alt="User Image">

                <p>
                 <?php echo $namauser; ?> <br>
                 <?php echo $_SESSION['level']; ?>  <?php echo $mapel; ?>
                </p>
              </li>
              <!-- Menu Body -->
          
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="?a=editakun" class="btn btn-default btn-flat">Ubah Password</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/user.jpg" class="" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $namauser ?></p>
          <a href="#"><?php echo $_SESSION['level']; ?> <?php echo $mapel; ?></a>
        </div>
      
     </div>
        <ul class="sidebar-menu" data-widget="tree">
        

        </ul>
       
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Manajemen Siswa</li>
        <li><a href="?a=data_siswa"> <i class="fa fa-circle-o text-red"></i>Data Siswa </a></li>
        <li class="header">Manajemen CBT</li>
        <li><a href="?a=soal"> <i class="fa fa-circle-o text-green"></i>Manajemen Soal</a></li>
        <!-- <li><a href="?a=pembahasan"> <i class="fa fa-circle-o text-green"></i>Manajemen Pembahasan Soal</a></li> -->
        <li class="header">Penilaian</li>
        <li><a href="?a=hasil"> <i class="fa fa-circle-o text-green"></i>Lihat Hasil Ujian Siswa</a></li>
      </ul>
    </section>

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      
              <?php
              if ($masaberlaku <$tanggalsekarang ) {
                echo "Masa berlaku habis";
              }
              else{
               include 'template/judul_konten.php'; 
             }
               ?>
       
      </h1>
  <!--     <ol class="breadcrumb">
        <li><a href="#"><?php //echo date('l'). " ".date('d M Y'); ?></a></li>
        
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">

             <?php
              if ($masaberlaku <$tanggalsekarang ) { ?>
                <div class="callout callout-info">
                <h4>Web Maintenance</h4>
                Website ini sedang dalam masa maintenance <br>
                harap hubungi developer untuk memperpanjang website
              </div>
              <?php }
              else{
               include 'template/konten.php'; 
             }?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    <strong>Admin Page -- To CPNS Management</strong>
    </div>
       <strong>2019 | Computer Based Test | Template  <a href="https://adminlte.io">AdminLTE</a> Design By <a href="https://colorlib.com/">Colorlib</a> | Created By <a href="http://hamidseptian.000webhostapp.com/">Hamid Septian</a></strong>
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="../adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->


<script src="../adminlte/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()

    $('#tabel').DataTable()
    $('#tabel2').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>

<?php } ?>