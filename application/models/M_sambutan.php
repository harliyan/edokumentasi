<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sambutan extends CI_Model
{

	public function tampil($limit, $start)
	{
		// $sql = " SELECT * FROM `tb_doc_sambutan` " ;
		// $data = $this->db->query($sql);
		// return $data->result();
		return $data = $this->db->get('tb_doc_sambutan', $limit, $start)->result();
	}

	public function tampil_admin() {
		$query = $this->db->get('tb_doc_sambutan');
		return $query->result();
	}

	public function get_sambutan_count()
	{
		$sql = " SELECT count(*) as count from tb_doc_sambutan";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function search($keyword)
	{
		$sql = ' SELECT * FROM `tb_doc_sambutan` WHERE id LIKE "%' . $keyword . '%" OR judul LIKE "%' . $keyword . '%" OR caption LIKE "%' . $keyword . '%"';
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getDetail($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		return $this->db->get()->result();
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}


	public function input_nik($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		return $this->db->get()->result();
	}

	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


	public function hapus($id)
	{
		$hasil = $this->db->query("DELETE FROM tb_doc_sambutan WHERE id='$id'");
		return $hasil;
	}

	public function download($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		return $this->db->get()->result();
	}
}
