<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perolehan_suarasah_provinsi extends CI_Controller {

  public function __construct()
{
  parent::__construct();
  $this->load->model('m_piechart_provinsi');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Perolehan Suara Sah Pasangan Calon di Provinsi Jawa Barat',
      'piechartprovinsi' => $this->m_piechart_provinsi->lists(),
      'piechartprovinsi_user' => $this->m_piechart_provinsi->piechartprovinsi_user(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'rekapprovinsi_user' => $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user(),
      'isi' => 'admin/piechartprovinsi/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data(){

   $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
	 $this->form_validation->set_rules('nama_capres_satu', 'Nama Pasangan Calon 1', 'trim|required');
	 $this->form_validation->set_rules('nama_capres_dua', 'Nama Pasangan Calon 2', 'trim|required');
	 $this->form_validation->set_rules('rincian_provinsi_satu', 'Jumlah Rincian di Provinsi Paslon 1', 'trim|required');
	 $this->form_validation->set_rules('rincian_persen_provinsi_satu', 'Jumlah Persen Rincian di Provinsi Paslon 1', 'trim|required');
	 $this->form_validation->set_rules('rincian_provinsi_dua', 'Jumlah Rincian di Provinsi Paslon 2', 'trim|required');
	 $this->form_validation->set_rules('rincian_persen_provinsi_dua', 'Jumlah Persen Rincian di Provinsi Paslon 2', 'trim|required');

   $this->form_validation->set_message('required', '{field} Harus di isi');
   $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {

      $data = [
            'tahun' => $this->input->post('tahun'),
						'nama_capres_satu' => $this->input->post('nama_capres_satu'),
						'nama_capres_dua' => $this->input->post('nama_capres_dua'),
						'rincian_provinsi_satu' => $this->input->post('rincian_provinsi_satu'),
						'rincian_persen_provinsi_satu' => $this->input->post('rincian_persen_provinsi_satu'),
						'rincian_provinsi_dua' => $this->input->post('rincian_provinsi_dua'),
						'rincian_persen_provinsi_dua' => $this->input->post('rincian_persen_provinsi_dua'),
						'user_id' => $this->session->userdata('id_user'),
      ];

          $this->m_piechart_provinsi->add($data);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
          redirect('admin/perolehan_suarasah_provinsi');
        }
				  $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Tambah Data Perolehan Suara Sah Pasangan Calon di Provinsi Jawa Barat',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'rekapprovinsi_user' => $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user(),
                                  'isi' => 'admin/piechartprovinsi/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

      }

      public function hapus($id){
    $data= array(
      'id' =>$id,
    );
    $this->m_piechart_provinsi->delete($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
    redirect('admin/perolehan_suarasah_provinsi');
  }
}

/* End of file Perolehan_suarasah_provinsi.php */