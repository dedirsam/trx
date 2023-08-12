<?php
class TrxModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_trx_data($id_saldo, $limit, $offset)
    {
        $this->db->where('id_saldo', $id_saldo);
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get('tbl_trx');
        return $query->result_array();
    }
    public function get_trx_data_lap()
    {
        $this->db->get('tbl_trx');
        // $this->db->limit($limit, $offset);
        $query = $this->db->get('tbl_trx');
        return $query->result_array();
    }

    public function get_total_rows()
    {
        return $this->db->count_all('tbl_trx');
    }

    public function getAllKategori()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }

    public function tambah_transaksi_cash($id_saldo,  $kategori,  $jml_trx)
    {
        $data = array(
            'id_saldo' => $id_saldo,
            'j_trx' => 1,
            'nama' => 'admin',
            'kategori' => $kategori,
            'admin' => 0,
            'jml_trx' => $jml_trx,
            'jml_byr' => 0,
            'laba' => 0,
        );
        return $this->db->insert('tbl_trx', $data);
    }

    public function tambah_transaksi($id_saldo, $j_trx, $nama, $kategori, $admin, $jml_trx, $jml_byr)
    {
        if ($j_trx !== 'bon') {
            if (is_numeric($jml_byr) && is_numeric($jml_trx)) {
                $selisih = $jml_byr - $jml_trx;
            } else {
                $selisih = 0;
            }
        } else {
            $selisih = 0;
        }

        $data = array(
            'id_saldo' => $id_saldo,
            'j_trx' => $j_trx,
            'nama' => $nama,
            'kategori' => $kategori,
            'admin' => $admin,
            'jml_trx' => $jml_trx,
            'jml_byr' => $jml_byr,
            'laba' => $selisih
        );

        return $this->db->insert('tbl_trx', $data);
    }

    public function bayar_transaksi($idTransaksi, $jmlByr)
    {
        $query = $this->db->get_where('tbl_trx', array('id' => $idTransaksi));
        $result = $query->row();

        if ($result) {
            $jmlTrx = $result->jml_trx;

            $selisih = $jmlByr - $jmlTrx;

            $data = array(
                'status' => 1,
                'jml_byr' => $jmlByr,
                'laba' => $selisih
            );
            $this->db->where('id', $idTransaksi);
            $this->db->update('tbl_trx', $data);
        }
    }

    public function get_transaksi_by_id($idTrx)
    {
        $this->db->where('id', $idTrx);
        $query = $this->db->get('tbl_trx'); // Ganti dengan nama tabel transaksi Anda

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    public function hapusTrx($idTrx)
    {
        return $this->db->delete('tbl_trx', array('id' => $idTrx));
    }
}
