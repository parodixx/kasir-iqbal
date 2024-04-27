<?php

class M_diskon extends CI_model {

    function getAllDiskon() {
       $data = $this->db->get('diskon')->result();
        return $data;
    }
}
