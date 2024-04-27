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
	<div class="card border-primary col-4">
		<h2 class="d-flex justify-content-center mt-4">LOGIN</h2>
		<div class="card-body  d-flex justify-content-center">
			<form action="<?= base_url('Welcome/login') ?>" method="post">
				<div class="mb-3 ">
					<label for="username" class="form-label">Username</label>
					<input type="text" class="form-control" name="username" id="username" value="<?= set_value('username')?>" placeholder="Masukan Username" required>
				</div>
				<label for="password" class="form-label">Password</label>
				<div class="mb-3 input-group">
					<input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required />
					<div class="input-group-text">
						<span id="show" class="fa fa-eye"></span>
					</div>

				</div>
				<button type="submit " class="btn btn-primary col-12" style="border-radius: 2px;">Login</button>
			</form>
		</div>
	</div>
</div>

<script>
	var data = document.getElementById('password')
	var look = document.getElementById('show')

	look.addEventListener('click', function() {
		if(data.type == 'password'){
			data.type = 'text'
			look.classList.remove('fa-eye')
			look.classList.add('fa-eye-slash')
		}else{
			data.type = 'password'
			look.classList.remove('fa-eye-slash')
			look.classList.add('fa-eye')
		}
	})
</script>
