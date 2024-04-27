<?php

class M_member extends CI_model {

    function getAllMember() {
       $data = $this->db->get('pelanggan')->result();
        return $data;
    }

	function countMember(){
		return $this->db->count_all('pelanggan');
	}
}
