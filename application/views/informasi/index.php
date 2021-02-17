<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-success input--->
        <?= $this->session->flashdata('message'); ?>
        <div class="row justify-content-left">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-white py-3">
                        <div class="row">
                            <div class="col">
                                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                    Form tambah pengumuman
                                </h4>
                            </div>

                        </div>
                    </div>

                    <!-- Form edit nikah -->
                    <div class="card-body">
                        <form action="<?= base_url('informasi') ?>" method="post">

                            <div class="row form-group">
                                <div class="col-md">
                                    <input name="judul_pengumuman" id="judul_pengumuman" type="text" class="form-control" placeholder="Judul pengumuman">
                                    <small class="form-text text-danger"><?= form_error('judul_pengumuman'); ?></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md">
                                    <input name="tanggal_pengumuman" id="tanggal_pengumuman" type="text" class="form-control" placeholder="Tanggal pengumuman">
                                    <small class="form-text text-danger"><?= form_error('tanggal_pengumuman'); ?></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md">
                                    <textarea class="form-control" id="isi_pengumuman" name="isi_pengumuman" placeholder="Isi pengumuman"></textarea>
                                    <small class="form-text text-danger"><?= form_error('isi_pengumuman'); ?></small>
                                </div>
                            </div>

                            <!-- End from edit -->
                            <div class="col-auto">
                                <button type="submit" name="pengumuman" class="btn btn-primary btn-sm ">Post pengumuman</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!--End Footer -->
        <!-- Table -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pengumuman</h6>
            </div>
            <div class="card-body">
                <div>
                    <div class="col-lg">
                        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Judul Pengumuman</th>
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
                                            <a href="<?= base_url('informasi/detail/') . $p['pengumuman_id']; ?>" class="btn btn-outline-success btn-sm">Lihat</a>
                                            <a href="<?= base_url('informasi/delete/') . $p['pengumuman_id']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Delete</a>
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