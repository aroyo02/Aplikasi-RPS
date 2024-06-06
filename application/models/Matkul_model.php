<?php 

class Matkul_model extends CI_Model
{
    public function getRPS($data) {
        return $this->db->get_where('rps', ['id_user' => $data['id']])->result_array();
    }

    public function getRPSAfterSearch($data) {
        $keyword = $this->db->escape_like_str($data['keyword']);
        $id_user = $this->db->escape($data['id']);

        $query = "SELECT * 
        FROM rps 
        WHERE id_user = $id_user AND 
                (matkul LIKE '%$keyword%' OR 
                kode LIKE '%$keyword%' OR
                semester LIKE '%$keyword%'
                )";
        return $this->db->query($query)->result_array();
    }

    public function getRPSEdit($id_rps) {
        return $this->db->get_where('rps', ['id_rps' => $id_rps])->row_array();
    }

    public function insertRPS($data) {
        $this->db->insert('rps', $data);
    }

    public function updateRPS($data) {
        $this->db->where('id_rps', $data['id_rps']);
        $this->db->update('rps', $data);
    }

    public function deleteMateri($column, $id_rps) {
        $this->db->set($column, NULL);
        $this->db->where('id_rps', $id_rps);
        $this->db->update('rps');
    }

    public function deleteRPS($id_rps) {
        $this->db->delete('rps', ['id_rps' => $id_rps]);
    }
}