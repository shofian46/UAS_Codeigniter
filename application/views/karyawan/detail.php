<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<h5 class="card-header">Detail Karyawan</h5>
				<div class="card-body">
					<img src="<?= base_url('assets/') ?>img/icon1.png" alt="icon1" />
					<h5 class="card-title"><?= $karyawan['nama']; ?></h5>
					<h6 class="card-subtitle mb-2 text-muted"><?= $karyawan['nip']; ?></h6>
					<h6 class="card-subtitle mb-2 text-muted"><?= $karyawan['alamat']; ?></h6>
					<p class="card-text"><?= $karyawan['jabatan']; ?></p>
					<a href="<?= base_url('karyawan'); ?>" class="btn btn-primary">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>
