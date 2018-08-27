<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pegawai extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$data = $this->db->get()->result_array();
		return $data;
	}	

	public function submitPegawai($post)
	{
		$object = array(
					'nama' => $post['nama'], 
					'email' => $post['email'], 
					'jenis_kelamin' => $post['jk'], 
					'alamat' => $post['alamat'], 
					'no_telp' => $post['no_telp'], 
					'username' => $post['username'], 
					'password' => $post['password'], 
					'jabatan' => $post['jabatan'], 
					'status' => 1, 
				);
		$this->db->insert('tb_user', $object);
		if ($this->db->affected_rows() === 1) {
			$result = array('info'=>'true','msg'=>'Data Insert Success');
		}
		else
		{
			$result = array('info'=>'false','msg'=>'Data Failed Success');	
		}

		return $result;
	}

}

/* End of file M_jabatan.php */
/* Location: ./application/models/M_jabatan.php */