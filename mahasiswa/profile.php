<?php include_once "header.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Profile Saya</h1>
                        
                        <?php
include "../koneksi.php";
$gg=$_SESSION['username'];
$sql="select * from user where username='$gg'";
		
$query = mysqli_query($koneksi, $sql);                                                             
$row = mysqli_fetch_array($query);
 ?>
    <div class="card mb-4">
                            <div class="card text-center">
                              <div class="card-header">
                                Profile Saya
                              </div>
                              <div class="card-body">
                                <h5 class="card-title"><?= $row['nama']; ?> (<?= $row['username']; ?>)</h5>
                                
                                <p class="card-text"><?= $row['daftar']; ?></p>
                                <?php
                                  if ($row['level'] == 'admin')  {
                                      echo "<h3><span class='badge badge-info'>Administrator</span></h3>";
                                  } if ($row['level'] == 'mahasiswa'){
                                     echo "<h3><span class='badge badge-primary'>Mahasiswa</span></h3>"; 
                                  }         
                                ?>
                                 </div>
                            </div>
                        </div>
    
                    </div>
                </main>
                <?php include_once "footer.php"; ?>