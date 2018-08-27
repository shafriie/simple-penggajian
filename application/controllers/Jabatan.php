<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jabatan');
	}

	public function index()
	{
		$data['jabatans'] = $this->M_jabatan->getData() ;
		$this->load->view('Jabatan/jabatan',$data);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */