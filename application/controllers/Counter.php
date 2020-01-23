<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Counter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Counter_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'counter/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'counter/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'counter/index.html';
            $config['first_url'] = base_url() . 'counter/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Counter_model->total_rows($q);
        $counter = $this->Counter_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'counter_data' => $counter,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('counter/counter_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Counter_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'ip' => $row->ip,
		'id_berita' => $row->id_berita,
		'browser' => $row->browser,
		'tanggal' => $row->tanggal,
	    );
            $this->load->view('counter/counter_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('counter'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('counter/create_action'),
	    'id' => set_value('id'),
	    'ip' => set_value('ip'),
	    'id_berita' => set_value('id_berita'),
	    'browser' => set_value('browser'),
	    'tanggal' => set_value('tanggal'),
	);
        $this->load->view('counter/counter_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'ip' => $this->input->post('ip',TRUE),
		'id_berita' => $this->input->post('id_berita',TRUE),
		'browser' => $this->input->post('browser',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Counter_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('counter'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Counter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('counter/update_action'),
		'id' => set_value('id', $row->id),
		'ip' => set_value('ip', $row->ip),
		'id_berita' => set_value('id_berita', $row->id_berita),
		'browser' => set_value('browser', $row->browser),
		'tanggal' => set_value('tanggal', $row->tanggal),
	    );
            $this->load->view('counter/counter_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('counter'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'ip' => $this->input->post('ip',TRUE),
		'id_berita' => $this->input->post('id_berita',TRUE),
		'browser' => $this->input->post('browser',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Counter_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('counter'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Counter_model->get_by_id($id);

        if ($row) {
            $this->Counter_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('counter'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('counter'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('ip', 'ip', 'trim|required');
	$this->form_validation->set_rules('id_berita', 'id berita', 'trim|required');
	$this->form_validation->set_rules('browser', 'browser', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "counter.xls";
        $judul = "counter";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Ip");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Berita");
	xlsWriteLabel($tablehead, $kolomhead++, "Browser");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");

	foreach ($this->Counter_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ip);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_berita);
	    xlsWriteLabel($tablebody, $kolombody++, $data->browser);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=counter.doc");

        $data = array(
            'counter_data' => $this->Counter_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('counter/counter_doc',$data);
    }

}

/* End of file Counter.php */
/* Location: ./application/controllers/Counter.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-12 09:23:59 */
/* http://harviacode.com */