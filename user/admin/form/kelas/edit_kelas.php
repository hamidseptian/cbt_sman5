<div class="box-header with-border">
  <h3 class="box-title">
    Perbaharui Kelas
  </h3>
  <div class="pull-right">
  </div>
  
</div>


<div class="clearfix"></div>



<?php

$id=$_GET['id'];
include "../../koneksi.php";
  
  $perintah="SELECT * From kelas where id_kelas='$id'";
  $jalan=mysqli_query($conn, $perintah);
  $d1=mysqli_fetch_array($jalan);
  $no=1;
?>
<br>
<div class="col-md-12">
  
<form action="form/kelas/simpanedit_kelas.php" method="post">
   <div class="form-group">
                  <label>Kelas</label>
                  <select name="tingkat" class="form-control">
                    <?php
                      $kelas = ['10','11','12'];
                      foreach ($kelas as $kls) { ?>
                        <option value="<?php echo $kls ?>" <?php if($kls==$d1['tingkat']){echo "selected";} ?>><?php echo $kls ?></option>
                      <?php } ?>
                    
                  </select>
              </div>
  <div class="form-group">
    <label>Lokal</label>
    <input type="hidden" name="id" class="form-control" value="<?php echo $d1['id_kelas'] ?>">
    <input type="text" name="kelas" class="form-control" value="<?php echo $d1['nama_kelas'] ?>">
  </div>

   <div class="form-group">
                  <label>Wali Kelas</label>
                  <select name="wali" class="form-control">
                    <?php
                      $qptk = mysqli_query($conn, "SELECT * from ptk");
                      while ($dptk = mysqli_fetch_array($qptk)) { ?>
                        <option value="<?php echo $dptk['id_ptk'] ?>" <?php if($dptk['id_ptk']==$d1['id_ptk']){echo "selected";} ?>><?php echo $dptk['nama_ptk'] ?></option>
                      <?php } ?>
                    
                  </select>
              </div>
  <div class="form-group">
    <button class="btn btn-info btn-sm">Simpan Perubahan</button>
    <a href="?a=kelas" class=" btn btn-info btn-sm" >Kembali</a>
  </div>
</form>
</div>