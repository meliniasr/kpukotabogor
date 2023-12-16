<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekaphasilsuarasah_kecamatan extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('m_rekaphasilpemilu_kecamatan');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Kecamatan',
      'rekapkecamatan' => $this->m_rekaphasilpemilu_kecamatan->lists(),
      'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'pasangancalon_user' => $this->m_pasangancalon->pasangancalon_user(),
       'isi' => 'admin/rekapkecamatan/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data(){

    $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('nama_capres_satu', 'Nama Pasangan Calon', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('nama_capres_dua', 'Nama Pasangan Calon', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorbarat_satu', 'Rincian Kecamatan Bogor Barat 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorselatan_satu', 'Rincian Kecamatan Bogor Selatan 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogortengah_satu', 'Rincian Kecamatan Bogor Tengah 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogortimur_satu', 'Rincian Kecamatan Bogor Timur 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorutara_satu', 'Rincian Kecamatan Bogor Utara 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_tanahsareal_satu', 'Rincian Kecamatan Tanah Sareal 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_rincian_satu', 'Jumlah Akhir 1', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('rincian_bogorbarat_dua', 'Rincian Kecamatan Bogor Barat 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorselatan_dua', 'Rincian Kecamatan Bogor Selatan 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogortengah_dua', 'Rincian Kecamatan Bogor Tengah 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogortimur_dua', 'Rincian Kecamatan Bogor Timur 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorutara_dua', 'Rincian Kecamatan Bogor Utara 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_tanahsareal_dua', 'Rincian Kecamatan Tanah Sareal 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_rincian_dua', 'Jumlah Akhir 2', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('suarasah_bogorbarat', 'Suara Sah Keecamatan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_bogorselatan', 'Suara Sah Keecamatan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_bogortengah', 'Suara Sah Keecamatan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_bogortimur', 'Suara Sah Keecamatan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_bogorutara', 'Suara Sah Keecamatan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tanahsareal', 'Suara Sah Keecamatan Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_suarasah', 'Jumlah Akhir Suara Sah', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('suaratdksah_bogorbarat', 'Suara Tidak Sah Keecamatan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_bogorselatan', 'Suara Tidak Sah Keecamatan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_bogortengah', 'Suara Tidak Sah Keecamatan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_bogortimur', 'Suara Tidak Sah Keecamatan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_bogorutara', 'Suara Tidak Sah Keecamatan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_tanahsareal', 'Suara Tidak Sah Keecamatan Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_suaratdksah', 'Jumlah Akhir Suara Tidak Sah', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('suarasah_tdksah_bogorbarat', 'Suara Tidak Sah Keecamatan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_bogorselatan', 'Suara Tidak Sah Keecamatan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_bogortengah', 'Suara Tidak Sah Keecamatan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_bogortimur', 'Suara Tidak Sah Keecamatan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_bogorutara', 'Suara Tidak Sah Keecamatan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_tanahsareal', 'Suara Tidak Sah Keecamatan Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_suarasah_tdksah', 'Jumlah Akhir Suara Sah dan Tidak Sah', 'required', array('required'=>'%s Harus diisi!'));

   if ($this->form_validation->run() == TRUE) {

      $data = [
            'tahun' => $this->input->post('tahun'),
						'capres_satu' => $this->input->post('capres_satu'),
						'nama_capres_satu' => $this->input->post('nama_capres_satu'),
						'capres_dua' => $this->input->post('capres_dua'),
						'nama_capres_dua' => $this->input->post('nama_capres_dua'),
						'rincian_bogorbarat_satu' => $this->input->post('rincian_bogorbarat_satu'),
						'rincian_bogorselatan_satu' => $this->input->post('rincian_bogorselatan_satu'),
						'rincian_bogortengah_satu' => $this->input->post('rincian_bogortengah_satu'),
						'rincian_bogortimur_satu' => $this->input->post('rincian_bogortimur_satu'),
						'rincian_bogorutara_satu' => $this->input->post('rincian_bogorutara_satu'),
						'rincian_tanahsareal_satu' => $this->input->post('rincian_tanahsareal_satu'),
						'jumlahakhir_rincian_satu' => $this->input->post('jumlahakhir_rincian_satu'),
					  'rincian_bogorbarat_dua' => $this->input->post('rincian_bogorbarat_dua'),
						'rincian_bogorselatan_dua' => $this->input->post('rincian_bogorselatan_dua'),
						'rincian_bogortengah_dua' => $this->input->post('rincian_bogortengah_dua'),
						'rincian_bogortimur_dua' => $this->input->post('rincian_bogortimur_dua'),
						'rincian_bogorutara_dua' => $this->input->post('rincian_bogo   rutara_dua'),
						'rincian_tanahsareal_dua' => $this->input->post('rincian_tanahsareal_dua'),
						'jumlahakhir_rincian_dua' => $this->input->post('jumlahakhir_rincian_dua'),
						'suarasah_bogorbarat' => $this->input->post('suarasah_bogorbarat'),
						'suarasah_bogorselatan' => $this->input->post('suarasah_bogorselatan'),
						'suarasah_bogortengah' => $this->input->post('suarasah_bogortengah'),
						'suarasah_bogortimur' => $this->input->post('suarasah_bogortimur'),
						'suarasah_bogorutara' => $this->input->post('suarasah_bogorutara'),
						'suarasah_tanahsareal' => $this->input->post('suarasah_tanahsareal'),
						'jumlahakhir_suarasah' => $this->input->post('jumlahakhir_suarasah'),
						'suaratdksah_bogorbarat' => $this->input->post('suaratdksah_bogorbarat'),
						'suaratdksah_bogorselatan' => $this->input->post('suaratdksah_bogorselatan'),
						'suaratdksah_bogortengah' => $this->input->post('suaratdksah_bogortengah'),
						'suaratdksah_bogortimur' => $this->input->post('suaratdksah_bogortimur'),
						'suaratdksah_bogorutara' => $this->input->post('suaratdksah_bogorutara'),
						'suaratdksah_tanahsareal' => $this->input->post('suaratdksah_tanahsareal'),
						'jumlahakhir_suaratdksah' => $this->input->post('jumlahakhir_suaratdksah'),
						'suarasah_tdksah_bogorbarat' => $this->input->post('suarasah_tdksah_bogorbarat'),
						'suarasah_tdksah_bogorselatan' => $this->input->post('suarasah_tdksah_bogorselatan'),
						'suarasah_tdksah_bogortengah' => $this->input->post('suarasah_tdksah_bogortengah'),
						'suarasah_tdksah_bogortimur' => $this->input->post('suarasah_tdksah_bogortimur'),
						'suarasah_tdksah_bogorutara' => $this->input->post('suarasah_tdksah_bogorutara'),
						'suarasah_tdksah_tanahsareal' => $this->input->post('suarasah_tdksah_tanahsareal'),
						'jumlahakhir_suarasah_tdksah' => $this->input->post('jumlahakhir_suarasah_tdksah'),
            'user_id' => $this->session->userdata('id_user'),

      ];

          $this->m_rekaphasilpemilu_kecamatan->add($data);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan! </p></div>');
          redirect('admin/rekaphasilsuarasah_kecamatan');
        }
				  $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Tambah Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Kecamatan',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
      													  'pasangancalon_user' => $this->m_pasangancalon->pasangancalon_user(),
                                  'isi' => 'admin/rekapkecamatan/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

      }

 public function detail_data($id)
			 {
       $data['title'] = 'KPU KOTA BOGOR';
       $data['title2'] = 'Detail Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Kecamatan';
			 $this->load->model('m_rekaphasilpemilu_kecamatan');
       $detail = $this->m_rekaphasilpemilu_kecamatan->detail2($id);
       $data['detail'] = $detail;
       $data['isi'] = 'admin/rekapkecamatan/list';
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
  }

public function edit($id_rekapkecamatan){
    $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('nama_capres_satu', 'Nama Pasangan Calon', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('nama_capres_dua', 'Nama Pasangan Calon', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorbarat_satu', 'Rincian Kecamatan Bogor Barat 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorselatan_satu', 'Rincian Kecamatan Bogor Selatan 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogortengah_satu', 'Rincian Kecamatan Bogor Tengah 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogortimur_satu', 'Rincian Kecamatan Bogor Timur 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorutara_satu', 'Rincian Kecamatan Bogor Utara 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_tanahsareal_satu', 'Rincian Kecamatan Tanah Sareal 1', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_rincian_satu', 'Jumlah Akhir 1', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('rincian_bogorbarat_dua', 'Rincian Kecamatan Bogor Barat 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorselatan_dua', 'Rincian Kecamatan Bogor Selatan 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogortengah_dua', 'Rincian Kecamatan Bogor Tengah 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogortimur_dua', 'Rincian Kecamatan Bogor Timur 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_bogorutara_dua', 'Rincian Kecamatan Bogor Utara 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('rincian_tanahsareal_dua', 'Rincian Kecamatan Tanah Sareal 2', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_rincian_dua', 'Jumlah Akhir 2', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('suarasah_bogorbarat', 'Suara Sah Keecamatan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_bogorselatan', 'Suara Sah Keecamatan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_bogortengah', 'Suara Sah Keecamatan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_bogortimur', 'Suara Sah Keecamatan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_bogorutara', 'Suara Sah Keecamatan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tanahsareal', 'Suara Sah Keecamatan Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_suarasah', 'Jumlah Akhir Suara Sah', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('suaratdksah_bogorbarat', 'Suara Tidak Sah Keecamatan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_bogorselatan', 'Suara Tidak Sah Keecamatan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_bogortengah', 'Suara Tidak Sah Keecamatan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_bogortimur', 'Suara Tidak Sah Keecamatan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_bogorutara', 'Suara Tidak Sah Keecamatan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suaratdksah_tanahsareal', 'Suara Tidak Sah Keecamatan Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_suaratdksah', 'Jumlah Akhir Suara Tidak Sah', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('suarasah_tdksah_bogorbarat', 'Suara Tidak Sah Keecamatan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_bogorselatan', 'Suara Tidak Sah Keecamatan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_bogortengah', 'Suara Tidak Sah Keecamatan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_bogortimur', 'Suara Tidak Sah Keecamatan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_bogorutara', 'Suara Tidak Sah Keecamatan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('suarasah_tdksah_tanahsareal', 'Suara Tidak Sah Keecamatan Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jumlahakhir_suarasah_tdksah', 'Jumlah Akhir Suara Sah dan Tidak Sah', 'required', array('required'=>'%s Harus diisi!'));


     $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Form Edit Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Kecamatan',
                                  'error' => $this->upload->display_errors(),
                                  'rekapkecamatan' => $this->m_rekaphasilpemilu_kecamatan->detail($id_rekapkecamatan),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekapkecamatan/edit'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

if ($this->form_validation->run() == TRUE) {
    $data = [
            'id_rekapkecamatan' =>$id_rekapkecamatan,
            'tahun' => $this->input->post('tahun'),
						'capres_satu' => $this->input->post('capres_satu'),
						'nama_capres_satu' => $this->input->post('nama_capres_satu'),
						'capres_dua' => $this->input->post('capres_dua'),
						'nama_capres_dua' => $this->input->post('nama_capres_dua'),
						'rincian_bogorbarat_satu' => $this->input->post('rincian_bogorbarat_satu'),
						'rincian_bogorselatan_satu' => $this->input->post('rincian_bogorselatan_satu'),
						'rincian_bogortengah_satu' => $this->input->post('rincian_bogortengah_satu'),
						'rincian_bogortimur_satu' => $this->input->post('rincian_bogortimur_satu'),
						'rincian_bogorutara_satu' => $this->input->post('rincian_bogorutara_satu'),
						'rincian_tanahsareal_satu' => $this->input->post('rincian_tanahsareal_satu'),
						'jumlahakhir_rincian_satu' => $this->input->post('jumlahakhir_rincian_satu'),
					  'rincian_bogorbarat_dua' => $this->input->post('rincian_bogorbarat_dua'),
						'rincian_bogorselatan_dua' => $this->input->post('rincian_bogorselatan_dua'),
						'rincian_bogortengah_dua' => $this->input->post('rincian_bogortengah_dua'),
						'rincian_bogortimur_dua' => $this->input->post('rincian_bogortimur_dua'),
						'rincian_bogorutara_dua' => $this->input->post('rincian_bogorutara_dua'),
						'rincian_tanahsareal_dua' => $this->input->post('rincian_tanahsareal_dua'),
						'jumlahakhir_rincian_dua' => $this->input->post('jumlahakhir_rincian_dua'),
						'suarasah_bogorbarat' => $this->input->post('suarasah_bogorbarat'),
						'suarasah_bogorselatan' => $this->input->post('suarasah_bogorselatan'),
						'suarasah_bogortengah' => $this->input->post('suarasah_bogortengah'),
						'suarasah_bogortimur' => $this->input->post('suarasah_bogortimur'),
						'suarasah_bogorutara' => $this->input->post('suarasah_bogorutara'),
						'suarasah_tanahsareal' => $this->input->post('suarasah_tanahsareal'),
						'jumlahakhir_suarasah' => $this->input->post('jumlahakhir_suarasah'),
						'suaratdksah_bogorbarat' => $this->input->post('suaratdksah_bogorbarat'),
						'suaratdksah_bogorselatan' => $this->input->post('suaratdksah_bogorselatan'),
						'suaratdksah_bogortengah' => $this->input->post('suaratdksah_bogortengah'),
						'suaratdksah_bogortimur' => $this->input->post('suaratdksah_bogortimur'),
						'suaratdksah_bogorutara' => $this->input->post('suaratdksah_bogorutara'),
						'suaratdksah_tanahsareal' => $this->input->post('suaratdksah_tanahsareal'),
						'jumlahakhir_suaratdksah' => $this->input->post('jumlahakhir_suaratdksah'),
						'suarasah_tdksah_bogorbarat' => $this->input->post('suarasah_tdksah_bogorbarat'),
						'suarasah_tdksah_bogorselatan' => $this->input->post('suarasah_tdksah_bogorselatan'),
						'suarasah_tdksah_bogortengah' => $this->input->post('suarasah_tdksah_bogortengah'),
						'suarasah_tdksah_bogortimur' => $this->input->post('suarasah_tdksah_bogortimur'),
						'suarasah_tdksah_bogorutara' => $this->input->post('suarasah_tdksah_bogorutara'),
						'suarasah_tdksah_tanahsareal' => $this->input->post('suarasah_tdksah_tanahsareal'),
						'jumlahakhir_suarasah_tdksah' => $this->input->post('jumlahakhir_suarasah_tdksah'),
            'user_id' => $this->session->userdata('id_user'),
    ];
    $this->m_rekaphasilpemilu_kecamatan->edit($data);
     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di edit!</p></div>');
    redirect('admin/rekaphasilsuarasah_kecamatan');
 }
}

	public function get_autofill()
	{
		if(isset($_GET['term'])){
				$result = $this->m_pasangancalon->search_nama($_GET['term']);
			  if(count ($result) > 0){
					foreach ($result as $row) {
					//	$arr_result[] = $row->nama;

					$arr_result[] = array(
						'label'     => $row->nama,
					  'foto_capres' => $row->foto_capres,
					);
						echo json_encode($arr_result);
					}
				}
		}
	}

public function pdf($id)
	{
		$data['rekapkecamatan_user'] = $this->m_rekaphasilpemilu_kecamatan->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

			$data['rekapkecamatan_user'] = $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user();
		 $this->load->view('pdf/rekapkecamatan', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Kecamatan';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Data Rekapitulasi Hasil Penghitungan Perolehan Suara Sah Pasangan Calon Berdasarkan Kecamatan - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";

				$html = $this->load->view('pdf/rekapkecamatan', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

 public function hapus($id_rekapkecamatan){
    $data= array(
      'id_rekapkecamatan' =>$id_rekapkecamatan,
    );
    $this->m_rekaphasilpemilu_kecamatan->delete($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di hapus!</p></div>');
    redirect('admin/rekaphasilsuarasah_kecamatan');
  }


}

/* End of file Rekapitulasi_perolehan_suara_sah_pasangan_calon_berdasarkan_kecamatan.php */