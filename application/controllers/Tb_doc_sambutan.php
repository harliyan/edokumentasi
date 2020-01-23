<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_doc_sambutan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_doc_sambutan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_doc_sambutan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_doc_sambutan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_doc_sambutan/index.html';
            $config['first_url'] = base_url() . 'tb_doc_sambutan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_doc_sambutan_model->total_rows($q);
        $tb_doc_sambutan = $this->Tb_doc_sambutan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_doc_sambutan_data' => $tb_doc_sambutan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tb_doc_sambutan/tb_doc_sambutan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_doc_sambutan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'date' => $row->date,
		'judul' => $row->judul,
		'caption' => $row->caption,
		'path_sambutan' => $row->path_sambutan,
	    );
            $this->load->view('tb_doc_sambutan/tb_doc_sambutan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_doc_sambutan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_doc_sambutan/create_action'),
	    'id' => set_value('id'),
	    'date' => set_value('date'),
	    'judul' => set_value('judul'),
	    'caption' => set_value('caption'),
	    'path_sambutan' => set_value('path_sambutan'),
	);
        $this->load->view('tb_doc_sambutan/tb_doc_sambutan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'date' => $this->input->post('date',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'caption' => $this->input->post('caption',TRUE),
		'path_sambutan' => $this->input->post('path_sambutan',TRUE),
	    );

            $this->Tb_doc_sambutan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_doc_sambutan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_doc_sambutan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_doc_sambutan/update_action'),
		'id' => set_value('id', $row->id),
		'date' => set_value('date', $row->date),
		'judul' => set_value('judul', $row->judul),
		'caption' => set_value('caption', $row->caption),
		'path_sambutan' => set_value('path_sambutan', $row->path_sambutan),
	    );
            $this->load->view('tb_doc_sambutan/tb_doc_sambutan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_doc_sambutan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'date' => $this->input->post('date',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'caption' => $this->input->post('caption',TRUE),
		'path_sambutan' => $this->input->post('path_sambutan',TRUE),
	    );

            $this->Tb_doc_sambutan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_doc_sambutan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_doc_sambutan_model->get_by_id($id);

        if ($row) {
            $this->Tb_doc_sambutan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_doc_sambutan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_doc_sambutan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('date', 'date', 'trim|required');
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('caption', 'caption', 'trim|required');
	$this->form_validation->set_rules('path_sambutan', 'path sambutan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tb_doc_sambutan.xls";
        $judul = "tb_doc_sambutan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Date");
	xlsWriteLabel($tablehead, $kolomhead++, "Judul");
	xlsWriteLabel($tablehead, $kolomhead++, "Caption");
	xlsWriteLabel($tablehead, $kolomhead++, "Path Sambutan");

	foreach ($this->Tb_doc_sambutan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->caption);
	    xlsWriteLabel($tablebody, $kolombody++, $data->path_sambutan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tb_doc_sambutan.doc");

        $data = array(
            'tb_doc_sambutan_data' => $this->Tb_doc_sambutan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tb_doc_sambutan/tb_doc_sambutan_doc',$data);
    }

}

/* End of file Tb_doc_sambutan.php */
/* Location: ./application/controllers/Tb_doc_sambutan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-12 09:23:59 */
/* http://harviacode.com */