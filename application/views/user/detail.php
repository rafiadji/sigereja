<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row justify-content-left">
        <div class="col">
            <div class="card shadow-sm border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5> <?= $pengumuman['judul_pengumuman']; ?></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?= $pengumuman['isi_pengumuman']; ?></p>
                            <a href="<?= base_url('user/info'); ?>" class="btn btn-outline-primary btn-sm">Kembali</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?= $pengumuman['tanggal_pengumuman']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->