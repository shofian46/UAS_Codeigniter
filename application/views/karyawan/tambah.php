<div class="container">
	<div class="row mt-3">
		<div class="col md-6">
			<div class="card">
				<div class="card-header shadow-lg">
					Form Tambah Data Karyawan
				</div>
				<!--  -->
				<div class="card-body shadow-lg">
					<form action="" method="POST">
						<div class="form-group">
							<label for="nip">Nip</label>
							<input type="number" class="form-control" id="nip" name="nip" placeholder="Nip">
							<small class="form-text text-danger"><?= form_error('nip'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
							<small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
							<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
						</div>
						<button type="submit" class="btn btn-primary float-right ml-3 shadow-sm">Save</button>
						<button type="reset" class="btn btn-warning float-right shadow-sm">Reset</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
