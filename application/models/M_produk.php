<?php

class M_produk extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('produk');
    }

    public function tambah_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus($where,  $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('produk');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_produk($id)
    {
        $result = $this->db->where('id', $id)->get('produk');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
