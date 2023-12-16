<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_suara extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('m_barchart_suratsuara');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Surat Suara Sah dan Tidak Sah Dalam Pemilu Presiden Wakil Presiden',
      'barchart_suratsuara' => $this->m_barchart_suratsuara->lists(),
      'barchart_suratsuara_user' => $this->m_barchart_suratsuara->barchart_suratsuara_user(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'rekapprovinsi_user' => $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user(),
      'isi' => 'admin/barchart_suratsuara/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data(){

  $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
	  $this->form_validation->set_rules('suarasah_kotabogor', 'Jumlah Akhir Suara Sah Kota Bogor', 'trim|required');
    $this->form_validation->set_rules('suarasah_provinsi', 'Jumlah Akhir Suara Sah Provinsi', 'trim|required');
    $this->form_validation->set_rules('suarasah_nasional', 'Jumlah Akhir Suara Sah Tingkat Nasional', 'trim|required');
    $this->form_validation->set_rules('suaratdksah_kotabogor', 'Jumlah Akhir Suara Tidak Sah Kota Bogor', 'trim|required');
    $this->form_validation->set_rules('suaratdksah_provinsi', 'Jumlah Akhir Suara Tidak Sah Provinsi', 'trim|required');
    $this->form_validation->set_rules('suaratdksah_nasional', 'Jumlah Akhir Suara Tidak Sah Tingkat Nasional', 'trim|required');


    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    if ($this->form_validation->run() == TRUE) {

      $data = [
            'tahun' => $this->input->post('tahun'),
						'suarasah_kotabogor' => $this->input->post('suarasah_kotabogor'),
            'suarasah_provinsi' => $this->input->post('suarasah_provinsi'),
            'suarasah_nasional' => $this->input->post('suarasah_nasional'),
            'suaratdksah_kotabogor' => $this->input->post('suaratdksah_kotabogor'),
            'suaratdksah_provinsi' => $this->input->post('suaratdksah_provinsi'),
            'suaratdksah_nasional' => $this->input->post('suaratdksah_nasional'),
						'user_id' => $this->session->userdata('id_user'),
      ];

          $this->m_barchart_suratsuara->add($data);
          $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil di simpan</div>');
          redirect('admin/surat_suara');
        }
				  $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Tambah Data Surat Suara Sah dan Tidak Sah Dalam Pemilu Presiden Wakil Presiden',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'rekapprovinsi_user' => $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user(),
                                  'isi' => 'admin/barchart_suratsuara/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

      }

public function hapus($id){
    $data= array(
      'id' =>$id,
    );
    $this->m_barchart_suratsuara->delete($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
    redirect('admin/surat_suara');
  }

}

/* End of file Surat_suara.php */