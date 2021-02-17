<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <!-success input--->
        <?= $this->session->flashdata('message'); ?>

        <div class="card shadow-sm border-bottom-primary">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Laporan data baptis</h6>
                </div>
                <form method="GET" action="">
                    <div class="card-body">
                        <div class="card mb-4 ">
                            <div class="card">
                                <div class="card-header">
                                    Filter data
                                </div>
                                <!-- <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped w-100 dt-responsive nowrap" id="dataTableLaporan">
                                    <thead>
                                        <tr>
                                            <th>Nama baptis</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat lahir</th>
                                            <th>Tanggal lahir</th>
                                            <th>Tempat baptis</th>
                                            <th>Tanggal baptis</th>
                                            <th>Lingkungan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($laporan_baptis as $b) : ?>
                                            <tr>
                                                <td><?= $b['nama_baptis']; ?></td>
                                                <td><?= $b['nama_lengkap']; ?></td>
                                                <td><?= $b['jenis_kelamin']; ?></td>
                                                <td><?= $b['tempat_lahir']; ?></td>
                                                <td><?= date('d F Y', strtotime($b['tanggal_lahir'])); ?></td>
                                                <td><?= $b['tempat_baptis']; ?></td>
                                                <td><?= date('d F Y', strtotime($b['tanggal_baptis'])); ?></td>
                                                <td><?= $b['lingkungan']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->