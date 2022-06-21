<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_adopsi extends CI_Model
{
    public function showAdopsi()
    {
        $query = $this->db->get('adopsi');
        return $query->result_array();
    }

    public function addAdopsi()
    {
        $data = array(
            'nama_pengadopsi' => $this->input->post('nama_pengadopsi', true),
            'alamat'          => $this->input->post('alamat', true),
            'no_telp'         => $this->input->post('no_telp', true)
        );

        $this->db->insert('adopsi', $data);
    }

    public function getById($id_adopsi)
    {
        return $this->db->get_where('adopsi',['id_adopsi' => $id_adopsi])->row_array();
    }

    public function updateAdopsi()
    {
        $data = array(
            'nama_pengadopsi' => $this->input->post('nama_pengadopsi', true),
            'alamat'          => $this->input->post('alamat', true),
            'no_telp'         => $this->input->post('no_telp', true)
        );
        
        $this->db->where('id_adopsi', $this->input->post('id_adopsi'));
        $this->db->update('adopsi', $data);
    }

    public function deleteAdopsi($id_adopsi)
    {
        $this->db->where('id_adopsi',$id_adopsi);
        $this->db->delete('adopsi');
    }
}
