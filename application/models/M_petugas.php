<?php

class M_petugas extends CI_model {
    function getPetugas() {
       $data = $this->db->get_where('user', ['role_id' => 2])->result_array();
        return $data;
    }

	public function countPetugas()
	{
		return $this->db->count_all('user', ['role_id' => 2]);
	}
}
