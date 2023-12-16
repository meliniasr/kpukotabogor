<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasangan_calon extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->database('');
			$this->load->model('m_pasangancalon');
			$this->load->helper('url');
		}

		public function index(){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Pasangan Calon',
      'title3' => 'Tambah Data Pasangan Calon',
      'pasangancalon' => $this->m_pasangancalon->lists(),
      'partai'  => $this->m_partai->get_partai(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'logomaskot_user' => $this->m_logomaskot->logomaskot_user(),
      'pasangancalon_user' => $this->m_pasangancalon->pasangancalon_user(),
      'isi' => 'admin/pasangancalon/list'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
		}

public function tambah_data(){

       $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=>'%s Harus diisi!'));
       $this->form_validation->set_rules('nama', 'Nama Pasangan Calon', 'required', array('required'=>'%s Harus diisi!'));
		   $this->form_validation->set_rules('kategori', 'Kategori', 'required', array('required'=>'%s Harus diisi!'));
       $this->form_validation->set_rules('visi', 'Visi', 'required', array('required'=>'%s Harus diisi!'));
		   $this->form_validation->set_rules('misi', 'Misi', 'required', array('required'=>'%s Harus diisi!'));


      if($this->input->post('submit')){
      $config['upload_path']          = './assets/upload/pasangancalon/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg|jiff';
      $config['max_size']             = 2000;
      $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('foto_capres'))
                {
                          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Pasangan Calon',
                                  'error' => $this->upload->display_errors(),
                                  'isi' => 'admin/pasangancalon/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
                }
                else
                {
                     $upload_data = array('uploads' => $this->upload->data());
                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './pasangancalon/' . $upload_data['uploads']['file_name'];
                     $this->load->library('image_lib', $config);

				$data['tahun'] = $this->input->post('tahun');
        $data['nama'] = $this->input->post('nama');
				$data['visi'] = $this->input->post('visi');
        $data['misi'] = $this->input->post('misi');
        $data['kategori'] = $this->input->post('kategori');
        $data['foto_capres'] = $upload_data['uploads']['file_name'];
        $data['user_id'] = $this->session->userdata('id_user');

        $user_id = $this->session->userdata('id_user');
        $id_pasangancalon = $this->m_pasangancalon->insertPS($data);
				$partai_id = $this->input->post('partai_id');
				foreach ($partai_id as $key => $partai_id) {
					$this->m_pasangancalon->addPP($id_pasangancalon,$partai_id,$user_id);
        }
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h5><i class="icon fas fa-check"></i> Data berhasil di simpan!</h5></div>');
                    redirect('admin/pasangan_calon', 'refresh');
      }

 }
   $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Tambah Data Pasangan Calon',
      'partai'  => $this->m_partai->get_partai(),
      'logomaskot_user' => $this->m_logomaskot->logomaskot_user(),
      'pasangancalon' => $this->m_pasangancalon->lists(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'isi' => 'admin/pasangancalon/tambah'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
}

 public function detail_data($id)
			 {
      $pasangancalon= $this->m_pasangancalon->detail($id);
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Detail Data '. $pasangancalon->kategori,
      'pasangancalon' => $pasangancalon,
      'foto'  => $this->m_partai->get_partai(),
      'detail' =>$this->m_pasangancalon->detail2($id),
      'foto' =>$this->m_pasangancalon->lists_foto($id),
      'pasangancalon_user' => $this->m_pasangancalon->pasangancalon_user(),
      'isi' => 'admin/pasangancalon/detail'
    );
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }


public function pdf($id_pasangancalon)
	{
		$data['pasangancalon_user'] = $this->m_pasangancalon->pdf_data($id_pasangancalon);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['pasangancalon_user'] = $this->m_pasangancalon->pasangancalon_user();
       $data['foto']  = $this->m_partai->get_partai();
      $data['detail'] = $this->m_pasangancalon->detail2($id_pasangancalon);
      $data['foto'] = $this->m_pasangancalon->lists_foto($id_pasangancalon);
		 $this->load->view('pdf/pasangancalon', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Pasangan Calon';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Pasangan Calon - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

				$html = $this->load->view('pdf/pasangancalon', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

    public function edit_data($id_pasangancalon){
       $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=>'%s Harus diisi!'));
       $this->form_validation->set_rules('nama', 'Nama Pasangan Calon', 'required', array('required'=>'%s Harus diisi!'));
		   $this->form_validation->set_rules('kategori', 'Kategori', 'required', array('required'=>'%s Harus diisi!'));
       $this->form_validation->set_rules('visi', 'Visi', 'required', array('required'=>'%s Harus diisi!'));
		   $this->form_validation->set_rules('misi', 'Misi', 'required', array('required'=>'%s Harus diisi!'));


      if($this->input->post('submit')){
      $config['upload_path']          = './assets/upload/pasangancalon/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg|jiff';
      $config['max_size']             = 2000;
      $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('foto_capres'))
                {
                          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Edit Data Pasangan Calon',
                                  'error' => $this->upload->display_errors(),
                                  'pasangancalon' =>$this->m_pasangancalon->detail3($id_pasangancalon),
                                  'isi' => 'admin/pasangancalon/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
                }
                else
                {
                     $upload_data = array('uploads' => $this->upload->data());
                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './pasangancalon/' . $upload_data['uploads']['file_name'];
                     $this->load->library('image_lib', $config);

				$data['tahun'] = $this->input->post('tahun');
        $data['nama'] = $this->input->post('nama');
				$data['visi'] = $this->input->post('visi');
        $data['misi'] = $this->input->post('misi');
        $data['kategori'] = $this->input->post('kategori');
        $data['foto_capres'] = $upload_data['uploads']['file_name'];
        $data['user_id'] = $this->session->userdata('id_user');

        $user_id = $this->session->userdata('id_user');
        $id_pasangancalon = $this->m_pasangancalon->edit_PS($data);
				$partai_id = $this->input->post('partai_id');
				foreach ($partai_id as $key => $partai_id) {
					$this->m_pasangancalon->edit_PP($id_pasangancalon,$partai_id,$user_id);
        }
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h5><i class="icon fas fa-check"></i> Data berhasil di edit!</h5></div>');
                    redirect('admin/pasangan_calon', 'refresh');
      }

 }
   $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Edit Data Pasangan Calon',
      'partai'  => $this->m_partai->get_partai(),
      'logomaskot_user' => $this->m_logomaskot->logomaskot_user(),
      'pasangancalon' => $this->m_pasangancalon->lists(),
      'pasangancalon' =>$this->m_pasangancalon->detail3($id_pasangancalon),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'isi' => 'admin/pasangancalon/edit'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
    }

}
/* End of file Pasangan_calon.php */