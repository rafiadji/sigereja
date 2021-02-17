<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengumuman</h6>
        </div>
        <div class="card-body">
            <div>
                <div class="col-lg">
                    <table class="table table-hover w-100 dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Judul pengumuman</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengumuman as $p) : ?>
                                <tr>
                                    <td><?= $p['tanggal_pengumuman']; ?></td>
                                    <td><?= $p['judul_pengumuman']; ?></td>
                                    <td>
                                        <!-- <a href="" class="btn btn-outline-warning btn-sm">Edit</a> -->
                                        <a href="<?= base_url('user/detail/') . $p['pengumuman_id']; ?>" class="btn btn-outline-primary btn-sm">Lihat</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->