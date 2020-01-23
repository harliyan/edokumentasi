<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Coba extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Coba_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'coba/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'coba/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'coba/index.html';
            $config['first_url'] = base_url() . 'coba/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Coba_model->total_rows($q);
        $coba = $this->Coba_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

      //   $data = [
      //     'active_controller' => 'foto',
      //     'active_function' => 'index',
      //     'topbar' => 'topbar',
      //     'menu' => 'menu',
      // ];

        $data = array(
         'topbar' => 'topbar',
         'menu' => 'menu',
         'active_controller' => 'coba',
         'active_function' => 'coba_list',
         'coba_data' => $coba,
         'q' => $q,
         'pagination' => $this->pagination->create_links(),
         'total_rows' => $config['total_rows'],
         'start' => $start,
     );
        $this->load->view('front/global/index', $data);
        // $this->load->view('coba/coba_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Coba_model->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'barang' => $row->barang,
              'topbar' => 'topbar',
              'menu' => 'menu',
              'active_controller' => 'coba',
              'active_function' => 'coba_read',
          );
            $this->load->view('front/global/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('coba'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('coba/create_action'),
            'topbar' => 'topbar',
            'menu' => 'menu',
            'active_controller' => 'coba',
            'active_function' => 'coba_form',
            'id' => set_value('id'),
            'barang' => set_value('barang'),
        );
        $this->load->view('front/global/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'barang' => $this->input->post('barang',TRUE),
                // 'coba' => $this->input->post('coba',TRUE),
            );

            $this->Coba_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('coba'));
        }
    }

    public function update($id) 
    {
        $row = $this->Coba_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('coba/update_action'),
                'id' => set_value('id', $row->id),
                'barang' => set_value('barang', $row->barang),
                'topbar' => 'topbar',
                'menu' => 'menu',
                'active_controller' => 'coba',
                'active_function' => 'coba_form',
            );
            $this->load->view('front/global/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('coba'));
        }
    }

    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
              'barang' => $this->input->post('barang',TRUE),
          );

            $this->Coba_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('coba'));
        }
    }

    public function delete($id) 
    {
        $row = $this->Coba_model->get_by_id($id);

        if ($row) {
            $this->Coba_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('coba'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('coba'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('barang', 'barang', 'trim|required');

       $this->form_validation->set_rules('id', 'id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

   public function excel()
   {
    $this->load->helper('exportexcel');
    $namaFile = "coba.xls";
    $judul = "coba";
    $tablehead = 0;
    $tablebody = 1;
    $nourut = 1;
        //penulisan header
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    header("Content-Disposition: attachment;filename=" . $namaFile . "");
    header("Content-Transfer-Encoding: binary ");

    xlsBOF();

    $kolomhead = 0;
    xlsWriteLabel($tablehead, $kolomhead++, "No");
    xlsWriteLabel($tablehead, $kolomhead++, "Barang");

    foreach ($this->Coba_model->get_all() as $data) {
        $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
        xlsWriteNumber($tablebody, $kolombody++, $nourut);
        xlsWriteLabel($tablebody, $kolombody++, $data->barang);

        $tablebody++;
        $nourut++;
    }

    xlsEOF();
    exit();
}

public function word()
{
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment;Filename=coba.doc");

    $data = array(
        'coba_data' => $this->Coba_model->get_all(),
        'start' => 0
    );

    $this->load->view('coba/coba_doc',$data);
}

}

/* End of file Coba.php */
/* Location: ./application/controllers/Coba.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-12 09:23:59 */
/* http://harviacode.com */