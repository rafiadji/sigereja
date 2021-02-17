<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800"><?= $title; ?></h5>

    <div class="row justify-content-left">
        <div class="col">
            <div class="card shadow-sm border-bottom-primary">
                <div class="card-header shadow-sm py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Detail Anggota Keluarga
                            </h4>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#tambahAnggota"><i class="fa fa-plus"></i> Tambah Anggota </a>
                    <div class="table-responsive">
                        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tgl Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Status Keluarga</th>
                                    <th>Status Nikah</th>
                                    <th>Pekerjaan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($umat as $u) : ?>

                                    <tr>
                                        <td><?= $u['nik']; ?></td>
                                        <td><?= $u['nama_']; ?></td>
                                        <td><?= $u['tp_lahir']; ?></td>
                                        <td><?= $u['tg_lahir']; ?></td>
                                        <td><?= $u['jk']; ?></td>
                                        <td><?= $u['alamat_kk']; ?></td>
                                        <td><?= $u['st_keluarga']; ?></td>
                                        <td><?= $u['st_nikah']; ?></td>
                                        <td><?= $u['pekerjaan']; ?></td>
                                        <th>
                                            <a href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin hapus data ini?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </th>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="row-auto">
                            <a href="<?= base_url('administrasi/umat') ?>" class="btn btn-sm btn-outline-primary ">
                                <span class="icon">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                <span class="text">
                                    Back
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- MODAL TAMBAH Anggota -->
<div class="modal fade" id="tambahAnggota" tabindex="-1" aria-labelledby="tambahAnggotaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahAnggotaLabel">Form tambah data umat </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- FORM ACTION-->
            <form action="<?= base_url('administrasi/tambahanggota/' . $umat[0]['nik_kk']) ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="nik_kk" value="<?= $umat[0]['nik_kk']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                        <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_" name="nama_" placeholder="Nama" value="<?= set_value('nama_'); ?>">
                        <small class="form-text text-danger"><?= form_error('nama_'); ?></small>
                    </div>
                    <div class="form-group">
                        <select name="st_nikah" id="st_nikah" class="form-control">
                            <option value="">-Pilih status nikah-</option>
                            <option value="Belum">Belum</option>
                            <option value="Sudah">Sudah</option>
                        </select>
                        <small class="form-text text-danger"><?= form_error('st_nikah'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="tp_lahir" name="tp_lahir" placeholder="Tempat lahir" value="<?= set_value('tp_lahir'); ?>">
                        <small class="form-text text-danger"><?= form_error('tp_lahir'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tp_lahir" name="tg_lahir" placeholder="Tanggal lahir" value="<?= set_value('tg_lahir'); ?>">
                        <small class="form-text text-danger"><?= form_error('tg_lahir'); ?></small>
                    </div>
                    <div class="form-group">
                        <select name="jk" id="jk" class="form-control">
                            <option value="">-Pilih jenis kelamin-</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <small class="form-text text-danger"><?= form_error('jk'); ?></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat_kk" name="alamat_kk" placeholder="Alamat" value="<?= set_value('alamat_kk'); ?>">
                        <small class="form-text text-danger"><?= form_error('alamat_kk'); ?></small>
                    </div>
                    <div class="form-group">
                        <select name="st_keluarga" id="st_keluarga" class="form-control">
                            <option value="">-Pilih status dalam keluarga-</option>
                            <option value="Kepala-keluarga">Kepala-keluarga</option>
                            <option value="Anggota-keluarga">Anggota-keluarga</option>
                        </select>
                        <small class="form-text text-danger"><?= form_error('st_keluarga'); ?></small>
                    </div>
                    <div class="form-group">
                        <select name="pekerjaan" id="pekerjaan" class="form-control">
                            <option value="">-Pilih pekerjaan-</option>
                            <option value="PNS">PNS</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                        <small class="form-text text-danger"><?= form_error('pekerjaan'); ?></small>
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

<!-- END MODAL -->

</div>

<!--End Footer -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->