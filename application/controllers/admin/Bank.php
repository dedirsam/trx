<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('saldo/BankModel');
        $this->load->model('saldo/CashModel');
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['saldo_bank'] = $this->BankModel->get_saldo();
        $data['total_saldo_bank'] = $this->BankModel->get_total_saldo_bank();
        $this->template->load('layouts/template', 'admin/saldo/bank', $data);
    }

    public function add_saldo()
    {
        $saldo = $this->input->post('sal_in');
        $this->CashModel->isi_saldo_cash($saldo);
        $existingSaldo = $this->BankModel->get_existing_saldo();
        if ($existingSaldo) {
            $this->BankModel->update_saldo_bank($saldo);
            echo json_encode(array('status' => 'success', 'message' => 'Update Saldo Bank Sukses...'));
        } else {
            $this->BankModel->insert_saldo($saldo);
            echo json_encode(array('status' => 'success', 'message' => 'Insert Saldo Bank Sukses...'));
        }
    }

    public function delete_saldo()
    {
        $this->load->model('BankModel');

        $this->BankModel->delete_saldo();

        echo json_encode(array('status' => 'success', 'message' => 'Hapus Saldo Cash Sukses...'));
    }
}
