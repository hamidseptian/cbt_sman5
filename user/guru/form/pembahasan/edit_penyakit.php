<?php 
include "koneksi.php";
    $id=$_GET['id'];
    //echo $id;
    $query=mysqli_query($conn, "select * from penyakit where id_penyakit='$id'")or die("query salah");
    $data= mysqli_fetch_array($query);
    {
        $idp =$data['id_penyakit'];
        $nama =$data['nama_penyakit'];
        $ket =$data['keterangan_penyakit'];
        $gejala =$data['gejala'];
        $gambarlama =$data['gambar'];
        $pisahgejala=explode(",", $gejala);
      
       
    }

 ?>


 <form action="form/penyakit/simpanedit_penyakit.php" method="post" enctype="multipart/form-data">
                                           
                                            <div class="form-group">
                                                <label >Nama Penyakit</label>
                                               <input type="text" name="penyakit" class="form-control" value="<?php echo $nama ?>" required>
                                               <input type="hidden" name="idp" class="form-control" value="<?php echo $idp ?>" required>
                                               <input type="hidden" name="gb" class="form-control" value="<?php echo $gambarlama ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label >Keterangan Penyakit</label>
                                               <textarea name="keterangan" class="form-control" required><?php echo $ket ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label >Gejala</label><br>
                                                <table class="table"  id="bootstrap-data-table-export">
                                                  <thead>
                                                    <tr>
                                                      <td></td>
                                                      <td>Pilih Gejala</td>
                                                    </tr>
                                                  </thead>
                                                <?php include "koneksi.php" ;
													$perintah= "select * from gejala";
													$sql = mysqli_query($conn, $perintah);
													$no=1;
                          
                           
													while ($data=mysqli_fetch_array($sql)) { ?>
													<tr >
														<td style="width:3%">
                                               				<input type="checkbox" name="gejala[]" value="<?php echo $data['id_gejala']; ?>" <?php foreach ($pisahgejala as $key ) { if ($data['id_gejala']==$key) echo "checked";}?>>
                                               			</td>
                                               			<td>
                                               				<?php echo $data['keterangan']; ?>
                                               			</td>
                                               		</tr>
                                               <?php } ?>
                                               	</table>
                                            </div>
                                          
                                              <div class="form-group">
                                                <label >Gambar</label><br>
                                                <div class="col-md-6">
                                               <img src="form/penyakit/gambar/<?php echo $gambarlama ?>" style="width:50%  ">
                                                </div>
                                                 <div class="col-md-6">
                                                    <label>Perbaharui Gambar</label><br>
                                                <input  name="gambar" type="file" required="">
                                            </div>
                                            <div class="clearfix"></div>
                                            </div>
                                        
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        
                                                        <span id="payment-button-amount">Simpan</span>
                                           
                                        </form>