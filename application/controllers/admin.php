<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_produkk');
        $this->load->model('M_petugas');
        $this->load->model('M_diskon');
        $this->load->model('M_member');
        $this->load->model('M_transaksi');
        check_log();
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $data['abc'] = 'Admin/dashboard';
		$data['count'] = $this->M_produkk->countProduk();
		$data['count1'] = $this->M_petugas->countPetugas();
		$data['count2'] = $this->M_transaksi->countTrans();
		$data['count3'] = $this->M_member->countMember();
        $this->load->view('Admin/templates/index', $data);
    }
    public function Produk()
    {
        $data['title'] = 'Kelola Produk';
        $data['abc'] = 'Admin/Produk';
        $data['produk'] = $this->M_produkk->getAllProduk();
        $this->load->view('Admin/templates/index', $data);
    }

    public function Petugas()
    {
        $data['title'] = 'Kelola Petugas';
        $data['abc'] = 'Admin/Petugas';
        $data['user'] = $this->M_petugas->getPetugas();
        $this->load->view('Admin/templates/index', $data);
    }
    public function Diskon()
    {
        $data['title'] = 'Kelola Diskon';
        $data['abc'] = 'Admin/Diskon';
		$data['diskon'] = $this->M_diskon->getAllDiskon();
        $this->load->view('Admin/templates/index', $data);
    }
    public function Member()
    {
        $data['title'] = 'Kelola Member';
        $data['abc'] = 'Admin/Member';
		$data['member'] = $this->M_member->getAllMember();
        $this->load->view('Admin/templates/index', $data);
    }
    public function Transaksi()
    {
        $data['title'] = 'History Transaksi';
        $data['abc'] = 'Admin/transaksi';
		$data['transaksi'] = $this->M_transaksi->getTransaksi();
        $this->load->view('Admin/templates/index', $data);
    }
}
