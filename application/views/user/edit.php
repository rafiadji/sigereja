<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-white">Edit profil user</h6>
    </div>
    <div class="card p-2 shadow-sm border-bottom-primary">
        <div class="card-body">
            <div class="col-lg">

                <?= form_open_multipart('user/edit'); ?>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Alamat Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];  ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['nik']; ?>">
                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat_kk" name="alamat_kk" value="<?= $user['alamat_kk']; ?>">
                        <?= form_error('alamat_kk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Foto</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">-Pilih gambar-</label>
                                </div>
                                <div>
                                    <p>
                                        <small style="color:red">* CATATAN!! yang diupload hanya file dalam bentuk gambar (PNG, JPG, GIF)
                                            ukuran maksimal 2040 MB! Jika tidak maka file yang anda upload dianggap errorr *
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-primary btn-sm">Simpan</button>
                            </div>
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