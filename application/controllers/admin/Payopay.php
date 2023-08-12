<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Payopay extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('saldo/PayopayModel');
        $this->load->model('saldo/BankModel');
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['saldo_payopay'] = $this->PayopayModel->get_saldo_payopay();
        $data['total_saldo_payopay'] = $this->PayopayModel->get_total_saldo_payopay();
        $this->template->load('layouts/template', 'admin/saldo/payopay', $data);
    }

    public function add_saldo()
    {
        $harga = $this->input->post('hargaPayo');
        $saldo = $this->input->post('sal_inPayo');
        $this->BankModel->isi_saldo_bank($saldo);
        $existingSaldo = $this->PayopayModel->get_existing_saldo();
        if ($existingSaldo) {
            $this->PayopayModel->update_saldo_payopay($harga);
            echo json_encode(array('status' => 'success', 'message' => 'Update Saldo Payo Pay Sukses...'));
        } else {
            $this->PayopayModel->insert_saldo($saldo);
            echo json_encode(array('status' => 'success', 'message' => 'Insert Saldo Payo Pay Sukses...'));
        }
    }

    public function delete_saldo()
    {
        $this->load->model('PayopayModel');

        $this->PayopayModel->delete_saldo();

        echo json_encode(array('status' => 'success', 'message' => 'Hapus Saldo Payo Pay Sukses...'));
    }
}
