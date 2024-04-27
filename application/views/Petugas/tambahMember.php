<div class="container mt-5 d-flex justify-content-center">
	<div class="card col-6">
		<div class="card-body">
			<span class="fw-bold fs-3"><?= $title ?></span>
			<div class="card mt-3 ">
				<div class="card-body">
					<form action="<?= base_url('kelola_petugas/saveMemberPetugas') ?>" method="post">
						<div class="mb-3">
							<label for="member" class="form-label">Nama Member</label>
							<input type="text" name="member" id="member" class="form-control" placeholder="Masukan Nama" required />
						</div>
						<div class="mb-3">
							<label for="alamat" class="form-label">Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat" required />
						</div>
						<div class="mb-3">
							<label for="nomor" class="form-label">Nomor Telepon</label>
							<input type="number" name="nomor" id="nomor" class="form-control" placeholder="Contoh : 081234567891" required />
						</div>
						<div class="mb-3 d-flex justify-content-end">
							<a href="<?= base_url('petugas/transaksi')?>" class="btn btn-danger me-3" style="border-radius: 2px;">Back</a>
							<button type="submit" class="btn btn-success" style="border-radius: 2px;">Save</button>
						</div> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
