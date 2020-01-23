<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpdf_all3 extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_all');
    }

    public function index()    
    {
    	$mpdf['datakpb'] 	= $this->M_all->tampil3();
    	$html['datakpb'] 	= $this->M_all->tampil3();
    	$html = $this->load->view('adminlte3/all/mpdf_all3',[],true);
        $mpdf = new \Mpdf\Mpdf(['format' => 'legal']);
        $mpdf->AddPage('P'); // Adds a new page in Landscape orientation
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser

    	

    }
}