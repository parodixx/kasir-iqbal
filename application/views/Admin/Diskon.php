
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
										<th width="20%" class="text-white">Diskon</th>
										<th width="15%" class="text-white">Minimal Pembelanjaan</th>
										<th width="10%" class="text-white">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									?>
									<?php foreach ($diskon as $d) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $d->diskon; ?></td>
											<td>Rp. <?= $d->minimal; ?></td>
											<td>
												<a href="<?= base_url('kelola/updateDiskon/' . $d->id) ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaledit<?= $d->id ?>"><i class="fa fa-pen"></i></a>
												<a href="<?= base_url('kelola/deleteDiskon/' . $d->id) ?>" class="btn btn-danger btn-hapus"><i class="fa fa-trash"></i></a>
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
				<form action="<?= base_url('kelola/saveDiskon') ?>" method="post">
					<div class="mb-3">
						<label for="diskon" class="form-label">Diskon</label>
						<input type="text" name="diskon" id="diskon" class="form-control" placeholder="Masukan Diskon Contoh: 10%" required />
					</div>
					<div class="mb-3">
						<label for="minimalbel" class="form-label">Minimal Pembelanjaan</label>
						<input type="number" name="minimalbel" id="minimalbel" class="form-control" placeholder="Masukan Minimal Contoh: 10.000" required />
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
<?php foreach ($diskon as $d) : ?>
	<div class="modal fade" id="modaledit<?= $d->id ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('kelola/updateDiskon/' . $d->id) ?>" method="post">
						<div class="mb-3">
							<label for="diskon" class="form-label">Diskon</label>
							<input type="text" name="diskon" id="diskon" class="form-control" placeholder="Masukan Diskon Contoh: 10%" value="<?= $d->diskon ?>" />
						</div>
						<div class="mb-3">
							<label for="minimalbel" class="form-label">Harga Produk</label>
							<input type="number" name="minimalbel" id="minimalbel" class="form-control" placeholder="Masukan Minimal Contoh: 10.000" value="<?= $d->minimal ?>" />
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
