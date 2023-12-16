<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelantikan extends CI_Controller {

  public function __construct()
{
  parent::__construct();
  $this->load->model('m_pelantikan');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Pelantikan Presiden dan Wakil Presiden',
      'pelantikan' => $this->m_pelantikan->lists(),
      'pelantikan_user' => $this->m_pelantikan->pelantikan_user(),
      'pelantikan_user' => $this->m_pelantikan->pelantikan_user(),
      'isi' => 'admin/pelantikan/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data()
  {
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('tgl_pelantikan', 'pelantikan Pelantikan', 'trim|required');
		$this->form_validation->set_rules('nama_presiden', 'Nama Presiden', 'trim|required');
		$this->form_validation->set_rules('nama_wapres', 'Nama Wakil Presiden', 'trim|required');
		$this->form_validation->set_rules('mulai_periode', 'Mulai Periode Masa Jabatan', 'trim|required');
		$this->form_validation->set_rules('akhir_periode', 'Akhir Periode Masa Jabatan', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

      if ($this->form_validation->run() == TRUE)
    {
      $foto_presiden      = $_FILES['foto_presiden']['name'];
      if ($foto_presiden == "") {
      } else {
        $config['upload_path']   = './assets/upload/pelantikan/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['max_size']      = 2000;
        $this->upload->initialize($config);

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_presiden')) {
          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Pelantikan Presiden dan Wakil Presiden',
                                  'error' => $this->upload->display_errors(),
                                  'isi' => 'admin/pelantikan/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

        } else {
          $foto_presiden = $this->upload->data('file_name');
        }
      }

       $foto_wapres      = $_FILES['foto_wapres']['name'];
      if ($foto_wapres == "") {
      } else {
        $config['upload_path']   = './assets/upload/pelantikan/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['max_size']      = 2000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_wapres')) {
          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Pelantikan Presiden dan Wakil Presiden',
                                  'error' => $this->upload->display_errors(),
                                  'isi' => 'admin/pelantikan/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

        } else {
          $foto_wapres = $this->upload->data('file_name');
        }
      }


      $data = array(
            'tahun' => $this->input->post('tahun'),
						'tgl_pelantikan' => $this->input->post('tgl_pelantikan'),
						'foto_presiden' => $foto_presiden,
						'nama_presiden' => $this->input->post('nama_presiden'),
						'foto_wapres' => $foto_wapres,
						'nama_wapres' => $this->input->post('nama_wapres'),
						'mulai_periode' => $this->input->post('mulai_periode'),
						'akhir_periode' => $this->input->post('akhir_periode'),
            'user_id' => $this->session->userdata('id_user'),
          );

          $this->m_pelantikan->add($data, 'pelantikan');
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan!</p></div>');
          redirect('admin/pelantikan');
        }

    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Form Tambah Data Pelantikan Presiden dan Wakil Presiden',
      'pelantikan_user' => $this->m_pelantikan->pelantikan_user(),
      'isi' => 'admin/pelantikan/tambah'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);

  }

public function pdf($id)
	{
		$data['pelantikan_user'] = $this->m_pelantikan->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['pelantikan_user'] = $this->m_pelantikan->pelantikan_user();
		 $this->load->view('pdf/pelantikan', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Pelantikan Presiden dan Wakil Presiden';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Data Pelantikan Presiden dan Wakil Presiden - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

				$html = $this->load->view('pdf/pelantikan', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

public function edit($id_pelantikan){
   $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('tgl_pelantikan', 'pelantikan Pelantikan', 'trim|required');
		$this->form_validation->set_rules('nama_presiden', 'Nama Presiden', 'trim|required');
		$this->form_validation->set_rules('nama_wapres', 'Nama Wakil Presiden', 'trim|required');
		$this->form_validation->set_rules('mulai_periode', 'Mulai Periode Masa Jabatan', 'trim|required');
		$this->form_validation->set_rules('akhir_periode', 'Akhir Periode Masa Jabatan', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

     $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Edit Data Pelantikan Presiden dan Wakil Presiden',
                                  'error' => $this->upload->display_errors(),
                                  'pelantikan' => $this->m_pelantikan->detail($id_pelantikan),
                                  'isi' => 'admin/pelantikan/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

if ($this->form_validation->run() == TRUE) {
$foto_presiden      = $_FILES['foto_presiden']['name'];
      if ($foto_presiden) {
        $config['upload_path']   = './assets/upload/pelantikan/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				 $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_presiden')) {
          $foto_presiden=$this->upload->data('file_name');
          $this->db->set('foto_presiden', $foto_presiden);
        } else {
          echo $this->upload->display_errors();
        }
      }

     $foto_wapres      = $_FILES['foto_wapres']['name'];
      if ($foto_wapres) {
        $config['upload_path']   = './assets/upload/pelantikan/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				 $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_wapres')) {
          $foto_wapres=$this->upload->data('file_name');
          $this->db->set('foto_wapres', $foto_wapres);
        } else {
          echo $this->upload->display_errors();
        }
      }


    $data = [
            'id_pelantikan' =>$id_pelantikan,
            'tahun' => $this->input->post('tahun'),
						'tgl_pelantikan' => $this->input->post('tgl_pelantikan'),
						'foto_presiden' => $foto_presiden,
						'nama_presiden' => $this->input->post('nama_presiden'),
						'foto_wapres' => $foto_wapres,
						'nama_wapres' => $this->input->post('nama_wapres'),
						'mulai_periode' => $this->input->post('mulai_periode'),
						'akhir_periode' => $this->input->post('akhir_periode'),
            'user_id' => $this->session->userdata('id_user'),
    ];
    $this->m_pelantikan->edit($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/pelantikan');
 }
}

public function hapus($id_pelantikan){
 //start menghapus gambar lama
 $pelantikan= $this->m_pelantikan->detail($id_pelantikan);
 if ($pelantikan->foto_presiden !="") {
 unlink('./assets/upload/pelantikan/'.$pelantikan->foto_presiden);
  }
  if ($pelantikan->foto_wapres !="") {
 unlink('./assets/upload/pelantikan/'.$pelantikan->foto_wapres);
  }
   //end menghapus gambar lama

  $data = array('id_pelantikan' => $id_pelantikan);
  $this->m_pelantikan->delete($data);
  $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
  redirect('admin/pelantikan');
}
}

/* End of file Pelantikan.php */