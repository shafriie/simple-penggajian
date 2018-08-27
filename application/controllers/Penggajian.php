<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		
		$this->load->view('Penggajian/penggajian');
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */