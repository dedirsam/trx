<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Payfazz extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('saldo/PayfazzModel');
        $this->load->model('saldo/BankModel');
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['saldo_payfazz'] = $this->PayfazzModel->get_saldo_payfazz();
        $data['total_saldo_payfazz'] = $this->PayfazzModel->get_total_saldo_payfazz();
        $this->template->load('layouts/template', 'admin/saldo/payfazz', $data);
    }

    public function add_saldo()
    {
        $harga = $this->input->post('hargaFazz');
        $saldo = $this->input->post('sal_inFazz');
        $this->BankModel->isi_saldo_bank($saldo);
        $existingSaldo = $this->PayfazzModel->get_existing_saldo();
        if ($existingSaldo) {
            $this->PayfazzModel->update_saldo_payfazz($harga);
            echo json_encode(array('status' => 'success', 'message' => 'Update Saldo Pay Fazz Sukses...'));
        } else {
            $this->PayfazzModel->insert_saldo($saldo);
            echo json_encode(array('status' => 'success', 'message' => 'Insert Saldo Pay Fazz Sukses...'));
        }
    }

    public function delete_saldo()
    {
        $this->load->model('PayfazzModel');

        $this->PayfazzModel->delete_saldo();

        echo json_encode(array('status' => 'success', 'message' => 'Hapus Saldo Pay Fazz Sukses...'));
    }

    public function isiSaldoFazz()
    {
        $jml_trx = $this->input->post('jml_trx');

        $saldo = $this->PayfazzModel->get_saldo();

        $new_sal_in = $saldo + $jml_trx;
        $this->PayfazzModel->update_saldo($new_sal_in);

        $this->load->model('saldo/BankModel');
        $bank_sal_in = $this->BankModel->get_saldo();

        $new_bank_sal_in = $bank_sal_in - $jml_trx;
        $this->BankModel->update_saldo($new_bank_sal_in);
        // Update nilai sal_in
        echo json_encode(['status' => 'success', 'message' => 'Isi Saldo Berhasil...']);
    }
}
