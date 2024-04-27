<div class="container mt-5">
	<div class="card">
		<div class="card-body">
		<span class="fw-bold fs-3">Table <?= $title; ?></span>
			<div class="card mt-3">
				<div class="card-body bg-warning">
					<div class="table-responsive">
						<div class="card-body">
							<table class="table table-hover table-bordered text-center align-middle mt-3">
								<thead class="table-dark">
									<tr>
										<th width="5%" class="text-white">No</th>
										<th width="20%" class="text-white">Nama Produk</th>
										<th width="15%" class="text-white">Harga Produk</th>
										<th width="10%" class="text-white">Stok</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									?>
									<?php foreach ($produk as $p) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $p->nama_produk; ?></td>
											<td>Rp. <?= $p->harga_produk; ?></td>
											<td>Tersedia : <b><?= $p->stok; ?></b></td>
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
