<?php include_once "header.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Surat Aktif Kuliah</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Surat Aktif Kuliah</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Surat Aktif Kuliah</div>
                            <div class="card-body">
                               <?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from surat_mhs where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
                                    <form method="post" action="edit_data.php">
                                    <div class="form-group">
                                    
    <label for="nama">Nama</label>
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						 <input type="text" class="form-control" id="nim" value="<?php echo $d['nama']; ?>" name="nama" required>
                              
                               <div class="form-group">
                               <label for="nim">NIM</label>
  <input type="text" class="form-control" id="nim" value="<?php echo $d['nim']; ?>" name="nim" required>
  </div>
                              <hr>
                               <div class="form-group">
                               <label for="file">Lampiran</label>
    <br>KTM : <?php echo $d['file']; ?> <a href="#">Download</a>
    <br>KRS  : <?php echo $d['krs']; ?> <a href="#">Download</a>
  </div>
                                 <hr>
                                   <div class="form-group">
    <label for="status">Edit Status</label>
    <select class="form-control" id="status" name="status">
      <option>Sedang Diproses</option>
      <option>Berkas Tidak Lengkap</option>
      <option>Surat Sudah Bisa Diambil</option>
    </select>
  </div>
                               <hr>
                               <button type="submit" class="btn btn-primary ">Simpan Data</button>
                                </form>
                                <?php 
	}
	?>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once "footer.php"; ?>