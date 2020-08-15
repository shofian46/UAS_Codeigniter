<div class="container">
	<div class="row mt-3">
		<div class="col md-6">
			<div class="card">
				<div class="card-header shadow-lg">
					Form Update Data Karyawan
				</div>
				<div>
					<a href="<?= base_url('karyawan') ?>" class="btn btn-success float-right mt-3 mr-3">Kembali</a>
				</div>
				<div class="card-body shadow-lg">
					<form action="" method="POST">
						<input type="hidden" name="id" id="id" value="<?= $karyawan['id']; ?>">
						<div class="form-group">
							<label for="nip">Nip</label>
							<input type="number" class="form-control" id="nip" name="nip" placeholder="Nip" value="<?= $karyawan['nip']; ?>">
							<small class="form-text text-danger"><?= form_error('nip'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $karyawan['nama']; ?>">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= $karyawan['jabatan']; ?>">
							<small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $karyawan['alamat']; ?></textarea>
							<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
						</div>
						<button type="submit" class="btn btn-primary float-right ml-3 shadow-sm">Save Change</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
