<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_pilpres extends CI_Controller {
public function __construct()
{
  parent::__construct();
  $this->load->model('m_jadwal');
}

  public function index()
  {
     $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Jadwal Pilpres',
      'jadwal' => $this->m_jadwal->get_jadwal(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
       'isi' => 'admin/jadwal/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data()
  {
    $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jadwal', 'Jadwal Pilpres', 'required', array('required'=>'%s Harus diisi!'));

    if ($this->form_validation->run() == TRUE)
    {
      $config['upload_path']          = './assets/upload/jadwal/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg|jiff';
      $config['max_size']             = 2000;
      $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('foto'))
                {
                          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Jadwal Pilpres',
                                  'error' => $this->upload->display_errors(),
                                  'isi' => 'admin/jadwal/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
                }
                else
                {
                     $upload_data = array('uploads' => $this->upload->data());
                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './jadwal/' . $upload_data['uploads']['file_name'];
                     $this->load->library('image_lib', $config);

                     $data = array(
                      'tahun' => $this->input->post('tahun'),
						          'jadwal' => $this->input->post('jadwal'),
                      'foto' => $upload_data['uploads']['file_name'],
                      'user_id' => $this->session->userdata('id_user'),

                    );
                    $this->m_jadwal->insert($data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan!</p></div>');
                    redirect('admin/jadwal_pilpres');
                }
  }

    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Form Tambah Data Jadwal Pilpres',
      'jadwal' => $this->m_jadwal->get_jadwal(),
      'isi' => 'admin/jadwal/tambah'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function edit($id_jadwal)
  {
    $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jadwal', 'Jadwal Pilpres', 'required', array('required'=>'%s Harus diisi!'));
    if ($this->form_validation->run() == TRUE)
    {
      $config['upload_path']          = './assets/upload/jadwal/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg|jiff';
      $config['max_size']             = 2000;
      $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('foto'))
                {
                          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Jadwal Pilpres',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal' => $this->m_jadwal->detail($id_jadwal),
                                  'isi' => 'admin/jadwal/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
                }
                else
                {
                     $upload_data = array('uploads' => $this->upload->data());
                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './foto/' . $upload_data['uploads']['file_name'];
                     $this->load->library('image_lib', $config);
                    //start menghapus gambar lama
                    $jadwal= $this->m_jadwal->detail($id_jadwal);
                   if ($jadwal->foto !="") {
                    unlink('./assets/upload/jadwal/'.$jadwal->foto);
                   }
                    //end menghapus gambar lama
                     $data = array(
                      'id_jadwal' => $id_jadwal,
                      'tahun' => $this->input->post('tahun'),
						          'jadwal' => $this->input->post('jadwal'),
                      'foto' => $upload_data['uploads']['file_name'],
                      'user_id' => $this->session->userdata('id_user'),
                    );
                    $this->m_jadwal->edit($data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
                    redirect('admin/jadwal_pilpres');
                }

                 $data = array(
                      'id_jadwal' => $id_jadwal,
                      'tahun' => $this->input->post('tahun'),
						          'jadwal' => $this->input->post('jadwal'),
                      'user_id' => $this->session->userdata('id_user'),
                    );
                    $this->m_jadwal->edit($data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
                    redirect('admin/jadwal_pilpres');
  }

    $data=array(
       'title' => 'KPU KOTA BOGOR',
       'title2' => 'Edit Data Jadwal Pilpres',
       'jadwal' => $this->m_jadwal->detail($id_jadwal),
       'isi' => 'admin/jadwal/edit'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

   public function detail_data($id)
			 {
       $data['title'] = 'KPU KOTA BOGOR';
       $data['title2'] = 'Detail Data Jadwal Pilpres';
			 $this->load->model('m_jadwal');
       $detail = $this->m_jadwal->detail2($id);
       $data['detail'] = $detail;
       $data['isi'] = 'admin/jadwal/detail';
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

public function hapus($id_jadwal){
 //start menghapus gambar lama
 $jadwal= $this->m_jadwal->detail($id_jadwal);
 if ($jadwal->foto !="") {
 unlink('./assets/upload/jadwal/'.$jadwal->foto);
  }
   //end menghapus gambar lama

  $data = array('id_jadwal' => $id_jadwal);
  $this->m_jadwal->delete($data);
  $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
  redirect('admin/jadwal_pilpres');
}

public function pdf($id)
	{
		$data['jadwal_user'] = $this->m_jadwal->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['jadwal_user'] = $this->m_jadwal->jadwal_user();
		 $this->load->view('pdf/jadwal', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Jadwal Pilpres';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Jadwal - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

				$html = $this->load->view('pdf/jadwal', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}

/* End of file Jadwal_pilpres.php */