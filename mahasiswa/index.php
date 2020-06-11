<?php include_once "header.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Halo <b><?php echo $_SESSION['username']; ?></b></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body"><b>Pengumuman</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                     <p>
                                         halo, aku adalah pengumuman! edit aku ya :)
                                     </p>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </main>
<?php include_once "footer.php"; ?>
