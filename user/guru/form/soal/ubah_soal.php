 <head>
     <script type="text/javascript" src="form/ckeditor/ckeditor.js"></script>
</head> 
<?php 
   $idp=$_GET['idp'];
   $ids=$_GET['ids'];

   $jenis=$_GET['jenis'];
include "../koneksi.php" ;
$q=mysqli_query($conn, "SELECT * from soal where id_paket='$idp' and nomor_soal='$ids'")or die("query salah");
$d=mysqli_fetch_array($q);
$nomor=$d['nomor_soal'];


 ?>
 <form action="form/soal/simpanedit_soal.php" method="post" enctype="multipart/form-data">
                                           
      <input type="hidden" name="idp" value="<?php echo $idp ?>">
    <div class="form-group">
        <label>Nomor Soal</label>
      <input type="text" name="nomor" value="<?php echo $nomor ?>" class="form-control" readonly>
    </div>   
    <div class="form-group">
        <label>Jenis Soal</label>
      <input type="text" name="jenis" value="<?php echo $d['jenis_soal'] ?>" class="form-control" readonly>
    </div>    
<div class="form-group">
        <label>Gambar</label> <br>
      <input type="file" name="file" >
    </div>   
       <div class="form-group">
        <label>Soal</label>
       <textarea name="soal" class="ckeditor" id="ckedtor"  required ><?php echo $d['soal'] ?></textarea>
    </div>                                    
                            
    
    <div class="form-group">
        <label>Pilihan Jawaban</label>
        <?php 
        $option=['A','B','C','D','E'];
        foreach ($option as $pilihan) {
           $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$idp'  and id_soal='$nomor' and pilihan='$pilihan'")or die("query salah");
           $d3=mysqli_fetch_array($q2);
           $value=$d3['jawaban'];
           ?>
           <input type="text" name="jawaban[]" class="form-control" placeholder="Option <?php echo $pilihan ?>" required value="<?php echo $value ?>">
        <?php   }

         ?>
    
  
    </div>                                    
              

       












    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
        
        <span id="payment-button-amount">Simpan Soal</span>
      </button>
                                           
                                        </form>