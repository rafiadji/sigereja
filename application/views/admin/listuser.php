<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow-sm border-bottom-primary">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Data User</h6>
            </div>
            <div class="card-body">


                <div class="row">
                    <div class="col-lg">
                        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <?= $this->session->flashdata('message'); ?>
                        <table class="table table-hover w-100 dt-responsive nowrap" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Alamat Email</th>
                                    <th scope="col">Role ID</th>
                                    <th scope="col">Tanggal Daftar</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($listuser as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $r['name']; ?></td>
                                        <td><?= $r['email']; ?></td>
                                        <td><?= $r['role_id']; ?></td>
                                        <td><?= date('d F Y', $r['date_created']); ?></td>
                                        <td>
                                            <a href="" class="btn btn-circle btn-success btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
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