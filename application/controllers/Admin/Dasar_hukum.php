<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasar_hukum extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('m_dasarhukum');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Dasar Hukum',
      'dasarhukum' => $this->m_dasarhukum->lists(),
      'dasarhukum_user' => $this->m_dasarhukum->dasarhukum_user(),
       'isi' => 'admin/dasarhukum/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

 public function tambah_data(){

    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

     $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Dasar Hukum',
                                  'error' => $this->upload->display_errors(),
                                  'isi' => 'admin/dasarhukum/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

   if ($this->form_validation->run() == TRUE) {

      $data = [
        'tahun' => $this->input->post('tahun'),
				'deskripsi' => $this->input->post('deskripsi'),
				'user_id' => $this->session->userdata('id_user'),
      ];

          $this->m_dasarhukum->add($data);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p>Data berhasil di simpan ! </p></div>');
          redirect('admin/dasar_hukum', 'refresh');
        }
      }

 public function edit($id_dasarhukum){
   $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
    $this->form_validation->set_rules('judul_jadwal', 'Judul Jadwal', 'required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

     $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Edit Data Dasar Hukum',
                                  'error' => $this->upload->display_errors(),
                                  'dasarhukum' => $this->m_dasarhukum->detail($id_dasarhukum),
                                  'isi' => 'admin/dasarhukum/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

if ($this->form_validation->run() == TRUE) {
    $data = [
      'id_dasarhukum' =>$id_dasarhukum,
      'tahun' => $this->input->post('tahun'),
		  'deskripsi' => $this->input->post('deskripsi'),
		  'user_id' => $this->session->userdata('id_user'),
    ];
    $this->m_dasarhukum->edit($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/dasar_hukum');
 }
}

  public function detail_data($id)
			 {
       $data['title'] = 'KPU KOTA BOGOR';
       $data['title2'] = 'Detail Data Dasar Hukum';
			 $this->load->model('m_dasarhukum');
       $detail = $this->m_dasarhukum->detail2($id);
       $data['detail'] = $detail;
       $data['isi'] = 'admin/dasarhukum/detail';
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  public function hapus($id_dasarhukum){
    $data= array(
      'id_dasarhukum' =>$id_dasarhukum,
    );
    $this->m_dasarhukum->delete($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
    redirect('admin/dasar_hukum');
  }

  public function pdf($id)
	{
		$data['dasarhukum_user'] = $this->m_dasarhukum->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['dasarhukum_user'] = $this->m_dasarhukum->dasarhukum_user();
		 $this->load->view('pdf/dasarhukum', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Dasar Hukum';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Dasar Hukum - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

				$html = $this->load->view('pdf/dasarhukum', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}
/* End of file Dasar_hukum.php */