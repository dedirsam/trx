<?php
class KategoriModel extends CI_Model
{
    public function get_kategori()
    { // Ambil data dari tabel tbl_bon
        $query = $this->db->get('tbl_kategori');
        // Kembalikan hasil query dalam bentuk array
        return $query->result_array();
    }

    public function get_kategori_data($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }

    public function get_total_rows()
    {
        // Hitung jumlah total baris data dalam tabel tbl_trx
        return $this->db->count_all('tbl_kategori');
    }

    public function get_total_sal_in()
    {
        $this->db->select_sum('sal_in');
        $query = $this->db->get('tbl_saldo');
        $result = $query->row();
        return $result->sal_in;
    }

    public function insert_kategori($nama_kategori)
    {
        $data = array(
            'nama_kategori' => $nama_kategori,
        );
        $this->db->insert('tbl_kategori', $data);
    }

    public function delete_kategori($id)
    {
        // Hapus kategori berdasarkan ID atau kriteria lainnya
        $this->db->where('id', $id);
        return $this->db->delete('tbl_kategori');
    }
}
