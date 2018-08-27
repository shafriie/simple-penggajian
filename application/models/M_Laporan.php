<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Laporan extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('v_gajian');
		$data = $this->db->get()->result_array();
		return $data;
	}	

}

/* End of file M_jabatan.php */
/* Location: ./application/models/M_jabatan.php */