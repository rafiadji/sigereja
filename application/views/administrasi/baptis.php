<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <!-success input--->
        <?= $this->session->flashdata('message'); ?>

        <div class="card shadow">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Baptis</h6>
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#newBaptisModal"><i class="fa fa-plus"></i> Tambah Data Baptis </a>
                    <div class="table-responsive">
                        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Nama baptis</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat lahir</th>
                                    <th>Tanggal lahir</th>
                                    <th>Sakramen</th>
                                    <th>Kategori</th>
                                    <th>Tempat baptis</th>
                                    <th>Tanggal baptis</th>
                                    <th>Lingkungan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($baptis as $b) : ?>
                                    <tr>
                                        <td><?= $b['nama_baptis']; ?></td>
                                        <td><?= $b['nama_lengkap']; ?></td>
                                        <td><?= $b['jenis_kelamin']; ?></td>
                                        <td><?= $b['tempat_lahir']; ?></td>
                                        <td><?= date('d F Y', strtotime($b['tanggal_lahir'])); ?></td>
                                        <td><?= $b['sakramen']; ?></td>
                                        <td><?= $b['kat_baptis']; ?></td>
                                        <td><?= $b['tempat_baptis']; ?></td>
                                        <td><?= date('d F Y', strtotime($b['tanggal_baptis'])); ?></td>
                                        <td><?= $b['lingkungan']; ?></td>
                                        <th>
                                            <a href="<?= base_url('administrasi/editbaptis/') . $b['baptis_id']; ?> " class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('administrasi/detailbaptis/') . $b['baptis_id']; ?> " class="btn btn-success btn-circle btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="<?= base_url('administrasi/deletebaptis/') . $b['baptis_id']; ?> " class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin hapus data ini?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </th>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal add data baptis -->

        <div class="modal fade" id="newBaptisModal" tabindex="-1" aria-labelledby="newBaptisModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newBaptisModalLabel">Form tambah data baptis </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- FORM ACTION-->


                    <form action="<?= base_url('administrasi/index') ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <select name="sakramen" id="sakramen" class="form-control">
                                    <option value="">-Pilih Sakramen-</option>
                                    <option value="Pembabtisan">Pembabtisan</option>
                                    <option value="Ekaristi">Ekaristi</option>
                                    <option value="Perkawinan">Perkawinan</option>
                                    <option value="Krisma">Penguatan</option>
                                    <option value="Pengurapan">Pengurapan</option>
                                    <option value="Imamat">Imamat</option>
                                    <option value="Tobat">Tobat</option>
                                </select>
                                <small class="form-text text-danger"><?= form_error('sakramen'); ?></small>
                            </div>
                            <div class="form-group">
                                <select name="kat_baptis" id="kat_baptis" class="form-control">
                                    <option value="">-Pilih kategori baptis-</option>
                                    <option value="Balita">Balita</option>
                                    <option value="Remaja">Remaja</option>
                                    <option value="Dewasa">Dewasa</option>

                                </select>
                                <small class="form-text text-danger"><?= form_error('kat_baptis'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama_baptis" name="nama_baptis" placeholder="Nama baptis" value="<?= set_value('nama_baptis'); ?>">
                                <small class="form-text text-danger"><?= form_error('nama_baptis'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>">
                                <small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                            </div>

                            <div class="form-group">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="">--Pilih jenis kelamin--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" value="<?= set_value('tempat_lahir'); ?>">
                                <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <input type="text" class="form-control" id="tanngal_lahir" name="tanggal_lahir" placeholder="Tanggal lahir">
                                    <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                                </div>

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tempat_baptis" name="tempat_baptis" placeholder="Tempat baptis" value="<?= set_value('tempat_baptis'); ?>">
                                <small class="form-text text-danger"><?= form_error('tempat_baptis'); ?></small>
                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <input type="text" class="form-control" id="tanggal_baptis" name="tanggal_baptis" placeholder="Tanggal baptis">
                                    <small class="form-text text-danger"><?= form_error('tanggal_baptis'); ?></small>
                                </div>
                            </div>

                            <div class="form-group">
                                <select name="lingkungan" id="lingkungan" class="form-control">
                                    <option value="">-Pilijenis lingkungan-</option>
                                    <option value="Agatha">Agatha</option>
                                    <option value="Bernadeta">Bernadeta</option>
                                    <option value="Caroline">Caroline</option>
                                    <option value="Elizabeth">Elizabeth</option>
                                    <option value="Fransiskus">Fransiskus</option>
                                    <option value="Ignasisu">Ignasius</option>
                                    <option value="Maria">Maria</option>
                                    <option value="Nikolas">Nikolas</option>
                                    <option value="Petrus">Petrus</option>
                                    <option value="Sisilia">Sisilia</option>
                                    <option value="Yohanes">Yohanes</option>
                                </select>
                                <small class="form-text text-danger"><?= form_error('lingkungan'); ?></small>
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