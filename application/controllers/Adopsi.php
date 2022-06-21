<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adopsi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	    $this->load->model('M_adopsi');

        if ($this->session->userdata('level') == NULL) {
        	redirect('auth/login', 'refresh');
        }
    }

	public function index()
	{
		$data['adopsi'] = $this->M_adopsi->showAdopsi();
		
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('v_adopsi', $data);
		$this->load->view('templates/v_footer');
	}

	public function create()
	{
		$valid = $this->form_validation;

        $valid->set_rules('nama_pengadopsi', 'nama_pengadopsi', 'required');
        $valid->set_rules('alamat', 'alamat', 'required');
        $valid->set_rules('no_telp', 'no_telp', 'required');

        if($valid->run() == FALSE) {
            $this->load->view('templates/v_header');
            $this->load->view('templates/v_sidebar');
			$this->load->view('v_create_adopsi');
			$this->load->view('templates/v_footer');
        }
        else {
          	$this->M_adopsi->addAdopsi();
			redirect('adopsi');
        }   
	}

	public function update($id_adopsi)
	{
		$data['adopsi'] = $this->M_adopsi->getById($id_adopsi);

		$valid = $this->form_validation;

        $valid->set_rules('nama_pengadopsi', 'nama_pengadopsi', 'required');
        $valid->set_rules('alamat', 'alamat', 'required');
        $valid->set_rules('no_telp', 'no_telp', 'required');

		if($valid->run() == FALSE) {
			$this->load->view('templates/v_header');
			$this->load->view('templates/v_sidebar');
			$this->load->view('v_update_adopsi', $data);
			$this->load->view('templates/v_footer');
        }
		else {
			$this->M_adopsi->updateAdopsi();
			redirect('adopsi');
		}
	}

	public function delete($id_adopsi) {
		$this->M_adopsi->deleteAdopsi($id_adopsi);
		redirect('adopsi');		
	}

}
