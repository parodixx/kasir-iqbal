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
										<th width="20%" class="text-white">Nama Petugas</th>
										<th width="15%" class="text-white">Tanggal Transaksi</th>
										<th width="10%" class="text-white">No Faktur</th>
										<th width="10%" class="text-white">Member</th>
										<th width="10%" class="text-white">Diskon</th>
										<th width="10%" class="text-white">Pembayaran</th>
										<th width="10%" class="text-white">Kembalian</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									?>
									<?php foreach ($transaksi as $t) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $t->nama; ?></td>
											<td><?= $t->tanggal_transaksi; ?></td>
											<td><?= $t->no_faktur; ?></td>
											<td><?= $t->member; ?></td>
											<td><?= $t->diskon; ?></td>
											<td><?= $t->pembayaran; ?></td>
											<td><?= $t->kembalian; ?></td>
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
