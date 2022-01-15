<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_produk extends CI_Controller
{
    public function index()
    {
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Produk';
        $this->load->view('templates/adminh', $data);
        $this->load->view('admin/data_produk', $data);
        $this->load->view('templates/f');
    }
    public function tambah_aksi()
    {
        $nama_produk = $this->input->post('nama_produk');
        $des = $this->input->post('des');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $kat = $this->input->post('kat');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload !";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }


        $data = array(
            'nama_produk' => $nama_produk,
            'des' => $des,
            'harga' => $harga,
            'stok' => $stok,
            'kat' => $kat,
            'gambar' => $gambar

        );

        $this->M_produk->tambah_produk($data, 'produk');
        redirect('admin/data_produk');
    }
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['produk'] = $this->M_produk->edit($where, 'produk')->result();
        $data['title'] = 'edit';
        $this->load->view('templates/adminh', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('templates/f');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_produk = $this->input->post('nama_produk');
        $des = $this->input->post('des');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $kat = $this->input->post('kat');

        $data = array(
            'nama_produk' => $nama_produk,
            'des' => $des,
            'harga' => $harga,
            'stok' => $stok,
            'kat' => $kat
        );

        $where = array('id' => $id);
        $this->M_produk->update($where, $data, 'produk');
        redirect('admin/data_produk');
    }
    public function hapus($id)
    {

        $where = array('id' => $id);
        $this->M_produk->hapus($where, 'produk');
        redirect('admin/data_produk');
    }
}
