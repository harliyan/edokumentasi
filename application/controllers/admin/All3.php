<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All3 extends CI_Controller {

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('M_home');
    $this->load->model('M_all');

    if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
      return redirect('logout');
    } else {
      if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'admin') 
      {
        return redirect('logout');    
      }
    }
  }
  public function index()
  {
    $data = [
      'active_controller' => 'all',
      'active_function' => 'index3',
      'sidebar' => 'sidebar_admin',
    ];
    $data['tb_record_foto']  = $this->M_all->tampil3();
    
    $this->load->view('adminlte3/global/home', $data);
  } 
}
