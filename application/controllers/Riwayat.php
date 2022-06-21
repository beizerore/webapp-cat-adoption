<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	    $this->load->model('M_riwayat');

        if ($this->session->userdata('level') == NULL) {
        	redirect('auth/login','refresh');
        }
    }

	public function index()
	{
		$data['riwayat'] = $this->M_riwayat->showRiwayat();
		
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('v_riwayat', $data);
		$this->load->view('templates/v_footer');
	}

	public function create()
	{
		$valid = $this->form_validation;

		$ado['adopsi']   = $this->M_riwayat->getAdopsi();
		$kel['keluarga'] = $this->M_riwayat->getKeluarga();

        $valid->set_rules('id_adopsi', 'id_adopsi', 'required');
        $valid->set_rules('id_kucing', 'id_kucing', 'required');

        if($valid->run() == FALSE) {
            $this->load->view('templates/v_header', $ado);
            $this->load->view('templates/v_sidebar');
			$this->load->view('v_create_riwayat', $kel);
			$this->load->view('templates/v_footer');
        }
        else {
          	$this->M_riwayat->addRiwayat();
			redirect('riwayat');
        }   
	}

	public function update($id_riwayat)
	{
		$data['riwayat'] = $this->M_riwayat->getById($id_riwayat);

		$valid = $this->form_validation;

        $valid->set_rules('id_adopsi', 'id_adopsi', 'required');
        $valid->set_rules('id_kucing', 'id_kucing', 'required');

		if($valid->run() == FALSE) {
			$this->load->view('templates/v_header');
			$this->load->view('templates/v_sidebar');
			$this->load->view('v_update_riwayat', $data);
			$this->load->view('templates/v_footer');
        }
		else {
			$this->M_riwayat->updateRiwayat();
			redirect('riwayat');
		}
	}

	public function delete($id_riwayat) {
		$this->M_riwayat->deleteRiwayat($id_riwayat);
		redirect('riwayat');		
	}

}
