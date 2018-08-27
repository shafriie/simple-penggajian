<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Laporan');
	}

	public function index()
	{
		$data['laporans'] = $this->M_Laporan->getData() ;
		$this->load->view('Laporan/laporan',$data);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */