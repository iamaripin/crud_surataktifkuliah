<?php
if(isset($_POST['upload']))
{    
 
include '../koneksi.php';
$nama = $_POST['nama'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$level = 'mahasiswa';
$daftar = date('l, d-m-Y');
    
    mysqli_query($koneksi,"insert into user values('','$nama','$user','$pass','$level', '$daftar')");

        // Show message when user added
        echo "<script>alert('Data Berhasil di Input!'); window.location = 'mhs.php'</script>";
}