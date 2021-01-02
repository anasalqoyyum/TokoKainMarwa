<?php

class Model_kategori extends CI_Model{
    public function get_data_daster($limit, $start){
        $query = $this->db->get_where("tb_barang",array('kategori' => 'daster'), $limit, $start);
        return $query;
    }

    public function get_data_sedress($limit, $start){
        $query = $this->db->get_where("tb_barang",array('kategori' => 'sedress'), $limit, $start);
        return $query;
    }

    public function get_data_longdress($limit, $start){
        $query = $this->db->get_where("tb_barang",array('kategori' => 'longdress'), $limit, $start);
        return $query;
    }

    public function get_data_gamis($limit, $start){
        $query = $this->db->get_where("tb_barang",array('kategori' => 'gamis'), $limit, $start);
        return $query;
    }

    // public function data_daster()
    // {
    //     return $this->db->get_where("tb_barang",array('kategori' => 'daster'));
    // }

    // public function data_sedress()
    // {
    //     return $this->db->get_where("tb_barang",array('kategori' => 'sedress'));
    // }

    // public function data_longdress()
    // {
    //     return $this->db->get_where("tb_barang",array('kategori' => 'longdress'));
    // }

    // public function data_gamis()
    // {
    //     return $this->db->get_where("tb_barang",array('kategori' => 'gamis'));
    // }
}

?>