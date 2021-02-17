<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <div class="row justify-content-left">

        <div class="col">
            <div class="card shadow-sm border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Form registrasi nikah
                            </h4>
                        </div>
                    </div>
                    <!-- dropdown -->


                </div>

                <!-- Form edit nikah -->
                <div class="card-body">
                    <form action="<?= base_url('user/registrasinikah') ?>" method="post">
                        <input type="hidden" name="nikah_id">

                        <div class="form-group">
                            <select name="st_keluarga" id="st_keluarga" class="form-control">
                                <option value="">-Pasangan-</option>
                                <option value="Suami">Nama pasangan </option>
                            </select>
                            <?= form_error('st_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="row form-group">
                            <div class="col-md">
                                <input name="n_cal_suami" type="text" class="form-control" placeholder="Nama calon suami">
                                <small class="form-text text-danger"><?= form_error('n_cal_suami'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input name="a_cal_suami" type="text" class="form-control" placeholder="Alamat calon suami ">
                                <small class="form-text text-danger"><?= form_error('a_cal_suami'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input name="n_cal_istri" type="text" class="form-control" placeholder="Nama calon istri">
                                <small class="form-text text-danger"><?= form_error('n_cal_istri'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input name="a_cal_istri" type="text" class="form-control" placeholder="Alamat calon istri ">
                                <small class="form-text text-danger"><?= form_error('a_cal_istri'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input name="n_saksi" class="form-control" placeholder="Nama saksi">
                                <small class="form-text text-danger"><?= form_error('n_saksi'); ?></small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md">
                                <input name="tgl_nikah" type="date" class="form-control" placeholder="Tanggal nikah">
                                <small class="form-text text-danger"><?= form_error('tgl_nikah'); ?></small>
                            </div>
                        </div>
                        <!-- End from edit -->

                        <div class="form-group row justify-content-end">
                            <div class="col-auto">
                                <button type="submit" name="editnikah" class="btn btn-primary btn-sm">Daftar</button>
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