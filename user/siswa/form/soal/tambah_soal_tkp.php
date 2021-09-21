 
<?php 
   $id=$_GET['idp'];
   $jenis=$_GET['jenis'];
   

 ?>
 <form action="form/soal/simpan_soal_tkp.php" method="post" enctype="multipart/form-data">
                                           
      <input type="hidden" name="idp" value="<?php echo $id ?>">
    <div class="form-group">
        <label>Jenis Soal</label>
      <input type="text" name="jenis" value="<?php echo $jenis ?>" class="form-control" required  readonly>
    </div>    
       <div class="form-group">
        <label>Soal</label>
       <textarea name="soal" class="form-control" required  required></textarea>
    </div>                                    
                            
    
    <div class="form-group">
        <label>Pilihan Jawaban</label>
      <div class="col-md-12">

        <div class="col-md-9">
          <input type="text" name="jawaban[]" class="form-control" required  placeholder="Option A">
        </div>
        <div class="col-md-3">
          <input type="text" name="skor[]" class="form-control" required  placeholder="Skor A" maxlength="1">
        </div>

        <div class="col-md-9">
          <input type="text" name="jawaban[]" class="form-control" required  placeholder="Option B">
        </div>
        <div class="col-md-3">
          <input type="text" name="skor[]" class="form-control" required  placeholder="Skor B" maxlength="1">
        </div>

        <div class="col-md-9">
          <input type="text" name="jawaban[]" class="form-control" required  placeholder="Option C">
        </div>
        <div class="col-md-3">
          <input type="text" name="skor[]" class="form-control" required  placeholder="Skor C" maxlength="1">
        </div>

        <div class="col-md-9">
          <input type="text" name="jawaban[]" class="form-control" required  placeholder="Option D">
        </div>
        <div class="col-md-3">
          <input type="text" name="skor[]" class="form-control" required  placeholder="Skor D" maxlength="1">
        </div>

        <div class="col-md-9">
          <input type="text" name="jawaban[]" class="form-control" required  placeholder="Option E">
        </div>
        <div class="col-md-3">
          <input type="text" name="skor[]" class="form-control" required  placeholder="Skor E" maxlength="1">
        </div>
        <div class="clearfix"></div>
      </div>
        <div class="clearfix"></div>
    
    </div>                                    
              













    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
        
        <span id="payment-button-amount">Simpan Soal</span>
      </button>
                                           
                                        </form>