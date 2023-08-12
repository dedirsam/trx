<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cash extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('saldo/CashModel');
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['saldo_cash'] = $this->CashModel->get_saldo_cash();
        $data['total_saldo_cash'] = $this->CashModel->get_total_saldo_cash();
        $this->template->load('layouts/template', 'admin/saldo/cash', $data);
    }

    public function add_saldo()
    {
        $saldo = $this->input->post('sal_inCash');

        $this->load->model('CashModel');

        $existingSaldo = $this->CashModel->get_existing_saldo();

        if ($existingSaldo) {
            $this->CashModel->update_saldo_cash($saldo);
            echo json_encode(array('status' => 'success', 'message' => 'Update Saldo Cash Sukses...'));
        } else {
            $this->CashModel->insert_saldo($saldo);
            echo json_encode(array('status' => 'success', 'message' => 'Insert Saldo Cash Sukses...'));
        }
    }


    public function delete_saldo()
    {
        $this->load->model('CashModel');

        $this->CashModel->delete_saldo();

        echo json_encode(array('status' => 'success', 'message' => 'Hapus Saldo Cash Sukses...'));
    }
}
