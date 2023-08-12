<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('saldo/CashModel');
        $this->load->model('saldo/BankModel');
        $this->load->model('saldo/PayopayModel');
        $this->load->model('saldo/PayfazzModel');
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        // saldo cash
        $saldo_cash = $this->CashModel->get_saldo();
        $data['saldo_cash'] = $saldo_cash;
        $last_saldo = $this->CashModel->get_last_saldo();
        $data['last_saldo_id'] = isset($last_saldo['id']) ? $last_saldo['id'] : null;
        // saldo bank
        $saldo_bank = $this->BankModel->get_saldo();
        $data['saldo_bank'] = $saldo_bank;
        $last_saldo = $this->BankModel->get_last_saldo();
        $data['last_saldo_id'] = isset($last_saldo['id']) ? $last_saldo['id'] : null;
        // $data['last_saldo_id'] = $last_saldo['id'];
        // saldo payopay
        $saldo_payopay = $this->PayopayModel->get_saldo();
        $data['saldo_payopay'] = $saldo_payopay;
        $last_saldo = $this->PayopayModel->get_last_saldo();
        $data['last_saldo_id'] = isset($last_saldo['id']) ? $last_saldo['id'] : null;
        // $data['last_saldo_id'] = $last_saldo['id'];
        // saldo payfazz
        $saldo_payfazz = $this->PayfazzModel->get_saldo();
        $data['saldo_payfazz'] = $saldo_payfazz;
        $last_saldo = $this->PayfazzModel->get_last_saldo();
        $data['last_saldo_id'] = isset($last_saldo['id']) ? $last_saldo['id'] : null;
        // $data['last_saldo_id'] = $last_saldo['id'];

        $this->template->load('layouts/template', 'admin/dashboard', $data);
    }
}
