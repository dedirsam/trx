<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Trx extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('MY_Pagination');
        $this->load->model('TrxModel');
        $this->load->model('saldo/CashModel');
        $this->load->model('saldo/BankModel');
        $this->load->model('saldo/PayfazzModel');
        $this->load->model('saldo/PayopayModel');
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function trx_cash()
    {
        // $this->load->library('MY_Pagination');
        $data = konfigurasi('Dashboard');

        $saldo_cash = $this->CashModel->get_saldo();
        $data['saldo_cash'] = $saldo_cash;
        $last_saldo = $this->CashModel->get_last_saldo();
        $data['last_saldo_id'] = isset($last_saldo['id']) ? $last_saldo['id'] : null;

        $data['kategori_data'] = $this->TrxModel->getAllKategori();

        $config['base_url']     = base_url('admin/Trx/trx_cash');
        $config['total_rows']   = $this->TrxModel->get_total_rows();
        $config['per_page']     = 10;
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

        $id_saldo = 1; // Ganti dengan id_saldo yang sesuai
        $data['trx_data'] = $this->TrxModel->get_trx_data($id_saldo, $config['per_page'], $page);

        $this->template->load('layouts/template', 'admin/trx/cash', $data);
    }

    public function trx_payopay()
    {
        // $this->load->library('MY_Pagination');
        $data = konfigurasi('Dashboard');

        $saldo_cash = $this->CashModel->get_saldo();
        $saldo_payopay = $this->PayopayModel->get_saldo();
        $data['saldo_cash'] = $saldo_cash;
        $data['saldo_payopay'] = $saldo_payopay;
        $last_saldo = $this->CashModel->get_last_saldo();
        $last_saldo = $this->PayopayModel->get_last_saldo();
        $data['last_saldo_id'] = isset($last_saldo['id']) ? $last_saldo['id'] : null;


        $data['kategori_data'] = $this->TrxModel->getAllKategori();

        $config['base_url']     = base_url('admin/Trx/trx_payopay');
        $config['total_rows']   = $this->TrxModel->get_total_rows();
        $config['per_page']     = 10;
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
        $id_saldo = 4;
        $data['trx_data'] = $this->TrxModel->get_trx_data($id_saldo, $config['per_page'], $page);

        $this->template->load('layouts/template', 'admin/trx/payopay', $data);
    }

    public function trx_payfazz()
    {
        // $this->load->library('MY_Pagination');
        $data = konfigurasi('Dashboard');

        $saldo_cash = $this->CashModel->get_saldo();
        $saldo_payfazz = $this->PayfazzModel->get_saldo();
        $data['saldo_cash'] = $saldo_cash;
        $data['saldo_payfazz'] = $saldo_payfazz;
        $last_saldo = $this->CashModel->get_last_saldo();
        $last_saldo = $this->PayfazzModel->get_last_saldo();
        $data['last_saldo_id'] = isset($last_saldo['id']) ? $last_saldo['id'] : null;


        $data['kategori_data'] = $this->TrxModel->getAllKategori();

        $config['base_url']     = base_url('admin/Trx/trx_payfazz');
        $config['total_rows']   = $this->TrxModel->get_total_rows();
        $config['per_page']     = 10;
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
        $id_saldo = 3;
        $data['trx_data'] = $this->TrxModel->get_trx_data($id_saldo, $config['per_page'], $page);

        $this->template->load('layouts/template', 'admin/trx/payfazz', $data);
    }

    public function trx_bank()
    {
        // $this->load->library('MY_Pagination');
        $data = konfigurasi('Dashboard');

        $saldo_cash = $this->CashModel->get_saldo();
        $saldo_bank = $this->BankModel->get_saldo();
        $data['saldo_cash'] = $saldo_cash;
        $data['saldo_bank'] = $saldo_bank;
        $last_saldo = $this->CashModel->get_last_saldo();
        $last_saldo = $this->BankModel->get_last_saldo();
        $data['last_saldo_id'] = isset($last_saldo['id']) ? $last_saldo['id'] : null;


        $data['kategori_data'] = $this->TrxModel->getAllKategori();

        $config['base_url']     = base_url('admin/Trx/trx_bank');
        $config['total_rows']   = $this->TrxModel->get_total_rows();
        $config['per_page']     = 10;
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
        $id_saldo = 2;
        $data['trx_data'] = $this->TrxModel->get_trx_data($id_saldo, $config['per_page'], $page);

        $this->template->load('layouts/template', 'admin/trx/bank', $data);
    }

    public function tambah_trx_cash()
    {
        $id_saldo = '1';
        // $j_trx    = $this->input->post('j_trx');
        // $nama     = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $jml_trx  = $this->input->post('jml_trx');
        // $jml_byr  = $this->input->post('jml_byr');
        // $admin    = $this->input->post('admin');

        $this->TrxModel->tambah_transaksi_cash($id_saldo,  $kategori,  $jml_trx);


        $saldo = $this->CashModel->get_saldo();
        $new_sal_in = $saldo - $jml_trx;
        $this->CashModel->update_saldo($new_sal_in);
        // Update nilai sal_in
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
    }

    public function bayar_trx_cash()
    {
        // Ambil data ID transaksi dan jml_byr dari AJAX request
        $idTransaksi = $this->input->post('id');
        $jmlByr = $this->input->post('jml_byr');
        // Lakukan validasi jmlByr lebih besar atau sama dengan jmlTrx
        $query = $this->db->get_where('tbl_trx', array('id' => $idTransaksi));
        $result = $query->row();
        if ($result) {
            $jmlTrx = $result->jml_trx;
            if ($jmlByr < $jmlTrx) {
                $response['status'] = 'error';
                $response['message'] = 'Jumlah bayar tidak mencukupi. Anda rugi!';
            } else {
                // Panggil fungsi bayarTransaksi dari model Trx_model
                $this->TrxModel->bayar_transaksi($idTransaksi, $jmlByr);
                $response['status'] = 'success';
                $response['message'] = 'Pembayaran berhasil. Selisih telah disimpan di kolom laba.';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Data transaksi tidak ditemukan.';
        }
        // Kembalikan respon dalam bentuk JSON
        echo json_encode(['status' => 'success', 'message' => 'Pembayaran berhasil']);
    }

    public function batalkan_trx_cash()
    {
        $idTrx = $this->input->post('idTrx');
        echo "ID yang diterima: " . $idTrx;
        $trx_data = $this->TrxModel->get_transaksi_by_id($idTrx);
        if ($trx_data) {
            $admin = $trx_data['admin'];
            $kategori = $trx_data['kategori'];
            $jml_trx = $trx_data['jml_trx'];
            $jml_byr = $trx_data['jml_byr'];
            $laba = $trx_data['laba'];
            $this->TrxModel->hapusTrx($idTrx);


            $saldo = $this->CashModel->get_saldo();
            $new_sal_in = $saldo + $jml_trx;
            $this->CashModel->update_saldo_batal($new_sal_in);

            echo json_encode(['status' => 'success', 'message' => 'Transaksi berhasil dibatalkan']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Transaksi tidak ditemukan']);
        }
    }


    public function hapus_trx_cash()
    {
        $idTrx = $this->input->post('id');

        // Panggil method model untuk menghapus data Bon berdasarkan ID
        $result = $this->TrxModel->hapusTrx($idTrx);

        // Berikan respon JSON kepada view (contoh)
        if ($result) {
            echo json_encode(array('status' => 'success', 'message' => 'Bon berhasil dihapus.'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Terjadi kesalahan saat menghapus Bon.'));
        }
    }  // ------------------------------------
    // bank ----------------------------------
    public function tambah_trx_bank()
    {
        $id_saldo = '2';
        $j_trx = $this->input->post('j_trx');
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $admin = $this->input->post('admin');
        $jml_trx = $this->input->post('jml_trx');
        $jml_byr = $this->input->post('jml_byr');
        $admin    = $this->input->post('admin');
        if (empty($nama)) {
            $nama = 'cst...';
        }
        $this->TrxModel->tambah_transaksi($id_saldo, $j_trx, $nama, $kategori, $admin, $jml_trx, $jml_byr);

        if ($kategori == 'Tarik Tunai') {
            $saldo = $this->CashModel->get_saldo();
            $bank_sal_in = $this->BankModel->get_saldo();
            if ($admin == 0) {
                $new_sal_in = $saldo - $jml_trx;
                $new_bank_sal_in = $bank_sal_in + $jml_byr;
            } elseif ($admin == 1) {
                $new_sal_in = $saldo - $jml_trx + ($jml_byr - $jml_trx);
                $new_bank_sal_in = $bank_sal_in + $jml_trx;
            }
            $this->CashModel->update_saldo($new_sal_in);
            $this->BankModel->t_sal_in($new_bank_sal_in);
        } else {
            $saldo = $this->CashModel->get_saldo();
            $bank_sal_in = $this->BankModel->get_saldo();
            $new_sal_in = $saldo + $jml_byr;
            $new_bank_sal_in = $bank_sal_in - $jml_trx;
            $this->CashModel->update_saldo($new_sal_in);
            $this->BankModel->update_saldo($new_bank_sal_in);
        }

        echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
    }

    public function bayar_trx_bank()
    {
        $idTransaksi = $this->input->post('id');
        $jmlByr = $this->input->post('jml_byr');

        $query = $this->db->get_where('tbl_trx', array('id' => $idTransaksi));
        $result = $query->row();
        if ($result) {
            $jmlTrx = $result->jml_trx;
            if ($jmlByr < $jmlTrx) {
                $response['status'] = 'error';
                $response['message'] = 'Jumlah bayar tidak mencukupi. Anda rugi!';
            } else {
                $this->TrxModel->bayar_transaksi($idTransaksi, $jmlByr);
                $response['status'] = 'success';
                $response['message'] = 'Pembayaran berhasil. Selisih telah disimpan di kolom laba.';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Data transaksi tidak ditemukan.';
        }

        echo json_encode(['status' => 'success', 'message' => 'Pembayaran berhasil']);
    }

    public function batalkan_trx_bank()
    {
        $idTrx = $this->input->post('idTrx');
        echo "ID yang diterima: " . $idTrx;
        $trx_data = $this->TrxModel->get_transaksi_by_id($idTrx);
        if ($trx_data) {
            $admin = $trx_data['admin'];
            $kategori = $trx_data['kategori'];
            $jml_trx = $trx_data['jml_trx'];
            $jml_byr = $trx_data['jml_byr'];
            $laba = $trx_data['laba'];
            $this->TrxModel->hapusTrx($idTrx);

            if ($kategori == 'Tarik Tunai') {
                $saldo = $this->CashModel->get_saldo();
                $bank_sal_in = $this->BankModel->get_saldo();
                if ($admin == 0) {
                    $new_sal_in = $saldo + $jml_trx;
                    $new_bank_sal_in = $bank_sal_in - $jml_byr;
                } elseif ($admin == 1) {
                    $new_sal_in = $saldo + $jml_trx - $laba;
                    $new_bank_sal_in = $bank_sal_in - $jml_trx;
                }
                $this->CashModel->update_saldo_batal($new_sal_in);
                $this->BankModel->update_saldo_batal($new_bank_sal_in);
                echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
            } else {
                $saldo = $this->CashModel->get_saldo();
                $bank_sal_in = $this->BankModel->get_saldo();
                $new_sal_in = $saldo - $jml_byr;
                $new_bank_sal_in = $bank_sal_in + $jml_trx;
                $this->CashModel->update_saldo_batal($new_sal_in);
                $this->BankModel->update_saldo_batal($new_bank_sal_in);
            }
            echo json_encode(['status' => 'success', 'message' => 'Transaksi berhasil dibatalkan']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Transaksi tidak ditemukan']);
        }
    }

    public function hapus_trx_bank()
    {
        $idTrx = $this->input->post('id');

        $result = $this->TrxModel->hapusTrx($idTrx);

        if ($result) {
            echo json_encode(array('status' => 'success', 'message' => 'Bon berhasil dihapus.'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Terjadi kesalahan saat menghapus Bon.'));
        }
    } //  -------------------------------------
    // payopay ----------------------------------
    public function tambah_trx_payopay()
    {
        $id_saldo = '4';
        $j_trx = $this->input->post('j_trx');
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $jml_trx = $this->input->post('jml_trx');
        $jml_byr = $this->input->post('jml_byr');
        $admin    = $this->input->post('admin');

        $saldo = $this->PayopayModel->get_saldo();
        $new_sal_in = $saldo - $jml_trx;
        $this->PayopayModel->update_saldo($new_sal_in);

        $saldo_cash = $this->CashModel->get_saldo();
        $new_saldo_cash = $saldo_cash + $jml_byr;
        $this->CashModel->update_saldo($new_saldo_cash);
        if (empty($nama)) {
            $nama = 'cst...';
        }
        $this->TrxModel->tambah_transaksi($id_saldo, $j_trx, $nama, $kategori, $admin, $jml_trx, $jml_byr);

        echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
    }

    public function bayar_trx_payopay()
    {
        $idTransaksi = $this->input->post('id');
        $jmlByr = $this->input->post('jml_byr');

        $query = $this->db->get_where('tbl_trx', array('id' => $idTransaksi));
        $result = $query->row();
        if ($result) {
            $jmlTrx = $result->jml_trx;
            if ($jmlByr < $jmlTrx) {
                $response['status'] = 'error';
                $response['message'] = 'Jumlah bayar tidak mencukupi. Anda rugi!';
            } else {
                $this->TrxModel->bayar_transaksi($idTransaksi, $jmlByr);
                $response['status'] = 'success';
                $response['message'] = 'Pembayaran berhasil. Selisih telah disimpan di kolom laba.';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Data transaksi tidak ditemukan.';
        }

        echo json_encode(['status' => 'success', 'message' => 'Pembayaran berhasil']);
    }

    public function batalkan_trx_payopay()
    {
        $idTrx = $this->input->post('idTrx');
        echo "ID yang diterima: " . $idTrx;
        $trx_data = $this->TrxModel->get_transaksi_by_id($idTrx);
        if ($trx_data) {
            $admin = $trx_data['admin'];
            $kategori = $trx_data['kategori'];
            $jml_trx = $trx_data['jml_trx'];
            $jml_byr = $trx_data['jml_byr'];
            $laba = $trx_data['laba'];
            $this->TrxModel->hapusTrx($idTrx);

            $saldo = $this->PayopayModel->get_saldo();
            $new_sal_in = $saldo + $jml_trx;
            $this->PayopayModel->update_saldo_batal($new_sal_in);

            $saldo_cash = $this->CashModel->get_saldo();
            $new_saldo_cash = $saldo_cash - $jml_byr;
            $this->CashModel->update_saldo_batal($new_saldo_cash);
        }
        echo json_encode(['status' => 'success', 'message' => 'Transaksi berhasil dibatalkan']);
    }

    public function hapus_trx_payopay()
    {
        $idTrx = $this->input->post('id');

        $result = $this->TrxModel->hapusTrx($idTrx);

        if ($result) {
            echo json_encode(array('status' => 'success', 'message' => 'Bon berhasil dihapus.'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Terjadi kesalahan saat menghapus Bon.'));
        }
    } //  -------------------------------------
    // payfazz ----------------------------------
    public function tambah_trx_payfazz()
    {
        $id_saldo = '3';
        $j_trx = $this->input->post('j_trx');
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $jml_trx = $this->input->post('jml_trx');
        $jml_byr = $this->input->post('jml_byr');
        $admin    = $this->input->post('admin');

        $saldo = $this->PayfazzModel->get_saldo();
        $new_sal_in = $saldo - $jml_trx;
        $this->PayfazzModel->update_saldo($new_sal_in);

        $saldo_cash = $this->CashModel->get_saldo();
        $new_saldo_cash = $saldo_cash + $jml_byr;
        $this->CashModel->update_saldo($new_saldo_cash);
        if (empty($nama)) {
            $nama = 'cst...';
        }
        $this->TrxModel->tambah_transaksi($id_saldo, $j_trx, $nama, $kategori, $admin, $jml_trx, $jml_byr);

        echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
    }

    public function bayar_trx_payfazz()
    {
        $idTransaksi = $this->input->post('id');
        $jmlByr = $this->input->post('jml_byr');

        $query = $this->db->get_where('tbl_trx', array('id' => $idTransaksi));
        $result = $query->row();
        if ($result) {
            $jmlTrx = $result->jml_trx;
            if ($jmlByr < $jmlTrx) {
                $response['status'] = 'error';
                $response['message'] = 'Jumlah bayar tidak mencukupi. Anda rugi!';
            } else {
                $this->TrxModel->bayar_transaksi($idTransaksi, $jmlByr);
                $response['status'] = 'success';
                $response['message'] = 'Pembayaran berhasil. Selisih telah disimpan di kolom laba.';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Data transaksi tidak ditemukan.';
        }

        echo json_encode(['status' => 'success', 'message' => 'Pembayaran berhasil']);
    }

    public function batalkan_trx_fazz()
    {
        $idTrx = $this->input->post('idTrx');
        echo "ID yang diterima: " . $idTrx;
        $trx_data = $this->TrxModel->get_transaksi_by_id($idTrx);
        if ($trx_data) {
            // $admin = $trx_data['admin'];
            // $kategori = $trx_data['kategori'];
            $jml_trx = $trx_data['jml_trx'];
            $jml_byr = $trx_data['jml_byr'];
            // $laba = $trx_data['laba'];
            $this->TrxModel->hapusTrx($idTrx);

            $saldo = $this->PayfazzModel->get_saldo();
            $new_sal_in = $saldo + $jml_trx;
            $this->PayfazzModel->update_saldo_batal($new_sal_in);

            $saldo_cash = $this->CashModel->get_saldo();
            $new_saldo_cash = $saldo_cash - $jml_byr;
            $this->CashModel->update_saldo_batal($new_saldo_cash);
        }
        echo json_encode(['status' => 'success', 'message' => 'Transaksi berhasil dibatalkan']);
    }


    public function hapus_trx_payfazz()
    {
        $idTrx = $this->input->post('id');

        $result = $this->TrxModel->hapusTrx($idTrx);

        if ($result) {
            echo json_encode(array('status' => 'success', 'message' => 'Bon berhasil dihapus.'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Terjadi kesalahan saat menghapus Bon.'));
        }
    } //  -------------------------------------

    public function reload_halaman()
    {
        redirect("admin/trx/tambah_trx_bank");
    }
}
