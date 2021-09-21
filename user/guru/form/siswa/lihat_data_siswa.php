<?php 
include "../../koneksi.php";
$id=$_SESSION['id_ptk'];
$qkelas = mysqli_query($conn, "SELECT * from kelas left join ptk on ptk.id_ptk=kelas.id_ptk where kelas.id_ptk = '$id'");
$dkelas= mysqli_fetch_array($qkelas);
$idkelas = $dkelas['id_kelas'];
?>




<?php


  
  $perintah="SELECT * From siswa join kelas on kelas.id_kelas=siswa.id_kelas where kelas.id_kelas='$idkelas'";
  $jalan=mysqli_query($conn, $perintah)or die(mysqli_error());

  $jsiswa = mysqli_num_rows($jalan);
  $no=1;
?>

















      <div class="col-md-3">

          <div class="box-header with-border">
            <h3 class="box-title">Identitas Wali Kelas</h3>
          </div>
            
            <div class="box-body">
              <strong>Kelas</strong>

              <p class="text-muted"><?php echo $dkelas['tingkat'] ?></p>

              <hr>
      
              <strong>Lokal</strong>

              <p class="text-muted"><?php echo $dkelas['nama_kelas'] ?></p>

              <hr>
              <strong>Wali Kelas</strong>

              <p class="text-muted"><?php echo $dkelas['nama_ptk'] ?></p>

              <hr>
              <strong>Jumlah Siswa</strong>

              <p class="text-muted"><?php echo $jsiswa ?></p>

              <hr>

        
            </div>
           
          </div>
          <div class="col-md-9"> 

<div class="box-header with-border">
  <h3 class="box-title">Data Siswa Kelas <?php echo $dkelas['tingkat'] ?> Lokal  <?php echo $dkelas['nama_kelas'] ?></h3>
  
</div>
<br>  
 <table class="table table-striped table-bordered" id="example1">
	<thead>
	<tr>
		<td>No</td>
    <td>Nama siswa</td>
		
	</tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
$id=$data['id_siswa'];
$kelas=$data['nama_kelas'];
$siswa=$data['nama_siswa'];
;

?>
	<tr>
		<td><?php echo $no++; ?></td>
	

		
	<td><?php echo $siswa; ?></td>

		</tr>

		<?php } ?>
				
	</table>
          </div>


