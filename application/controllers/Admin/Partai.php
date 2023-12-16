<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partai extends CI_Controller {
public function __construct()
{
  parent::__construct();
  $this->load->model('m_partai');
}
  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Partai',
      'partai'  => $this->m_partai->get_partai(),
      'isi' => 'admin/partai/list'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

  public function tambah_data()
  {
    $this->form_validation->set_rules('nama_partai', 'Nama Partai', 'required', array('required'=>'%s Harus diisi!'));

    if ($this->form_validation->run() == TRUE)
    {
      $config['upload_path']          = './assets/upload/bendera/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg|jiff';
      $config['max_size']             = 2000;
      $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('bendera'))
                {
                          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Tambah Data Partai Indonesia',
                                  'error' => $this->upload->display_errors(),
                                  'isi' => 'admin/partai/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
                }
                else
                {
                     $upload_data = array('uploads' => $this->upload->data());
                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './bendera/' . $upload_data['uploads']['file_name'];
                     $this->load->library('image_lib', $config);

                     $data = array(
                      'nama_partai' => $this->input->post('nama_partai'),
                      'bendera' => $upload_data['uploads']['file_name'],

                    );
                    $this->m_partai->add($data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p>Data berhasil di simpan!</p></div>');
                    redirect('admin/partai');
                }
  }

    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Tambah Data Partai',
      'partai'  => $this->m_partai->get_partai(),
      'isi' => 'admin/partai/tambah'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function edit($id_partai)
  {
    $this->form_validation->set_rules('nama_partai', 'Nama Partai', 'required', array('required'=>'%s Harus diisi!'));

    if ($this->form_validation->run() == TRUE)
    {
      $config['upload_path']          = './assets/upload/bendera/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg|jiff';
      $config['max_size']             = 2000;
      $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('bendera'))
                {
                          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Partai',
                                  'error' => $this->upload->display_errors(),
                                  'partai' => $this->m_partai->detail($id_partai),
                                  'isi' => 'admin/partai/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
                }
                else
                {
                     $upload_data = array('uploads' => $this->upload->data());
                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './bendera/' . $upload_data['uploads']['file_name'];
                     $this->load->library('image_lib', $config);
                    //start menghapus gambar lama
                    $partai= $this->m_partai->detail($id_partai);
                   if ($partai->bendera !="") {
                    unlink('./assets/upload/bendera/'.$partai->bendera);
                   }
                    //end menghapus gambar lama
                     $data = array(
                      'id_partai' => $id_partai,
                      'nama_partai' => $this->input->post('nama_partai'),
                      'bendera' => $upload_data['uploads']['file_name'],
                    );
                    $this->m_partai->edit($data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
                    redirect('admin/partai');
                }

                 $data = array(
                      'id_partai' => $id_partai,
                      'nama_partai' => $this->input->post('nama_partai'),
                    );
                    $this->m_partai->edit($data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
                    redirect('admin/partai');
  }

    $data=array(
       'title' => 'KPU KOTA BOGOR',
       'title2' => 'Edit Data Partai Indonesia',
       'partai' => $this->m_partai->detail($id_partai),
       'isi' => 'admin/partai/edit'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

 public function detail_data($id)
			 {
       $data['title'] = 'KPU KOTA BOGOR';
       $data['title2'] = 'Detail Data Partai';
			 $this->load->model('m_partai');
       $detail = $this->m_partai->detail2($id);
       $data['detail'] = $detail;
       $data['isi'] = 'admin/partai/detail';
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }


public function hapus($id_partai){
 //start menghapus gambar lama
 $partai= $this->m_partai->detail($id_partai);
 if ($partai->bendera !="") {
 unlink('./assets/upload/bendera/'.$partai->bendera);
  }
   //end menghapus gambar lama

  $data = array('id_partai' => $id_partai);
  $this->m_partai->delete($data);
  $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
  redirect('admin/partai');
}

public function pdf($id)
	{
		$data['partai'] = $this->m_partai->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['partai'] = $this->m_partai->all_data();
		 $this->load->view('pdf/partai', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Partai';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Data Partai - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

				$html = $this->load->view('pdf/partai', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}

/* End of file Partai.php */