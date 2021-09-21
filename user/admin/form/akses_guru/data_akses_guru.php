<div class="box-header with-border">
  <h3 class="box-title">
    Data Akses Login Guru
  </h3>
  <!-- <div class="pull-right">
    <a href="#" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#addguru">Tambah Guru</a>
  </div> -->
  
</div>


<?php


include "../../koneksi.php";
  
  $perintah="SELECT * From guru 
  join ptk on guru.id_ptk=ptk.id_ptk
  join mapel on mapel.id_mapel=guru.id_mapel";
  $jalan=mysqli_query($conn, $perintah)or die(mysqli_error());

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="tabelscrol" border="1" width="100%">
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
    <td>Username</td>
    <td>Pssword</td>

    
	
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
     <?php if ($data['username']=='') { ?>
     <td colspan="2">Belum ada akses login </td>
     <?php }else{ ?>
     <td><?php echo $data['username'] ?></td>
     <td><?php echo $data['password'] ?></td>
     <?php } ?>
	<td>
    <?php if ($data['username']=='') { ?>
    <a href="form/akses_guru/addakses_auto.php?id=<?php echo $id ?>" class="btn btn-info btn-xs" onclick="return confirm('Berikan data akses guru  atas nama <?php echo $data['nama_guru'] ?>.?')">Berikan Akses</a> 
    <!-- <a href="?a=tambah_akses_guru&id=<?php echo $id ?>" class="btn btn-default btn-xs">Berikan Akses</a>  -->
    <?php }else{ ?>
    <!-- <a href="?a=tambah_akses_guru&id=<?php echo $id ?>" class="btn btn-default btn-xs">Edit</a>  -->
    <a href="form/akses_guru/addakses_auto.php?id=<?php echo $id ?>" class="btn btn-info btn-xs" onclick="return confirm('Berikan data akses guru  atas nama <?php echo $data['nama_guru'] ?>.?')" title="reset akses" data-toggle="tooltip"><i class="fa fa-edit"></i></a> 
    <a href="form/akses_guru/hapus_akses_guru.php?id=<?php echo $id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Hapus data akses guru  atas nama <?php echo $data['nama_guru'] ?>.?')"  title="hapus akses" data-toggle="tooltip"><i class="fa fa-trash"></i></a> 
    <?php } ?>
	</td>
		</tr>



		<?php } ?>
				
	</table>
