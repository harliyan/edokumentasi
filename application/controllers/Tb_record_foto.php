<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_record_foto extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_record_foto_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_record_foto/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_record_foto/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_record_foto/index.html';
            $config['first_url'] = base_url() . 'tb_record_foto/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_record_foto_model->total_rows($q);
        $tb_record_foto = $this->Tb_record_foto_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_record_foto_data' => $tb_record_foto,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tb_record_foto/tb_record_foto_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_record_foto_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_record' => $row->id_record,
		'id' => $row->id,
		'judul' => $row->judul,
		'google_photo_link' => $row->google_photo_link,
		'nik' => $row->nik,
	    );
            $this->load->view('tb_record_foto/tb_record_foto_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_record_foto'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_record_foto/create_action'),
	    'id_record' => set_value('id_record'),
	    'id' => set_value('id'),
	    'judul' => set_value('judul'),
	    'google_photo_link' => set_value('google_photo_link'),
	    'nik' => set_value('nik'),
	);
        $this->load->view('tb_record_foto/tb_record_foto_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id' => $this->input->post('id',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'google_photo_link' => $this->input->post('google_photo_link',TRUE),
		'nik' => $this->input->post('nik',TRUE),
	    );

            $this->Tb_record_foto_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_record_foto'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_record_foto_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_record_foto/update_action'),
		'id_record' => set_value('id_record', $row->id_record),
		'id' => set_value('id', $row->id),
		'judul' => set_value('judul', $row->judul),
		'google_photo_link' => set_value('google_photo_link', $row->google_photo_link),
		'nik' => set_value('nik', $row->nik),
	    );
            $this->load->view('tb_record_foto/tb_record_foto_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_record_foto'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_record', TRUE));
        } else {
            $data = array(
		'id' => $this->input->post('id',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'google_photo_link' => $this->input->post('google_photo_link',TRUE),
		'nik' => $this->input->post('nik',TRUE),
	    );

            $this->Tb_record_foto_model->update($this->input->post('id_record', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_record_foto'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_record_foto_model->get_by_id($id);

        if ($row) {
            $this->Tb_record_foto_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_record_foto'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_record_foto'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id', 'id', 'trim|required');
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('google_photo_link', 'google photo link', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');

	$this->form_validation->set_rules('id_record', 'id_record', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tb_record_foto.xls";
        $judul = "tb_record_foto";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Judul");
	xlsWriteLabel($tablehead, $kolomhead++, "Google Photo Link");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik");

	foreach ($this->Tb_record_foto_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->google_photo_link);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tb_record_foto.doc");

        $data = array(
            'tb_record_foto_data' => $this->Tb_record_foto_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tb_record_foto/tb_record_foto_doc',$data);
    }

}

/* End of file Tb_record_foto.php */
/* Location: ./application/controllers/Tb_record_foto.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-12 09:23:59 */
/* http://harviacode.com */