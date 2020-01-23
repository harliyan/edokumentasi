  <?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
  defined('BASEPATH') or exit('No direct script access allowed');

  class Admin_user extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_home');
      $this->load->model('M_file');
      $this->load->model('M_user');
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
        'active_controller' => 'admin_user',
        'active_function' => 'index',
        'sidebar' => 'sidebar_admin'
      ];

    $data['users']   = $this->M_user->tampil();


      $this->load->view('adminlte3/global/home', $data);
    }

    public function tambah(){
    $this->load->view('superadmin/admin_user');
    }

    public function tambah_aksi(){

      $id_user = $this->input->post('id_user');
      $username = $this->input->post('username');
      $password = sha1($this->input->post('password'));
      $privilege = $this->input->post('privilege');

      $data = array(
        'id_user' => $id_user,
        'username' => $username,
        'password' => $password,
        'privilege' => $privilege,
        
      );
      $this->M_user->input_data($data,'users');
      redirect('superadmin/admin_user');
    }

    public function edit($id)
    {

      $tb_telecenter = $this->M_user->edit('users', $id);

      $data['tb_telecenter'] = $tb_telecenter;
      $data['active_controller'] = 'admin_user';
      $data['active_function'] = 'edit';
      $data['sidebar'] = 'sidebar_details';

      $this->load->view('adminlte3/global/home', $data);
    }

    public function update()
    {
      $id_user = $this->input->post('id_user');
      $username = $this->input->post('username');
     $password = sha1($this->input->post('password'));

      $data = array(
        'id_user' => $id_user,
        'username' => $username,
        'password' => $password,

      );

      $where = array(
        'id_user' => $id_user
      );

      $this->M_user->update($where, $data, 'users');
      redirect('superadmin/admin_user');
    }

    public function hapus($id)
    { //fungsi delete
      $this->M_user->hapus($id); //ngacir ke fungsi delTransaksi
      $this->session->set_flashdata('success', 'Data Berhasil dihapus');
      redirect('superadmin/admin_user'); //redirect
    }
  }
