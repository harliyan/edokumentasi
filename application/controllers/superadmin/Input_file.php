  <?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
  defined('BASEPATH') or exit('No direct script access allowed');

  class Input_file extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_home');
      $this->load->model('M_file');
      if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
        return redirect('logout');
      } else {
        if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'superadmin') {
          return redirect('logout');
        }
      }
    }

    public function index()
    {
      $data = [
        'active_controller' => 'input_file',
        'active_function' => 'index2',
        'sidebar' => 'sidebar_admin'
      ];

      $data['doc_file']  = $this->M_file->tampil_admin();
      $data['get_file_count'] = $this->M_file->get_file_count();


      $this->load->view('adminlte3/global/home', $data);
    }

    public function tambah()
    {
      $this->load->view('superadmin/input_file');
    }

    public function tambah_aksi()
    {

      $config['upload_path']          = '../siapkawal/file_desain/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg|doc|docx|pdf|xls|cdr|eps|ai|psd|ods|odt|odp|zip|ppt|gif|jpe';
      $config['max_size']             = 2048000;
      $config['max_width']            = 80000;
      $config['max_height']           = 80000;

      $this->load->library('upload', $config);
      // $this->upload->do_upload('path_file');

      $path_file = '';
      $gambar_tumbnail = '';

      $this->upload->initialize($config);
      if (!empty($_FILES['path_file']['name'])) {

        if ($this->upload->do_upload('path_file')) {
          $gbr = $this->upload->data();
          $path_file = $gbr['file_name'];
          $response['status'] = TRUE;
          $response['pesan'] = 'Sukses Upload Gambar';
        } else {
          $response['status'] = FALSE;
          $response['pesan'] = 'Gagal Upload Gambar';
        }
      } else {
        $response['status'] = FALSE;
        $response['pesan'] = 'Gambar Kosong';
      }

      if (!empty($_FILES['gambar_tumbnail']['name'])) {

        if ($this->upload->do_upload('gambar_tumbnail')) {
          $gbr = $this->upload->data();
          $gambar_tumbnail = $gbr['file_name'];
          $response['status'] = TRUE;
          $response['pesan'] = 'Sukses Upload Gambar';
        } else {
          $response['status'] = FALSE;
          $response['pesan'] = 'Gagal Upload Gambar';
        }
      } else {
        $response['status'] = FALSE;
        $response['pesan'] = 'Gambar Kosong';
      }

      $data = array(
        'id' => $this->input->post('id'),
        'judul' => $this->input->post('judul'),
        'caption' => $this->input->post('caption'),
        'ekstensi_file' => $this->input->post('ekstensi_file'),
        'path_file' => $path_file,
        'gambar_tumbnail' => $gambar_tumbnail,


      );
      $this->M_file->input_data($data, 'tb_doc_file');
      $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
      redirect('superadmin/input_file');
    }

    public function edit($id)
    {

      $tb_telecenter = $this->M_file->edit('tb_doc_file', $id);

      $data['tb_telecenter'] = $tb_telecenter;
      $data['active_controller'] = 'input_file';
      $data['active_function'] = 'edit2';
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
      $ekstensi_file = $this->input->post('ekstensi_file');



      $data = array(
        'id' => $id,
        'judul' => $judul,
        'ekstensi_file' => $ekstensi_file,
        'caption' => $caption,


      );

      $where = array(
        'id' => $id
      );

      $this->M_file->update($where, $data, 'tb_doc_file');
      redirect('superadmin/input_file');
    }

    public function hapus($id)
    { //fungsi delete
      $this->M_file->hapus($id); //ngacir ke fungsi delTransaksi
      $this->session->set_flashdata('success', 'Data Berhasil dihapus');
      redirect('superadmin/input_file'); //redirect
    }
  }
