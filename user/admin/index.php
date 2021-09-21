<?php 
session_start();
$tanggalsekarang = date('Ymd');
$masaberlaku = 20200831 ;
//echo $tanggalsekarang;

if ($_SESSION['login']!=true) {
   header('location:../../');
}
elseif ($_SESSION['level']!=='Admin') {
   header('location:../../');
}
else{
  include "../../koneksi.php";
  $id=$_SESSION['id_user'];
  $quser=mysqli_query($conn, "SELECT * from admin where id='$id'")or die(mysqli_error());
  $duser=mysqli_fetch_array($quser);
  $namauser = $duser['nama_admin'];

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator -- Aplikasi Computer Based Test SMAN 5 Pariaman</title>
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
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CBT SMA 5</b></span>
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
              <span class="hidden-xs"><?php echo $namauser ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/user.jpg" class="" alt="User Image">

                <p>
                 <?php echo $namauser ?> <br>
                 level
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
          <a href="#">level </a>
        </div>
      
     </div>
        <ul class="sidebar-menu" data-widget="tree">
        

        </ul>
       
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Management Sekolah</li>
       
                 <li><a href="?a=siswa_kelas"> <i class="fa fa-book"></i>Data Siswa </a></li>
                 <li><a href="?a=kelas"> <i class="fa fa-book"></i>Data Kelas </a></li>
                 <li><a href="?a=ptk"> <i class="fa fa-book"></i>Data Pegawai</a></li>
                 <li><a href="?a=guru"> <i class="fa fa-book"></i>Data Guru </a></li>
                 <li><a href="?a=akses_guru"> <i class="fa fa-book"></i>Akses Login Guru</a></li>
                 <li><a href="?a=mapel"> <i class="fa fa-book"></i>Data Mata Pelajaran </a></li>
                 <!-- <li><a href="?a=guru_mapel"> <i class="fa fa-book"></i>Data Guru Mata Pelajaran </a></li> -->
                 <li><a href="?a=pembagian_mapel"> <i class="fa fa-book"></i>Pembagian Mata Pelajaran</a></li>
        <li class="header">Managemen Ujian</li>
                 <li><a href="?a=waktu"> <i class="fa fa-book"></i>Setting Ujian</a></li>
                 <li><a href="?a=nilai_kelas"> <i class="fa fa-book"></i>Data Hasil Ujian Siswa</a></li>
        
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">

             <?php
             // if (isset($_SESSION['pesan'])) {
             // echo $_SESSION['pesan'];
             // unset($_SESSION['pesan']);
             // }
                include 'template/konten.php'; 
             ?>
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
       <strong>2020 | Aplikasi Computer Based Test | Template  <a href="https://adminlte.io">AdminLTE</a> Design By <a href="https://colorlib.com/">Colorlib</a> | Created By <a href="http://hamidseptian.000webhostapp.com/">Hamid Septian</a></strong>
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
 $('#tabelscrol').DataTable( {
    "scrollX": true
    } );
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