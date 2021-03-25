<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-success input--->


        <!-success input--->
            <?= $this->session->flashdata('message'); ?>

            <div class="card shadow-sm border-bottom-primary">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Komuni</h6>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#newKomuniModal"><i class="fa fa-plus"></i> Tambah Data Komuni </a>

                        <div class="table-responsive">
                            <table class="table table-striped w-100 dt-responsive nowrap dataTable">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal lahir</th>
                                        <th>Tempat Permandian</th>
                                        <th>Tanggal Permandian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($komuni as $k) : ?>
                                        <tr>
                                            <td><?= $k['nama']; ?></td>
                                            <td><?= $k['jen_kel']; ?></td>
                                            <td><?= date('d F Y', strtotime($k['tgl_lahir'])); ?></td>
                                            <td><?= $k['tpt_permandian']; ?></td>
                                            <td><?= date('d F Y', strtotime($k['tgl_permandian'])); ?></td>
                                            <th>
                                                <a href="<?= base_url('administrasi/editkomuni/') . $k['komuni_id']; ?>" class="btn btn-circle btn-warning btn-sm "><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url('administrasi/detailkomuni/') . $k['komuni_id']; ?>" class="btn btn-circle btn-success btn-sm "><i class="fa fa-info"></i></a>
                                                <a href="<?= base_url('administrasi/deletekomuni/') . $k['komuni_id']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin hapus data ini?')"><i class="fa fa-trash"></i></a>
                                            <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal add data baptis -->

            <div class="modal fade" id="newKomuniModal" tabindex="-1" aria-labelledby="newKomuniModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newKomuniModalLabel">Form tambah data komuni </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- FORM ACTION-->

                        <form action="<?= base_url('administrasi/komuni') ?>" method="post">
                            <div class="modal-body">

                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" value="">
                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>

                                <div class="form-group">
                                    <select name="jen_kel" id="jen_kel" class="form-control">

                                        <option value="">--Jenis kelamin--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('jen_kel'); ?></small>
                                </div>

                                <div class="form-group">
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal lahir">
                                    <small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="tpt_permandian" name="tpt_permandian" placeholder="Tempat permandian" value="">
                                    <small class="form-text text-danger"><?= form_error('tpt_permandian'); ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" id="tgl_permandian" name="tgl_permandian" placeholder="Tempat permandian">
                                    <small class="form-text text-danger"><?= form_error('tgl_permandian'); ?></small>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
