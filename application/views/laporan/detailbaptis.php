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
                                Detail data baptis
                            </h4>
                        </div>

                    </div>

                </div>
                <div class="card-body">

                    <div class="col-lg">
                        <table class="table table-hover w-100 dt-responsive nowrap">
                            <tr>
                                <th widtd="20">Nama baptis</th>
                                <td> <?= $baptis['nama_baptis']; ?></td>
                            </tr>
                            <tr>
                                <th widtd="20">Nama lengkap</th>
                                <td><?= $baptis['nama_lengkap']; ?></td>
                            </tr>
                            <tr>
                                <th widtd="20">Jenis Kelamin</th>
                                <td><?= $baptis['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <th widtd="20">Tempat lahir</th>
                                <td><?= $baptis['tempat_lahir'];  ?></td>
                            </tr>
                            <tr>
                                <th widtd="20">Tanggal lahir</th>
                                <td><?= date('d F Y', strtotime($baptis['tanggal_lahir'])); ?></td>
                            </tr>
                            <tr>
                                <th>Tempat baptis</th>
                                <td><?= $baptis['tempat_baptis']; ?> </td>
                            </tr>
                            <tr>
                                <th widtd="20">Tanggal baptis</th>
                                <td><?= date('d F Y', strtotime($baptis['tanggal_baptis'])); ?></td>
                            </tr>
                            <tr>
                                <th>Lingkungan</th>
                                <td><?= $baptis['lingkungan']; ?> </td>
                            </tr>
                        </table>
                        <div class="col-auto">
                            <a href="<?= base_url('laporan') ?>" class="btn btn-sm btn-primary ">
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