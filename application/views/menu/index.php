<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card shadow-sm border-bottom-primary">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Menu</h6>
            </div>
            <div class="card-body">
                <a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#newMenuModal"> <i class="fa fa-plus"></i> Tambah Menu</a>

                <div class="row">
                    <div class="col">
                        <!--GAGAL-->
                        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <!--BERHASIL-->
                        <?= $this->session->flashdata('message'); ?>

                        <table class="table table-striped w-100 dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $m['menu']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
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

        <!-- End of Main Content -->

        <!-- Modal add menu -->
        <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newMenuModalLabel">Tambah Menu </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- FORM ACTION-->
                    <form action="<?= base_url('menu') ?>" method="post">
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->