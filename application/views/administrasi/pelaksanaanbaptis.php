<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


	<!-- success input--->
	<?= $this->session->flashdata('message'); ?>

	<div class="card shadow">
		<div class="card shadow">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Peserta Baptis <?= date('d F Y', strtotime($tgl)); ?></h6>
			</div>
			<div class="card-body">
			<form action="<?= base_url('administrasi/laksanabaptis') ?>" method="post">
				<div class="form-group">
					<div class="form-label col-md-2">Kehadiran</div>
					<div class="col-md-4">
						<select name="kehadiran" id="kehadiran" class="form-control">
							<option value="hadir">Hadir</option>
							<option value="ulang">Jadwal Ulang</option>
							<option value="batal">Batal</option>
						</select>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
						<thead>
							<tr>
								<th></th>
								<th>Nama Lengkap</th>
								<th>Nama baptis</th>
								<th>Kategori</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($baptis_laksana as $b) : ?>
								<tr>
									<td><input type="checkbox" name="pilihan[]" value="<?= $b['baptis_id']; ?>"></td>
									<td><?= $b['name']; ?></td>
									<td><?= $b['nama_baptis']; ?></td>
									<td><?= $b['kat_baptis']; ?></td>
								</tr>

							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="card-footer">
			<a href="<?= base_url('administrasi/'); ?> " class="btn btn-secondary btn-sm">Batal</a>
				<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
			</div>
			</form>
		</div>

	</div>

	<!-- Modal add data baptis -->

	<div class="modal fade" id="newBaptisModal" tabindex="-1" aria-labelledby="newBaptisModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="newBaptisModalLabel">Form tambah data baptis </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<!-- FORM ACTION-->


				<form action="<?= base_url('administrasi/index') ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<select name="sakramen" id="sakramen" class="form-control">
								<option value="">-Pilih Sakramen-</option>
								<option value="Pembabtisan">Pembabtisan</option>
								<option value="Ekaristi">Ekaristi</option>
								<option value="Perkawinan">Perkawinan</option>
								<option value="Krisma">Penguatan</option>
								<option value="Pengurapan">Pengurapan</option>
								<option value="Imamat">Imamat</option>
								<option value="Tobat">Tobat</option>
							</select>
							<small class="form-text text-danger"><?= form_error('sakramen'); ?></small>
						</div>
						<div class="form-group">
							<select name="kat_baptis" id="kat_baptis" class="form-control">
								<option value="">-Pilih kategori baptis-</option>
								<option value="Balita">Balita</option>
								<option value="Remaja">Remaja</option>
								<option value="Dewasa">Dewasa</option>

							</select>
							<small class="form-text text-danger"><?= form_error('kat_baptis'); ?></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="nama_baptis" name="nama_baptis" placeholder="Nama baptis" value="<?= set_value('nama_baptis'); ?>">
							<small class="form-text text-danger"><?= form_error('nama_baptis'); ?></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>">
							<small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
						</div>

						<div class="form-group">
							<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
								<option value="">--Pilih jenis kelamin--</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" value="<?= set_value('tempat_lahir'); ?>">
							<small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
						</div>
						<div class="form-group">
							<div class="col">
								<input type="text" class="form-control" id="tanngal_lahir" name="tanggal_lahir" placeholder="Tanggal lahir">
								<small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
							</div>

						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="tempat_baptis" name="tempat_baptis" placeholder="Tempat baptis" value="<?= set_value('tempat_baptis'); ?>">
							<small class="form-text text-danger"><?= form_error('tempat_baptis'); ?></small>
						</div>
						<div class="form-group">
							<div class="col">
								<input type="text" class="form-control" id="tanggal_baptis" name="tanggal_baptis" placeholder="Tanggal baptis">
								<small class="form-text text-danger"><?= form_error('tanggal_baptis'); ?></small>
							</div>
						</div>

						<div class="form-group">
							<select name="lingkungan" id="lingkungan" class="form-control">
								<option value="">-Pilijenis lingkungan-</option>
								<option value="Agatha">Agatha</option>
								<option value="Bernadeta">Bernadeta</option>
								<option value="Caroline">Caroline</option>
								<option value="Elizabeth">Elizabeth</option>
								<option value="Fransiskus">Fransiskus</option>
								<option value="Ignasisu">Ignasius</option>
								<option value="Maria">Maria</option>
								<option value="Nikolas">Nikolas</option>
								<option value="Petrus">Petrus</option>
								<option value="Sisilia">Sisilia</option>
								<option value="Yohanes">Yohanes</option>
							</select>
							<small class="form-text text-danger"><?= form_error('lingkungan'); ?></small>
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

	<!-- Modal atur baptis -->

	<div class="modal fade" id="aturBaptis" tabindex="-1" aria-labelledby="aturBaptisLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="aturBaptisLabel">Atur jadwal baptis </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<!-- FORM ACTION-->


				<form action="<?= base_url('administrasi/editbaptis') ?>" method="post">
					<div class="modal-body">
						<div class="form-group row">
							<div class="col-sm-4">
								<label for="tanggal_baptis" class="control-label">Tanggal Baptis</label>
							</div>
							<div class="col-sm-8">
								<input type="date" class="form-control" id="tanggal_baptis" name="tanggal_baptis">
								<?= form_error('tanggal_baptis', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<div class="table-responsive">
							<?= form_error('pilihan[]', '<small class="text-danger pl-3">', '</small>'); ?>
							<table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
								<thead>
									<tr>
										<th></th>
										<th>Nama Lengkap</th>
										<th>Nama baptis</th>
										<th>Kategori</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($baptis as $b) : ?>
										<tr>
											<td><input type="checkbox" name="pilihan[]" value="<?= $b['baptis_id']; ?>"></td>
											<td><?= $b['name']; ?></td>
											<td><?= $b['nama_baptis']; ?></td>
											<td><?= $b['kat_baptis']; ?></td>
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

	<!-- Modal presensi baptis -->

	<div class="modal fade" id="presensiBaptis" tabindex="-1" aria-labelledby="aturBaptisLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="aturBaptisLabel">Atur jadwal baptis </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<!-- FORM ACTION-->


				<form action="<?= base_url('administrasi/editbaptis') ?>" method="post">
					<div class="modal-body">
						<div class="form-group row">
							<div class="col-sm-4">
								<label for="tanggal_baptis" class="control-label">Tanggal Baptis</label>
							</div>
							<div class="col-sm-8">
								<input type="date" class="form-control" id="tanggal_baptis" name="tanggal_baptis">
								<?= form_error('tanggal_baptis', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<div class="table-responsive">
							<?= form_error('pilihan[]', '<small class="text-danger pl-3">', '</small>'); ?>
							<table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
								<thead>
									<tr>
										<th></th>
										<th>Nama Lengkap</th>
										<th>Nama baptis</th>
										<th>Kategori</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($baptis_laksana as $b) : ?>
										<tr>
											<td><input type="checkbox" name="pilihan[]" value="<?= $b['baptis_id']; ?>"></td>
											<td><?= $b['name']; ?></td>
											<td><?= $b['nama_baptis']; ?></td>
											<td><?= $b['kat_baptis']; ?></td>
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
