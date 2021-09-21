

<a href="" class=" btn btn-info"  data-toggle="modal" data-target="#addfilegd">Tambah Link Modul</a>
<form action="form/modul/save_file_gd.php" method="post"  enctype="multipart/form-data">
<div class="modal fade" id="addfilegd">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Modul Via Link Google Drive</h4>
              </div>
              <div class="modal-body">
              <div class="form-group">
                  <label>Nama Modul</label>
                  <input type="text" name="ket" class="form-control">
              </div>
              <div class="form-group">
                  <label>Link Modul</label> <br>
                  <input type="text" name="link" class="form-control">
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Link </button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>

<div class="clearfix"></div>
<hr>


<?php


include "../../koneksi.php.php";
  
  $perintah="select * From modul_gd";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="tabel2">
	<thead>
	<tr>
		<td>No</td>
		<td>Nama Modul</td>
		
		<td>Option</td>
	</tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
$id=$data['id_modul'];
$ket=$data['nama_file'];
$file=$data['link_download'];
;

?>
	<tr>
		<td><?php echo $no++; ?></td>
	

		
	<td><?php echo $ket; ?></td>
	
	<td>
    <a href="<?php echo $file;?>" class="btn btn-info btn-xs" target="_blank">Buka Link</a> 
    <a href="form/modul/delete_link.php?id=<?php echo $id ?>" class="btn btn-danger btn-xs"  onclick="return confirm('Hapus Link <?php echo $ket; ?> ..??')">Hapus Link</a> 
   	</td>
		</tr>

		<?php } ?>
				
	</table>



