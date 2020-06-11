<?php include_once "header.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Cek Status Berkas Saya</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Status Berkas Saya</li>
                        </ol>
                        
                        <?php
include "../koneksi.php";
$gg=$_SESSION['username'];
$sql="select * from surat_mhs where nim='$gg'";
		
$query = mysqli_query($koneksi, $sql);                                                             
$row = mysqli_fetch_array($query);
                                                              
$ada=mysqli_query($koneksi, $sql) or die(mysqli_error());                                                            
   if(mysqli_num_rows($ada)>0)
  { 
    ?>
    <div class="card mb-4">
                            <div class="card text-center">
                              <div class="card-header">
                                Status Berkas Saya
                              </div>
                              <div class="card-body">
                                <h5 class="card-title"><?= $row['nama']; ?> (<?= $row['nim']; ?>)</h5>
                                
                                <p class="card-text"><?= $row['tanggal']; ?></p>
                                <?php
                                  if ($row['status'] == 'Sudah Diajukan')  {
                                      echo "<h3><span class='badge badge-warning'>Berkas Sedang Di Proses</span></h3>";
                                  } if ($row['status'] == 'Surat Sudah Bisa Diambil'){
                                     echo "<h3><span class='badge badge-info'>Berkas Sudah Bisa Diambil</span></h3>"; 
                                  } if ($row['status'] == 'Berkas Tidak Lengkap') {
                                      echo "<h3><span class='badge badge-danger'>Berkas Tidak Lengkap</span></h3>"; 
                                  }          
                                ?>
                                 </div>
                              <div class="card-footer text-muted">
                                Mohon cek secara berkala.
                              </div>
                            </div>
                        </div>
    <?php
    
  }
  else {                                                           
                        echo '<center><h3><span class="badge badge-warning"> Maaf, anda belum menginputkan berkas apapun. </span></h3></center>';
  }
   ?>  
                    </div>
                </main>
                <?php include_once "footer.php"; ?>