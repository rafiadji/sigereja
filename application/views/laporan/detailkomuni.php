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
                            <h4 class="h5 align-middle m-0 font-weight- text-primary">
                                Detail data komuni
                            </h4>
                        </div>

                    </div>

                </div>
                <div class="card-body">

                    <div class="col-lg">
                        <table class="table table-striped w-100 dt-responsive nowrap">
                            <tr>
                                <td widtd="20">Nama </td>
                                <td>:</td>
                                <td> <?= $komuni['nama']; ?></td>
                            </tr>
                            <tr>
                                <td widtd="20">Jenis kelamin </td>
                                <td>:</td>
                                <td> <?= $komuni['jen_kel']; ?></td>
                            </tr>
                            <tr>
                                <td widtd="20">Tanggal lahir</td>
                                <td>:</td>
                                <td><?= $komuni['tgl_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td widtd="20">Tempat permandian</td>
                                <td>:</td>
                                <td><?= $komuni['tpt_permandian']; ?></td>
                            </tr>

                            <tr>
                                <td widtd="20">Tanggal permandian</td>
                                <td>:</td>
                                <td><?= date('d F Y', strtotime($komuni['tgl_permandian'])); ?></td>
                            </tr>

                        </table>
                        <div class="col-auto">
                            <a href="<?= base_url('laporan/komuni') ?>" class="btn btn-sm btn-primary ">
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