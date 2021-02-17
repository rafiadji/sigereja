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
                                Form edit komuni
                            </h4>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">

                        <input type="hidden" name="komuni_id" value="<?= $komuni['komuni_id']; ?>">

                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $komuni['nama']; ?>" name="nama" type="text" class="form-control" placeholder="Nama lengkap">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="jen_kel" id="jen_kel" class="form-control">
                                <?php foreach ($jenis_kelamin as $jk) : ?>

                                    <?php if ($jk == $komuni['jen_kel']) : ?>
                                        <!--ambil dari data array jenis kelamin-->
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
                                <input value="<?= $komuni['tgl_lahir']; ?>" name="tgl_lahir" type="text" class="form-control" placeholder="Tanggal lahir">
                                <small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $komuni['tpt_permandian']; ?>" name="tpt_permandian" type="text" class="form-control" placeholder="Tempat permandian">
                                <small class="form-text text-danger"><?= form_error('tempat_baptis'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <input value="<?= $komuni['tgl_permandian']; ?>" name="tgl_permandian" type="text" class="form-control" placeholder="Tanggal baptis">
                                <small class="form-text text-danger"><?= form_error('tgl_permandian'); ?></small>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-auto">
                                <a href="<?= base_url('administrasi/komuni') ?>" class="btn btn-sm btn-outline-primary ">
                                    <span class="icon">
                                        <i class="fa fa-arrow-left"></i>
                                    </span>
                                    <span class="text">
                                        Back
                                    </span>
                                </a>
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="editkomuni" class="btn btn-primary btn-sm">Update</button>
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