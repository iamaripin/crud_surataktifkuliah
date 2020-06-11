<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$status = $_POST['status'];

// update data ke database
mysqli_query($koneksi,"update surat_mhs set nama='$nama', nim='$nim', status='$status' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:suratku.php");

?>