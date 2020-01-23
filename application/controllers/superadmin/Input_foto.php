<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_foto extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_foto');
		if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
			return redirect('logout');
		} else {
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'superadmin') {
				return redirect('logout');
			}
		}
	}

	public function index()
	{
		$data = [
			'active_controller' => 'input_foto',
			'active_function' => 'index2',
			'sidebar' => 'sidebar_admin'
		];
		$data['doc_foto']  = $this->M_foto->tampil_admin();
		$data['get_foto_count']	= $this->M_foto->get_foto_count();
		$this->load->view('adminlte3/global/home', $data);
	}

	public function tambah()
	{
		$this->load->view('superadmin/input_foto');
	}

	public function tambah_aksi()
	{

		$config['upload_path']          = '../siapkawal/uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp|tiff';
		$config['max_size']             = 80000;
		$config['max_width']            = 80000;
		$config['max_height']           = 80000;

		$this->load->library('upload', $config);
		$this->upload->do_upload('path_foto');


		$data = array(
			'id' => $this->input->post('id'),
			'judul' => $this->input->post('judul'),
			'caption' => $this->input->post('caption'),
			'google_photo_link' => $this->input->post('google_photo_link'),
			'image_name' => $this->upload->data('file_name'),
			'image_type' => $this->upload->data('image_type'),
			'image_size_str' => $this->upload->data('image_size_str'),

		);
		$this->M_foto->input_data($data, 'tb_doc_foto');
		$this->session->set_flashdata('success', 'Data Berhasil ditambah');
		redirect('superadmin/input_foto');
	}

	public function edit($id)
	{

		$tb_telecenter = $this->M_foto->edit('tb_doc_foto', $id);

		$data['tb_telecenter'] = $tb_telecenter;
		$data['active_controller'] = 'input_foto';
		$data['active_function'] = 'edit2';
		$data['sidebar'] = 'sidebar_details';

		$this->load->view('adminlte3/global/home', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		// var_dump($id_telecenter);
		// die();
		$judul = $this->input->post('judul');
		$caption = $this->input->post('caption');


		$data = array(
			'id' => $id,
			'judul' => $judul,
			'caption' => $caption,

		);

		$where = array(
			'id' => $id
		);

		$this->M_foto->update($where, $data, 'tb_doc_foto');
		redirect('superadmin/input_foto');
	}

	public function hapus($id)
	{
		$this->M_foto->hapus($id);
		$this->session->set_flashdata('success', 'Data Berhasil dihapus');
		redirect('superadmin/input_foto'); //redirect
	}
}
	//end input data
