<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_petugas');
		$this->load->model('M_produkk');
		$this->load->model('M_member');
		$this->load->model('M_diskon');
		$this->load->model('M_transaksi');
		check_log();
	}

	public function dashboard()
	{
		$data['title'] = 'Dashboard Petugas';
		$data['abc'] = 'Petugas/dashboard';
		$data['username'] = $this->session->userdata('username');
		$data['count'] = $this->M_produkk->countProduk();
		$data['count1'] = $this->M_petugas->countPetugas();
		$data['count2'] = $this->M_transaksi->countTrans();
		$this->load->view('Petugas/templates/index', $data);
	}
	public function Produk()
	{
		$data['title'] = 'Produk';
		$data['abc'] = 'Petugas/produk';
		$data['produk'] = $this->M_produkk->getAllProduk();
		$this->load->view('Petugas/templates/index', $data);
	}
	public function transaksi()
	{
		$data['title'] = 'Transaksi';
		$data['abc'] = 'Petugas/Transaksi';
		$data['username'] = $this->session->userdata('username');
		$data['produk2'] = $this->M_produkk->getAllProduk();
		$data['member'] = $this->M_member->getAllMember();
		$this->load->view('Petugas/templates/index', $data);
	}

	public function member()
	{
		$data['title'] = 'Tambah Member';
		$data['abc'] = 'Petugas/tambahMember';
		$this->load->view('Petugas/templates/index', $data);
	}

	public function Struk()
	{
		$data['title'] = 'Struk';
		$data['abc'] = 'Petugas/struk';
		$data['produk'] = $this->M_produkk->getAllProduk();
		$data['member'] = $this->M_member->getAllMember();
		$this->load->view('Petugas/templates/index', $data);
	}

	public function getProduk()
	{
		$kodeproduk = $this->input->post('kodeProduk');
		$produk = $this->M_produkk->getAllKodeProduk($kodeproduk);
		echo json_encode($produk);
	}

	public function getDiskon()
	{
		$diskon = $this->db->get('diskon')->result();
		echo json_encode($diskon);
	}
}
