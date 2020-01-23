<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_sambutan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_home');
    $this->load->model('M_sambutan');
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
      'active_controller' => 'input_sambutan',
      'active_function' => 'index2',
      'sidebar' => 'sidebar_admin'
    ];
    $data['doc_sambutan']  = $this->M_sambutan->tampil_admin();
    $this->load->view('adminlte3/global/home', $data);
  }

  public function tambah()
  {
    $this->load->view('superadmin/input_sambutan');
  }

  public function tambah_aksi()
  {

    $config['upload_path']          = '../siapkawal/file_sambutan/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|doc|docx|pdf|xls|ods';
    $config['max_size']             = 2048000;
    $config['max_width']            = 80000;
    $config['max_height']           = 80000;

    $this->load->library('upload', $config);
    $this->upload->do_upload('path_sambutan');
    $this->session->set_flashdata('success', 'Data Berhasil ditambah');

    $data = array(
      'id' => $this->input->post('id'),
      'judul' => $this->input->post('judul'),
      'caption' => $this->input->post('caption'),
      'path_sambutan' => $this->upload->data('file_name'),

    );
    $this->M_sambutan->input_data($data, 'tb_doc_sambutan');
    redirect('superadmin/input_sambutan');
  }

  public function edit($id)
  {

    $tb_telecenter = $this->M_sambutan->edit('tb_doc_sambutan', $id);

    $data['tb_telecenter'] = $tb_telecenter;
    $data['active_controller'] = 'input_sambutan';
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
    $path_sambutan = $this->input->post('path_sambutan');


    $data = array(
      'id' => $id,
      'judul' => $judul,
      'caption' => $caption,
      'path_sambutan' => $path_sambutan,

    );

    $where = array(
      'id' => $id
    );

    $this->M_sambutan->update($where, $data, 'tb_doc_sambutan');
    redirect('superadmin/input_sambutan');
  }

  public function hapus($id)
  { //fungsi delete
    $this->M_sambutan->hapus($id); //ngacir ke fungsi delTransaksi
    $this->session->set_flashdata('success', 'Data Berhasil dihapus');
    redirect('superadmin/input_sambutan'); //redirect
  }
}
  //end input data
