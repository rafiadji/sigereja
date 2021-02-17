<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-success input--->
        <?= $this->session->flashdata('message'); ?>


        <div class="card shadow-sm border-bottom-primary">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Nikah</h6>
                </div>
                <div class="card-body">
                    <div class="card mb-4 ">
                        <div class="table-responsive">
                            <table class="table table-striped w-100 dt-responsive nowrap" id="dataTableLaporan">
                                <thead>
                                    <tr>
                                        <th>Nama Suami</th>
                                        <th>Alamat Suami</th>
                                        <th>Nama Istri</th>
                                        <th>Alamat Istri</th>
                                        <th>Nama Saksi</th>
                                        <th>Tanggal Nikah</th>
                                        <th>Tempat Nikah</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($laporan_nikah as $n) : ?>
                                        <tr>
                                            <td><?= $n['n_cal_suami']; ?></td>
                                            <td><?= $n['a_cal_suami']; ?></td>
                                            <td><?= $n['n_cal_istri']; ?></td>
                                            <td><?= $n['a_cal_istri']; ?></td>
                                            <td><?= $n['n_saksi']; ?></td>
                                            <td><?= $n['tgl_nikah']; ?></td>
                                            <td><?= $n['tpt_nikah']; ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal add data baptis -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->