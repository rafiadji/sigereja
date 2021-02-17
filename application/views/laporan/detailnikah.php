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
                            <h4 class="h5 align-middle m-0 font-weight text-primary">
                                Detail data nikah
                            </h4>
                        </div>

                    </div>

                </div>
                <div class="card-body">

                    <div class="col-lg">
                        <table class="table table-striped w-100 dt-responsive nowrap">

                            <tr>
                                <td widtd="20">Nama Calon Suami</td>
                                <td>:</td>
                                <td><?= $nikah['n_cal_suami']; ?></td>
                            </tr>
                            <tr>
                                <td widtd="20">Alamat Calon Suami</td>
                                <td>:</td>
                                <td><?= $nikah['a_cal_suami']; ?></td>
                            </tr>
                            <tr>
                                <td widtd="20">Nama Calon Istri</td>
                                <td>:</td>
                                <td><?= $nikah['n_cal_istri'];  ?></td>
                            </tr>
                            <tr>
                                <td widtd="20">Alamat Calon Istri</td>
                                <td>:</td>
                                <td><?= $nikah['a_cal_istri'];  ?></td>

                            </tr>
                            <tr>
                                <td widtd="20">Tanggal nikah</td>
                                <td>:</td>
                                <td><?= date('d F Y', strtotime($nikah['tgl_nikah'])); ?></td>
                            </tr>
                            <tr>
                                <td>Tempat Nikah</td>
                                <td>:</td>
                                <td><?= $nikah['tpt_nikah']; ?> </td>
                            </tr>

                        </table>
                        <div class="col-auto">
                            <a href="<?= base_url('administrasi/nikah') ?>" class="btn btn-sm btn-primary ">
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->