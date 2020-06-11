<?php include_once "header.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Mahasiswa</li>
                        </ol>
                        <a href="tambah_mhs.php"><button type="submit" class="btn btn-primary ">Tambah Data</button></a>
                        <hr>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Mahasiswa</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user order by level");
		while($d = mysqli_fetch_array($data)){
			?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['nama']; ?></td>
                                                <td><?php echo $d['username']; ?></td>
                                                <td><?php echo $d['password']; ?></td>
                                                <td>
                                                <?php 
                                        if ($d['level'] == 'admin' ){
                                            echo '<span class="badge badge-info">Admin</span>';
                                        } else {
                                            ?>
                                            <a onclick="return confirm ('Yakin hapus <?php echo $d['nama'];?> ?');" href="hapusmhs.php?id=<?php echo $d['id']; ?>"><span class="badge badge-danger">HAPUS</span> </a>
                                          <?php
                                        }
            ?>
               
                                           </td>
                                            </tr>
                                            
                                        </tbody>
                                        <?php 
		}
		?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once "footer.php"; ?>