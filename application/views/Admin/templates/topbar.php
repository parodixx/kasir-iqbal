<style>
	.nav-link {
		font-family: monospace;
	}

	.navbar-brand {
		font-family: monospace;
	}
</style>

<nav class="navbar navbar-expand-sm bg-warning ">
	<div class="container-fluid ">
		<a class="navbar-brand fw-bold " href="<?= base_url('Admin/index') ?>"> Si Kasir</a>
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
		</button>
		<div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavId">
			<ul class="navbar-nav  ">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Admin/Produk') ?>" aria-current="page">Produk
						<span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Admin/Petugas') ?>" aria-current="page">Petugas
						<span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Admin/Member') ?>" aria-current="page">Member
						<span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Admin/Diskon') ?>" aria-current="page">Diskon
						<span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Admin/Transaksi') ?>" aria-current="page">transaksi
						<span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item ">
					<a href="<?= base_url('Welcome/logout') ?>" class="btn btn-danger btn-logout" style="border-radius:2px">Logout <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
