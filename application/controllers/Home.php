<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_keluarga');

        if ($this->session->userdata('level') == NULL) {
        	redirect('auth/login', 'refresh');
        }
    }

	public function index()
	{
		$data['keluarga'] = $this->M_keluarga->showKeluarga();
		
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('v_home', $data);
		$this->load->view('templates/v_footer');
	}

	public function create()
	{
		$valid = $this->form_validation;

        $valid->set_rules('nama_kucing', 'nama_kucing', 'required');
        $valid->set_rules('jenis', 'jenis', 'required');
        $valid->set_rules('umur', 'umur', 'required');
        $valid->set_rules('biaya', 'biaya', 'required');

        if($valid->run() == FALSE) {
            $this->load->view('templates/v_header');
            $this->load->view('templates/v_sidebar');
			$this->load->view('v_create');
			$this->load->view('templates/v_footer');
        }
        else {
          	$this->M_keluarga->addKeluarga();
			redirect('home');
        }   
	}

	public function update($id_kucing)
	{
		$data['keluarga'] = $this->M_keluarga->getById($id_kucing);

		$valid = $this->form_validation;

        $valid->set_rules('nama_kucing', 'nama_kucing', 'required');
        $valid->set_rules('jenis', 'jenis', 'required');
        $valid->set_rules('umur', 'umur', 'required');
        $valid->set_rules('biaya', 'biaya', 'required');

		if($valid->run() == FALSE) {
			$this->load->view('templates/v_header');
			$this->load->view('templates/v_sidebar');
			$this->load->view('v_update', $data);
			$this->load->view('templates/v_footer');
        }
		else {
			$this->M_keluarga->updateKeluarga();
			redirect('home');
		}
	}

	public function delete($id_kucing)
	{
		$this->M_keluarga->deleteKeluarga($id_kucing);
		redirect('home');		
	}

	public function galeri()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('v_galeri');
		$this->load->view('templates/v_footer');
	}

}
