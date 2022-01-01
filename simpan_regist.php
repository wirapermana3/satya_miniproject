<?php 
include 'koneksi.php';
$nama_mhs = $_POST['nama_mhs'];
$nim_mhs = $_POST['nim_mhs'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto_mhs']['name'];
$ukuran = $_FILES['foto_mhs']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$username = $_POST['username'];
$password = $_POST['password'];

if(!in_array($ext,$ekstensi) ) {
	header("location:register.php?alert=extension_failed");
}else{
	if($ukuran <= 512000){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto_mhs']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($con, "INSERT INTO mahasiswa VALUES(NULL,'$nama_mhs','$nim_mhs', '$xx', '$username', '$password')");
		header("location:register.php?alert=success");
	}else{
		header("location:register.php?alert=size_failed");
	}
}
?>