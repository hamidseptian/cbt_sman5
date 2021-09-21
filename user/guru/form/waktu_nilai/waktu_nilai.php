<?php 
include "../koneksi.php" ;

//waktu
$perintah= "select * from waktu where id_waktu='1'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$dw=mysqli_fetch_array($sql);
$waktu=$dw['waktu'];
$idw=$dw['id_waktu'];


//ketentuan  nilai
$pr= "select * from ketentuan_nilai where id_ketentuan='0'";
$sql2 = mysqli_query($conn, $pr) or die("query salah");
$dkn=mysqli_fetch_array($sql2);
$tiu=$dkn['tiu'];
$twk=$dkn['twk'];
$tkp=$dkn['tkp'];
$idkn=$dkn['id_ketentuan'];

 ?>

    <div class="col-md-12">
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Ketentuan Waktu</h3>
            </div>
            <div class="box-body">
                <div class="col-lg-12 col-xs-12">
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
                
                <span id="payment-button-amount">Atur Ulang Waktu</span>
                </button>
                </div>
            </div>
         </div>
    </div>



<form action="form/waktu_nilai/update_waktu.php" method="post">
<div class="modal fade" id="set_waktu">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atur Ulang Waktu</h4>
              </div>
              <div class="modal-body">
              <div>
                  <label>Set Waktu (Menit)</label>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $idw ;?>">
                  <input type="text" name="waktu" class="form-control" value="<?php echo $waktu ;?>" maxlength="3" onkeypress="return hanyaAngka(event)">
              </div> 
              
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Paket</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>

<hr>


<h3></h3>



<div class="col-md-12">
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Ketentuan Nilai</h3>

           
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="col-lg-4 col-xs-12">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <a href="#" class="small-box-footer">
                     <p>TIU</p>
                    </a>
                    <div class="inner">
                      <h3><center><?php echo $tiu ?> Poin</center></h3>
                    </div>
                    
                  </div>
                </div>

                <div class="col-lg-4 col-xs-12">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <a href="#" class="small-box-footer">
                     <p>TWK</p>
                    </a>
                    <div class="inner">
                      <h3><center><?php echo $twk ?> Poin</center></h3>
                    </div>
                   
                    
                  </div>
                </div>

                <div class="col-lg-4 col-xs-12">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <a href="#" class="small-box-footer">
                     <p>TKP</p>
                    </a>
                    <div class="inner">
                      <h3><center><?php echo $tkp ?> Poin</center></h3>
                    </div>
                    
                  </div>
                </div>
                <div class="clearfix"></div>

           <div class="col-md-12">
                    
                 <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" data-toggle="modal" data-target="#set_nilai">
                
                <span id="payment-button-amount">Perbaharui Data Ketentuan Nilai</span>
                </button>
                </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>







<form action="form/waktu_nilai/update_nilai.php" method="post">
<div class="modal fade" id="set_nilai">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Perbaharui Data Ketentuan Nilai</h4>
              </div>
              <div class="modal-body">
              <div>
                  <label>TIU</label>
                  <input type="hidden" name="id" class="form-control" maxlength="3" onkeypress="return hanyaAngka(event)" value="<?php echo $idkn; ?>">
                  <input type="text" name="tiu" class="form-control" maxlength="3" onkeypress="return hanyaAngka(event)" value="<?php echo $tiu; ?>">
              </div> 
              <div>
                  <label>TWK</label>
                  <input type="text" name="twk" class="form-control" maxlength="3" onkeypress="return hanyaAngka(event)"  value="<?php echo $twk; ?>">
              </div>
              <div>
                  <label>TKP</label>
                  <input type="text" name="tkp" class="form-control" maxlength="3" onkeypress="return hanyaAngka(event)"  value="<?php echo $tkp; ?>">
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Paket</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>


  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>