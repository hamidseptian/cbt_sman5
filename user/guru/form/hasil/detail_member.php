<?php 
include "../koneksi.php";
    $id=$_GET['id'];
    //echo $id;



$perintah= "SELECT * from member  where id_member='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlah=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 
?>
<div class="row">
                    
           
                    <div class="box-body">
                      <div class="col-md-6">
                      <strong> Nama Lengkap</strong>
                      <p class="text-muted">
                        <?php echo $data['nama']; ?>
                      </p>
                      <hr>

                      <strong> Panggilan</strong>
                      <p class="text-muted">
                        <?php echo $data['panggilan']; ?>
                      </p>
                      <hr>

                      <strong> Alamat Email</strong>
                      <p class="text-muted">
                        <?php echo $data['email']; ?>
                      </p>
                      <hr>

                      <strong>No HP</strong>
                      <p class="text-muted">
                        <?php echo $data['hp']; ?>
                      </p>
                      <hr>

                      <strong>No WhatsApp</strong>
                      <p class="text-muted">
                        <?php echo $data['wa']; ?>
                      </p>
                      <hr>

                      <strong>Tempat / Tanggal Lahir</strong>
                      <p class="text-muted">
                        <?php echo $data['tmpl']; ?>  <?php echo $data['tgll']; ?>
                      </p>
                      <hr>

                      <strong>Jenis Kelamin</strong>
                      <p class="text-muted">
                        <?php echo $data['jk']; ?>
                      </p>
                      <hr>

                      <strong> Alamat</strong>
                      <p class="text-muted">
                        <?php echo $data['alamat']; ?>
                      </p>
                      <hr>


                      </div>
                      <div class="col-md-6">
           
                      <strong> Pendidikan Terakhir</strong>
                      <p class="text-muted">
                        <?php echo $data['pendidikan']; ?>
                      </p>
                      <hr>

                      <strong>Universitas / Sekolah</strong>
                      <p class="text-muted">
                        <?php echo $data['instansi']; ?>
                      </p>
                      <hr>

                      <strong>Jurusan / Program Study</strong>
                      <p class="text-muted">
                        <?php echo $data['jurusan']; ?>
                      </p>
                      <hr>

                      <strong>IPK</strong>
                      <p class="text-muted">
                        <?php echo $data['ipk']; ?>
                      </p>
                      <hr>

                      <strong>Pernah Mengikuti CPNS?</strong>
                      <p class="text-muted">
                        <?php echo $data['pernah_cpns']; ?>
                      </p>
                      <hr>

                      <strong>Jika Pernah Berapa Nilai</strong>
                      <p class="text-muted">
                        <?php echo $data['nilai']; ?>
                      </p>
                      <hr>

                      <strong>Mengikuti Program</strong>
                      <p class="text-muted">
                        <?php echo $data['program']; ?>
                      </p>
                      <hr>

                      <strong>Pembayaran</strong>
                      <p class="text-muted">
                        <?php echo $data['pembayaran']; ?>
                      </p>
                      <hr>
                    </div>
                    </div>
            
                <!-- /.col -->
              </div>

<br><a href="?a=member" class=" btn btn-info">Kembali</a>
