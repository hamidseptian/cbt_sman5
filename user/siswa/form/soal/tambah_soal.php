 
<?php 
   $id=$_GET['idp'];
   $jenis=$_GET['jenis'];
   

 ?>
 <form action="form/soal/simpan_soal.php" method="post" enctype="multipart/form-data">
                                           
      <input type="hidden" name="idp" value="<?php echo $id ?>">
    <div class="form-group">
        <label>Jenis Soal</label>
      <input type="text" name="jenis" value="<?php echo $jenis ?>" class="form-control" readonly>
    </div>    
       <div class="form-group">
        <label>Soal</label>
       <textarea name="soal" class="form-control" required></textarea>
    </div>                                    
                            
    
    <div class="form-group">
        <label>Pilihan Jawaban</label>

     <input type="text" name="jawaban[]" class="form-control" placeholder="Option A">
    
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option B">
     
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option C">
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option D">
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option E">
    </div>                                    
              

       <div class="form-group">
        <label>Kunci Jawaban</label>
           <select name="kunci" class="form-control" >
        <?php 
          $jawaban  =['A','B','C','D','E'];
          foreach ($jawaban  as $p) {?>
            <option value="<?php echo $p ?>"><?php echo $p ?></option>
         <?php }
         ?>
       </select>
    </div>   













    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
        
        <span id="payment-button-amount">Simpan Soal</span>
      </button>
                                           
                                        </form>