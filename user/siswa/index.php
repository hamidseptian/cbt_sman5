<?php 
session_start();
if ($_SESSION['login']!=true) {
   header('location:../../');
}
elseif ($_SESSION['level']!=='Siswa') {
  echo "<script>
      alert('Anda bukan siswa');
    </script>
  ";

  echo "<meta http-equiv='refresh' content='0; url=http:../../'>";
   //header('location:../../');
}
else{
  include "../../koneksi.php";
  $idus= $_SESSION['id_user'];
$prt=mysqli_query($conn, "SELECT * from siswa where id_siswa='$idus'")or die("salah");
$data=mysqli_fetch_array($prt);
$namauser=$data['nama_siswa'];
$idkelas=$data['id_kelas'];
$qkelas = mysqli_query($conn, "SELECT * from kelas where id_kelas='$idkelas'");
$dkelas = mysqli_fetch_array($qkelas);


 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Siswa - Aplikasi CBT SMA 5 Pariaman</title>
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
      <span class="logo-mini"><i class="fa fa-folder-open"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>A-CBT SMA 5</b></span>
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
                <?php echo $namauser; ?><br>
                 Kelas : <?php echo $dkelas['tingkat'].' - Lokal : '.$dkelas['nama_kelas'] ?>
                </p>
              </li>
              <!-- Menu Body -->
          
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="?m=editakun&id=<?php echo $idus ?>" class="btn btn-default btn-flat">Ubah Password</a>
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
          <p><?php echo $namauser; ?></p>
          <a href="#">Kelas : <?php echo $dkelas['tingkat'].' - Lokal : '.$dkelas['nama_kelas'] ?></a>
        </div>
      
     </div>
        <ul class="sidebar-menu" data-widget="tree">
        

        </ul>
       
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <?php 
         if (isset($_SESSION["mulai"])) { ?>
          <li class="header">Anda sedang melaksanakan ujian <br>
            Semua menu di nonaaktifkan <br> 
          akan aktif kembali saat ujian selesai</li>
        <?php } 
        else{
    ?>
        <li class="header">Dashboard</li>
         <li><a href="?m=biodata"> <i class="fa fa-circle-o text-red"></i>Home </a></li>
         
        <li class="header">Simulasi Dan Ujian</li>
                   <!--  <li>
                        <a href="?m=panduan"> <i class="fa fa-circle-o text-yellow"></i>Panduan</a>
                    </li> -->
                    <li><a href="?m=ujian"> <i class="fa fa-circle-o text-yellow"></i>Ujian </a></li>
                    <li><a href="?m=hasil"> <i class="fa fa-circle-o text-green"></i>Hasil Ujian</a></li>
                    <!-- <li><a href="?m=rapor"> <i class="fa fa-circle-o text-green"></i>Rapor</a></li> -->
            
        <li class="header">Pengaturan</li>
                 
                    <li>
                      <a href="../logout.php" ><i class="fa fa-circle-o text-green"></i>Log out</a>
                    </li>

                  <?php } ?>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      
              <?php include 'template/judul_konten.php'; ?>
       
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">

          

              <?php include 'template/konten.php'; ?>
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
      <b>Version</b> 2.4.13-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
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
    $('#tabel2').DataTable()
    $('#tabelscrol').DataTable( {
        "scrollX": true
    } );
    $('#tabel3').DataTable()
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