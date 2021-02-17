<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-success input--->
        <?= $this->session->flashdata('message'); ?>

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
                        <h6 class="m-0 font-weight-bold text-primary">Data Komuni</h6>
                    </div>
                    <div class="card-body">
                        <div class="card mb-4 ">
                            <div class="table-responsive">
                                <table class="table table-striped w-100 dt-responsive nowrap" id="dataTableLaporan">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal lahir</th>
                                            <th>Tempat Nikah</th>
                                            <th>Tanggal Nikah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($laporan_komuni as $k) : ?>
                                            <tr>
                                                <td><?= $k['nama']; ?></td>
                                                <td><?= $k['jen_kel']; ?></td>
                                                <td><?= date('d F Y', strtotime($k['tgl_lahir'])); ?></td>
                                                <td><?= $k['tpt_permandian']; ?></td>
                                                <td><?= date('d F Y', strtotime($k['tgl_permandian'])); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->