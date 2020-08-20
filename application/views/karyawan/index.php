<div class="container">
	<div class="jumbotron jumbotron-fluid mt-3">
		<div class="container">
			<h1 class="display-4">Data Karyawan</h1>
		</div>
	</div>
	<div class="container">
		<?php if ($this->session->flashdata()) : ?>
			<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Karyawan<strong> Berhasil!</strong> <?= $this->session->flashdata('message'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div> -->
		<?php endif; ?>
	</div>
	<div class="row">
		<div class="col-md-6">
			<a href="<?= base_url('karyawan/tambah') ?>" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Data Karyawan.." name="keyword" id="keyword">
					<div class="input-group-append">
						<button class="btn btn-outline-danger" type="submit">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="card mt-3 shadow-lg">
		<div class="card-body">
			<?php if (empty($karyawan)) : ?>
				<div class="alert alert-danger" role="alert">
					Data Karyawan Tidak Ditemukan!
				</div>
			<?php endif; ?>
			<table class="table table-hover" id="table1">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nip</th>
						<th scope="col">Nama</th>
						<th scope="col">Jabatan</th>
						<th scope="col">Alamat</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$i = 0;
					foreach ($karyawan as $krw) : ?>
						<tr>
							<th scope="row"><?= ++$i; ?></th>
							<td><?= $krw['nip'] ?></td>
							<td><?= $krw['nama'] ?></td>
							<td><?= $krw['jabatan'] ?></td>
							<td><?= $krw['alamat'] ?></td>
							<td>
								<a href="<?= base_url(); ?>karyawan/update/<?= $krw['id']; ?>" class="btn btn-primary">Update</a>
								<a href="<?= base_url(); ?>karyawan/detail/<?= $krw['id']; ?>" class="btn btn-warning">Detail</a>
								<a href="<?= base_url(); ?>karyawan/delete/<?= $krw['id']; ?>" class="btn btn-danger tombol-hapus">Delete</a>
							</td>
						</tr>

					<?php endforeach; ?>
				</tbody>
			</table>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
