<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('MY_Pagination');
        $this->load->model('KategoriModel');
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        // $this->load->library('MY_Pagination');
        $data = konfigurasi('Dashboard');
        $data['kategori'] = $this->KategoriModel->get_kategori();

        $config['base_url']     = base_url('admin/Kategori/index');
        $config['total_rows']   = $this->KategoriModel->get_total_rows();
        $config['per_page']     = 20;
        $config['uri_segment']  = 4;
        $config['num_links']    = 2;

        $config['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

        $data['kategori_data'] = $this->KategoriModel->get_kategori_data($config['per_page'], $page);

        $this->template->load('layouts/template', 'admin/kategori/index', $data);
    }

    public function display_saldo()
    {
        $data['saldo'] = $this->SaldoModel->get_saldo();
        $data['total_sal_in'] = $this->SaldoModel->get_total_sal_in();
        $this->load->view('saldo_display', $data);
    }

    public function tambah_kategori()
    {
        // Tangkap data dari AJAX request
        $nama_kategori = $this->input->post('nama_kategori');

        // Insert saldo ke database menggunakan model
        $this->KategoriModel->insert_kategori($nama_kategori);

        // Kirim response ke JavaScript
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
    }

    public function hapus_kategori()
    {
        // Tangkap data dari AJAX request
        $id = $this->input->post('id');

        // Hapus kategori dari database menggunakan model
        $result = $this->KategoriModel->delete_kategori($id);

        if ($result) {
            // Jika berhasil menghapus, kirim respons JSON success ke JavaScript
            echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus']);
        } else {
            // Jika terjadi kesalahan, kirim respons JSON error ke JavaScript
            echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus data']);
        }
    }
}
