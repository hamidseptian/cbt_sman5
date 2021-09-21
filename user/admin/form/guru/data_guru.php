<div class="box-header with-border">
  <h3 class="box-title">
    Data Guru
  </h3>
  <div class="pull-right">
    <a href="form/guru/print_guru.php" class=" btn btn-default btn-sm" >Print Data Guru</a>
    <!-- <a href="?a=tambah_guru" class=" btn btn-info btn-sm" >Tambah Guru</a> -->
      <a href="" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#addguru">Tambah Guru</a>
  </div>
  
</div>
  

<form action="form/guru/simpan_guru.php" method="post"  enctype="multipart/form-data">
<div class="modal fade" id="addguru">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Guru Mata Pelajaran</h4>
              </div>
              <div class="modal-body">
              <div class="form-group">
                  <label>Nama Pendidik / Tenaga Kepandidikan</label>
                  <select name="ptk" class="form-control">
                    <?php
                      $qptk = mysqli_query($conn, "SELECT * from ptk");
                      while ($dptk = mysqli_fetch_array($qptk)) { ?>
                        <option value="<?php echo $dptk['id_ptk'] ?>"><?php echo $dptk['nama_ptk'] ?></option>
                      <?php } ?>
                    
                  </select>
              </div>
              <div class="form-group">
                  <label>Mata Pelajaran</label>
                  <select name="mapel" class="form-control">
                     <?php
                      $qmapel = mysqli_query($conn, "SELECT * from mapel");
                      while ($dmapel = mysqli_fetch_array($qmapel)) { ?>
                        <option value="<?php echo $dmapel['id_mapel'] ?>"><?php echo $dmapel['nama_mapel'] ?></option>
                      <?php } ?>
                    
                  </select>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Guru</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>


<?php


include "../../koneksi.php";
  
  $perintah="SELECT * From guru 
  join ptk on guru.id_ptk=ptk.id_ptk
  join mapel on mapel.id_mapel=guru.id_mapel";
  $jalan=mysqli_query($conn, $perintah)or die(mysqli_error());

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="tabelscrol" border="1">
	<thead>
	<tr>
    <td>No</td>
    <td>Nama</td>
    <td>NUPTK</td>
    <td>NIP</td>
    <td>Status Kepegawaian</td>
    <td>Jenis PTK</td>
    <td>Jenjang Pendidikan</td>
    <td>Mata Pelajaran  </td>
    <td>Option</td>
  </tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
$id=$data['id_guru'];



?>
	<tr>
		<td><?php echo $no++; ?></td>
	
    
     <td><?php echo $data['nama_ptk'] ?></td>
     <td><?php echo $data['nuptk'] ?></td>
     <td><?php echo $data['nip'] ?></td>
     <td><?php echo $data['status_pegawai'] ?></td>
     <td><?php echo $data['jenis_ptk'] ?></td>

     <td><?php echo $data['jenjang_pendidikan'] ?></td>
     <td><?php echo $data['nama_mapel'] ?></td>
  
	<td>
    <a href="?a=edit_guru&id=<?php echo $id ?>" class="btn btn-warning btn-xs">Edit</a> 
    <a href="form/guru/hapus_guru.php?id=<?php echo $id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Hapus data guru  atas nama <?php echo $data['nama_guru'] ?>.?')">Hapus</a> 
	</td>
		</tr>



		<?php } ?>
				
	</table>
