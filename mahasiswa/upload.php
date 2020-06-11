<?php
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);
if(isset($_POST['upload']))
{    
 
   include '../koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$status = 'Sudah Diajukan';
$tanggal = date('l, d-m-Y');
    
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];

$krs = rand(1000,100000)."-".$_FILES['krs']['name'];
    $file_loc = $_FILES['krs']['tmp_name'];
 $folder="../uploads/";
 
 move_uploaded_file($file_loc,$folder.$file,$folder.$krs);
  $result = mysqli_query($koneksi, "INSERT INTO surat_mhs(nama,nim,status,tanggal,file,krs) VALUES('$nama','$nim','$status', '$tanggal', '$file','$krs')");

        // Show message when user added
        echo "<script>alert('Data Berhasil di Input!'); window.location = 'cek_surat.php'</script>";
}
?>