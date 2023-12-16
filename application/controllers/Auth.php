<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_auth');
  }


  public function index()
  {
    $data=array(
      'title2' => 'Login Dashboard',
      'user'  => $this->m_auth->getAuth(),
      'isi' => 'admin/login'
    );
    $this->load->view('admin/login', $data , FALSE);
  }

public function daftar(){
  $data=array(
      'title2' => 'Daftar Akun Arsip',
      'isi' => 'admin/register'
    );
		$this->load->view('admin/register', $data , FALSE);
	}

function proses_daftar(){
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|is_unique[user.tahun]|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|max_length[12]|required');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|matches[password]|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = array(
        'username' => $this->input->post('username'),
				'tahun' => $this->input->post('tahun'),
        'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        'status_user' => 1,
        'level_user' => 1,
      );
      $this->m_auth->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p>Data berhasil di simpan !</p></div>');
      redirect('auth', 'refresh');
    } else {
      $this->daftar();
    }
	}

function proses_login(){
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$user =$this->m_auth->get_tahun_user($this->input->post('tahun'));
			if (!$user) {
				$this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Tahun tidak ditemukan !</p></div>');
				redirect('auth', 'refresh');
			}else if($user->status_user == '0'){
				$this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Anggota KPU tidak aktif, Silahkan hubungi Admin !</p></div>');
				redirect('auth', 'refresh');
			}else if(!password_verify($this->input->post('password'), $user->password)){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Maaf, Password Anda salah !</p></div>');
				redirect('auth', 'refresh');
			}else{
				$session=array(
					'id_user'    => $user->id_user,
					'username'   => $user->username,
					'tahun'	     => $user->tahun,
					'level_user' => $user->level_user,
				);
				$this->session->set_userdata($session);
				redirect('admin/dashboard');
			}
		}else{
			$data['title'] = 'Login Pages';
			$this->load->view('admin/register', $data);
		}
	}

	 public function logout(){

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Anda telah keluar!</p></div>');
        redirect('auth');
  }
}

/* End of file Auth.php */