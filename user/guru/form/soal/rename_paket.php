<?php 
include "../koneksi.php" ;
$idp=$_GET['idp'];

$perintah= "SELECT * from paket where id_paket='$idp'";
$sql = mysqli_query($conn, $perintah) or die("query salah");

$data=mysqli_fetch_array($sql);

 ?>
<form action="form/soal/simpan_renamepaket.php" method="post">

              <div>
                  <label> Nama Paket</label>
                  <input type="hidden" name="idp" class="form-control" value="<?php echo $data['id_paket']; ?>">
                  <input type="text" name="np" class="form-control" value="<?php echo $data['nama_paket']; ?>">
              </div>
              <br>
              <div>
                  <a href="?a=soal" class="btn btn-default  pull-right">Batal Ganti Nama</a>
                  <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                 
              </div>
        
             
               
               
        
</form>

