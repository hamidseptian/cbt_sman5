<?php
session_start();
include '../../../koneksi.php';

$id=$_GET['id'];
$sql="UPDATE  member set status_pembayaran='lunas', pembayaran='Tunai' where id_member='$id'";
$result=mysqli_query($conn, $sql) or die(mysqli_error()) ;

$_SESSION['pesan']="pembayaran lunas";
	
	
		$q3=mysqli_query($conn, "SELECT * from member where id_member='$id'");
		$d1=mysqli_fetch_array($q3);
		$tgl=$d1['tgll'];
		$email=$d1['email'];
		$pecahtgl=explode("-", $tgl);
		$tg=$pecahtgl[2];
		$bl=$pecahtgl[1];
		$th=$pecahtgl[0];
		$nama=$d1['nama'];


 



		$xnama = substr($nama,0,5);
	

		$perintahpembayaran= "UPDATE member set status_pembayaran='lunas', pembayaran='Transfer' where id_member='$id'";
		$sqlpembayaran=mysqli_query($conn, $perintahpembayaran) or die (mysqli_error());
	
		$user=$email;
		$pass=$tg.$bl.$th;
		//echo $pass;
		$password= password_hash($pass, PASSWORD_DEFAULT);

		//jika ada id member yang sama
		$id_mmbr="SELECT * FROM user where id_member='$id'";
		$jm_id_m=mysqli_query($conn, $id_mmbr);

		$usernm="SELECT * FROM user where username='$user'";
		$d3=mysqli_query($conn, $usernm);
		$jml_usernm=mysqli_num_rows($d3);
		echo $jml_usernm;
		if ($jml_usernm ==1 ) {
			echo "sudah ada";
			$_SESSION['pesan']="Username dan password belum di setting \n sistem mendeteksi username dan password sudah dipakai ";
			echo $_SESSION['pesan'];
		header("Location:../../?a=set_password_manual&id=$id");
		}
		// elseif($jm_id_m ==1){
		// 	$_SESSION['pesan']="Sistem mendeteksi username dan password untuk member  $nmp Sudah ada   ";
		// 	header("Location:../../?a=pembayaran");
		// }
		else{
		$sql= "INSERT into user (id_user, username, password ,password_awal, level) values ('$id', '$user', '$password', '$pass','member')";
		$execute=mysqli_query($conn, $sql)or die(mysqli_error());
		$_SESSION['pesan']="sukses set";
		//untuk kirim email
		    $from = "aldebaraneducare@gmail.com";    
		    $to = $email;    
		    $subject = "Aktivasi Akun Bimbel Aldebaran Educare";    
		    $message = "Hai ".$nama."\n Selamat. Akun bimbel anda anda telah di aktifkan\n  untuk masuk ke halaman member silahkan masukan data berikut \nUsername : ".$email."\n Password : ".$pass;   
		    $headers = "From:" . $from;    
		    mail($to,$subject,$message, $headers);   
		header("Location:../../?a=pembayaran");
		
		}
		
	
?>

