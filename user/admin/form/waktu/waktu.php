<?php 
include "../koneksi.php" ;

//waktu
$perintah= "select * from waktu where id_waktu='1'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$dw=mysqli_fetch_array($sql);
$waktu=$dw['waktu'];
$jenis_ujian=$dw['jenis_ujian'];
$idw=$dw['id_waktu'];


 ?>

    <div class="col-md-12">
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Setting Ujian</h3>
            </div>
            <div class="box-body">
                <div class="col-lg-6 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <a href="#" class="small-box-footer">
                     <p>Ujian Yang Dilaksanakan</p>
                    </a>
                    <div class="inner">
                      <h3><center><?php echo $jenis_ujian ?></center></h3>
                    </div>
                    
                    
                  </div>
                </div>
                <div class="col-lg-6 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <a href="#" class="small-box-footer">
                     <p>Waktu yang di  setting</p>
                    </a>
                    <div class="inner">
                      <h3><center><?php echo $waktu ?> Menit</center></h3>
                    </div>
                    
                    
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    
                 <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" data-toggle="modal" data-target="#set_waktu">
                
                <span id="payment-button-amount">Setel Ulang</span>
                </button>
                </div>
            </div>
         </div>
    </div>



<form action="form/waktu/update_waktu.php" method="post">
<div class="modal fade" id="set_waktu">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atur Ulang Waktu</h4>
              </div>
              <div class="modal-body">
              <div class="form-group">
                  <label>Jenis Ujian</label>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $idw ;?>">
                  <select name="jenis" class="form-control">
                    <option value="UTS">UTS</option>
                    <option value="UAS">UAS</option>
                  </select>
              </div> 
              <div class="form-group">
                  <label>Set Waktu (Menit)</label>
                 
                  <input type="text" name="waktu" class="form-control" value="<?php echo $waktu ;?>" maxlength="3" onkeypress="return hanyaAngka(event)">
              </div> 
              
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
               
              </div>
            </div>
            
          </div>
          
        </div>
</form>

<hr>


<h3></h3>


  


  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>