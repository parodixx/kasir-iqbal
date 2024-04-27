<style>
	.container {
		margin-top: 250px;
	}

	.form-label {
		font-family: monospace;
	}

	.form-control {
		font-family: sans-serif
	}
</style>

<div class="container  d-flex justify-content-center">
	<div class="card bg-info col-4">
		<h2 class="d-flex justify-content-center mt-4">Register Petugas</h2>
		<div class="card-body  d-flex justify-content-center">
			<form action="<?= base_url('Welcome/regist') ?>" method="post">
				<div class="mb-3 ">
					<label for="nama" class="form-label">Nama </label>
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama">
				</div>
				<div class="mb-3 ">
					<label for="username" class="form-label">Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required />
				</div>
				<button type="submit " class="btn btn-primary col-12" style="border-radius: 2px;">Submit</button>
			</form>
		</div>
	</div>
</div>