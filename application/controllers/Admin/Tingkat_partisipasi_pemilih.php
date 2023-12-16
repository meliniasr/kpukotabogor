<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tingkat_partisipasi_pemilih extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('m_barchart_tingkatpartisipasi');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Tingkat Partisipasi Pemilih Dalam Pemilu Presiden Wakil Presiden',
      'barchart_tingkatpartisipasi' => $this->m_barchart_tingkatpartisipasi->lists(),
      'barchart_tingkatpartisipasi_user' => $this->m_barchart_tingkatpartisipasi->barchart_partisipasi_user(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'rekapprovinsi_user' => $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user(),
      'isi' => 'admin/barchart_partisipasi/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data(){

   $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('suarasah_tdksah_kotabogor', 'Jumlah Akhir Tidak Memilih di Kota Bogor', 'trim|required');
		$this->form_validation->set_rules('suarasah_tdksah_provinsi', 'Jumlah Akhir Tidak Memilih di Provinsi Jawa Barat', 'trim|required');
		$this->form_validation->set_rules('suarasah_tdksah_nasional', 'Jumlah Akhir Tidak Memilih di Tingkat Nasional', 'trim|required');
    $this->form_validation->set_rules('tdkhakpemilih_kotabogor', 'Jumlah Akhir Memilih di Kota Bogor', 'trim|required');
		$this->form_validation->set_rules('tdkhakpemilih_provinsi', 'Jumlah Akhir Memilih di Provinsi Jawa Barat', 'trim|required');
		$this->form_validation->set_rules('tdkhakpemilih_nasional', 'Jumlah Akhir Memilih di Tingkat Nasional', 'trim|required');

		$this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {

      $data = [
            'tahun' => $this->input->post('tahun'),
						'suarasah_tdksah_kotabogor' => $this->input->post('suarasah_tdksah_kotabogor'),
						'suarasah_tdksah_provinsi' => $this->input->post('suarasah_tdksah_provinsi'),
						'suarasah_tdksah_nasional' => $this->input->post('suarasah_tdksah_nasional'),
						'tdkhakpemilih_kotabogor' => $this->input->post('tdkhakpemilih_kotabogor'),
						'tdkhakpemilih_provinsi' => $this->input->post('tdkhakpemilih_provinsi'),
						'tdkhakpemilih_nasional' => $this->input->post('tdkhakpemilih_nasional'),
						'user_id' => $this->session->userdata('id_user'),
      ];

          $this->m_barchart_tingkatpartisipasi->add($data);
          $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil di simpan</div>');
          redirect('admin/tingkat_partisipasi_pemilih');
        }
				  $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Tambah Data tingkat Partisipasi Pemilih Dalam Pemilu Presiden Wakil Presiden',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'rekapprovinsi_user' => $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user(),
                                  'isi' => 'admin/barchart_partisipasi/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

      }

public function hapus($id){
    $data= array(
      'id' =>$id,
    );
    $this->m_barchart_tingkatpartisipasi->delete($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
    redirect('admin/tingkat_partisipasi_pemilih');
  }


}

/* End of file Tingkat_partisipasi_pemilih.php */