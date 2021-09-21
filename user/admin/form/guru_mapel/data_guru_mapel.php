<div class="box-header with-border">
  <h3 class="box-title">
    Data Guru Dan Staff SMAN 5 Pariaman
  </h3>
  <div class="pull-right">
    <a href="#" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#addguru">Tambah Pengajar</a>
  </div>
  
</div>

<form action="form/guru/simpan_guru.php" method="post"  enctype="multipart/form-data">
<div class="modal fade" id="addguru">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Guru</h4>
              </div>
              <div class="modal-body">   
                <div class="form-group">
                  <label>Nama Guru</label>
                  <select name="guru" class="form-control">
                    <?php 
                    $qguru = mysqli_query($conn, "SELECT * from guru");
                    while($dguru = mysqli_fetch_array($qguru)){ ?>
                      <option value="<?php echo $dguru['id_guru'] ?>"><?php echo $dguru['nama_guru'] ?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group">
                  <label>Mata Pelajaran Yang Diajarkan</label>
                  <select name="mapel" class="form-control">
                    <?php 
                    $qmapel = mysqli_query($conn, "SELECT * from mapel");
                    while($dmapel = mysqli_fetch_array($qmapel)){ ?>
                      <option value="<?php echo $dmapel['id_mapel'] ?>"><?php echo $dmapel['nama_mapel'] ?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Mata Pelajaran</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>

<div class="clearfix"></div>



<?php


include "../../koneksi.php";
  
  $perintah="SELECT * From guru join mapel on mapel.id_mapel=guru.id_mapel";
  $jalan=mysqli_query($conn, $perintah)or die(mysqli_error());

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="tabelscrol" border="1" width="100%">
	<thead>
	<tr>
    <td>No</td>
    <td>NIP</td>
    <td>Nama</td>
    <td>Jabatan</td>
    <td>Mata Pelajaran</td>
    <td>Option</td>
  </tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
$id=$data['id_guru'];
$mapel=$data['nama_mapel'];


?>
	<tr>
		<td><?php echo $no++; ?></td>
     <td><?php echo $data['nip'] ?></td>
     <td><?php echo $data['nama_guru'] ?></td>
     <td><?php echo $data['jabatan'] ?></td>
     <td><?php echo $data['nama_mapel'] ?></td>
  
	<td>
    <a href="?a=edit_guru&id=<?php echo $id ?>" class="btn btn-default btn-xs">Edit</a> 
    <a href="form/guru/hapus_guru.php?id=<?php echo $id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda akan menghapus guru <?php echo $mapel ?> atas nama <?php echo $guru ?>.?')">Hapus</a> 
	</td>
		</tr>



		<?php } ?>
				
	</table>
