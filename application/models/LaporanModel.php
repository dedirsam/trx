<?php
class LaporanModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_trx_data_by_date($startDate, $endDate)
    {
        $startDate = date('Y-m-d', strtotime($startDate));
        $endDate = date('Y-m-d', strtotime($endDate));

        $this->db->where('created_at >=', $startDate);
        $this->db->where('created_at <=', $endDate);
        $this->db->order_by('created_at', 'DESC');

        $query = $this->db->get('tbl_trx');

        if ($query) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function getTransactionsByDate($id_saldo, $startDate, $endDate)
    {
        $startDate = date('Y-m-d 00:00:00', strtotime($startDate));
        $endDate = date('Y-m-d 23:59:59', strtotime($endDate));

        $this->db->where('id_saldo', $id_saldo);
        $this->db->where('created_at >=', $startDate);
        $this->db->where('created_at <=', $endDate);
        $this->db->order_by('created_at', 'DESC');

        $query = $this->db->get('tbl_trx');

        return $query->result_array();
    }

    public function getAllTransactionsByDate($startDate, $endDate)
    {
        $startDate = date('Y-m-d 00:00:00', strtotime($startDate));
        $endDate = date('Y-m-d 23:59:59', strtotime($endDate));

        $this->db->where('created_at >=', $startDate);
        $this->db->where('created_at <=', $endDate);
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('tbl_trx'); // Ganti 'nama_tabel_transaksi' dengan nama tabel sesuai dengan struktur Anda
        return $query->result_array();
    }
}
