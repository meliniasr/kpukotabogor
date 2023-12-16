<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekaphasilsuarasah_provinsi extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('m_rekaphasilsuarasah_provinsi');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Provinsi Jawa Barat',
      'rekapprovinsi' => $this->m_rekaphasilsuarasah_provinsi->lists(),
      'rekapprovinsi_user' => $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
       'isi' => 'admin/rekapprovinsi/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data(){

    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('nama_capres_satu', 'Nama Pasangan Calon', 'trim|required');
		$this->form_validation->set_rules('nama_capres_dua', 'Nama Pasangan Calon', 'trim|required');
		$this->form_validation->set_rules('rincian_kotabogor_satu', 'Rincian Kota Bogor 1', 'trim|required');
		$this->form_validation->set_rules('rincian_persen_kotabogor_satu', 'Rincian Kota Bogor 1', 'trim|required');
		$this->form_validation->set_rules('rincian_provinsi_satu', 'Rincian Persen Kota Bogor 1', 'trim|required');
		$this->form_validation->set_rules('rincian_persen_provinsi_satu', 'Rincian Persen Provinsi 1', 'trim|required');
		$this->form_validation->set_rules('rincian_nasional_satu', 'Rincian Nasional 1', 'trim|required');
		$this->form_validation->set_rules('rincian_persen_nasional_satu', 'Rincian Persen Nasioanl 1', 'trim|required');

		$this->form_validation->set_rules('rincian_kotabogor_dua', 'Rincian Kota Bogor 2', 'trim|required');
		$this->form_validation->set_rules('rincian_persen_kotabogor_satu', 'Rincian Kota Bogor 1', 'trim|required');
		$this->form_validation->set_rules('rincian_provinsi_dua', 'Rincian Persen Kota Bogor 2', 'trim|required');
		$this->form_validation->set_rules('rincian_persen_provinsi_dua', 'Rincian Persen Provinsi 2', 'trim|required');
		$this->form_validation->set_rules('rincian_nasional_dua', 'Rincian Nasional 2', 'trim|required');
		$this->form_validation->set_rules('rincian_persen_nasional_dua', 'Rincian Persen Nasioanl 2', 'trim|required');

		$this->form_validation->set_rules('suarasah_kotabogor', 'Suara Sah Kota Bogor', 'trim|required');
		$this->form_validation->set_rules('suarasah_provinsi', 'Suara Sah Provinsi', 'trim|required');
		$this->form_validation->set_rules('suarasah_nasional', 'Suara Sah Nasional', 'trim|required');

		$this->form_validation->set_rules('suaratdksah_kotabogor', 'Suara Tidak Sah Kota Bogor', 'trim|required');
		$this->form_validation->set_rules('suaratdksah_provinsi', 'Suara Tidak Sah Provinsi', 'trim|required');
		$this->form_validation->set_rules('suaratdksah_nasional', 'Suara Tidak Sah Nasional', 'trim|required');

		$this->form_validation->set_rules('suarasah_tdksah_kotabogor', 'Suara Sah dan Tidak Sah Kota Bogor', 'trim|required');
		$this->form_validation->set_rules('suarasah_tdksah_provinsi', 'Suara Sah dan Tidak Sah Provinsi', 'trim|required');
		$this->form_validation->set_rules('suarasah_tdksah_nasional', 'Suara Sah dan Tidak Sah Nasional', 'trim|required');

		$this->form_validation->set_rules('hakpemilih_kotabogor', 'Hak Pemilih Kota Bogor', 'trim|required');
		$this->form_validation->set_rules('hakpemilih_provinsi', 'Hak Pemilih Provinsi', 'trim|required');
		$this->form_validation->set_rules('hakpemilih_nasional', 'Hak Pemilih Nasional', 'trim|required');

		$this->form_validation->set_rules('tdkhakpemilih_kotabogor', 'Tidak Hak Pemilih Kota Bogor', 'trim|required');
		$this->form_validation->set_rules('tdkhakpemilih_provinsi', 'Tidak Hak Pemilih Provinsi', 'trim|required');
		$this->form_validation->set_rules('tdkhakpemilih_nasional', 'Tidak Hak Pemilih Nasional', 'trim|required');
		$this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

   if ($this->form_validation->run() == TRUE) {

      $data = [
           'tahun' => $this->input->post('tahun'),
						'capres_satu' =>  $this->input->post('capres_satu'),
						'nama_capres_satu' => $this->input->post('nama_capres_satu'),
						'capres_dua' =>  $this->input->post('capres_dua'),
						'nama_capres_dua' => $this->input->post('nama_capres_dua'),
						'rincian_kotabogor_satu' => $this->input->post('rincian_kotabogor_satu'),
						'rincian_persen_kotabogor_satu' => $this->input->post('rincian_persen_kotabogor_satu'),
						'rincian_provinsi_satu' => $this->input->post('rincian_provinsi_satu'),
						'rincian_persen_provinsi_satu' => $this->input->post('rincian_persen_provinsi_satu'),
						'rincian_nasional_satu' => $this->input->post('rincian_nasional_satu'),
						'rincian_persen_nasional_satu' => $this->input->post('rincian_persen_nasional_satu'),
						'rincian_kotabogor_dua' => $this->input->post('rincian_kotabogor_dua'),
						'rincian_persen_kotabogor_dua' => $this->input->post('rincian_persen_kotabogor_dua'),
						'rincian_provinsi_dua' => $this->input->post('rincian_provinsi_dua'),
						'rincian_persen_provinsi_dua' => $this->input->post('rincian_persen_provinsi_dua'),
						'rincian_nasional_dua' => $this->input->post('rincian_nasional_dua'),
						'rincian_persen_nasional_dua' => $this->input->post('rincian_persen_nasional_dua'),
						'suarasah_kotabogor' => $this->input->post('suarasah_kotabogor'),
						'suarasah_provinsi' => $this->input->post('suarasah_provinsi'),
						'suarasah_nasional' => $this->input->post('suarasah_nasional'),
						'suaratdksah_kotabogor' => $this->input->post('suaratdksah_kotabogor'),
						'suaratdksah_provinsi' => $this->input->post('suaratdksah_provinsi'),
						'suaratdksah_nasional' => $this->input->post('suaratdksah_nasional'),
						'suarasah_tdksah_kotabogor' => $this->input->post('suarasah_tdksah_kotabogor'),
						'suarasah_tdksah_provinsi' => $this->input->post('suarasah_tdksah_provinsi'),
						'suarasah_tdksah_nasional' => $this->input->post('suarasah_tdksah_nasional'),
						'hakpemilih_kotabogor' => $this->input->post('hakpemilih_kotabogor'),
						'hakpemilih_provinsi' => $this->input->post('hakpemilih_provinsi'),
						'hakpemilih_nasional' => $this->input->post('hakpemilih_nasional'),
						'tdkhakpemilih_kotabogor' => $this->input->post('tdkhakpemilih_kotabogor'),
						'tdkhakpemilih_provinsi' => $this->input->post('tdkhakpemilih_provinsi'),
						'tdkhakpemilih_nasional' => $this->input->post('tdkhakpemilih_nasional'),
            'user_id' => $this->session->userdata('id_user'),

      ];

          $this->m_rekaphasilsuarasah_provinsi->add($data);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan! </p></div>');
          redirect('admin/rekaphasilsuarasah_provinsi');
        }
				  $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Tambah Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Provinsi Jawa Barat',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                        'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
                                  'isi' => 'admin/rekapprovinsi/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

      }

			public function pdf($id)
	{
		$data['rekapprovinsi_user'] = $this->m_rekaphasilsuarasah_provinsi->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['rekapprovinsi_user'] = $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user();
		 $this->load->view('pdf/rekapprovinsi', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Provinsi Jawa Barat';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Provinsi Jawa Barat - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

				$html = $this->load->view('pdf/rekapprovinsi', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}

/* End of file Rekaphasilsuarasah_provinsi.php */