<?php 
$koneksi = mysqli_connect("localhost","root","","sup_surat_aktif");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>