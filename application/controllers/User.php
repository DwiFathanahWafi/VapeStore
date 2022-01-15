<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Home';
        $this->load->view('templates/h', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/f');
    }
    public function produk()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $data['title'] = 'Produk Catalog';
        $this->load->view('templates/h', $data);
        $this->load->view('user/produk', $data);
        $this->load->view('templates/f');
    }

    public function detail($id)
    {
        $data['produk'] = $this->M_produk->detail_produk($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Produk';
        $this->load->view('templates/h', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/f');
    }
    public function atty()
    {
        $data['atty'] = $this->M_kategori->data_atty()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Atomizer Catalog';
        $this->load->view('templates/h', $data);
        $this->load->view('user/atty', $data);
        $this->load->view('templates/f');
    }
    public function bat()
    {
        $data['bat'] = $this->M_kategori->data_bat()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Battery Catalog';
        $this->load->view('templates/h', $data);
        $this->load->view('user/bat', $data);
        $this->load->view('templates/f');
    }
    public function coil()
    {
        $data['coil'] = $this->M_kategori->data_coil()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Coil Catalog';
        $this->load->view('templates/h', $data);
        $this->load->view('user/coil', $data);
        $this->load->view('templates/f');
    }
    public function cotton()
    {
        $data['cotton'] = $this->M_kategori->data_cotton()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Cotton Catalog';
        $this->load->view('templates/h', $data);
        $this->load->view('user/cotton', $data);
        $this->load->view('templates/f');
    }
    public function dev()
    {
        $data['dev'] = $this->M_kategori->data_dev()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Devices Catalog';
        $this->load->view('templates/h', $data);
        $this->load->view('user/dev', $data);
        $this->load->view('templates/f');
    }
    public function liq()
    {
        $data['liq'] = $this->M_kategori->data_liq()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Liquid Catalog';
        $this->load->view('templates/h', $data);
        $this->load->view('user/liq', $data);
        $this->load->view('templates/f');
    }

    public function contact()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Contact us';
        $this->load->view('templates/h', $data);
        $this->load->view('user/kontak', $data);
        $this->load->view('templates/f');
    }
}
