<?php 
include "../../koneksi.php";
$id=$_GET['id'];
$qkelas = mysqli_query($conn, "SELECT * from kelas where id_kelas = '$id'");
$dkelas= mysqli_fetch_array($qkelas);
?>            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Siswa Kelas <?php echo $dkelas['tingkat'] ?> Lokal  <?php echo $dkelas['nama_kelas'] ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="form/siswa/simpan_siswa.php" method="post">

              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="nama_siswa">
                    <input type="hidden" class="form-control" required name="kelas" value="<?php echo $id ?>">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">NIS </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required name="nis">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">NISN </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required name="nisn">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="tmpl">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" required name="tgll">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin </label>
                  <div class="col-sm-10">
                    <select class="form-control" required name="jk">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama </label>
                  <div class="col-sm-10">
                    <select class="form-control" required name="agama">
                      <?php $agama = array('Islam','Kristen','Hindu','Budha');
                      foreach ($agama as $a) { ?>
                         
                      <option value="<?php echo $a ?>"><?php echo $a ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah Saudara </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required name="sdk">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Anak Ke </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required name="anak_ke">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="alamat">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">No HP </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required name="no_telp">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekolah Asal </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="sekolah_asal">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ayah </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="nama_ayah">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="nama_ibu">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan Ayah </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="kerja_ayah">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan Ibu </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="kerja_ibu">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email </label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" required name="email_siswa">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="password" value="123" readonly>
                  </div>
                </div>   



              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="?a=data_siswa&id=<?php echo $id ?>" class="btn btn-info">Cancel</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          