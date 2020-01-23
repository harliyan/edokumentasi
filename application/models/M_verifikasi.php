<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_verifikasi extends CI_Model
{

	public function tampil()
	{
		$sql = " SELECT * FROM `tb_doc_foto` ";
		$data = $this->db->query($sql);

		return $data->result();
	}
}
