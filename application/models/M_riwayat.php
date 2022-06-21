<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_riwayat extends CI_Model
{
    public function showRiwayat()
    {
        $query = $this->db->get('riwayat');
        return $query->result_array();
    }

    public function addRiwayat()
    {
        $data = array(
            'id_adopsi'      => $this->input->post('id_adopsi', true),
            'id_kucing'      => $this->input->post('id_kucing', true),
            'tanggal_adopsi' => $this->input->post('tanggal_adopsi', true)
        );

        $this->db->insert('riwayat', $data);
    }

    public function getById($id_riwayat)
    {
        return $this->db->get_where('riwayat',['id_riwayat' => $id_riwayat])->row_array();
    }

    public function getAdopsi()
    {
        return $this->db->get('adopsi')->result_array();
    }

    public function getKeluarga()
    {
        return $this->db->get('keluarga')->result_array();
    }

    public function updateRiwayat()
    {
        $data = array(
            'tanggal_adopsi' => $this->input->post('tanggal_adopsi', true),
            'id_adopsi'      => $this->input->post('id_adopsi', true),
            'id_kucing'      => $this->input->post('id_kucing', true)
        );
        
        $this->db->where('id_riwayat', $this->input->post('id_riwayat'));
        $this->db->update('riwayat', $data);
    }

    public function deleteRiwayat($id_riwayat)
    {
        $this->db->where('id_riwayat',$id_riwayat);
        $this->db->delete('riwayat');
    }
}
