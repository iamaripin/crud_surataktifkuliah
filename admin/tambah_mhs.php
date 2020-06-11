<?php include_once "header.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Mahasiswa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Mahasiswa</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                  <form action="tambah.php" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="user">NIM</label>
                                    <input type="text" class="form-control" placeholder="NIM" id="user" name="user" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" required>
                                  </div>
                                  <hr>
                                  <input type="submit" class="btn btn-primary" name="upload" value="Kirim">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once "footer.php"; ?>