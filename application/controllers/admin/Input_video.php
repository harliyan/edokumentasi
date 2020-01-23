<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') or exit('No direct script access allowed');

class Input_video extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_home');
    $this->load->model('M_video');
    $this->load->model('M_foto');
    if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
      return redirect('logout');
    } else {
      if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'admin') {
        return redirect('logout');
      }
    }
  }

  public function index()
  {
    $data = [
      'active_controller' => 'input_video',
      'active_function' => 'index',
      'sidebar' => 'sidebar_admin',
    ];
    $data['doc_video']  = $this->M_video->tampil_admin();
    // $data['get_video_count'] = $this->M_foto->get_video_count();

    $this->load->view('adminlte3/global/home', $data);
  }

  public function tambah()
  {
    $this->load->view('admin/input_video');
  }

  public function tambah_aksi()
  {

    $config['upload_path']          = '../siapkawal/uploads/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp|tiff';
    $config['max_size']             = 80000;
    $config['max_width']            = 80000;
    $config['max_height']           = 80000;

    $this->load->library('upload', $config);
    $this->upload->do_upload('gambar_tumbnail');


    $data = array(
      'id' => $this->input->post('id'),
      'judul' => $this->input->post('judul'),
      'caption' => $this->input->post('caption'),
      'gambar_tumbnail' => $this->upload->data('file_name'),
      'link_youtube' => $this->input->post('link_youtube'),
      'embed_link' => $this->input->post('embed_link'),

    );
    $this->M_video->input_data($data, 'tb_doc_video');
    $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
    redirect('admin/input_video');
  }

  public function edit($id)
  {

    $tb_telecenter = $this->M_foto->edit('tb_doc_video', $id);

    $data['tb_telecenter'] = $tb_telecenter;
    $data['active_controller'] = 'input_video';
    $data['active_function'] = 'edit';
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
    $link_youtube = $this->input->post('link_youtube');
    $embed_link = $this->input->post('embed_link');


    $data = array(
      'id' => $id,
      'judul' => $judul,
      'caption' => $caption,
      'link_youtube' => $link_youtube,
      'embed_link' => $embed_link,

    );

    $where = array(
      'id' => $id
    );

    $this->M_video->update($where, $data, 'tb_doc_video');
    redirect('admin/input_video');
  }



  public function hapus($id)
  { //fungsi delete
    $this->M_video->hapus($id); //ngacir ke fungsi delTransaksi
    $this->session->set_flashdata('success', 'Data Berhasil dihapus');
    redirect('admin/input_video'); //redirect
  }
}
