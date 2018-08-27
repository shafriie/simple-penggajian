<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Divisi');
	}

	public function index()
	{
		$data['divisis'] = $this->M_Divisi->getData() ;
		$this->load->view('Divisi/divisi',$data);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */