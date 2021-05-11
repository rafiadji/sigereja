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
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
