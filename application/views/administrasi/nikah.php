<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<!-success input--->
		<?= $this->session->flashdata('message'); ?>

		<div class="card shadow">
			<div class="card shadow">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Data Nikah</h6>
					<ul class="nav nav-tabs card-header-tabs" id="nikah-list" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#terdaftar" role="tab" aria-controls="Terdaftar" aria-selected="true">Terdaftar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#pelaksanaan" role="tab" aria-controls="Pelaksanaan" aria-selected="false">Pelaksanaan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#sudah" role="tab" aria-controls="Sudah" aria-selected="false">Sudah</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content mt-3">
						<div class="tab-pane active" id="terdaftar" role="tabpanel">
							<!-- <a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#newBaptisModal"><i class="fa fa-plus"></i> Tambah Data Baptis </a> -->
							<a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#aturNikah"><i class="fa fa-plus"></i> Atur Jadwal Nikah </a>
							<div class="table-responsive">
								<table class="table table-striped w-100 dt-responsive nowrap dataTable">
									<thead>
										<tr>
											<th>Tanggal Nikah</th>
											<th>Nama pendaftar</th>
											<th>Nama pasangan</th>
											<th>Alamat pasangan</th>
											<th>Nama Saksi</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($nikah as $n) : ?>
											<tr>
												<td><?= date('d F Y', strtotime($n['tgl_nikah'])); ?></td>
												<td><?= $n['name']; ?></td>
												<td><?= $n['n_pasangan']; ?></td>
												<td><?= $n['a_pasangan']; ?></td>
												<td><?= $n['n_saksi']; ?></td>
												<th>
													<a href="<?= base_url('administrasi/editnikah/') . $n['nikah_id']; ?> " class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
													<a href="<?= base_url('administrasi/detailnikah/') . $n['nikah_id']; ?> " class="btn btn-success btn-circle btn-sm"><i class="fa fa-info"></i></a>
													<a href="<?= base_url('administrasi/deletenikah/') . $n['nikah_id']; ?> " class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin hapus data ini?')"><i class="fa fa-trash"></i></a>
												</th>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="pelaksanaan" role="tabpanel">
							<div class="table-responsive">

							</div>
						</div>
						<div class="tab-pane" id="sudah" role="tabpanel">
							<div class="table-responsive">

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Modal add data nikah -->

		<div class="modal fade" id="newNikahModal" tabindex="-1" aria-labelledby="newNikahModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="newNikahModalLabel">Form tambah data nikah </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<!-- FORM ACTION-->

					<form action="<?= base_url('administrasi/nikah') ?>" method="post">
						<div class="modal-body">

							<div class="form-group">
								<select name="nama_" id="nama_" class="form-control">
									<option value="">-Pilih pasangan-</option>
									<?php foreach ($umat as $u) : ?>
										<option value="<?= $u['umat_id']; ?>"><?= $u['nama_']; ?></option>
									<?php endforeach; ?>
								</select>
								<small class="form-text text-danger"><?= form_error('alamat_kk'); ?></small>
							</div>
							<div class="form-group">
								<select name="alamat_kk" id="alamat_kk" class="form-control">
									<option value="">-Pilih Alamat-</option>
									<?php foreach ($umat as $u) : ?>
										<option value="<?= $u['umat_id']; ?>"><?= $u['alamat_kk']; ?></option>
									<?php endforeach; ?>
								</select>
								<small class="form-text text-danger"><?= form_error('alamat_kk'); ?></small>
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="n_pasangan" name="n_pasangan" placeholder="Nama Pasangan" value="">
								<small class="form-text text-danger"><?= form_error('n_pasangan'); ?></small>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="a_pasangan" name="a_pasangan" placeholder="Alamat Pasangan" value="">
								<small class="form-text text-danger"><?= form_error('a_pasangan'); ?></small>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="n_saksi" name="n_saksi" placeholder="Nama Saksi" value="">
								<small class="form-text text-danger"><?= form_error('n_saksi'); ?></small>
							</div>
							<div class="form-group">
								<input type="date" class="form-control" id="tgl_nikah" name="tgl_nikah" placeholder="Tanggal Nikah" value="">
								<small class="form-text text-danger"><?= form_error('tgl_nikah'); ?></small>
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

		<!-- Modal atur nikah -->

		<div class="modal fade" id="aturNikah" tabindex="-1" aria-labelledby="aturnikahLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="aturnikahLabel">Atur jadwal nikah </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<!-- FORM ACTION-->


					<form action="<?= base_url('administrasi/editnikah') ?>" method="post">
						<div class="modal-body">
							<div class="form-group row">
								<div class="col-sm-4">
									<label for="tanggal_nikah" class="control-label">Tanggal nikah</label>
								</div>
								<div class="col-sm-8">
									<input type="date" class="form-control" id="tanggal_nikah" name="tanggal_nikah">
									<?= form_error('tanggal_nikah', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="table-responsive">
								<?= form_error('pilihan[]', '<small class="text-danger pl-3">', '</small>'); ?>
								<table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
									<thead>
										<tr>
											<th></th>
											<th>Nama pendaftar</th>
											<th>Nama pasangan</th>
											<th>Nama Saksi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($nikah as $n) : ?>
											<tr>
												<td><input type="checkbox" name="pilihan[]" value="<?= $n['nikah_id']; ?>"></td>
												<td><?= $n['name']; ?></td>
												<td><?= $n['n_pasangan']; ?></td>
												<td><?= $n['n_saksi']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary btn-sm">Atur</button>
						</div>
					</form>
				</div>
			</div>
		</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
