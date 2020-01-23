<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_foto extends CI_Model
{

	public function tampil($limit, $start)
	{
		$this->db->order_by ( "id", "desc" );
		$this->db->limit ( $limit, $start );
		return $this->db->get('tb_doc_foto')->result();
	}

	public function get_total()
	{
		return $this->db->count_all('tb_doc_foto');
	}


	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	
	public function tampil_admin() {
		$query = $this->db->get('tb_doc_foto');
		return $query->result();
	}

	public function search($keyword)
	{
		$sql = ' SELECT * FROM `tb_doc_foto` WHERE id LIKE "%' . $keyword . '%" OR judul LIKE "%' . $keyword . '%" OR caption LIKE "%' . $keyword . '%"';
		$data = $this->db->query($sql);
		return $data->result();
	}

	//ambil data mahasiswa dari database
	public function getDetails()
	{
		$sql = " SELECT * FROM `tb_doc_foto` ";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function get_foto_count()
	{
		$sql = " SELECT count(*) as count from tb_doc_foto";
		$data = $this->db->query($sql);
		return $data->result();
	}	

	public function getDetail($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}

	public function get_where($table, $data, $limit=0, $page=0, $order='id', $order_by='asc')
	{
		$this->db->from($table);
		$this->db->where($data);

		return $this->db->get();
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
		$hasil = $this->db->query("DELETE FROM tb_doc_foto WHERE id='$id'");
		return $hasil;
	}

	public function input_nik($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function download($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		return $this->db->get()->result();
	}
}
