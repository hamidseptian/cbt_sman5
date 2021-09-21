<?php 
include "../../koneksi.php";
$id=$_GET['id'];
$qsiswa = mysqli_query($conn, "SELECT * from siswa where id_siswa = '$id'")or die(mysqli_error());
$dsiswa= mysqli_fetch_array($qsiswa);

$idkelas = $dsiswa['id_kelas'];
$qkelas = mysqli_query($conn, "SELECT * from kelas where id_kelas = '$idkelas'")or die(mysqli_error());
$dkelas= mysqli_fetch_array($qkelas);
?>            <div class="box-header with-border">
              <h3 class="box-title">Edit  Data Siswa Kelas <?php echo $dkelas['tingkat'] ?> Lokal  <?php echo $dkelas['nama_kelas'] ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="form/siswa/simpanedit_siswa.php" method="post">

              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['nama_siswa'] ?>" name="nama_siswa">
                    <input type="hidden" class="form-control" required  name="id" value="<?php echo $id ?>">
                    <input type="hidden" class="form-control" required  name="idkelas" value="<?php echo $idkelas ?>">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">NIS </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required value="<?php echo $dsiswa['nis'] ?>" name="nis">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">NISN </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required value="<?php echo $dsiswa['nisn'] ?>" name="nisn">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['tmpl'] ?>" name="tmpl">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" required value="<?php echo $dsiswa['tgll'] ?>" name="tgll">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin </label>
                  <div class="col-sm-10">
                    <select class="form-control" required value="<?php echo $dsiswa['jk'] ?>" name="jk">
                      <option value="L" <?php if($dsiswa['jk']=='L'){echo "selected";} ?>>Laki-laki</option>
                      <option value="P" <?php if($dsiswa['jk']=='P'){echo "selected";} ?>>Perempuan</option>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama </label>
                  <div class="col-sm-10">
                    <select class="form-control" required value="<?php echo $dsiswa['agama'] ?>" name="agama">
                      <?php $agama = array('Islam','Kristen','Hindu','Budha');
                      foreach ($agama as $a) { ?>
                         
                      <option value="<?php echo $a ?>" <?php if($dsiswa['agama']==$a){echo "selected";} ?>><?php echo $a ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah Saudara </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required value="<?php echo $dsiswa['sdk'] ?>" name="sdk">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Anak Ke </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required value="<?php echo $dsiswa['anak_ke'] ?>" name="anak_ke">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['alamat'] ?>" name="alamat">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">No HP </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required value="<?php echo $dsiswa['no_telp'] ?>" name="no_telp">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekolah Asal </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['sekolah_asal'] ?>" name="sekolah_asal">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ayah </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['nama_ayah'] ?>" name="nama_ayah">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['nama_ibu'] ?>" name="nama_ibu">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan Ayah </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['kerja_ayah'] ?>" name="kerja_ayah">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan Ibu </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['kerja_ibu'] ?>" name="kerja_ibu">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email </label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" required value="<?php echo $dsiswa['email_siswa'] ?>" name="email_siswa">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required value="<?php echo $dsiswa['password'] ?>" name="password" value="123" readonly>
                  </div>
                </div>   



              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="?a=data_siswa&id=<?php echo $idkelas ?>" class="btn btn-info">Cancel</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          