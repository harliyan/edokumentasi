<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_all extends CI_Model {
	
	public function tampil() {
		$query = $this->db->get('tb_record_sambutan');
		return $query->result();
	}

	public function tampil2() {
		$query = $this->db->get('tb_record_file');
		return $query->result();
	}

	public function tampil3() {
		$query = $this->db->get('tb_record_foto');
		return $query->result();
	}

	public function tampil_belum() {
		$this->db->select('tb_telecenter.*, tb_kecamatan.*');
		$this->db->from('tb_telecenter');
		$this->db->join('tb_kecamatan', 'tb_telecenter.id_kecamatan = tb_kecamatan.id_kecamatan');
		$where = "ket_1='Belum Ada Status'";
		$this->db->where($where);
		return $this->db->get()->result();
	}

	// public function edit($table, $id)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from($table);
	// 	$this->db->join('tb_tambahan', 'tb_telecenter.id_telecenter = tb_tambahan.id_telecenter','left');
	// 	$this->db->where('tb_tambahan.id_telecenter',$id);
	// 	return $this->db->get()->result();
	// }

	public function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	


}

