<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('Petugas/templates/header'); ?>
	<title><?= $title; ?></title>
</head>

<body>
	<div class="swal" data-swal="<?= $this->session->flashdata('success'); ?>"></div>
	<div class="error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
	<?php $this->load->view('Petugas/templates/topbar'); ?>

	<div class="container mt-5 fw-bold">
		<nav class="breadcrumb">
			<span class="breadcrumb-item">Si Kasir</span>
			<span class="breadcrumb-item active" aria-current="page"><?= $title; ?></span>
		</nav>
	</div>

	<?php $this->load->view($abc); ?>
</body>

</html>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/sweetalert2.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>