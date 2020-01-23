<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_doc_foto extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_doc_foto_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_doc_foto/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_doc_foto/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_doc_foto/index.html';
            $config['first_url'] = base_url() . 'tb_doc_foto/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_doc_foto_model->total_rows($q);
        $tb_doc_foto = $this->Tb_doc_foto_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_doc_foto_data' => $tb_doc_foto,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tb_doc_foto/tb_doc_foto_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_doc_foto_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'date' => $row->date,
		'judul' => $row->judul,
		'caption' => $row->caption,
		'image_name' => $row->image_name,
		'image_type' => $row->image_type,
		'image_size_str' => $row->image_size_str,
		'google_photo_link' => $row->google_photo_link,
	    );
            $this->load->view('tb_doc_foto/tb_doc_foto_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_doc_foto'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_doc_foto/create_action'),
	    'id' => set_value('id'),
	    'date' => set_value('date'),
	    'judul' => set_value('judul'),
	    'caption' => set_value('caption'),
	    'image_name' => set_value('image_name'),
	    'image_type' => set_value('image_type'),
	    'image_size_str' => set_value('image_size_str'),
	    'google_photo_link' => set_value('google_photo_link'),
	);
        $this->load->view('tb_doc_foto/tb_doc_foto_form', $data);
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
		'image_name' => $this->input->post('image_name',TRUE),
		'image_type' => $this->input->post('image_type',TRUE),
		'image_size_str' => $this->input->post('image_size_str',TRUE),
		'google_photo_link' => $this->input->post('google_photo_link',TRUE),
	    );

            $this->Tb_doc_foto_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_doc_foto'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_doc_foto_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_doc_foto/update_action'),
		'id' => set_value('id', $row->id),
		'date' => set_value('date', $row->date),
		'judul' => set_value('judul', $row->judul),
		'caption' => set_value('caption', $row->caption),
		'image_name' => set_value('image_name', $row->image_name),
		'image_type' => set_value('image_type', $row->image_type),
		'image_size_str' => set_value('image_size_str', $row->image_size_str),
		'google_photo_link' => set_value('google_photo_link', $row->google_photo_link),
	    );
            $this->load->view('tb_doc_foto/tb_doc_foto_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_doc_foto'));
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
		'image_name' => $this->input->post('image_name',TRUE),
		'image_type' => $this->input->post('image_type',TRUE),
		'image_size_str' => $this->input->post('image_size_str',TRUE),
		'google_photo_link' => $this->input->post('google_photo_link',TRUE),
	    );

            $this->Tb_doc_foto_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_doc_foto'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_doc_foto_model->get_by_id($id);

        if ($row) {
            $this->Tb_doc_foto_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_doc_foto'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_doc_foto'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('date', 'date', 'trim|required');
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('caption', 'caption', 'trim|required');
	$this->form_validation->set_rules('image_name', 'image name', 'trim|required');
	$this->form_validation->set_rules('image_type', 'image type', 'trim|required');
	$this->form_validation->set_rules('image_size_str', 'image size str', 'trim|required');
	$this->form_validation->set_rules('google_photo_link', 'google photo link', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tb_doc_foto.xls";
        $judul = "tb_doc_foto";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Image Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Image Type");
	xlsWriteLabel($tablehead, $kolomhead++, "Image Size Str");
	xlsWriteLabel($tablehead, $kolomhead++, "Google Photo Link");

	foreach ($this->Tb_doc_foto_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->caption);
	    xlsWriteLabel($tablebody, $kolombody++, $data->image_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->image_type);
	    xlsWriteLabel($tablebody, $kolombody++, $data->image_size_str);
	    xlsWriteLabel($tablebody, $kolombody++, $data->google_photo_link);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tb_doc_foto.doc");

        $data = array(
            'tb_doc_foto_data' => $this->Tb_doc_foto_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tb_doc_foto/tb_doc_foto_doc',$data);
    }

}

/* End of file Tb_doc_foto.php */
/* Location: ./application/controllers/Tb_doc_foto.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-12 09:23:59 */
/* http://harviacode.com */