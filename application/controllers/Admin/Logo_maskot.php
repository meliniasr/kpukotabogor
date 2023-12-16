<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logo_maskot extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('m_logomaskot');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Logo & Maskot',
      'logomaskot' => $this->m_logomaskot->lists(),
      'logomaskot_user' => $this->m_logomaskot->logomaskot_user(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
       'isi' => 'admin/logomaskot/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data()
  {
    $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jadwal', 'Jadwal Pilpres', 'required', array('required'=>'%s Harus diisi!'));

      if ($this->form_validation->run() == TRUE)
    {
      $desain_suratsuara      = $_FILES['desain_suratsuara']['name'];
      if ($desain_suratsuara == "") {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['max_size']      = 2000;
        $this->upload->initialize($config);

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('desain_suratsuara')) {
          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Jadwal Pilpres',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/logomaskot/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

        } else {
          $desain_suratsuara = $this->upload->data('file_name');
        }
      }

     $foto_paslon_satu      = $_FILES['foto_paslon_satu']['name'];
      if ($foto_paslon_satu == "") {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['max_size']      = 2000;


        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_paslon_satu')) {
          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Jadwal Pilpres',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/logomaskot/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

        } else {
          $foto_paslon_satu = $this->upload->data('file_name');
        }
      }

       $foto_paslon_dua      = $_FILES['foto_paslon_dua']['name'];
      if ($foto_paslon_dua == "") {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['max_size']      = 2000;


        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_paslon_dua')) {
          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Jadwal Pilpres',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/logomaskot/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

        } else {
          $foto_paslon_dua = $this->upload->data('file_name');
        }
      }

      $gambar_logo      = $_FILES['gambar_logo']['name'];
      if ($gambar_logo == "") {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['max_size']      = 2000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar_logo')) {
          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Jadwal Pilpres',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/logomaskot/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

        } else {
          $gambar_logo = $this->upload->data('file_name');
        }
      }

      $gambar_maskot      = $_FILES['gambar_maskot']['name'];
      if ($gambar_maskot == "") {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['max_size']      = 2000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar_maskot')) {
          $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Tambah Data Logo & Maskot',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/logomaskot/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

        } else {
          $gambar_maskot = $this->upload->data('file_name');
        }
      }

      $data = array(
            'tahun' => $this->input->post('tahun'),
						'jadwal' => $this->input->post('jadwal'),
            'desain_suratsuara' => $desain_suratsuara,
						'foto_paslon_satu' => $foto_paslon_satu,
            'foto_paslon_dua' => $foto_paslon_dua,
            'gambar_logo' => $gambar_logo,
            'gambar_maskot' => $gambar_maskot,
            'user_id' => $this->session->userdata('id_user'),
          );

          $this->m_logomaskot->add($data, 'logomaskot');
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h5><i class="icon fas fa-check"></i> Data berhasil di simpan!</h5></div>');
          redirect('admin/logo_maskot');
        }

    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Form Tambah Data Logo & Maskot',
      'logomaskot' => $this->m_logomaskot->lists(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'isi' => 'admin/logomaskot/tambah'
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);

  }

   public function detail_data($id)
			 {
       $data['title'] = 'KPU KOTA BOGOR';
       $data['title2'] = 'Detail Data Logo & Maskot';
			 $this->load->model('m_logomaskot');
       $detail = $this->m_logomaskot->detail2($id);
       $data['detail'] = $detail;
       $data['isi'] = 'admin/logomaskot/detail';
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

  	function edit($id)
  {
		$data['title'] ="Logo & Maskot";
	  $data['title2'] ="From Edit Data";
    $data['logomaskot'] = $this->m_logomaskot->get_id_logomaskot($id);
    if ($data['logomaskot']) {
      $data['logomaskot'] = $this->m_logomaskot->get_id_logomaskot($id);
      $data['jadwal_user'] = $this->m_jadwal->jadwal_user();
      $data['isi'] = 'admin/logomaskot/edit';
     $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Data tidak ada.</div>');
      redirect('admin/logo_maskot', 'refresh');
    }

  }

  function update($id)
  {
		$foto_paslon_satu      = $_FILES['foto_paslon_satu']['name'];
      if ($foto_paslon_satu == '') {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				 $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_paslon_satu')) {
           $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Jadwal Pilpres',
                                  'error' => $this->upload->display_errors(),
                                  'logomaskot' => $this->m_logomaskot->get_id_logomaskot($id),
                                  'isi' => 'admin/logomaskot/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
        } else {
          $foto_paslon_satu = $this->upload->data("file_name");
        }
      }

      $foto_paslon_dua      = $_FILES['foto_paslon_dua']['name'];
      if ($foto_paslon_dua == '') {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				 $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_paslon_dua')) {
                    $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Logo & Maskot',
                                  'error' => $this->upload->display_errors(),
                                  'logomaskot' => $this->m_logomaskot->get_id_logomaskot($id),
                                  'isi' => 'admin/logomaskot/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
        } else {
          $foto_paslon_dua = $this->upload->data("file_name");
        }
      }

      $desain_suratsuara      = $_FILES['desain_suratsuara']['name'];
      if ($desain_suratsuara == '') {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				 $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('desain_suratsuara')) {
           $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Logo & Maskot',
                                  'error' => $this->upload->display_errors(),
                                  'logomaskot' => $this->m_logomaskot->get_id_logomaskot($id),
                                  'isi' => 'admin/logomaskot/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
        } else {
          $desain_suratsuara = $this->upload->data("file_name");
        }
      }

			$gambar_logo      = $_FILES['gambar_logo']['name'];
      if ($gambar_logo == '') {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				 $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar_logo')) {
           $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Logo & Maskot',
                                  'error' => $this->upload->display_errors(),
                                  'logomaskot' => $this->m_logomaskot->get_id_logomaskot($id),
                                  'isi' => 'admin/logomaskot/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
        } else {
          $gambar_logo = $this->upload->data("file_name");
        }
      }

			$gambar_maskot      = $_FILES['gambar_maskot']['name'];
      if ($gambar_maskot == '') {
      } else {
        $config['upload_path']   = './assets/upload/logomaskot/';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';
				 $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar_maskot')) {
           $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Logo & Maskot',
                                  'error' => $this->upload->display_errors(),
                                  'logomaskot' => $this->m_logomaskot->get_id_logomaskot($id),
                                  'isi' => 'admin/logomaskot/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);
        } else {
          $gambar_maskot = $this->upload->data("file_name");
        }
      }
    $data = [
            'tahun' => $this->input->post('tahun'),
						'jadwal' => $this->input->post('jadwal'),
            'desain_suratsuara' => $desain_suratsuara,
						'foto_paslon_satu' => $foto_paslon_satu,
            'foto_paslon_dua' => $foto_paslon_dua,
            'gambar_logo' => $gambar_logo,
            'gambar_maskot' => $gambar_maskot,
            'user_id' => $this->session->userdata('id_user'),
    ];

    $this->m_logomaskot->update($this->input->post('id_logomaskot'), $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-info">Data berhasil di update</div>');
    redirect('admin/logo_maskot', 'refresh');
  }


public function hapus($id){
  $delete = $this->m_logomaskot->get_id_logomaskot($id);

    if ($delete) {
      $this->m_logomaskot->delete($id);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
      redirect('admin/logo_maskot', 'refresh');
    } else {
       $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada!</p></div>');
      redirect('admin/logo_maskot', 'refresh');
    }
}

public function pdf($id)
	{
		$data['logomaskot_user'] = $this->m_logomaskot->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['logomaskot_user'] = $this->m_logomaskot->logomaskot_user();
		 $this->load->view('pdf/logomaskot', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Logo & Maskot';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Data Logo & Maskot - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

				$html = $this->load->view('pdf/logomaskot', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }



}


/* End of file Logo_maskot.php */