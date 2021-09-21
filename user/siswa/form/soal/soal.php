<?php 

$idsiswa=$_SESSION['id_user'];
$idpaket=$_GET['id'];

 $q3=mysqli_query($conn, "SELECT * FROM ujian where id_paket='$idpaket' and id_siswa='$idsiswa' ")or die("salah");
 $d1=mysqli_fetch_array($q3);
 if ($d1['jadwal_ujian']=='') {
?>

<div class="col-md-9">
      <div id='timer'></div>

 <?php 
include "pertanyaan.php";
 ?>
</div>
<div class="col-md-3" style="overflow: scroll; height: 400px">

<h3>Navigasi Soal</h3>
<br>
	<?php 
include "waktu_navigasi.php";
 ?>

</div>
<div class="clearfix"></div>
<hr> 
<div class="col-md-12">

<?php 



$q=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'")or die("query salah");
$totsoal=mysqli_num_rows($q);
$q2=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_siswa='$idsiswa'")or die("query salah");
$totterjawab=mysqli_num_rows($q2);
$belumdijawab=$totsoal-$totterjawab;
 ?>

	<div class="col-lg-4 col-xs-6">
	  <div class="small-box bg-aqua">
	    <a href="#" class="small-box-footer">
	     <p>Total Soal</p>
	    </a>
	    <div class="inner">
	      <h3><center><?php echo $totsoal ?></center></h3>
	    </div>
	  </div>
	</div>
	
	<div class="col-lg-4 col-xs-6">
	  <div class="small-box bg-aqua">
	    <a href="#" class="small-box-footer">
	     <p>Dijawab</p>
	    </a>
	    <div class="inner">
	      <h3><center><?php echo $totterjawab ?></center></h3>
	    </div>
	  </div>
	</div>
	
	<div class="col-lg-4 col-xs-6">
	  <div class="small-box bg-aqua">
	    <a href="#" class="small-box-footer">
	     <p>Belum Dijawab</p>
	    </a>
	    <div class="inner">
	      <h3><center><?php echo $belumdijawab ?></center></h3>
	    </div>
	  </div>
	</div>

</div>

<?php  }
 else{ ?>
 	<script type="text/javascript">
 		alert('Anda telah melaksanakan ujian \n Untuk mengulangi ujian ini silahkan klik ujian ulang pada menu Try Out');
 		window.location.href='form/soal/redirect.php';
 	</script>

<?php } ?>