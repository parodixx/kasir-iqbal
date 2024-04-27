<html>

<head>
	<?php $this->load->view('Login/templates/header'); ?>
	<title><?= $title; ?></title>
</head>

<body>
	<div class="swal" data-error="<?= $this->session->flashdata('success'); ?>"></div>
	<div class="error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
	<?php $this->load->view($abc); ?>
</body>

</html>
<script src="<?php base_url() ?>assets/js/bootstrap.bundle.js"></script>
<script src="<?php base_url() ?>assets/js/sweetalert2.js"></script>
<script src="<?php base_url() ?>assets/js/main.js"></script>
