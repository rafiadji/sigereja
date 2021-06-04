<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <!--success input--->
    <?= $this->session->flashdata('message'); ?>

    <div class="card shadow-sm border-bottom-primary">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Laporan data baptis</h6>
            </div>

            <div class="card-body">
                <div class="card mb-4 ">
                    <div class="card">
                        <div class="card-header">
                            Filter data
                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-md-3">
                                        <select name="filter_bln" class="form-control">
                                            <option value="" <?php if ($bln == "") : echo "selected";
                                                                endif; ?>>Pilih Bulan</option>
                                            <option value="1" <?php if ($bln == "1") : echo "selected";
                                                                endif; ?>>Januari</option>
                                            <option value="2" <?php if ($bln == "2") : echo "selected";
                                                                endif; ?>>Februari</option>
                                            <option value="3" <?php if ($bln == "3") : echo "selected";
                                                                endif; ?>>Maret</option>
                                            <option value="4" <?php if ($bln == "4") : echo "selected";
                                                                endif; ?>>April</option>
                                            <option value="5" <?php if ($bln == "5") : echo "selected";
                                                                endif; ?>>Mei</option>
                                            <option value="6" <?php if ($bln == "6") : echo "selected";
                                                                endif; ?>>Juni</option>
                                            <option value="7" <?php if ($bln == "7") : echo "selected";
                                                                endif; ?>>Juli</option>
                                            <option value="8" <?php if ($bln == "8") : echo "selected";
                                                                endif; ?>>Agustus</option>
                                            <option value="9" <?php if ($bln == "9") : echo "selected";
                                                                endif; ?>>September</option>
                                            <option value="10" <?php if ($bln == "10") : echo "selected";
                                                                endif; ?>>Oktober</option>
                                            <option value="11" <?php if ($bln == "11") : echo "selected";
                                                                endif; ?>>November</option>
                                            <option value="12" <?php if ($bln == "12") : echo "selected";
                                                                endif; ?>>Desember</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="filter_thn" class="form-control">
                                            <option value="">Pilih Tahun</option>
                                            <?php for ($i = date('Y'); $i >= 1980; $i--) : ?>
                                                <option value="<?php echo $i ?>" <?php if ($thn == $i) : echo "selected";
                                                                                    endif; ?>><?php echo $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" name="filter" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                                    <th>Tanggal baptis</th>
                                    <th>Lingkungan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($laporan_baptis as $b) : ?>
                                    <tr>
                                        <td><?= $b['nama_baptis']; ?></td>
                                        <td><?= $b['name']; ?></td>
                                        <td><?= $b['jk']; ?></td>
                                        <td><?= $b['tpt_lahir']; ?></td>
                                        <td><?= date('d F Y', strtotime($b['tgl_lahir'])); ?></td>
                                        <td><?= date('d F Y', strtotime($b['tanggal_baptis'])); ?></td>
                                        <td><?= $b['alamat_kk']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->