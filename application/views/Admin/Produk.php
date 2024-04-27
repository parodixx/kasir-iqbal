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
										<th width="20%" class="text-white">Kode Produk</th>
										<th width="20%" class="text-white">Nama Produk</th>
										<th width="15%" class="text-white">Harga Produk</th>
										<th width="10%" class="text-white">Stok</th>
										<th width="10%" class="text-white">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									?>
									<?php foreach ($produk as $p) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $p->kode_produk; ?></td>
											<td><?= $p->nama_produk; ?></td>
											<td>Rp. <?= $p->harga_produk; ?></td>
											<td><?= $p->stok; ?></td>
											<td>
												<a href="<?= base_url('kelola/updateProduk/' . $p->produkID) ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaledit<?= $p->produkID ?>"><i class="fa fa-pen"></i></a>
												<a href="<?= base_url('kelola/deleteProduk/' . $p->produkID) ?>" class="btn btn-danger btn-hapus"><i class="fa fa-trash"></i></a>
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
				<form action="<?= base_url('kelola/saveProduk') ?>" method="post">
					<div class="mb-3">
						<label for="kode_produk" class="form-label">Kode Produk</label>
						<input type="text" name="kode_produk" id="kode_produk" class="form-control" placeholder="Masukan Nama Produk" required />
					</div>
					<div class="mb-3">
						<label for="nama_produk" class="form-label">Nama Produk</label>
						<input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukan Nama Produk" required />
					</div>
					<div class="mb-3">
						<label for="harga_produk" class="form-label">Harga Produk</label>
						<input type="text" name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukan Harga Produk" required />
					</div>
					<div class="mb-3">
						<label for="stok" class="form-label">Stok</label>
						<input type="number" name="stok" id="stok" class="form-control" placeholder="Masukan Stok Produk" required />
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
<?php foreach ($produk as $p) : ?>
	<div class="modal fade" id="modaledit<?= $p->produkID ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('kelola/updateProduk/' . $p->produkID) ?>" method="post">
						<div class="mb-3">
							<label for="kode_produk" class="form-label">Kode Produk</label>
							<input type="text" name="kode_produk" id="kode_produk" class="form-control" placeholder="Masukan Nama Produk" value="<?= $p->kode_produk ?>" />
						</div>
						<div class="mb-3">
							<label for="nama_produk" class="form-label">Nama Produk</label>
							<input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukan Nama Produk" value="<?= $p->nama_produk ?>" />
						</div>
						<div class="mb-3">
							<label for="harga_produk" class="form-label">Harga Produk</label>
							<input type="text" name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukan Harga Produk" value="<?= $p->harga_produk ?>" />
						</div>
						<div class="mb-3">
							<label for="stok" class="form-label">Stok</label>
							<input type="number" name="stok" id="stok" class="form-control" placeholder="Masukan Stok Produk" value="<?= $p->stok ?>" />
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