<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Pegawai');
	}

	public function index()
	{
		$data['pegawais'] = $this->M_Pegawai->getData() ;
		$this->load->view('Pegawai/pegawai',$data);
	}

	public function submitPegawai()
	{
		$post = $this->input->post();
		$query = $this->M_Pegawai->submitPegawai($post);
		echo json_encode($query);

	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */