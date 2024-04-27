
<div class="container mt-5">
	<div class="card">
		<div class="card-body">
			<span class="fw-bold fs-3">Table <?= $title; ?></span>
			<div class="card mt-3">
				<div class="card-body bg-warning">
					<div class="table-responsive">
						<div class="card-body">
							<button type="submit" class="btn btn-success" style="border-radius: 2px;" data-bs-toggle="modal" data-bs-target="#modalId">
								Add
							</button>
							<table class="table table-hover table-bordered text-center align-middle mt-3">
								<thead class="table-dark">
									<tr>
										<th width="5%" class="text-white">No</th>
										<th width="20%" class="text-white">Nama Member</th>
										<th width="15%" class="text-white">Alamat</th>
										<th width="10%" class="text-white">No telepon</th>
										<th width="10%" class="text-white">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									?>
									<?php foreach ($member as $m) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $m->nama_pelanggan; ?></td>
											<td><?= $m->alamat; ?></td>
											<td><?= $m->nomor_telpon; ?></td>
											<td>
												<a href="<?= base_url('kelola/updateMember/' . $m->pelangganID) ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaledit<?= $m->pelangganID ?>"><i class="fa fa-pen"></i></a>
												<a href="<?= base_url('kelola/deleteMember/' . $m->pelangganID) ?>" class="btn btn-danger btn-hapus" ><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('kelola/saveMember') ?>" method="post">
					<div class="mb-3">
						<label for="member" class="form-label">Nama Member</label>
						<input type="text" name="member" id="member" class="form-control" placeholder="Masukan Nama Member" required />
					</div>
					<div class="mb-3">
						<label for="alamat" class="form-label">Alamat</label>
						<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat" required />
					</div>
					<div class="mb-3">
						<label for="nomor" class="form-label">Nomor Telepon</label>
						<input type="number" name="nomor" id="nomor" class="form-control" placeholder="Contoh : 089999999" required />
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="submit" class="btn btn-success">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php foreach ($member as $m) : ?>
	<div class="modal fade" id="modaledit<?= $m->pelangganID ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('kelola/updateMember/' . $m->pelangganID) ?>" method="post">
						<div class="mb-3">
							<label for="member" class="form-label">Nama Member</label>
							<input type="text" name="member" id="member" class="form-control" placeholder="Masukan Nama Produk" value="<?= $m->nama_pelanggan ?>" />
						</div>
						<div class="mb-3">
							<label for="alamat" class="form-label">Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Harga Produk" value="<?= $m->alamat ?>" />
						</div>
						<div class="mb-3">
							<label for="nomor" class="form-label">Nomor telepon</label>
							<input type="number" name="nomor" id="nomor" class="form-control" placeholder="Masukan Stok Produk" value="<?= $m->nomor_telpon ?>" />
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
								Close
							</button>
							<button type="submit" class="btn btn-success">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>

<script>
	const myModal = new bootstrap.Modal(
		document.getElementById("modalId"),
		options,
	);
</script>
