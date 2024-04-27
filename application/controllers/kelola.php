<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola extends CI_Controller
{
	public function saveProduk()
	{
		$this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required');
		$this->form_validation->set_rules('stok', 'Stok Produk', 'required');

		$data = [
			'kode_produk' => $this->input->post('kode_produk'),
			'nama_produk' => $this->input->post('nama_produk'),
			'harga_produk' => $this->input->post('harga_produk'),
			'stok' => $this->input->post('stok'),
		];
		// var_dump($data);
		// die;

		$this->db->insert('produk', $data);
		$this->session->set_flashdata('success', 'Data Berhasil Di Tambah !!');
		redirect('admin/Produk');
	}

	public function saveMember()
	{
		$this->form_validation->set_rules('member', 'Nama member', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nomor', 'Nomor Telepon', 'required');

		$data = [
			'nama_pelanggan' => $this->input->post('member'),
			'alamat' => $this->input->post('alamat'),
			'nomor_telpon' => $this->input->post('nomor'),
		];
		// var_dump($data);
		// die;

		$this->db->insert('pelanggan', $data);
		$this->session->set_flashdata('success', 'Data Berhasil Di Tambah !!');
		redirect('admin/Member');
	}

	public function saveDiskon()
	{
		$this->form_validation->set_rules('diskon', 'Diskon', 'required');
		$this->form_validation->set_rules('minimalbel', 'Minimal Pembelanjaan', 'required');

		$data = [
			'diskon' => $this->input->post('diskon'),
			'minimal' => $this->input->post('minimalbel'),
		];
		// var_dump($data);
		// die;

		$this->db->insert('diskon', $data);
		$this->session->set_flashdata('success', 'Data Berhasil Di Tambah !!');
		redirect('admin/Diskon');
	}

	public function updateProduk($id)
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required');
		$this->form_validation->set_rules('stok', 'Stok Produk', 'required');

		$data = [
			'nama_produk' => $this->input->post('nama_produk'),
			'harga_produk' => $this->input->post('harga_produk'),
			'stok' => $this->input->post('stok'),
		];
		// var_dump($data);
		// die;

		$this->db->where('produkID', $id);
		$this->db->update('produk', $data);
		$this->session->set_flashdata('success', 'Data Berhasil Di Update!!');
		redirect('admin/produk');
	}

	public function updateMember($id)
	{
		$this->form_validation->set_rules('member', 'Nama member', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nomor', 'Nomor Telepon', 'required');

		$data = [
			'nama_pelanggan' => $this->input->post('member'),
			'alamat' => $this->input->post('alamat'),
			'nomor_telpon' => $this->input->post('nomor'),
		];
		// var_dump($data);
		// die;

		$this->db->where('pelangganID', $id);
		$this->db->update('pelanggan', $data);
		$this->session->set_flashdata('success', 'Data Berhasil Di Update!!');
		redirect('admin/Member');
	}

	public function updateDiskon($id)
	{
		$this->form_validation->set_rules('diskon', 'Diskon', 'required');
		$this->form_validation->set_rules('minimalbel', 'Minimal Pembelanjaan', 'required');

		$data = [
			'diskon' => $this->input->post('diskon'),
			'minimal' => $this->input->post('minimalbel'),
		];
		// var_dump($data);
		// die;

		$this->db->where('id', $id);
		$this->db->update('diskon', $data);
		$this->session->set_flashdata('success', 'Data Berhasil Di Update!!');
		redirect('admin/Diskon');
	}

	public function deleteProduk($id)
	{
		$this->db->where('produkID', $id);
		$this->db->delete('produk');
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!!');
		redirect('admin/Produk');
	}

	public function deleteDiskon($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('diskon');
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!!');
		redirect('admin/Diskon');
	}

	public function deleteMember($id)
	{
		$this->db->where('pelangganID', $id);
		$this->db->delete('pelanggan');
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!!');
		redirect('admin/Member');
	}

	public function deletePetugas($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
		$this->session->set_flashdata('success', 'Data Berhasil Di Hapus!!');
		redirect('admin/Petugas');
	}

	public function updateStatusPetugas($id)
	{
		$data = [

			'is_active' => 'nonaktif',
		];

		$this->db->where('id', $id);
		$this->db->update('user', $data);
		$this->session->set_flashdata('success', 'Petugas Di Nonaktifkan!!');
		redirect('admin/Petugas');
	}

	public function updatePetugas($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');

		$data = [

			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
		];
		// var_dump($data);
		// die;

		$this->db->where('id', $id);
		$this->db->update('user', $data);
		$this->session->set_flashdata('success', 'Data Berhasil Di Update!!');
		redirect('admin/Petugas');
	}
}
