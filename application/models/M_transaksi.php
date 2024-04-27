<?php

class M_transaksi extends CI_model {
    public function countTrans()
	{
		return $this->db->count_all('transaksi');
		
	}

	public function saveTransaksi($dataTransaksi)
    {
        $this->db->insert('transaksi', $dataTransaksi);

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

	public function getTransaksi()
	{
		$data = $this->db->get('transaksi')->result();
		return $data;
	}
}
