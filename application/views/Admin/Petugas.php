
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
										<th width="15%" class="text-white">Nama Petugas</th>
										<th width="15%" class="text-white">Username</th>
										<th width="10%" class="text-white">Status</th>
										<th width="10%" class="text-white">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									?>
									<?php foreach ($user as $u) :
										if ($u['role_id'] != 1) :
									?>
											<tr>
												<td><?= $no++; ?></td>
												<td><?= $u['nama']; ?></td>
												<td><?= $u['username']; ?></td>
												<td><span class="badge rounded-pill <?= $u['is_active'] == 'aktif' ? 'bg-success' : 'bg-danger'; ?>"><?= $u['is_active']; ?></span></td>
												</td>
												<td>
													<span class="btn btn-group">
														<a href="<?= base_url('kelola/updatePetugas/' . $u['id']) ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaledit<?= $u['id'] ?>"><i class="fa fa-pen"></i></a>
														<?php if($u['is_active'] != 'nonaktif'): ?>
														<a href="<?= base_url('kelola/updateStatusPetugas/' . $u['id']) ?>" class="btn btn-danger btn-status" id="status"><i class="fa fa-ban"></i></a>
														<?php endif; ?>
														<a href="<?= base_url('kelola/deletePetugas/' . $u['id']) ?>" class="btn btn-danger btn-hapus"><i class="fa fa-trash"></i></a>
													</span>
												</td>
											</tr>
									<?php
										endif;
									endforeach;
									?>
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
				<form action="<?= base_url('Welcome/regist') ?>" method="post">
					<div class="mb-3">
						<label for="nama" class="form-label">Nama Petugas</label>
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Petugas"  required/>
					</div>
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" required/>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Masukan password" required />
					</div>
					<div class="mb-3">
						<label for="is_active" class="form-label">Status</label>
						<select name="is_active" id="is_active" class="form-control" >
							<option value="aktif">Aktif</option>
							<option value="nonaktif">Nonaktif</option>
						</select>
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
<?php foreach ($user as $u) : ?>
	<div class="modal fade" id="modaledit<?= $u['id'] ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('kelola/updatePetugas/' . $u['id']) ?>" method="post">
						<div class="mb-3">
							<label for="nama" class="form-label">Nama Petugas</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Petugas" value="<?= $u['nama'] ?>" />
						</div>
						<div class="mb-3">
							<label for="username" class="form-label">Username</label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" value="<?= $u['username'] ?>" />
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
