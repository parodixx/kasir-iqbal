<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_transaksi');
    }
    public function saveMemberPetugas()
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
        redirect('petugas/transaksi');
    }

    public function saveSiTransaksi()
    {
        $input = $this->input->post(null, true);
        if ($input) {

            $data = [
                'nama' => $this->input->post('kasir'),
                'tanggal_transaksi' => $this->input->post('tanggal'),
                'no_faktur' => $this->input->post('no_faktur'),
                'member' => $this->input->post('member'),
                'total' => $this->input->post('total'),
                'diskon' => $this->input->post('diskon2'),
                'pembayaran' => $this->input->post('pembayaran'),
                'kembalian' => $this->input->post('kembalian'),
            ];
            $opot = $this->M_transaksi->saveTransaksi($data);
            if ($opot) {
                $var = $this->input->post('data');
                if ($var) {
                    $vir = array();
                    foreach ($var as $va) {
                        $vir[] = array(
                            'transaksiID' => $opot,
                            'kode_produk' => $va['kodeProduk'],
                            'nama_produk' => $va['namaProduk'],
                            'harga_produk' => $va['hargaProduk'],
                            'qty' => $va['qty'],
                            'subtotal' => $va['totalHarga'],
                        );
                    }
                    $this->db->insert_batch('detailpenjualan', $vir);

                    // var_dump($vir);
                    // die;
                    // $struk = $this->load->view('Admin/kelola/struk', compact('data', 'vir'), true);

                    $response = [
                        'success' => true,
                        'message' => 'Struk berhasil di-generate',
                        // 'struk' => $struk,
                    ];
                    // header('Content-Type: application/json');
                    echo json_encode($response);
                } else {
                }
            } else {
            }
        } else {
        }
    }
}
