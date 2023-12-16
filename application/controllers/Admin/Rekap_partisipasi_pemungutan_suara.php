<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap_partisipasi_pemungutan_suara extends CI_Controller {

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Rekapitulasi Data Pemilih Pada Pelaksanaan Pemungutan Suara',
      'datapemilih_dpt' => $this->m_datapemilih_dpt->get_datapemilih_dpt(),
		  'datapemilih_dptb' => $this->m_datapemilih_dptb->get_datapemilih_dptb(),
		  'datapemilih_dpk' => $this->m_datapemilih_dpk->get_datapemilih_dpk(),
		  'datapemilih_dpktb' => $this->m_datapemilih_dpktb->get_datapemilih_dpktb(),
		  'jumlahkeseluruhan_datapemilih' => $this->m_jumlahkeseluruhan_datapemilih->get_jk_datapemilih(),
		  'hakpilih_dpt' => $this->m_hakpilih_dpt->get_hakpilih_dpt(),
		  'hakpilih_dptb' => $this->m_hakpilih_dptb->get_hakpilih_dptb(),
		  'hakpilih_dpk' => $this->m_hakpilih_dpk->get_hakpilih_dpk(),
		  'hakpilih_dpktb' => $this->m_hakpilih_dpktb->get_hakpilih_dpktb(),
		  'jumlahkeseluruhan_hakpilih' => $this->m_jumlahkeseluruhan_hakpilih->get_jk_hakpilih(),

		  'datapemilihdpt_user' => $this->m_datapemilih_dpt->datapemilihdpt_user(),
		  'datapemilihdptb_user' => $this->m_datapemilih_dptb->datapemilihdptb_user(),
		  'datapemilihdpk_user' => $this->m_datapemilih_dpk->datapemilihdpk_user(),
		  'datapemilihdpktb_user' => $this->m_datapemilih_dpktb->datapemilihdpktb_user(),
      'jkdatapemilih_user' => $this->m_jumlahkeseluruhan_datapemilih->jkdatapemilih_user(),
		  'hakpilihdpt_user' => $this->m_hakpilih_dpt->hakpilihdpt_user(),
		  'hakpilihdptb_user' => $this->m_hakpilih_dptb->hakpilihdptb_user(),
		  'hakpilihdpk_user' => $this->m_hakpilih_dpk->hakpilihdpk_user(),
		  'hakpilihdpktb_user' => $this->m_hakpilih_dpktb->hakpilihdpktb_user(),
		  'jkhakpilih_user' => $this->m_jumlahkeseluruhan_hakpilih->jkhakpilih_user(),
      'rekappartisipasi_tps_user' => $this->m_rekappartisipasi_tps->rekappartisipasi_tps_user(),
			'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'isi' => 'admin/rekappartisipasi_pemungutansuara/view_datapemungutansuara'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

		//A. DATA PEMILIH DAN PENGGUNAAN HAK PILIH
//1. Data Pemilih DPT
	function tambah_datapemilih_dpt(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('dpt_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('dpt_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
				'dpt_bogorbarat_laki' => $this->input->post('dpt_bogorbarat_laki'),
				'dpt_bogorselatan_laki' => $this->input->post('dpt_bogorselatan_laki'),
				'dpt_bogortengah_laki' => $this->input->post('dpt_bogortengah_laki'),
				'dpt_bogortimur_laki' => $this->input->post('dpt_bogortimur_laki'),
				'dpt_bogorutara_laki' => $this->input->post('dpt_bogorutara_laki'),
				'dpt_tanahsareal_laki' => $this->input->post('dpt_tanahsareal_laki'),
				'dpt_laki_jumlahakhir' => $this->input->post('dpt_laki_jumlahakhir'),
			  'dpt_bogorbarat_perempuan' => $this->input->post('dpt_bogorbarat_perempuan'),
				'dpt_bogorselatan_perempuan' => $this->input->post('dpt_bogorselatan_perempuan'),
				'dpt_bogortengah_perempuan' => $this->input->post('dpt_bogortengah_perempuan'),
				'dpt_bogortimur_perempuan' => $this->input->post('dpt_bogortimur_perempuan'),
				'dpt_bogorutara_perempuan' => $this->input->post('dpt_bogorutara_perempuan'),
				'dpt_tanahsareal_perempuan' => $this->input->post('dpt_tanahsareal_perempuan'),
				'dpt_perempuan_jumlahakhir' => $this->input->post('dpt_perempuan_jumlahakhir'),
				'dpt_bogorbarat_jumlah' => $this->input->post('dpt_bogorbarat_jumlah'),
				'dpt_bogorselatan_jumlah' => $this->input->post('dpt_bogorselatan_jumlah'),
				'dpt_bogortengah_jumlah' => $this->input->post('dpt_bogortengah_jumlah'),
				'dpt_bogortimur_jumlah' => $this->input->post('dpt_bogortimur_jumlah'),
				'dpt_bogorutara_jumlah' => $this->input->post('dpt_bogorutara_jumlah'),
				'dpt_tanahsareal_jumlah' => $this->input->post('dpt_tanahsareal_jumlah'),
				'dpt_jumlah_akhir' => $this->input->post('dpt_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_datapemilih_dpt->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan! <p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data Pemilih terdaftar dalam Daftar Pemilih Tetap (DPT)',
	'error' => $this->upload->  display_errors(),
	'rekappartisipasi_tps_user' => $this->m_rekappartisipasi_tps->rekappartisipasi_tps_user(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_datapemilih_dpt'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

public function detail_datapemilihdpt($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Pemilih terdaftar dalam Daftar Pemilih Tetap (DPT)",
		'datapemilih_dpt' => $this->m_datapemilih_dpt->get_datapemilih_dpt('datapemilih_dpt'),
		 $this->load->model('m_datapemilih_dpt'),
    'detail' => $this->m_datapemilih_dpt->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_datapemilih_dpt'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

	function edit_datapemilihdpt($id){
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpt_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('dpt_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpt_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('dpt_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpt_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Pemilih terdaftar dalam Daftar Pemilih Tetap (DPT)',
                                  'error' => $this->upload->display_errors(),
																	'datapemilih_dpt' => $this->m_datapemilih_dpt->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_datapemilih_dpt'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_datapemilih_dpt' => $id,
        'tahun' => $this->input->post('tahun'),
				'dpt_bogorbarat_laki' => $this->input->post('dpt_bogorbarat_laki'),
				'dpt_bogorselatan_laki' => $this->input->post('dpt_bogorselatan_laki'),
				'dpt_bogortengah_laki' => $this->input->post('dpt_bogortengah_laki'),
				'dpt_bogortimur_laki' => $this->input->post('dpt_bogortimur_laki'),
				'dpt_bogorutara_laki' => $this->input->post('dpt_bogorutara_laki'),
				'dpt_tanahsareal_laki' => $this->input->post('dpt_tanahsareal_laki'),
				'dpt_laki_jumlahakhir' => $this->input->post('dpt_laki_jumlahakhir'),
			  'dpt_bogorbarat_perempuan' => $this->input->post('dpt_bogorbarat_perempuan'),
				'dpt_bogorselatan_perempuan' => $this->input->post('dpt_bogorselatan_perempuan'),
				'dpt_bogortengah_perempuan' => $this->input->post('dpt_bogortengah_perempuan'),
				'dpt_bogortimur_perempuan' => $this->input->post('dpt_bogortimur_perempuan'),
				'dpt_bogorutara_perempuan' => $this->input->post('dpt_bogorutara_perempuan'),
				'dpt_tanahsareal_perempuan' => $this->input->post('dpt_tanahsareal_perempuan'),
				'dpt_perempuan_jumlahakhir' => $this->input->post('dpt_perempuan_jumlahakhir'),
				'dpt_bogorbarat_jumlah' => $this->input->post('dpt_bogorbarat_jumlah'),
				'dpt_bogorselatan_jumlah' => $this->input->post('dpt_bogorselatan_jumlah'),
				'dpt_bogortengah_jumlah' => $this->input->post('dpt_bogortengah_jumlah'),
				'dpt_bogortimur_jumlah' => $this->input->post('dpt_bogortimur_jumlah'),
				'dpt_bogorutara_jumlah' => $this->input->post('dpt_bogorutara_jumlah'),
				'dpt_tanahsareal_jumlah' => $this->input->post('dpt_tanahsareal_jumlah'),
				'dpt_jumlah_akhir' => $this->input->post('dpt_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_datapemilih_dpt->update($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }

  }

	public function hapus_datapemilih_dpt($id){
    $delete = $this->m_datapemilih_dpt->get_id_datapemilih_dpt($id);

    if ($delete) {
      $this->m_datapemilih_dpt->delete($id);
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

//2. Data Pemilih DPTB
function tambah_datapemilih_dptb(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('dptb_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('dptb_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
				'dptb_bogorbarat_laki' => $this->input->post('dptb_bogorbarat_laki'),
				'dptb_bogorselatan_laki' => $this->input->post('dptb_bogorselatan_laki'),
				'dptb_bogortengah_laki' => $this->input->post('dptb_bogortengah_laki'),
				'dptb_bogortimur_laki' => $this->input->post('dptb_bogortimur_laki'),
				'dptb_bogorutara_laki' => $this->input->post('dptb_bogorutara_laki'),
				'dptb_tanahsareal_laki' => $this->input->post('dptb_tanahsareal_laki'),
				'dptb_laki_jumlahakhir' => $this->input->post('dptb_laki_jumlahakhir'),
			  'dptb_bogorbarat_perempuan' => $this->input->post('dptb_bogorbarat_perempuan'),
				'dptb_bogorselatan_perempuan' => $this->input->post('dptb_bogorselatan_perempuan'),
				'dptb_bogortengah_perempuan' => $this->input->post('dptb_bogortengah_perempuan'),
				'dptb_bogortimur_perempuan' => $this->input->post('dptb_bogortimur_perempuan'),
				'dptb_bogorutara_perempuan' => $this->input->post('dptb_bogorutara_perempuan'),
				'dptb_tanahsareal_perempuan' => $this->input->post('dptb_tanahsareal_perempuan'),
				'dptb_perempuan_jumlahakhir' => $this->input->post('dptb_perempuan_jumlahakhir'),
				'dptb_bogorbarat_jumlah' => $this->input->post('dptb_bogorbarat_jumlah'),
				'dptb_bogorselatan_jumlah' => $this->input->post('dptb_bogorselatan_jumlah'),
				'dptb_bogortengah_jumlah' => $this->input->post('dptb_bogortengah_jumlah'),
				'dptb_bogortimur_jumlah' => $this->input->post('dptb_bogortimur_jumlah'),
				'dptb_bogorutara_jumlah' => $this->input->post('dptb_bogorutara_jumlah'),
				'dptb_tanahsareal_jumlah' => $this->input->post('dptb_tanahsareal_jumlah'),
				'dptb_jumlah_akhir' => $this->input->post('dptb_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_datapemilih_dptb->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data Pemilih terdaftar dalam Daftar Pemilih Tambahan (DPTb)',
	'error' => $this->upload->  display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_datapemilih_dptb'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

	public function detail_datapemilihdptb($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Pemilih terdaftar dalam Daftar Pemilih Tambahan (DPTb)",
		'datapemilih_dptb' => $this->m_datapemilih_dptb->get_datapemilih_dptb('datapemilih_dptb'),
		 $this->load->model('m_datapemilih_dptb'),
    'detail' => $this->m_datapemilih_dptb->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_datapemilih_dptb'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

	function edit_datapemilihdptb($id){
		 $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dptb_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('dptb_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dptb_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('dptb_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('dptb_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_datapemilih_dptb' => $id,
        'tahun' => $this->input->post('tahun'),
				'dptb_bogorbarat_laki' => $this->input->post('dptb_bogorbarat_laki'),
				'dptb_bogorselatan_laki' => $this->input->post('dptb_bogorselatan_laki'),
				'dptb_bogortengah_laki' => $this->input->post('dptb_bogortengah_laki'),
				'dptb_bogortimur_laki' => $this->input->post('dptb_bogortimur_laki'),
				'dptb_bogorutara_laki' => $this->input->post('dptb_bogorutara_laki'),
				'dptb_tanahsareal_laki' => $this->input->post('dptb_tanahsareal_laki'),
				'dptb_laki_jumlahakhir' => $this->input->post('dptb_laki_jumlahakhir'),
			  'dptb_bogorbarat_perempuan' => $this->input->post('dptb_bogorbarat_perempuan'),
				'dptb_bogorselatan_perempuan' => $this->input->post('dptb_bogorselatan_perempuan'),
				'dptb_bogortengah_perempuan' => $this->input->post('dptb_bogortengah_perempuan'),
				'dptb_bogortimur_perempuan' => $this->input->post('dptb_bogortimur_perempuan'),
				'dptb_bogorutara_perempuan' => $this->input->post('dptb_bogorutara_perempuan'),
				'dptb_tanahsareal_perempuan' => $this->input->post('dptb_tanahsareal_perempuan'),
				'dptb_perempuan_jumlahakhir' => $this->input->post('dptb_perempuan_jumlahakhir'),
				'dptb_bogorbarat_jumlah' => $this->input->post('dptb_bogorbarat_jumlah'),
				'dptb_bogorselatan_jumlah' => $this->input->post('dptb_bogorselatan_jumlah'),
				'dptb_bogortengah_jumlah' => $this->input->post('dptb_bogortengah_jumlah'),
				'dptb_bogortimur_jumlah' => $this->input->post('dptb_bogortimur_jumlah'),
				'dptb_bogorutara_jumlah' => $this->input->post('dptb_bogorutara_jumlah'),
				'dptb_tanahsareal_jumlah' => $this->input->post('dptb_tanahsareal_jumlah'),
				'dptb_jumlah_akhir' => $this->input->post('dptb_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_datapemilih_dptb->update($this->input->post('id_datapemilih_dpt'),$data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }
 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Pemilih terdaftar dalam Daftar Pemilih Tambahan (DPTb)',
                                  'error' => $this->upload->display_errors(),
																	'datapemilih_dptb' => $this->m_datapemilih_dptb->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_datapemilih_dptb'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

  }

	public function hapus_datapemilih_dptb($id){
     $delete = $this->m_datapemilih_dptb->get_id_datapemilih_dptb($id);

    if ($delete) {
      $this->m_datapemilih_dptb->delete($id);
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

	//3. Data Pemilih DPK
function tambah_datapemilih_dpk(){
   $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('dpk_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('dpk_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
					'dpk_bogorbarat_laki' => $this->input->post('dpk_bogorbarat_laki'),
				'dpk_bogorselatan_laki' => $this->input->post('dpk_bogorselatan_laki'),
				'dpk_bogortengah_laki' => $this->input->post('dpk_bogortengah_laki'),
				'dpk_bogortimur_laki' => $this->input->post('dpk_bogortimur_laki'),
				'dpk_bogorutara_laki' => $this->input->post('dpk_bogorutara_laki'),
				'dpk_tanahsareal_laki' => $this->input->post('dpk_tanahsareal_laki'),
				'dpk_laki_jumlahakhir' => $this->input->post('dpk_laki_jumlahakhir'),
			'dpk_bogorbarat_perempuan' => $this->input->post('dpk_bogorbarat_perempuan'),
				'dpk_bogorselatan_perempuan' => $this->input->post('dpk_bogorselatan_perempuan'),
				'dpk_bogortengah_perempuan' => $this->input->post('dpk_bogortengah_perempuan'),
				'dpk_bogortimur_perempuan' => $this->input->post('dpk_bogortimur_perempuan'),
				'dpk_bogorutara_perempuan' => $this->input->post('dpk_bogorutara_perempuan'),
				'dpk_tanahsareal_perempuan' => $this->input->post('dpk_tanahsareal_perempuan'),
				'dpk_perempuan_jumlahakhir' => $this->input->post('dpk_perempuan_jumlahakhir'),
				'dpk_bogorbarat_jumlah' => $this->input->post('dpk_bogorbarat_jumlah'),
				'dpk_bogorselatan_jumlah' => $this->input->post('dpk_bogorselatan_jumlah'),
				'dpk_bogortengah_jumlah' => $this->input->post('dpk_bogortengah_jumlah'),
				'dpk_bogortimur_jumlah' => $this->input->post('dpk_bogortimur_jumlah'),
				'dpk_bogorutara_jumlah' => $this->input->post('dpk_bogorutara_jumlah'),
				'dpk_tanahsareal_jumlah' => $this->input->post('dpk_tanahsareal_jumlah'),
				'dpk_jumlah_akhir' => $this->input->post('dpk_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_datapemilih_dpk->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data Pemilih terdaftar dalam Daftar Pemilih Khusus (DPK)',
	'error' => $this->upload->  display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_datapemilih_dpk'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

	public function detail_datapemilihdpk($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Pemilih terdaftar dalam Daftar Pemilih Khusus (DPK)",
		'datapemilih_dpk' => $this->m_datapemilih_dpk->get_datapemilih_dpk('datapemilih_dpk'),
		 $this->load->model('m_datapemilih_dpk'),
    'detail' => $this->m_datapemilih_dpk->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_datapemilih_dpk'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

function edit_datapemilihdpk($id){
		 $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpk_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('dpk_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpk_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('dpk_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpk_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Pemilih terdaftar dalam Daftar Pemilih Khusus (DPK)',
                                  'error' => $this->upload->display_errors(),
																	'datapemilih_dpk' => $this->m_datapemilih_dpk->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_datapemilih_dpk'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

		if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_datapemilih_dpk' => $id,
        'tahun' => $this->input->post('tahun'),
				'dpk_bogorbarat_laki' => $this->input->post('dpk_bogorbarat_laki'),
				'dpk_bogorselatan_laki' => $this->input->post('dpk_bogorselatan_laki'),
				'dpk_bogortengah_laki' => $this->input->post('dpk_bogortengah_laki'),
				'dpk_bogortimur_laki' => $this->input->post('dpk_bogortimur_laki'),
				'dpk_bogorutara_laki' => $this->input->post('dpk_bogorutara_laki'),
				'dpk_tanahsareal_laki' => $this->input->post('dpk_tanahsareal_laki'),
				'dpk_laki_jumlahakhir' => $this->input->post('dpk_laki_jumlahakhir'),
			'dpk_bogorbarat_perempuan' => $this->input->post('dpk_bogorbarat_perempuan'),
				'dpk_bogorselatan_perempuan' => $this->input->post('dpk_bogorselatan_perempuan'),
				'dpk_bogortengah_perempuan' => $this->input->post('dpk_bogortengah_perempuan'),
				'dpk_bogortimur_perempuan' => $this->input->post('dpk_bogortimur_perempuan'),
				'dpk_bogorutara_perempuan' => $this->input->post('dpk_bogorutara_perempuan'),
				'dpk_tanahsareal_perempuan' => $this->input->post('dpk_tanahsareal_perempuan'),
				'dpk_perempuan_jumlahakhir' => $this->input->post('dpk_perempuan_jumlahakhir'),
				'dpk_bogorbarat_jumlah' => $this->input->post('dpk_bogorbarat_jumlah'),
				'dpk_bogorselatan_jumlah' => $this->input->post('dpk_bogorselatan_jumlah'),
				'dpk_bogortengah_jumlah' => $this->input->post('dpk_bogortengah_jumlah'),
				'dpk_bogortimur_jumlah' => $this->input->post('dpk_bogortimur_jumlah'),
				'dpk_bogorutara_jumlah' => $this->input->post('dpk_bogorutara_jumlah'),
				'dpk_tanahsareal_jumlah' => $this->input->post('dpk_tanahsareal_jumlah'),
				'dpk_jumlah_akhir' => $this->input->post('dpk_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_datapemilih_dpk->update($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }
  }

public function hapus_datapemilih_dpk($id){
   $delete = $this->m_datapemilih_dpk->get_id_datapemilih_dpk($id);

    if ($delete) {
      $this->m_datapemilih_dpk->delete($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

//4. Data Pemilih DPKTb
	function tambah_datapemilih_dpktb(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('dpktb_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('dpktb_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
				'dpktb_bogorbarat_laki' => $this->input->post('dpktb_bogorbarat_laki'),
				'dpktb_bogorselatan_laki' => $this->input->post('dpktb_bogorselatan_laki'),
				'dpktb_bogortengah_laki' => $this->input->post('dpktb_bogortengah_laki'),
				'dpktb_bogortimur_laki' => $this->input->post('dpktb_bogortimur_laki'),
				'dpktb_bogorutara_laki' => $this->input->post('dpktb_bogorutara_laki'),
				'dpktb_tanahsareal_laki' => $this->input->post('dpktb_tanahsareal_laki'),
				'dpktb_laki_jumlahakhir' => $this->input->post('dpktb_laki_jumlahakhir'),
			  'dpktb_bogorbarat_perempuan' => $this->input->post('dpktb_bogorbarat_perempuan'),
				'dpktb_bogorselatan_perempuan' => $this->input->post('dpktb_bogorselatan_perempuan'),
				'dpktb_bogortengah_perempuan' => $this->input->post('dpktb_bogortengah_perempuan'),
				'dpktb_bogortimur_perempuan' => $this->input->post('dpktb_bogortimur_perempuan'),
				'dpktb_bogorutara_perempuan' => $this->input->post('dpktb_bogorutara_perempuan'),
				'dpktb_tanahsareal_perempuan' => $this->input->post('dpktb_tanahsareal_perempuan'),
				'dpktb_perempuan_jumlahakhir' => $this->input->post('dpktb_perempuan_jumlahakhir'),
				'dpktb_bogorbarat_jumlah' => $this->input->post('dpktb_bogorbarat_jumlah'),
				'dpktb_bogorselatan_jumlah' => $this->input->post('dpktb_bogorselatan_jumlah'),
				'dpktb_bogortengah_jumlah' => $this->input->post('dpktb_bogortengah_jumlah'),
				'dpktb_bogortimur_jumlah' => $this->input->post('dpktb_bogortimur_jumlah'),
				'dpktb_bogorutara_jumlah' => $this->input->post('dpktb_bogorutara_jumlah'),
				'dpktb_tanahsareal_jumlah' => $this->input->post('dpktb_tanahsareal_jumlah'),
				'dpktb_jumlah_akhir' => $this->input->post('dpktb_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_datapemilih_dpktb->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data Pemilih Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor',
	'error' => $this->upload->  display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_datapemilih_dpktb'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

	public function detail_datapemilihdpktb($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Pemilih Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor",
		'datapemilih_dpktb' => $this->m_datapemilih_dpktb->get_datapemilih_dpktb('datapemilih_dpktb'),
		 $this->load->model('m_datapemilih_dpktb'),
    'detail' => $this->m_datapemilih_dpktb->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_datapemilih_dpktb'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

		function edit_datapemilihdpktb($id){
		  $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('dpktb_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('dpktb_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('dpktb_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('dpktb_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('dpktb_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Pemilih Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor',
                                  'error' => $this->upload->display_errors(),
																	'datapemilih_dpktb' => $this->m_datapemilih_dpktb->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_datapemilih_dpktb'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_datapemilih_dpktb' => $id,
        'tahun' => $this->input->post('tahun'),
			 'dpktb_bogorbarat_laki' => $this->input->post('dpktb_bogorbarat_laki'),
				'dpktb_bogorselatan_laki' => $this->input->post('dpktb_bogorselatan_laki'),
				'dpktb_bogortengah_laki' => $this->input->post('dpktb_bogortengah_laki'),
				'dpktb_bogortimur_laki' => $this->input->post('dpktb_bogortimur_laki'),
				'dpktb_bogorutara_laki' => $this->input->post('dpktb_bogorutara_laki'),
				'dpktb_tanahsareal_laki' => $this->input->post('dpktb_tanahsareal_laki'),
				'dpktb_laki_jumlahakhir' => $this->input->post('dpktb_laki_jumlahakhir'),
			'dpktb_bogorbarat_perempuan' => $this->input->post('dpktb_bogorbarat_perempuan'),
				'dpktb_bogorselatan_perempuan' => $this->input->post('dpktb_bogorselatan_perempuan'),
				'dpktb_bogortengah_perempuan' => $this->input->post('dpktb_bogortengah_perempuan'),
				'dpktb_bogortimur_perempuan' => $this->input->post('dpktb_bogortimur_perempuan'),
				'dpktb_bogorutara_perempuan' => $this->input->post('dpktb_bogorutara_perempuan'),
				'dpktb_tanahsareal_perempuan' => $this->input->post('dpktb_tanahsareal_perempuan'),
				'dpktb_perempuan_jumlahakhir' => $this->input->post('dpktb_perempuan_jumlahakhir'),
				'dpktb_bogorbarat_jumlah' => $this->input->post('dpktb_bogorbarat_jumlah'),
				'dpktb_bogorselatan_jumlah' => $this->input->post('dpktb_bogorselatan_jumlah'),
				'dpktb_bogortengah_jumlah' => $this->input->post('dpktb_bogortengah_jumlah'),
				'dpktb_bogortimur_jumlah' => $this->input->post('dpktb_bogortimur_jumlah'),
				'dpktb_bogorutara_jumlah' => $this->input->post('dpktb_bogorutara_jumlah'),
				'dpktb_tanahsareal_jumlah' => $this->input->post('dpktb_tanahsareal_jumlah'),
				'dpktb_jumlah_akhir' => $this->input->post('dpktb_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
    ];
    $this->m_datapemilih_dpktb->update($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }

  }

public function hapus_datapemilih_dpktb($id){
    $delete = $this->m_datapemilih_dpktb->get_id_datapemilih_dpktb($id);

    if ($delete) {
      $this->m_datapemilih_dpktb->delete($id);
     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

	//5. Jumlah Pemilih
	function tambah_jumlahkeseluruhan_datapemilih(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('jk_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('jk_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('jk_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
				'jk_bogorbarat_laki' => $this->input->post('jk_bogorbarat_laki'),
				'jk_bogorselatan_laki' => $this->input->post('jk_bogorselatan_laki'),
				'jk_bogortengah_laki' => $this->input->post('jk_bogortengah_laki'),
				'jk_bogortimur_laki' => $this->input->post('jk_bogortimur_laki'),
				'jk_bogorutara_laki' => $this->input->post('jk_bogorutara_laki'),
				'jk_tanahsareal_laki' => $this->input->post('jk_tanahsareal_laki'),
				'jk_laki_jumlahakhir' => $this->input->post('jk_laki_jumlahakhir'),
			  'jk_bogorbarat_perempuan' => $this->input->post('jk_bogorbarat_perempuan'),
				'jk_bogorselatan_perempuan' => $this->input->post('jk_bogorselatan_perempuan'),
				'jk_bogortengah_perempuan' => $this->input->post('jk_bogortengah_perempuan'),
				'jk_bogortimur_perempuan' => $this->input->post('jk_bogortimur_perempuan'),
				'jk_bogorutara_perempuan' => $this->input->post('jk_bogorutara_perempuan'),
				'jk_tanahsareal_perempuan' => $this->input->post('jk_tanahsareal_perempuan'),
				'jk_perempuan_jumlahakhir' => $this->input->post('jk_perempuan_jumlahakhir'),
				'jk_bogorbarat_jumlah' => $this->input->post('jk_bogorbarat_jumlah'),
				'jk_bogorselatan_jumlah' => $this->input->post('jk_bogorselatan_jumlah'),
				'jk_bogortengah_jumlah' => $this->input->post('jk_bogortengah_jumlah'),
				'jk_bogortimur_jumlah' => $this->input->post('jk_bogortimur_jumlah'),
				'jk_bogorutara_jumlah' => $this->input->post('jk_bogorutara_jumlah'),
				'jk_tanahsareal_jumlah' => $this->input->post('jk_tanahsareal_jumlah'),
				'jk_jumlah_akhir' => $this->input->post('jk_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_jumlahkeseluruhan_datapemilih->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data Jumlah Pemilih (1+2+3+4)',
	'error' => $this->upload->  display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_jumlahkeseluruhan_datapemilih'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

public function detail_jumlahkeseluruhan_datapemilih($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Jumlah Pemilih (1+2+3+4)",
		'jumlahkeseluruhan_datapemilih' =>  $this->m_jumlahkeseluruhan_datapemilih->get_jk_datapemilih('jumlahkeseluruhan_datapemilih'),
		 $this->load->model('m_jumlahkeseluruhan_datapemilih'),
    'detail' => $this->m_jumlahkeseluruhan_datapemilih->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_jumlahkeseluruhan_datapemilih'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

function edit_jumlahkeseluruhan_datapemilih($id){
		 $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('jk_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('jk_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('jk_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('jk_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('jk_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('jk_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Jumlah Pemilih (1+2+3+4)',
                                  'error' => $this->upload->display_errors(),
																	'jumlahkeseluruhan_datapemilih' => $this->m_jumlahkeseluruhan_datapemilih->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_jumlahkeseluruhan_datapemilih'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_jk_datapemilih' => $id,
        'tahun' => $this->input->post('tahun'),
				'jk_bogorbarat_laki' => $this->input->post('jk_bogorbarat_laki'),
				'jk_bogorselatan_laki' => $this->input->post('jk_bogorselatan_laki'),
				'jk_bogortengah_laki' => $this->input->post('jk_bogortengah_laki'),
				'jk_bogortimur_laki' => $this->input->post('jk_bogortimur_laki'),
				'jk_bogorutara_laki' => $this->input->post('jk_bogorutara_laki'),
				'jk_tanahsareal_laki' => $this->input->post('jk_tanahsareal_laki'),
				'jk_laki_jumlahakhir' => $this->input->post('jk_laki_jumlahakhir'),
			  'jk_bogorbarat_perempuan' => $this->input->post('jk_bogorbarat_perempuan'),
				'jk_bogorselatan_perempuan' => $this->input->post('jk_bogorselatan_perempuan'),
				'jk_bogortengah_perempuan' => $this->input->post('jk_bogortengah_perempuan'),
				'jk_bogortimur_perempuan' => $this->input->post('jk_bogortimur_perempuan'),
				'jk_bogorutara_perempuan' => $this->input->post('jk_bogorutara_perempuan'),
				'jk_tanahsareal_perempuan' => $this->input->post('jk_tanahsareal_perempuan'),
				'jk_perempuan_jumlahakhir' => $this->input->post('jk_perempuan_jumlahakhir'),
				'jk_bogorbarat_jumlah' => $this->input->post('jk_bogorbarat_jumlah'),
				'jk_bogorselatan_jumlah' => $this->input->post('jk_bogorselatan_jumlah'),
				'jk_bogortengah_jumlah' => $this->input->post('jk_bogortengah_jumlah'),
				'jk_bogortimur_jumlah' => $this->input->post('jk_bogortimur_jumlah'),
				'jk_bogorutara_jumlah' => $this->input->post('jk_bogorutara_jumlah'),
				'jk_tanahsareal_jumlah' => $this->input->post('jk_tanahsareal_jumlah'),
				'jk_jumlah_akhir' => $this->input->post('jk_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_jumlahkeseluruhan_datapemilih->update($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }

  }

		public function hapus_jumlahkeseluruhan_datapemilih($id){
  $delete = $this->m_jumlahkeseluruhan_datapemilih->get_id_jk_datapemilih($id);

    if ($delete) {
      $this->m_jumlahkeseluruhan_datapemilih->delete($id);
     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

//B. PENGGUNA HAK PILIH
//1. HAK PILIH DPT
function tambah_hakpilih_dpt(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpt_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpt_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
				'hakpilih_dpt_bogorbarat_laki' => $this->input->post('hakpilih_dpt_bogorbarat_laki'),
				'hakpilih_dpt_bogorselatan_laki' => $this->input->post('hakpilih_dpt_bogorselatan_laki'),
				'hakpilih_dpt_bogortengah_laki' => $this->input->post('hakpilih_dpt_bogortengah_laki'),
				'hakpilih_dpt_bogortimur_laki' => $this->input->post('hakpilih_dpt_bogortimur_laki'),
				'hakpilih_dpt_bogorutara_laki' => $this->input->post('hakpilih_dpt_bogorutara_laki'),
				'hakpilih_dpt_tanahsareal_laki' => $this->input->post('hakpilih_dpt_tanahsareal_laki'),
				'hakpilih_dpt_laki_jumlahakhir' => $this->input->post('hakpilih_dpt_laki_jumlahakhir'),
			'hakpilih_dpt_bogorbarat_perempuan' => $this->input->post('hakpilih_dpt_bogorbarat_perempuan'),
				'hakpilih_dpt_bogorselatan_perempuan' => $this->input->post('hakpilih_dpt_bogorselatan_perempuan'),
				'hakpilih_dpt_bogortengah_perempuan' => $this->input->post('hakpilih_dpt_bogortengah_perempuan'),
				'hakpilih_dpt_bogortimur_perempuan' => $this->input->post('hakpilih_dpt_bogortimur_perempuan'),
				'hakpilih_dpt_bogorutara_perempuan' => $this->input->post('hakpilih_dpt_bogorutara_perempuan'),
				'hakpilih_dpt_tanahsareal_perempuan' => $this->input->post('hakpilih_dpt_tanahsareal_perempuan'),
				'hakpilih_dpt_perempuan_jumlahakhir' => $this->input->post('hakpilih_dpt_perempuan_jumlahakhir'),
				'hakpilih_dpt_bogorbarat_jumlah' => $this->input->post('hakpilih_dpt_bogorbarat_jumlah'),
				'hakpilih_dpt_bogorselatan_jumlah' => $this->input->post('hakpilih_dpt_bogorselatan_jumlah'),
				'hakpilih_dpt_bogortengah_jumlah' => $this->input->post('hakpilih_dpt_bogortengah_jumlah'),
				'hakpilih_dpt_bogortimur_jumlah' => $this->input->post('hakpilih_dpt_bogortimur_jumlah'),
				'hakpilih_dpt_bogorutara_jumlah' => $this->input->post('hakpilih_dpt_bogorutara_jumlah'),
				'hakpilih_dpt_tanahsareal_jumlah' => $this->input->post('hakpilih_dpt_tanahsareal_jumlah'),
				'hakpilih_dpt_jumlah_akhir' => $this->input->post('hakpilih_dpt_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_hakpilih_dpt->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data  Pengguna hak pilih dalam Daftar Pemilih Tetap (DPT)',
	'error' => $this->upload->  display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_hakpilih_dpt'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

	public function detail_hakpilih_dpt($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Pengguna hak pilih dalam Daftar Pemilih Tetap (DPT)",
		'hakpilih_dpt' => $this->m_hakpilih_dpt->get_hakpilih_dpt('hakpilih_dpt'),
		 $this->load->model('m_hakpilih_dpt'),
    'detail' => $this->m_hakpilih_dpt->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_hakpilih_dpt'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

function edit_hakpilih_dpt($id){
	  $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpt_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpt_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpt_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Pengguna hak pilih dalam Daftar Pemilih Tetap (DPT)',
                                  'error' => $this->upload->display_errors(),
																	'hakpilih_dpt' => $this->m_hakpilih_dpt->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_hakpilih_dpt'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_hakpilih_dpt' => $id,
        'tahun' => $this->input->post('tahun'),
        'hakpilih_dpt_bogorbarat_laki' => $this->input->post('hakpilih_dpt_bogorbarat_laki'),
				'hakpilih_dpt_bogorselatan_laki' => $this->input->post('hakpilih_dpt_bogorselatan_laki'),
				'hakpilih_dpt_bogortengah_laki' => $this->input->post('hakpilih_dpt_bogortengah_laki'),
				'hakpilih_dpt_bogortimur_laki' => $this->input->post('hakpilih_dpt_bogortimur_laki'),
				'hakpilih_dpt_bogorutara_laki' => $this->input->post('hakpilih_dpt_bogorutara_laki'),
				'hakpilih_dpt_tanahsareal_laki' => $this->input->post('hakpilih_dpt_tanahsareal_laki'),
				'hakpilih_dpt_laki_jumlahakhir' => $this->input->post('hakpilih_dpt_laki_jumlahakhir'),
			  'hakpilih_dpt_bogorbarat_perempuan' => $this->input->post('hakpilih_dpt_bogorbarat_perempuan'),
				'hakpilih_dpt_bogorselatan_perempuan' => $this->input->post('hakpilih_dpt_bogorselatan_perempuan'),
				'hakpilih_dpt_bogortengah_perempuan' => $this->input->post('hakpilih_dpt_bogortengah_perempuan'),
				'hakpilih_dpt_bogortimur_perempuan' => $this->input->post('hakpilih_dpt_bogortimur_perempuan'),
				'hakpilih_dpt_bogorutara_perempuan' => $this->input->post('hakpilih_dpt_bogorutara_perempuan'),
				'hakpilih_dpt_tanahsareal_perempuan' => $this->input->post('hakpilih_dpt_tanahsareal_perempuan'),
				'hakpilih_dpt_perempuan_jumlahakhir' => $this->input->post('hakpilih_dpt_perempuan_jumlahakhir'),
				'hakpilih_dpt_bogorbarat_jumlah' => $this->input->post('hakpilih_dpt_bogorbarat_jumlah'),
				'hakpilih_dpt_bogorselatan_jumlah' => $this->input->post('hakpilih_dpt_bogorselatan_jumlah'),
				'hakpilih_dpt_bogortengah_jumlah' => $this->input->post('hakpilih_dpt_bogortengah_jumlah'),
				'hakpilih_dpt_bogortimur_jumlah' => $this->input->post('hakpilih_dpt_bogortimur_jumlah'),
				'hakpilih_dpt_bogorutara_jumlah' => $this->input->post('hakpilih_dpt_bogorutara_jumlah'),
				'hakpilih_dpt_tanahsareal_jumlah' => $this->input->post('hakpilih_dpt_tanahsareal_jumlah'),
				'hakpilih_dpt_jumlah_akhir' => $this->input->post('hakpilih_dpt_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_hakpilih_dpt->update($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }

  }

	public function hapus_hakpilih_dpt($id){
    $delete = $this->m_hakpilih_dpt->get_id_hakpilih_dpt($id);

    if ($delete) {
      $this->m_hakpilih_dpt->delete($id);
     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

//2. HAK PILIH DPTb
function tambah_hakpilih_dptb(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dptb_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dptb_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
'hakpilih_dptb_bogorbarat_laki' => $this->input->post('hakpilih_dptb_bogorbarat_laki'),
				'hakpilih_dptb_bogorselatan_laki' => $this->input->post('hakpilih_dptb_bogorselatan_laki'),
				'hakpilih_dptb_bogortengah_laki' => $this->input->post('hakpilih_dptb_bogortengah_laki'),
				'hakpilih_dptb_bogortimur_laki' => $this->input->post('hakpilih_dptb_bogortimur_laki'),
				'hakpilih_dptb_bogorutara_laki' => $this->input->post('hakpilih_dptb_bogorutara_laki'),
				'hakpilih_dptb_tanahsareal_laki' => $this->input->post('hakpilih_dptb_tanahsareal_laki'),
				'hakpilih_dptb_laki_jumlahakhir' => $this->input->post('hakpilih_dptb_laki_jumlahakhir'),
			'hakpilih_dptb_bogorbarat_perempuan' => $this->input->post('hakpilih_dptb_bogorbarat_perempuan'),
				'hakpilih_dptb_bogorselatan_perempuan' => $this->input->post('hakpilih_dptb_bogorselatan_perempuan'),
				'hakpilih_dptb_bogortengah_perempuan' => $this->input->post('hakpilih_dptb_bogortengah_perempuan'),
				'hakpilih_dptb_bogortimur_perempuan' => $this->input->post('hakpilih_dptb_bogortimur_perempuan'),
				'hakpilih_dptb_bogorutara_perempuan' => $this->input->post('hakpilih_dptb_bogorutara_perempuan'),
				'hakpilih_dptb_tanahsareal_perempuan' => $this->input->post('hakpilih_dptb_tanahsareal_perempuan'),
				'hakpilih_dptb_perempuan_jumlahakhir' => $this->input->post('hakpilih_dptb_perempuan_jumlahakhir'),
				'hakpilih_dptb_bogorbarat_jumlah' => $this->input->post('hakpilih_dptb_bogorbarat_jumlah'),
				'hakpilih_dptb_bogorselatan_jumlah' => $this->input->post('hakpilih_dptb_bogorselatan_jumlah'),
				'hakpilih_dptb_bogortengah_jumlah' => $this->input->post('hakpilih_dptb_bogortengah_jumlah'),
				'hakpilih_dptb_bogortimur_jumlah' => $this->input->post('hakpilih_dptb_bogortimur_jumlah'),
				'hakpilih_dptb_bogorutara_jumlah' => $this->input->post('hakpilih_dptb_bogorutara_jumlah'),
				'hakpilih_dptb_tanahsareal_jumlah' => $this->input->post('hakpilih_dptb_tanahsareal_jumlah'),
				'hakpilih_dptb_jumlah_akhir' => $this->input->post('hakpilih_dptb_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_hakpilih_dptb->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data Pengguna hak pilih dalam Daftar Pemilih Tambahan (DPTb)',
	'error' => $this->upload->  display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_hakpilih_dptb'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

public function detail_hakpilih_dptb($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Pengguna hak pilih dalam Daftar Pemilih Tambahan (DPTb)",
		'hakpilih_dptb' => $this->m_hakpilih_dptb->get_hakpilih_dptb('datapemilih_dpt'),
		 $this->load->model('m_hakpilih_dptb'),
    'detail' => $this->m_hakpilih_dptb->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_hakpilih_dptb'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

	function edit_hakpilih_dptb($id){
	   $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dptb_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dptb_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dptb_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Pengguna hak pilih dalam Daftar Pemilih Tambahan (DPTb)',
                                  'error' => $this->upload->display_errors(),
																	'hakpilih_dptb' => $this->m_hakpilih_dptb->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_hakpilih_dptb'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_hakpilih_dptb' => $id,
        'tahun' => $this->input->post('tahun'),
        'hakpilih_dptb_bogorbarat_laki' => $this->input->post('hakpilih_dptb_bogorbarat_laki'),
				'hakpilih_dptb_bogorselatan_laki' => $this->input->post('hakpilih_dptb_bogorselatan_laki'),
				'hakpilih_dptb_bogortengah_laki' => $this->input->post('hakpilih_dptb_bogortengah_laki'),
				'hakpilih_dptb_bogortimur_laki' => $this->input->post('hakpilih_dptb_bogortimur_laki'),
				'hakpilih_dptb_bogorutara_laki' => $this->input->post('hakpilih_dptb_bogorutara_laki'),
				'hakpilih_dptb_tanahsareal_laki' => $this->input->post('hakpilih_dptb_tanahsareal_laki'),
				'hakpilih_dptb_laki_jumlahakhir' => $this->input->post('hakpilih_dptb_laki_jumlahakhir'),
			'hakpilih_dptb_bogorbarat_perempuan' => $this->input->post('hakpilih_dptb_bogorbarat_perempuan'),
				'hakpilih_dptb_bogorselatan_perempuan' => $this->input->post('hakpilih_dptb_bogorselatan_perempuan'),
				'hakpilih_dptb_bogortengah_perempuan' => $this->input->post('hakpilih_dptb_bogortengah_perempuan'),
				'hakpilih_dptb_bogortimur_perempuan' => $this->input->post('hakpilih_dptb_bogortimur_perempuan'),
				'hakpilih_dptb_bogorutara_perempuan' => $this->input->post('hakpilih_dptb_bogorutara_perempuan'),
				'hakpilih_dptb_tanahsareal_perempuan' => $this->input->post('hakpilih_dptb_tanahsareal_perempuan'),
				'hakpilih_dptb_perempuan_jumlahakhir' => $this->input->post('hakpilih_dptb_perempuan_jumlahakhir'),
				'hakpilih_dptb_bogorbarat_jumlah' => $this->input->post('hakpilih_dptb_bogorbarat_jumlah'),
				'hakpilih_dptb_bogorselatan_jumlah' => $this->input->post('hakpilih_dptb_bogorselatan_jumlah'),
				'hakpilih_dptb_bogortengah_jumlah' => $this->input->post('hakpilih_dptb_bogortengah_jumlah'),
				'hakpilih_dptb_bogortimur_jumlah' => $this->input->post('hakpilih_dptb_bogortimur_jumlah'),
				'hakpilih_dptb_bogorutara_jumlah' => $this->input->post('hakpilih_dptb_bogorutara_jumlah'),
				'hakpilih_dptb_tanahsareal_jumlah' => $this->input->post('hakpilih_dptb_tanahsareal_jumlah'),
				'hakpilih_dptb_jumlah_akhir' => $this->input->post('hakpilih_dptb_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_hakpilih_dptb->update($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }

  }

public function hapus_hakpilih_dptb($id){
   $delete = $this->m_hakpilih_dptb->get_id_hakpilih_dptb($id);

    if ($delete) {
      $this->m_hakpilih_dptb->delete($id);
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

//3. HAK PILIH DPK
function tambah_hakpilih_dpk(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpk_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpk_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
				'hakpilih_dpk_bogorbarat_laki' => $this->input->post('hakpilih_dpk_bogorbarat_laki'),
				'hakpilih_dpk_bogorselatan_laki' => $this->input->post('hakpilih_dpk_bogorselatan_laki'),
				'hakpilih_dpk_bogortengah_laki' => $this->input->post('hakpilih_dpk_bogortengah_laki'),
				'hakpilih_dpk_bogortimur_laki' => $this->input->post('hakpilih_dpk_bogortimur_laki'),
				'hakpilih_dpk_bogorutara_laki' => $this->input->post('hakpilih_dpk_bogorutara_laki'),
				'hakpilih_dpk_tanahsareal_laki' => $this->input->post('hakpilih_dpk_tanahsareal_laki'),
				'hakpilih_dpk_laki_jumlahakhir' => $this->input->post('hakpilih_dpk_laki_jumlahakhir'),
			'hakpilih_dpk_bogorbarat_perempuan' => $this->input->post('hakpilih_dpk_bogorbarat_perempuan'),
				'hakpilih_dpk_bogorselatan_perempuan' => $this->input->post('hakpilih_dpk_bogorselatan_perempuan'),
				'hakpilih_dpk_bogortengah_perempuan' => $this->input->post('hakpilih_dpk_bogortengah_perempuan'),
				'hakpilih_dpk_bogortimur_perempuan' => $this->input->post('hakpilih_dpk_bogortimur_perempuan'),
				'hakpilih_dpk_bogorutara_perempuan' => $this->input->post('hakpilih_dpk_bogorutara_perempuan'),
				'hakpilih_dpk_tanahsareal_perempuan' => $this->input->post('hakpilih_dpk_tanahsareal_perempuan'),
				'hakpilih_dpk_perempuan_jumlahakhir' => $this->input->post('hakpilih_dpk_perempuan_jumlahakhir'),
				'hakpilih_dpk_bogorbarat_jumlah' => $this->input->post('hakpilih_dpk_bogorbarat_jumlah'),
				'hakpilih_dpk_bogorselatan_jumlah' => $this->input->post('hakpilih_dpk_bogorselatan_jumlah'),
				'hakpilih_dpk_bogortengah_jumlah' => $this->input->post('hakpilih_dpk_bogortengah_jumlah'),
				'hakpilih_dpk_bogortimur_jumlah' => $this->input->post('hakpilih_dpk_bogortimur_jumlah'),
				'hakpilih_dpk_bogorutara_jumlah' => $this->input->post('hakpilih_dpk_bogorutara_jumlah'),
				'hakpilih_dpk_tanahsareal_jumlah' => $this->input->post('hakpilih_dpk_tanahsareal_jumlah'),
				'hakpilih_dpk_jumlah_akhir' => $this->input->post('hakpilih_dpk_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_hakpilih_dpk->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data Pengguna hak pilih dalam Daftar Pemilih Khusus (DPK)',
	'error' => $this->upload->display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_hakpilih_dpk'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

public function detail_hakpilih_dpk($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Pengguna hak pilih dalam Daftar Pemilih Khusus (DPK)",
		'hakpilih_dpk' => $this->m_hakpilih_dpk->get_hakpilih_dpk('hakpilih_dpk'),
		 $this->load->model('m_hakpilih_dpk'),
    'detail' => $this->m_hakpilih_dpk->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_hakpilih_dpk'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

function edit_hakpilih_dpk($id){
	   $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpk_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpk_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpk_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Pengguna hak pilih dalam Daftar Pemilih Khusus (DPK)',
                                  'error' => $this->upload->display_errors(),
																	'hakpilih_dpk' => $this->m_hakpilih_dpk->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_hakpilih_dpk'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_hakpilih_dpk' => $id,
        'tahun' => $this->input->post('tahun'),
	'hakpilih_dpk_bogorbarat_laki' => $this->input->post('hakpilih_dpk_bogorbarat_laki'),
				'hakpilih_dpk_bogorselatan_laki' => $this->input->post('hakpilih_dpk_bogorselatan_laki'),
				'hakpilih_dpk_bogortengah_laki' => $this->input->post('hakpilih_dpk_bogortengah_laki'),
				'hakpilih_dpk_bogortimur_laki' => $this->input->post('hakpilih_dpk_bogortimur_laki'),
				'hakpilih_dpk_bogorutara_laki' => $this->input->post('hakpilih_dpk_bogorutara_laki'),
				'hakpilih_dpk_tanahsareal_laki' => $this->input->post('hakpilih_dpk_tanahsareal_laki'),
				'hakpilih_dpk_laki_jumlahakhir' => $this->input->post('hakpilih_dpk_laki_jumlahakhir'),
			'hakpilih_dpk_bogorbarat_perempuan' => $this->input->post('hakpilih_dpk_bogorbarat_perempuan'),
				'hakpilih_dpk_bogorselatan_perempuan' => $this->input->post('hakpilih_dpk_bogorselatan_perempuan'),
				'hakpilih_dpk_bogortengah_perempuan' => $this->input->post('hakpilih_dpk_bogortengah_perempuan'),
				'hakpilih_dpk_bogortimur_perempuan' => $this->input->post('hakpilih_dpk_bogortimur_perempuan'),
				'hakpilih_dpk_bogorutara_perempuan' => $this->input->post('hakpilih_dpk_bogorutara_perempuan'),
				'hakpilih_dpk_tanahsareal_perempuan' => $this->input->post('hakpilih_dpk_tanahsareal_perempuan'),
				'hakpilih_dpk_perempuan_jumlahakhir' => $this->input->post('hakpilih_dpk_perempuan_jumlahakhir'),
				'hakpilih_dpk_bogorbarat_jumlah' => $this->input->post('hakpilih_dpk_bogorbarat_jumlah'),
				'hakpilih_dpk_bogorselatan_jumlah' => $this->input->post('hakpilih_dpk_bogorselatan_jumlah'),
				'hakpilih_dpk_bogortengah_jumlah' => $this->input->post('hakpilih_dpk_bogortengah_jumlah'),
				'hakpilih_dpk_bogortimur_jumlah' => $this->input->post('hakpilih_dpk_bogortimur_jumlah'),
				'hakpilih_dpk_bogorutara_jumlah' => $this->input->post('hakpilih_dpk_bogorutara_jumlah'),
				'hakpilih_dpk_tanahsareal_jumlah' => $this->input->post('hakpilih_dpk_tanahsareal_jumlah'),
				'hakpilih_dpk_jumlah_akhir' => $this->input->post('hakpilih_dpk_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_hakpilih_dpk->update($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }

  }

public function hapus_hakpilih_dpk($id){
    $delete = $this->m_hakpilih_dpk->get_id_hakpilih_dpk($id);

    if ($delete) {
      $this->m_hakpilih_dpk->delete($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

//4. HAK PILIH DPKTb
function tambah_hakpilih_dpktb(){
     $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpktb_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpktb_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
			'hakpilih_dpktb_bogorbarat_laki' => $this->input->post('hakpilih_dpktb_bogorbarat_laki'),
				'hakpilih_dpktb_bogorselatan_laki' => $this->input->post('hakpilih_dpktb_bogorselatan_laki'),
				'hakpilih_dpktb_bogortengah_laki' => $this->input->post('hakpilih_dpktb_bogortengah_laki'),
				'hakpilih_dpktb_bogortimur_laki' => $this->input->post('hakpilih_dpktb_bogortimur_laki'),
				'hakpilih_dpktb_bogorutara_laki' => $this->input->post('hakpilih_dpktb_bogorutara_laki'),
				'hakpilih_dpktb_tanahsareal_laki' => $this->input->post('hakpilih_dpktb_tanahsareal_laki'),
				'hakpilih_dpktb_laki_jumlahakhir' => $this->input->post('hakpilih_dpktb_laki_jumlahakhir'),
			'hakpilih_dpktb_bogorbarat_perempuan' => $this->input->post('hakpilih_dpktb_bogorbarat_perempuan'),
				'hakpilih_dpktb_bogorselatan_perempuan' => $this->input->post('hakpilih_dpktb_bogorselatan_perempuan'),
				'hakpilih_dpktb_bogortengah_perempuan' => $this->input->post('hakpilih_dpktb_bogortengah_perempuan'),
				'hakpilih_dpktb_bogortimur_perempuan' => $this->input->post('hakpilih_dpktb_bogortimur_perempuan'),
				'hakpilih_dpktb_bogorutara_perempuan' => $this->input->post('hakpilih_dpktb_bogorutara_perempuan'),
				'hakpilih_dpktb_tanahsareal_perempuan' => $this->input->post('hakpilih_dpktb_tanahsareal_perempuan'),
				'hakpilih_dpktb_perempuan_jumlahakhir' => $this->input->post('hakpilih_dpktb_perempuan_jumlahakhir'),
				'hakpilih_dpktb_bogorbarat_jumlah' => $this->input->post('hakpilih_dpktb_bogorbarat_jumlah'),
				'hakpilih_dpktb_bogorselatan_jumlah' => $this->input->post('hakpilih_dpktb_bogorselatan_jumlah'),
				'hakpilih_dpktb_bogortengah_jumlah' => $this->input->post('hakpilih_dpktb_bogortengah_jumlah'),
				'hakpilih_dpktb_bogortimur_jumlah' => $this->input->post('hakpilih_dpktb_bogortimur_jumlah'),
				'hakpilih_dpktb_bogorutara_jumlah' => $this->input->post('hakpilih_dpktb_bogorutara_jumlah'),
				'hakpilih_dpktb_tanahsareal_jumlah' => $this->input->post('hakpilih_dpktb_tanahsareal_jumlah'),
				'hakpilih_dpktb_jumlah_akhir' => $this->input->post('hakpilih_dpktb_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
      ];
      $this->m_hakpilih_dpktb->insert($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data Pengguna hak pilih dalam Daftar Pemilih Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor',
	'error' => $this->upload->  display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_hakpilih_dpktb'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

	public function detail_hakpilih_dpktb($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Pengguna hak pilih dalam Daftar Pemilih Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor",
		'hakpilih_dpktb' => $this->m_hakpilih_dpktb->get_hakpilih_dpktb('hakpilih_dpktb'),
		 $this->load->model('m_hakpilih_dpktb'),
    'detail' => $this->m_hakpilih_dpktb->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_hakpilih_dpktb'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

	function edit_hakpilih_dpktb($id_hakpilih_dpktb){
	  $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpktb_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_dpktb_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_dpktb_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Pengguna hak pilih dalam Daftar Pemilih Khusus Tambahan (DPKTb) /pengguna KTP atau identitas lain atau paspor',
                                  'error' => $this->upload->display_errors(),
																	'hakpilih_dpktb' => $this->m_hakpilih_dpktb->detail_data($id_hakpilih_dpktb),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_hakpilih_dpktb'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_hakpilih_dpktb' => $id_hakpilih_dpktb,
        'tahun' => $this->input->post('tahun'),
					'hakpilih_dpktb_bogorbarat_laki' => $this->input->post('hakpilih_dpktb_bogorbarat_laki'),
				'hakpilih_dpktb_bogorselatan_laki' => $this->input->post('hakpilih_dpktb_bogorselatan_laki'),
				'hakpilih_dpktb_bogortengah_laki' => $this->input->post('hakpilih_dpktb_bogortengah_laki'),
				'hakpilih_dpktb_bogortimur_laki' => $this->input->post('hakpilih_dpktb_bogortimur_laki'),
				'hakpilih_dpktb_bogorutara_laki' => $this->input->post('hakpilih_dpktb_bogorutara_laki'),
				'hakpilih_dpktb_tanahsareal_laki' => $this->input->post('hakpilih_dpktb_tanahsareal_laki'),
				'hakpilih_dpktb_laki_jumlahakhir' => $this->input->post('hakpilih_dpktb_laki_jumlahakhir'),
			'hakpilih_dpktb_bogorbarat_perempuan' => $this->input->post('hakpilih_dpktb_bogorbarat_perempuan'),
				'hakpilih_dpktb_bogorselatan_perempuan' => $this->input->post('hakpilih_dpktb_bogorselatan_perempuan'),
				'hakpilih_dpktb_bogortengah_perempuan' => $this->input->post('hakpilih_dpktb_bogortengah_perempuan'),
				'hakpilih_dpktb_bogortimur_perempuan' => $this->input->post('hakpilih_dpktb_bogortimur_perempuan'),
				'hakpilih_dpktb_bogorutara_perempuan' => $this->input->post('hakpilih_dpktb_bogorutara_perempuan'),
				'hakpilih_dpktb_tanahsareal_perempuan' => $this->input->post('hakpilih_dpktb_tanahsareal_perempuan'),
				'hakpilih_dpktb_perempuan_jumlahakhir' => $this->input->post('hakpilih_dpktb_perempuan_jumlahakhir'),
				'hakpilih_dpktb_bogorbarat_jumlah' => $this->input->post('hakpilih_dpktb_bogorbarat_jumlah'),
				'hakpilih_dpktb_bogorselatan_jumlah' => $this->input->post('hakpilih_dpktb_bogorselatan_jumlah'),
				'hakpilih_dpktb_bogortengah_jumlah' => $this->input->post('hakpilih_dpktb_bogortengah_jumlah'),
				'hakpilih_dpktb_bogortimur_jumlah' => $this->input->post('hakpilih_dpktb_bogortimur_jumlah'),
				'hakpilih_dpktb_bogorutara_jumlah' => $this->input->post('hakpilih_dpktb_bogorutara_jumlah'),
				'hakpilih_dpktb_tanahsareal_jumlah' => $this->input->post('hakpilih_dpktb_tanahsareal_jumlah'),
				'hakpilih_dpktb_jumlah_akhir' => $this->input->post('hakpilih_dpktb_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_hakpilih_dpktb->edit($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }

  }

public function hapus_hakpilih_dpktb($id){
    $delete = $this->m_hakpilih_dpktb->get_id_hakpilih_dpktb($id);

    if ($delete) {
      $this->m_hakpilih_dpktb->delete($id);
     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }
  }

//5. Jumlah seluruh pengguna Hak Pilih (1+2+3+4+5)
function tambah_jumlahkeseluruhan_hakpilih(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_jk_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_jk_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
			'hakpilih_jk_bogorbarat_laki' => $this->input->post('hakpilih_jk_bogorbarat_laki'),
				'hakpilih_jk_bogorselatan_laki' => $this->input->post('hakpilih_jk_bogorselatan_laki'),
				'hakpilih_jk_bogortengah_laki' => $this->input->post('hakpilih_jk_bogortengah_laki'),
				'hakpilih_jk_bogortimur_laki' => $this->input->post('hakpilih_jk_bogortimur_laki'),
				'hakpilih_jk_bogorutara_laki' => $this->input->post('hakpilih_jk_bogorutara_laki'),
				'hakpilih_jk_tanahsareal_laki' => $this->input->post('hakpilih_jk_tanahsareal_laki'),
				'hakpilih_jk_laki_jumlahakhir' => $this->input->post('hakpilih_jk_laki_jumlahakhir'),
			'hakpilih_jk_bogorbarat_perempuan' => $this->input->post('hakpilih_jk_bogorbarat_perempuan'),
				'hakpilih_jk_bogorselatan_perempuan' => $this->input->post('hakpilih_jk_bogorselatan_perempuan'),
				'hakpilih_jk_bogortengah_perempuan' => $this->input->post('hakpilih_jk_bogortengah_perempuan'),
				'hakpilih_jk_bogortimur_perempuan' => $this->input->post('hakpilih_jk_bogortimur_perempuan'),
				'hakpilih_jk_bogorutara_perempuan' => $this->input->post('hakpilih_jk_bogorutara_perempuan'),
				'hakpilih_jk_tanahsareal_perempuan' => $this->input->post('hakpilih_jk_tanahsareal_perempuan'),
				'hakpilih_jk_perempuan_jumlahakhir' => $this->input->post('hakpilih_jk_perempuan_jumlahakhir'),
				'hakpilih_jk_bogorbarat_jumlah' => $this->input->post('hakpilih_jk_bogorbarat_jumlah'),
				'hakpilih_jk_bogorselatan_jumlah' => $this->input->post('hakpilih_jk_bogorselatan_jumlah'),
				'hakpilih_jk_bogortengah_jumlah' => $this->input->post('hakpilih_jk_bogortengah_jumlah'),
				'hakpilih_jk_bogortimur_jumlah' => $this->input->post('hakpilih_jk_bogortimur_jumlah'),
				'hakpilih_jk_bogorutara_jumlah' => $this->input->post('hakpilih_jk_bogorutara_jumlah'),
				'hakpilih_jk_tanahsareal_jumlah' => $this->input->post('hakpilih_jk_tanahsareal_jumlah'),
				'hakpilih_jk_jumlah_akhir' => $this->input->post('hakpilih_jk_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),
			];

      $this->m_jumlahkeseluruhan_hakpilih->insert($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara' );
    }
  $data=array(
	'title' => 'KPU KOTA BOGOR',
	'title2' => 'Tambah Data  Jumlah seluruh pengguna Hak Pilih (1+2+3+4+5)',
	'error' => $this->upload->display_errors(),
	'jadwal_user' => $this->m_jadwal->jadwal_user(),
	'isi' => 'admin/rekappartisipasi_pemungutansuara/form_jumlahkeseluruhan_hakpilih'
    );
  $this->load->view('admin/layout/v_wrapper', $data , FALSE);
	}

public function detail_jumlahkeseluruhan_hakpilih($id){
		 $data=array(
		'title' => "KPU KOTA BOGOR",
		'title2' =>"Detail Data Jumlah seluruh pengguna Hak Pilih (1+2+3+4+5)",
		'jumlahkeseluruhan_hakpilih' =>  $this->m_jumlahkeseluruhan_hakpilih->get_jk_hakpilih('jumlahkeseluruhan_hakpilih'),
		 $this->load->model('m_jumlahkeseluruhan_hakpilih'),
    'detail' => $this->m_jumlahkeseluruhan_hakpilih->detail_data($id),
		'isi' => 'admin/rekappartisipasi_pemungutansuara/detail_jumlahkeseluruhan_hakpilih'
		 );
		$this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

function edit_jumlahkeseluruhan_hakpilih($id){
		 $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorbarat_laki', 'DPT Kecamatan Bogor Barat (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorselatan_laki', 'DPT Kecamatan Bogor Selatan (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortengah_laki', 'DPT Kecamatan Bogor Tengah (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortimur_laki', 'DPT Kecamatan Bogor Timur (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorutara_laki', 'DPT Kecamatan Bogor Utara (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_tanahsareal_laki', 'DPT Kecamatan Bogor Tanah Sareal (Laki-Laki)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_laki_jumlahakhir', 'DPT Jumlah Akhir (Laki-Laki)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_jk_bogorbarat_perempuan', 'DPT Kecamatan Bogor Barat (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorselatan_perempuan', 'DPT Kecamatan Bogor Selatan (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortengah_perempuan', 'DPT Kecamatan Bogor Tengah (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortimur_perempuan', 'DPT Kecamatan Bogor Timur (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorutara_perempuan', 'DPT Kecamatan Bogor Utara (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_tanahsareal_perempuan', 'DPT Kecamatan Bogor Tanah Sareal (Perempuan)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_perempuan_jumlahakhir', 'DPT Jumlah Akhir (Perempuan)', 'trim|required');

		$this->form_validation->set_rules('hakpilih_jk_bogorbarat_jumlah', 'Jumlah DPT Kecamatan Bogor Barat (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorselatan_jumlah', 'Jumlah DPT Kecamatan Bogor Selatan (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortengah_jumlah', 'Jumlah DPT Kecamatan Bogor Tengah (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogortimur_jumlah', 'Jumlah DPT Kecamatan Bogor Timur (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_bogorutara_jumlah', 'Jumlah DPT Kecamatan Bogor Utara (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_tanahsareal_jumlah', 'Jumlah DPT Kecamatan Bogor Tanah Sareal (L+P)', 'trim|required');
		$this->form_validation->set_rules('hakpilih_jk_jumlah_akhir', 'DPT Jumlah Akhir (L+P)', 'trim|required');

    $this->form_validation->set_message('required', '{field} Harus di isi');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		 $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Edit Data Jumlah seluruh pengguna Hak Pilih (1+2+3+4+5)',
                                  'error' => $this->upload->display_errors(),
																	'jumlahkeseluruhan_hakpilih' => $this->m_jumlahkeseluruhan_hakpilih->detail_data($id),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_pemungutansuara/edit_jumlahkeseluruhan_hakpilih'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

												if ($this->form_validation->run() == TRUE) {
    $data = [
        'id_jk_datapemilih' => $id,
        'tahun' => $this->input->post('tahun'),
	'hakpilih_jk_bogorbarat_laki' => $this->input->post('hakpilih_jk_bogorbarat_laki'),
				'hakpilih_jk_bogorselatan_laki' => $this->input->post('hakpilih_jk_bogorselatan_laki'),
				'hakpilih_jk_bogortengah_laki' => $this->input->post('hakpilih_jk_bogortengah_laki'),
				'hakpilih_jk_bogortimur_laki' => $this->input->post('hakpilih_jk_bogortimur_laki'),
				'hakpilih_jk_bogorutara_laki' => $this->input->post('hakpilih_jk_bogorutara_laki'),
				'hakpilih_jk_tanahsareal_laki' => $this->input->post('hakpilih_jk_tanahsareal_laki'),
				'hakpilih_jk_laki_jumlahakhir' => $this->input->post('hakpilih_jk_laki_jumlahakhir'),
			'hakpilih_jk_bogorbarat_perempuan' => $this->input->post('hakpilih_jk_bogorbarat_perempuan'),
				'hakpilih_jk_bogorselatan_perempuan' => $this->input->post('hakpilih_jk_bogorselatan_perempuan'),
				'hakpilih_jk_bogortengah_perempuan' => $this->input->post('hakpilih_jk_bogortengah_perempuan'),
				'hakpilih_jk_bogortimur_perempuan' => $this->input->post('hakpilih_jk_bogortimur_perempuan'),
				'hakpilih_jk_bogorutara_perempuan' => $this->input->post('hakpilih_jk_bogorutara_perempuan'),
				'hakpilih_jk_tanahsareal_perempuan' => $this->input->post('hakpilih_jk_tanahsareal_perempuan'),
				'hakpilih_jk_perempuan_jumlahakhir' => $this->input->post('hakpilih_jk_perempuan_jumlahakhir'),
				'hakpilih_jk_bogorbarat_jumlah' => $this->input->post('hakpilih_jk_bogorbarat_jumlah'),
				'hakpilih_jk_bogorselatan_jumlah' => $this->input->post('hakpilih_jk_bogorselatan_jumlah'),
				'hakpilih_jk_bogortengah_jumlah' => $this->input->post('hakpilih_jk_bogortengah_jumlah'),
				'hakpilih_jk_bogortimur_jumlah' => $this->input->post('hakpilih_jk_bogortimur_jumlah'),
				'hakpilih_jk_bogorutara_jumlah' => $this->input->post('hakpilih_jk_bogorutara_jumlah'),
				'hakpilih_jk_tanahsareal_jumlah' => $this->input->post('hakpilih_jk_tanahsareal_jumlah'),
				'hakpilih_jk_jumlah_akhir' => $this->input->post('hakpilih_jk_jumlah_akhir'),
				'user_id' => $this->session->userdata('id_user'),

    ];
    $this->m_jumlahkeseluruhan_hakpilih->update($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekap_partisipasi_pemungutan_suara');
 }

  }

public function hapus_jumlahkeseluruhan_hakpilih($id){
      $delete = $this->m_jumlahkeseluruhan_hakpilih->get_id_jk_hakpilih($id);

    if ($delete) {
      $this->m_jumlahkeseluruhan_hakpilih->delete($id);
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus ! </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data tidak ada </p> </div>');
      redirect('admin/rekap_partisipasi_pemungutan_suara', 'refresh');
    }

}

public function pdf($id)
	{
		$data['datapemilihdpt_user'] = $this->m_datapemilih_dpt->pdf_data($id);
		$data['datapemilihdptb_user'] = $this->m_datapemilih_dptb->pdf_data($id);
		$data['datapemilihdpk_user'] = $this->m_datapemilih_dpk->pdf_data($id);
		$data['datapemilihdpktb_user'] = $this->m_datapemilih_dpktb->pdf_data($id);
		$data['jkdatapemilih_user'] = $this->m_jumlahkeseluruhan_datapemilih->pdf_data($id);
		$data['hakpilihdpt_user'] = $this->m_hakpilih_dpt->pdf_data($id);
		$data['hakpilihdptb_user'] = $this->m_hakpilih_dptb->pdf_data($id);
		$data['hakpilihdpk_user'] = $this->m_hakpilih_dpk->pdf_data($id);
		$data['hakpilihdpktb_user'] = $this->m_hakpilih_dpktb->pdf_data($id);
		$data['jkhakpilih_user'] = $this->m_jumlahkeseluruhan_hakpilih->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

		  $data['datapemilihdpt_user'] = $this->m_datapemilih_dpt->datapemilihdpt_user();
		  $data['datapemilihdptb_user'] = $this->m_datapemilih_dptb->datapemilihdptb_user();
		  $data['datapemilihdpk_user'] = $this->m_datapemilih_dpk->datapemilihdpk_user();
		  $data['datapemilihdpktb_user'] = $this->m_datapemilih_dpktb->datapemilihdpktb_user();
      $data['jkdatapemilih_user'] = $this->m_jumlahkeseluruhan_datapemilih->jkdatapemilih_user();
		  $data['hakpilihdpt_user'] = $this->m_hakpilih_dpt->hakpilihdpt_user();
		  $data['hakpilihdptb_user'] = $this->m_hakpilih_dptb->hakpilihdptb_user();
		  $data['hakpilihdpk_user'] = $this->m_hakpilih_dpk->hakpilihdpk_user();
		  $data['hakpilihdpktb_user'] = $this->m_hakpilih_dpktb->hakpilihdpktb_user();
		  $data['jkhakpilih_user'] = $this->m_jumlahkeseluruhan_hakpilih->jkhakpilih_user();
      $data['rekappartisipasi_tps_user'] = $this->m_rekappartisipasi_tps->rekappartisipasi_tps_user();
		 $this->load->view('pdf/rekap_pemungutansuara', $data);
        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Data Rekapitulasi Data Pemilih Pada Pelaksanaan Pemungutan Suara';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Rekapitulasi Data Pemilih Pada Pelaksanaan Pemungutan Suara - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'Legal';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

				$html = $this->load->view('pdf/rekap_pemungutansuara',$this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}
/* End of file Rekap_partisipasi_pemungutan_suara.php */