<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All2 extends CI_Controller {

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
      'active_function' => 'index2',
      'sidebar' => 'sidebar_admin',
    ];
    $data['tb_record_file']  = $this->M_all->tampil2();
    
    $this->load->view('adminlte3/global/home', $data);
  } 
}