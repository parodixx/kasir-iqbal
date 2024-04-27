<?php

class M_produkk extends CI_model {
    

    public function getAllProduk()
    {
        $data = $this->db->get('produk')->result();
        return $data;
    }

	public function getAllKodeProduk($kodeproduk)
    {
        $data =  $this->db->get_where('produk', array('kode_produk' => $kodeproduk));
        return $data->result_array();
    }

	public function countProduk()
	{
		return $this->db->count_all('produk');
		
	}
}
