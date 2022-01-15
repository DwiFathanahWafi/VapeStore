<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{
    public function data_atty()
    {
        return $this->db->get_where("produk", array('kat' => 'Atomizer'));
    }
    public function data_bat()
    {
        return $this->db->get_where("produk", array('kat' => 'Battery'));
    }
    public function data_coil()
    {
        return $this->db->get_where("produk", array('kat' => 'Coil'));
    }
    public function data_cotton()
    {
        return $this->db->get_where("produk", array('kat' => 'Cotton'));
    }
    public function data_dev()
    {
        return $this->db->get_where("produk", array('kat' => 'Devices'));
    }
    public function data_liq()
    {
        return $this->db->get_where("produk", array('kat' => 'Liquid'));
    }
}
