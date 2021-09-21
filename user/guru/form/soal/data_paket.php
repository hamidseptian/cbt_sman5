<?php 
include "../koneksi.php" ;
$idmapel=$_SESSION['id_mapel'];


 ?>
<!--  <a href="" class=" btn btn-sm btn-info"  data-toggle="modal" data-target="#addpaket">Tambah Paket Soal</a>
<form action="form/soal/simpan_paket.php" method="post">
<div class="modal fade" id="addpaket">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Paket Soal</h4>
              </div>
              <div class="modal-body">
              <div class="form-group">
                  <label>Nama Paket</label>
                  <input type="text" name="np" class="form-control">
              </div>
              <div class="form-group">
                  <label>Jenis Ujian</label>
                  <select name="jenis" class="form-control">
                    <option value="UTS">UTS</option>
                    <option value="UAS">UAS</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Kelas</label>
                  <select name="kelas" class="form-control">
                    <?php while($dkelas=mysqli_fetch_array($qkelas)){ ?>
                    <option value="<?php echo $dkelas['id_kelas'] ?>"><?php echo $dkelas['nama_kelas'] ?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-primary">Simpan Paket</button>
               
              </div>
            </div>
          </div>
        </div>
</form> -->

<?php $jenis= ['UTS','UAS'];
$waktu = mysqli_query($conn, "SELECT jenis_ujian from waktu");
$dwaktu = mysqli_fetch_array($waktu);
$jenissekarang = $dwaktu['jenis_ujian'];
foreach ($jenis as $j) { 
  if ($j==$jenissekarang) { ?>

<div class="box-header">
  <h3 class="box-title">Paket Soal <?php echo $j ?></h3>
</div>
<table class="table table-striped table-bordered" id="example1">
    <thead>
    <tr>
        <td  style="width:5%">No</td>
        <td>Tingkat Kelas</td>
        <td>Nama Paket</td>
        <td>Jumlah Soal</td>
        <td>Akses Siswa?</td>
 
        <td style="width:16%">Option</td>
    </tr>
</thead>
<tbody>
<?php
    $qkelas=mysqli_query($conn, "SELECT * from kelas group by tingkat");
    $no=1;
    while ($dkelas = mysqli_fetch_array($qkelas)) { 
      $tingkat = $dkelas['tingkat'];
      $qpaket = mysqli_query($conn , "SELECT * from paket where tingkat_kelas='$tingkat' and id_mapel='$idmapel' and jenis_ujian='$j'")or die(mysqli_error());
      $jpaket = mysqli_num_rows($qpaket);
      $data=mysqli_fetch_array($qpaket);
      $idpaket = $data['id_paket'];
      $qsoal = mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'");
      $jsoal = mysqli_num_rows($qsoal);
     
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td>Kelas <?php echo $dkelas['tingkat'] ?></td>
          <?php 
          if ($jpaket==0) { ?>
     
        <td colspan="3">
            Belum Ada Paket Soal 
          </td>
          <td>
            <a href="form/soal/addpaket.php?tingkat=<?php echo $dkelas['tingkat'] ?>&jenis=<?php echo $j ?>" class="btn btn-info btn-xs">Tambahkan Paket Soal</a>
          <?php }else{ ?>
             <td><?php echo $data['nama_paket'] ?></td>
        <td><?php echo $jsoal?></td>
        <td><?php echo $data['boleh_akses'] ?></td>
        <td>
               <a href="?a=detail_paket&id=<?php echo $data['id_paket']?>" class="btn btn-xs btn-info btn-sm fa fa-folder-open" title="Manajemen Soal pada <?php echo $data['nama_paket'] ?>" data-toggle="tooltip"></a>

              <?php if ($data['boleh_akses']=='Ya'): ?>

              <a href="form/soal/matikan.php?idp=<?php echo $data['id_paket'] ?>&izinkan=tidak" class="btn btn-xs btn-success btn-sm fa fa-exchange" title="Nonaktifkan paket ini" data-toggle="tooltip" onclick="return confirm('Apakah anda akan menonaktifkan paket <?php echo $nama_paket ?>??')"></a>
              <?php else: ?>

              <a href="form/soal/aktifkan.php?idp=<?php echo $data['id_paket'] ?>&izinkan=ya" class="btn btn-xs btn-warning btn-sm fa fa-exchange" title="Aktifkan paket ini" data-toggle="tooltip" onclick="return confirm('Apakah anda akan mengaktifkan paket <?php echo $data['nama_paket'] ?>??')"></a>
              <?php endif ?>
              
              <a href="?a=rename_paket&idp=<?php echo $data['id_paket'] ?>" class="btn btn-xs btn-warning btn-sm fa fa-pencil" title="Ubah Nama Paket Soal" data-toggle="tooltip" ></a>
              <a href="form/soal/delete_paket.php?idp=<?php echo $data['id_paket'] ?>" class="btn btn-xs btn-danger btn-sm fa fa-trash" title="Hapus Paket ini" data-toggle="tooltip" onclick="return confirm('Apakah anda akan menghapus <?php echo $data['nama_paket'] ?>??')"></a>

          <?php } ?>
        </td>
      </tr>
   <?php } ?>
  </tbody>
</table>

         
       

<?php }
} ?>

