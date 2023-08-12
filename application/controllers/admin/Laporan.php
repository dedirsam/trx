<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TrxModel');
        $this->load->model('LaporanModel');
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');

        $data['kategori_data'] = $this->TrxModel->getAllKategori();

        $data['trx_data'] = $this->TrxModel->get_trx_data_lap();

        $this->template->load('layouts/template', 'admin/laporan', $data);
    }

    public function lap_data()
    {
        $id_saldo = $this->input->post('id_saldo');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        // Jika id_saldo tidak kosong dan bukan "Pilih", gunakan untuk filter
        if (!empty($id_saldo) && $id_saldo !== 'Pilih') {
            $trx_data = $this->LaporanModel->getTransactionsByDate($id_saldo, $startDate, $endDate);
        } else {
            $trx_data = $this->LaporanModel->getAllTransactionsByDate($startDate, $endDate);
        }
        // Kembalikan data sebagai respons JSON
        echo json_encode($trx_data);
    }
}
