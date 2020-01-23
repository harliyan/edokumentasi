<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_video extends CI_Model
{

public function tampil($limit, $start)
	{
		$this->db->order_by ( "id", "desc" );
		$this->db->limit ( $limit, $start );
		return $this->db->get('tb_doc_video')->result();
	}

	public function tampil_admin() {
		$query = $this->db->get('tb_doc_video');
		return $query->result();
	}

	

	public function search($keyword)
	{
		$sql = ' SELECT * FROM `tb_doc_video` WHERE id LIKE "%' . $keyword . '%" OR judul LIKE "%' . $keyword . '%" OR caption LIKE "%' . $keyword . '%"';
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function get_video_count()
	{
		$sql = " SELECT count(*) as count from tb_doc_video";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function input_data($data, $table)
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
		$hasil = $this->db->query("DELETE FROM tb_doc_video WHERE id='$id'");
		return $hasil;
	}
}
