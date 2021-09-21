 <head>
     <script type="text/javascript" src="form/ckeditor/ckeditor.js"></script>
</head> 
<?php 
   $id=$_GET['idp'];


include "../koneksi.php" ;
$q=mysqli_query($conn, "SELECT max(nomor_soal) as nomor from soal where id_paket='$id'")or die("query salah");
$dt=mysqli_fetch_array($q);
$nilaimax=$dt['nomor'];   
$nomorsekarang = $nilaimax+1;

 ?>
 <form action="form/soal/simpan_soal.php" method="post" enctype="multipart/form-data">
                                           
      <input type="hidden" name="idp" value="<?php echo $id ?>">
    <div class="form-group">
        <label>Nomor Soal</label>
      <input type="text" name="nomor" value="<?php echo $nomorsekarang ?>" class="form-control" readonly>
    </div>   
   
<div class="form-group">
        <label>Gambar</label> <br>
      <input type="file" name="file" >
    </div>   
       <div class="form-group">
        <label>Soal</label>
       <textarea name="soal" class="ckeditor" id="ckedtor"  required ></textarea>
    </div>                                    
                            
    
    <div class="form-group">
        <label>Pilihan Jawaban</label>

    
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option A" required>
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option B" required>
     
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option C" required>
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option D" required>
     <input type="text" name="jawaban[]" class="form-control" placeholder="Option E" required>
    </div>                                    
              

       <div class="form-group">
        <label>Kunci Jawaban</label>
           <select name="kunci" class="form-control" >
        <?php 
          $jawaban  =['Pilih Kunci Jawaban','A','B','C','D','E'];
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