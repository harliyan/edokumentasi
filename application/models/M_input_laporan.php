<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_input_laporan extends CI_Model
{

	public function tampil()
	{
		$sql = " SELECT * FROM `tb_kecamatan` ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function ubah($data, $id_telecenter)
	{
		$this->db->where('id_telecenter', $id_telecenter);
		$this->db->update('tb_telecenter', $data);
		return TRUE;
	}
}
