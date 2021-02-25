<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="card shadow-sm border-bottom-primary">
		<div class="card shadow mb-4">

			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Anggota Keluarga Per KK</h6>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg">
						<?= $this->session->flashdata('message'); ?>
						<a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#modalTambahAnggota"><i class="fa fa-plus"></i> Tambah Anggota </a>
						<a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#modalDaftarBaptis"><i class="fa fa-address-card"></i> Pendaftaran Baptis </a>
						<a href="" class="btn btn-outline-primary btn-sm mb-4" data-toggle="modal" data-target="#modalDaftarNikah"><i class="fa fa-restroom"></i> Pendaftaran Nikah </a>
						<table class="table table-hover w-100 dt-responsive nowrap" id="dataTable">
							<!-- <?php print_r($users) ?> -->
							<thead>
								<tr>
									<th scope="col">NIK</th>
									<th scope="col">NIK KK</th>
									<th scope="col">Nama</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col">Tanggal Lahir</th>
									<th scope="col">Baptis</th>
									<th scope="col">Status Nikah</th>
									<th scope="col">Status Keluarga</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($users as $u) : ?>
									<tr>
										<td><?= $u['nik']; ?></td>
										<td><?= $u['nik_kk']; ?></td>
										<td><?= $u['name']; ?></td>
										<td><?= $u['jk']; ?></td>
										<td><?= $u['tgl_lahir']; ?></td>
										<td><?= $u['st_baptis']; ?></td>
										<td><?= $u['st_nikah']; ?></td>
										<td><?= $u['st_keluarga']; ?></td>
										<td>
											<a href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
											<a href="<?= base_url('user/deleteumat/') . $u['user_id']; ?>" class=" btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin hapus data ini?')"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Tambah Anggota -->
		<div class="modal fade" id="modalTambahAnggota" tabindex="-1" aria-labelledby="modalTambahAnggotaLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalTambahAnggotaLabel">Form Tambah Anggota Per KK</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form action="<?= base_url('user/tambahanggota/' . $user['nik_kk']) ?>" method="post">
						<div class="modal-body">
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control" id="nik" name="nik" placeholder=" NIK" value="<?= set_value('nik'); ?>">
									<?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
									<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<select name="jk" id="jk" class="form-control">
										<option value="">-Pilih jenis kelamin-</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
									<?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<select name="alamat_kk" id="alamat_kk" class="form-control">
										<option value="">-Pilih lingkungan-</option>
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
									<?= form_error('alamat_kk', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<input type="text" class="form-control" id="tpt_lahir" name="tpt_lahir" placeholder="Tempat lahir" value="<?= set_value('tpt_lahir'); ?>">
									<?= form_error('tpt_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
									<?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group">
								<select name="st_keluarga" id="st_keluarga" class="form-control">
									<option value="">-Status dalam keluarga-</option>
									<option value="Suami">Suami</option>
									<option value="Istri">Istri</option>
									<option value="Anak">Anak</option>
								</select>
								<?= form_error('st_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<select name="st_nikah" id="st_nikah" class="form-control">
									<option value="">-Status Nikah-</option>
									<option value="Sudah">Sudah</option>
									<option value="Belum">Belum</option>
								</select>
								<?= form_error('st_nikah', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<select name="pekerjaan" id="pekerjaan" class="form-control">
									<option value="">-Pilih pekerjaan-</option>
									<option value="Swasta">Swasta</option>
									<option value="PNS">Pns</option>
								</select>
								<?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
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
		<!-- End Modal Tambah Anggota -->

		<!-- Modal Daftar Baptis -->
		<div class="modal fade" id="modalDaftarBaptis" tabindex="-1" aria-labelledby="modalDaftarBaptis" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalDaftarBaptis">Pendaftaran Baptis</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form action="<?= base_url('user/registrasibaptis/' . $user['nik_kk']) ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<select name="id_peserta" id="id_peserta" class="form-control">
									<option value="">-Nama Peserta-</option>
									<?php foreach ($users as $u) : if ($u['st_baptis'] == "Belum") : ?>
											<option value="<?php echo $u['user_id'] ?>"><?php echo $u['name'] ?></option>
									<?php endif;
									endforeach; ?>
								</select>
								<?= form_error('id_peserta', '<small class="text-danger pl-3">', '</small>'); ?>
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
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary btn-sm">Daftar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End Modal Daftar Baptis -->

		<!-- Modal Daftar Nikah -->
		<div class="modal fade" id="modalDaftarNikah" tabindex="-1" aria-labelledby="modalDaftarNikah" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalDaftarNikah">Pendaftaran Nikah</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form action="<?= base_url('user/registrasinikah/' . $user['nik_kk']) ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<select name="id_peserta" id="id_peserta" class="form-control">
									<option value="">-Nama Pendaftar-</option>
									<?php foreach ($users as $u) : if ($u['st_nikah'] == "Belum") : ?>
											<option value="<?php echo $u['user_id'] ?>"><?php echo $u['name'] ?></option>
									<?php endif;
									endforeach; ?>
								</select>
								<?= form_error('id_peserta', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control" id="n_pasangan" name="n_pasangan" placeholder="Nama Pasangan" value="<?= set_value('n_pasangan'); ?>">
									<?= form_error('n_pasangan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="a_pasangan" name="a_pasangan" placeholder="Alamat Pasangan" value="<?= set_value('a_pasangan'); ?>">
									<?= form_error('a_pasangan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="n_saksi" name="n_saksi" placeholder="Nama Saksi" value="<?= set_value('n_saksi'); ?>">
								<?= form_error('n_saksi', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary btn-sm">Daftar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End Modal Daftar Nikah -->

	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
