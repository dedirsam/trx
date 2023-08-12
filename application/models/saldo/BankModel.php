<?php
class BankModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_saldo()
    {
        $this->db->select('sal_in');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('tbl_saldo_bank');

        if ($query->num_rows() > 0) {
            return $query->row()->sal_in;
        } else {
            return 0;
        }
    }

    public function insert_saldo($saldo)
    {
        $data = array(
            'sal_in' => $saldo
        );
        $this->db->insert('tbl_saldo_bank', $data);
    }

    public function get_last_saldo()
    {
        $this->db->select('id');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_saldo_bank');
        // return $query->row_array();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    public function get_existing_saldo()
    {
        $this->db->select('sal_in');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('tbl_saldo_bank');

        if ($query->num_rows() > 0) {
            return $query->row()->sal_in;
        } else {
            return 0;
        }
    }

    public function update_saldo($new_sal_in)
    {
        $last_row_id = $this->get_last_saldo()['id'];
        $this->db->where('id', $last_row_id);
        $this->db->update('tbl_saldo_bank', ['sal_in' => $new_sal_in]);
    }

    public function update_saldo_batal($new_bank_sal_in)
    {
        $this->db->update('tbl_saldo_bank', ['sal_in' => $new_bank_sal_in]);
    }

    public function update_saldo_bank($saldo)
    {
        $existingSaldo = $this->get_existing_saldo();

        if ($existingSaldo) {
            $updatedSaldo = $existingSaldo + $saldo;

            $data = array(
                'sal_in' => $updatedSaldo
            );

            $this->db->update('tbl_saldo_bank', $data);
        }
    }
    public function isi_saldo_bank($saldo)
    {
        $existingSaldo = $this->get_existing_saldo();

        if ($existingSaldo) {
            $updatedSaldo = $existingSaldo - $saldo;

            $data = array(
                'sal_in' => $updatedSaldo
            );

            $this->db->update('tbl_saldo_bank', $data);
        }
    }

    public function t_sal_in($new_bank_sal_in)
    {
        $last_row_id = $this->get_last_saldo()['id'];
        $data = array(
            'sal_in' => $new_bank_sal_in,
        );

        $this->db->where('id', $last_row_id); // Ganti ID sesuai yang sesuai
        $this->db->update('tbl_saldo_bank', $data);
    }

    public function delete_saldo()
    {
        $this->db->empty_table('tbl_saldo_bank');
    }
}
