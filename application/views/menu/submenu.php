<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow-sm border-bottom-primary">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Submenu</h6>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>

                        <?= $this->session->flashdata('message'); ?>

                        <a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#newSubMenuModal">Tambah Submenu</a>

                        <table class="table table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>

                            <tbody>


                                <?php $i = 1; ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $sm['title']; ?></td>
                                        <td><?= $sm['menu']; ?></td>
                                        <td><?= $sm['url']; ?></td>
                                        <td><?= $sm['icon']; ?></td>
                                        <td><?= $sm['is_active']; ?></td>
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
        <div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Sub Menu </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- FORM ACTION-->

                    <form action="<?= base_url('menu/submenu') ?>" method="post">
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title Submenu">
                            </div>

                            <div class="form-group">
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="">Select Menu</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
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