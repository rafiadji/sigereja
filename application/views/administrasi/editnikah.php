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
                                Form edit nikah
                            </h4>
                        </div>

                    </div>
                </div>

                <!-- Form edit nikah -->
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="nikah_id" value="<?= $nikah['nikah_id']; ?>">

                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $nikah['n_cal_suami']; ?>" name="n_cal_suami" type="text" class="form-control" placeholder="Nama calon suami">
                                <small class="form-text text-danger"><?= form_error('n_cal_suami'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $nikah['a_cal_suami']; ?>" name="a_cal_suami" type="text" class="form-control" placeholder="Alamat calon suami ">
                                <small class="form-text text-danger"><?= form_error('a_cal_suami'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $nikah['n_cal_istri']; ?>" name="n_cal_istri" type="text" class="form-control" placeholder="Nama calon istri">
                                <small class="form-text text-danger"><?= form_error('n_cal_istri'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $nikah['a_cal_istri']; ?>" name="a_cal_istri" type="text" class="form-control" placeholder="Alamat calon istri ">
                                <small class="form-text text-danger"><?= form_error('a_cal_istri'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $nikah['n_saksi']; ?>" name="n_saksi" class="form-control" placeholder="Nama saksi">
                                <small class="form-text text-danger"><?= form_error('n_saksi'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $nikah['tgl_nikah']; ?>" name="tgl_nikah" type="text" class="form-control" placeholder="Tanggal nikah">
                                <small class="form-text text-danger"><?= form_error('tgl_nikah'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input value="<?= $nikah['tpt_nikah']; ?>" name="tpt_nikah" type="text" class="form-control" placeholder="Tempat Nikah">
                                <small class="form-text text-danger"><?= form_error('tpt_nikah'); ?></small>
                            </div>
                        </div>
                        <!-- End from edit -->

                        <div class="form-group row justify-content-end">
                            <div class="col-auto">
                                <a href="<?= base_url('administrasi/nikah') ?>" class="btn btn-sm btn-outline-primary ">
                                    <span class="icon">
                                        <i class="fa fa-arrow-left"></i>
                                    </span>
                                    <span class="text">
                                        Back
                                    </span>
                                </a>
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="editnikah" class="btn btn-primary btn-sm">Update</button>
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