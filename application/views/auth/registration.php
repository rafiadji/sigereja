<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Form Registrasi Umat</h1>
                        </div>

                        <!--form error -->
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder=" NIK" value="<?= set_value('nik'); ?>">
                                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="">-Pilih jenis kelamin-</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <select name="alamat_kk" id="alamat_kk" class="form-control">
                                        <option value="">-Pilih lingkungan-</option>
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
                                    <?= form_error('alamat_kk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="tpt_lahir" name="tpt_lahir" placeholder="Tempat lahir" value="<?= set_value('tpt_lahir'); ?>">
                                    <?= form_error('tpt_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                    <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="nik_kk" name="nik_kk" placeholder=" No Kartu Keluarga" value="<?= set_value('nik_kk'); ?>">
                                    <?= form_error('nik_kk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="st_keluarga" id="st_keluarga" class="form-control">
                                    <option value="">-Status dalam keluarga-</option>
                                    <option value="Suami">Suami</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                </select>
                                <?= form_error('st_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select name="st_nikah" id="st_nikah" class="form-control">
                                    <option value="">-Status Nikah-</option>
                                    <option value="Sudah">Sudah</option>
                                    <option value="Belum">Belum</option>
                                </select>
                                <?= form_error('st_nikah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select name="pekerjaan" id="pekerjaan" class="form-control">
                                    <option value="">-Pilih pekerjaan-</option>
                                    <option value="Swasta">Swasta</option>
                                    <option value="PNS">Pns</option>
                                </select>
                                <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Alamat email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder=" Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Sudah punya Akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>