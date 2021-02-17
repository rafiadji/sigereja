<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row justify-content-left">
        <div class="col">
            <div class="card shadow-sm border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Form edit baptis
                            </h4>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">

                        <input type="hidden" name="baptis_id" value="<?= $baptis['baptis_id']; ?>">

                        <div class="form-group">
                            <select name="sakramen" id="sakramen" class="form-control">
                                <?php foreach ($sakramen as $ks) : ?>
                                    <?php if ($ks == $baptis['sakramen']) : ?>
                                        <option value="<?= $ks ?>" selected><?= $ks; ?> </option>
                                    <?php else : ?>
                                        <option value="<?= $ks ?>"><?= $ks; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('sakramen'); ?></small>
                        </div>
                        <div class="form-group">
                            <select name="kat_baptis" id="kat_baptis" class="form-control">
                                <?php foreach ($katBaptis as $kb) : ?>
                                    <?php if ($kb == $baptis['kat_baptis']) : ?>
                                        <option value="<?= $kb ?>" selected><?= $kb; ?> </option>
                                    <?php else : ?>
                                        <option value="<?= $kb ?>"><?= $kb; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('sakramen'); ?></small>
                        </div>

                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $baptis['nama_baptis']; ?>" name="nama_baptis" type="text" class="form-control" placeholder="Nama baptis">
                                <small class="form-text text-danger"><?= form_error('nama_baptis'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $baptis['nama_lengkap']; ?>" name="nama_lengkap" type="text" class="form-control" placeholder="Nama lengkap ">
                                <small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <?php foreach ($jenis_kelamin as $jk) : ?>
                                    <?php if ($jk == $baptis['jenis_kelamin']) : ?>
                                        <option value="<?= $jk ?>" selected><?= $jk; ?> </option>
                                    <?php else : ?>
                                        <option value="<?= $jk ?>"><?= $jk; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $baptis['tempat_lahir']; ?>" name="tempat_lahir" class="form-control" placeholder="Tempat lahir">
                                <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md">
                                <input value="<?= $baptis['tanggal_lahir']; ?>" name="tanggal_lahir" type="text" class="form-control" placeholder="Tanggal lahir">
                                <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $baptis['tempat_baptis']; ?>" name="tempat_baptis" type="text" class="form-control" placeholder="Tempat baptis">
                                <small class="form-text text-danger"><?= form_error('tempat_baptis'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col">
                                <input value="<?= $baptis['tanggal_baptis']; ?>" name="tanggal_baptis" type="text" class="form-control" placeholder="Tanggal baptis">
                                <small class="form-text text-danger"><?= form_error('tanggal_baptis'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="lingkungan" id="lingkungan" class="form-control">
                                <?php foreach ($lingkungan as $lk) : ?>
                                    <?php if ($lk == $baptis['lingkungan']) : ?>
                                        <option value="<?= $lk ?>" selected><?= $lk; ?> </option>
                                    <?php else : ?>
                                        <option value="<?= $lk ?>"><?= $lk; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('lingkungan'); ?></small>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-auto">
                                <a href="<?= base_url('administrasi') ?>" class="btn btn-sm btn-outline-primary ">
                                    <span class="icon">
                                        <i class="fa fa-arrow-left"></i>
                                    </span>
                                    <span class="text">
                                        Back
                                    </span>
                                </a>
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="editbaptis" class="btn btn-primary btn-sm">Update</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!--End Footer -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->