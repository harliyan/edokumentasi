<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->helper('url');
    $this->load->model('M_home');
    $this->load->model('M_video');
  }

  public function index()
  {
    $keyword = null;
    if ($this->input->post('search')) {
      $keyword = $this->input->post('keyword');
    }

    $data = [
      'active_controller' => 'video',
      'active_function' => 'index',
      'topbar' => 'topbar',
      'menu' => 'menu',
    ];

    //Coba Pagination
    $coba = 5;
    $data['page']           = $this->uri->segment(3);                       //bikin segment halaman
    $config['base_url']     = site_url('video/index');                       //arah site dan function nya
    $config['total_rows']   = $this->db->count_all('tb_doc_video');          //total row
    $config['per_page']     = 6;                                            //show data per halaman
    $choice                 = $config["total_rows"] / $config["per_page"];
    $config["num_links"]    = floor($coba);

    if ($keyword == null) {
      $data['doc_video']  = $this->M_video->tampil($config['per_page'], $data['page']);
    } else {
      $data['doc_video']  = $this->M_video->search($keyword);
    }

    $data['kecamatan']    = "home";
    $data['get_video_count'] = $this->M_video->get_video_count();

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $this->pagination->initialize($config);

    //Bikin pagination di bawah berdasarkan fungsi create_links 
    $data['pagination'] = $this->pagination->create_links();

    $this->load->view('front/global/index', $data);
  }
}
