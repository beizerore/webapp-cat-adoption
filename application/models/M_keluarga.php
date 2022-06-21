<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_keluarga extends CI_Model
{
    public function showKeluarga()
    {
        $query = $this->db->get('keluarga');
        return $query->result_array();
    }

    public function addKeluarga()
    {
        $data = array(
            'nama_kucing' => $this->input->post('nama_kucing', true),
            'jenis'       => $this->input->post('jenis', true),
            'umur'        => $this->input->post('umur', true),
            'biaya'       => $this->input->post('biaya', true)
        );

        $this->db->insert('keluarga', $data);
    }

    public function getById($id_kucing)
    {
        return $this->db->get_where('keluarga',['id_kucing' => $id_kucing])->row_array();
    }

    public function updateKeluarga()
    {
        $data = array(
            'nama_kucing' => $this->input->post('nama_kucing', true),
            'jenis'       => $this->input->post('jenis', true),
            'umur'        => $this->input->post('umur', true),
            'biaya'       => $this->input->post('biaya', true)
        );
        
        $this->db->where('id_kucing', $this->input->post('id_kucing'));
        $this->db->update('keluarga', $data);
    }

    public function deleteKeluarga($id_kucing)
    {
        $this->db->where('id_kucing',$id_kucing);
        $this->db->delete('keluarga');
    }
}
