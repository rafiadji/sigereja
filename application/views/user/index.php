<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <!--QUERY USER-->
    <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-white">Profil</h6>
    </div>
    <div class="card p-3 shadow-sm border-bottom-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 mb-3 mb-md-0">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="" class="img-thumbnail rounded mb-2">
                    <a href="<?= base_url('user/edit'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-edit"></i> Edit Profil</a>
                    <a href="<?= base_url('user/detailumatbykk/') . $user['nik_kk']; ?> " class="btn btn-sm btn-block btn-outline-primary"><i class="fa fa-users"></i> Anggota</a>
                </div>

                <div class="col-lg">
                    <table class="table table-striped w-100 dt-responsive nowrap">
                        <tr>
                            <th width="150">Nomor KK</th>
                            <th width="150">:</th>
                            <td><?= $user['nik_kk']; ?></td>
                        </tr>
                        <tr>
                            <th width="150">NIK</th>
                            <th width="150">:</th>
                            <td><?= $user['nik']; ?></td>
                        </tr>
                        <tr>
                            <th width="150">Nama </th>
                            <th width="150">:</th>
                            <td><?= $user['name']; ?></td>
                        </tr>
                        <tr>
                            <th width="150">Lingkungan</th>
                            <th width="150">:</th>
                            <td><?= $user['alamat_kk']; ?></td>
                        </tr>
                        <tr>
                            <th width="150">Status Nikah</th>
                            <th width="150">:</th>
                            <td><?= $user['st_nikah']; ?></td>
                        </tr>
                        <tr>
                            <th width="150">Jenis Kelamin</th>
                            <th width="150">:</th>
                            <td><?= $user['jk']; ?></td>
                        </tr>

                        <tr>
                            <th width="150"> Alamat Email</th>
                            <th width="150">:</th>
                            <td><?= $user['email']; ?></td>
                        </tr>
                        <tr>
                            <th width="150">Bergabung sejak</th>
                            <th width="150">:</th>
                            <td><?= date('d F Y', $user['date_created']); ?></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End/ of Main Content -->
