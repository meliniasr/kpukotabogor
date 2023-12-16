<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap_partisipasi_tps extends CI_Controller {

 public function __construct()
{
  parent::__construct();
  $this->load->model('M_rekappartisipasi_tps');
}

  public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Data Rekapitulasi Jumlah Pemilih Terdaftar dan Jumlah TPS',
      'rekappartisipasi_tps' => $this->m_rekappartisipasi_tps->lists(),
      'rekappartisipasi_tps_user' => $this->m_rekappartisipasi_tps->rekappartisipasi_tps_user(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'isi' => 'admin/rekappartisipasi_tps/list'
      );
      $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

public function tambah_data(){
    $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_kelurahan_bgrbarat', 'Jumlah Kelurahan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_tps_bgrbarat', 'Jumlah TPS Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_laki_bgrbarat', 'Jumlah Pemilih Laki-Laki Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_perempuan_bgrbarat', 'Jumlah Pemilih Perempuan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_lakiperempuan_bgrbarat', 'Jumlah Pemilih Laki-laki dan Perempuan Bogor Barat', 'required', array('required'=>'%s Harus diisi!'));


		$this->form_validation->set_rules('jml_kelurahan_bgrselatan', 'Jumlah Kelurahan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_tps_bgrselatan', 'Jumlah TPS Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_laki_bgrselatan', 'Jumlah Pemilih Laki-Laki Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_perempuan_bgrselatan', 'Jumlah Pemilih Perempuan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_lakiperempuan_bgrselatan', 'Jumlah Pemilih Laki-laki dan Perempuan Bogor Selatan', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('jml_kelurahan_bgrtengah', 'Jumlah Kelurahan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_tps_bgrtengah', 'Jumlah TPS Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_laki_bgrtengah', 'Jumlah Pemilih Laki-Laki Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_perempuan_bgrtengah', 'Jumlah Pemilih Perempuan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_lakiperempuan_bgrtengah', 'Jumlah Pemilih Laki-laki dan Perempuan Bogor Tengah', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('jml_kelurahan_bgrtimur', 'Jumlah Kelurahan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_tps_bgrtimur', 'Jumlah TPS Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_laki_bgrtimur', 'Jumlah Pemilih Laki-Laki Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_perempuan_bgrtimur', 'Jumlah Pemilih Perempuan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_lakiperempuan_bgrtimur', 'Jumlah Pemilih Laki-laki dan Perempuan Bogor Timur', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('jml_kelurahan_bgrutara', 'Jumlah Kelurahan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_tps_bgrutara', 'Jumlah TPS Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_laki_bgrutara', 'Jumlah Pemilih Laki-Laki Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_perempuan_bgrutara', 'Jumlah Pemilih Perempuan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_lakiperempuan_bgrutara', 'Jumlah Pemilih Laki-laki dan Perempuan Bogor Utara', 'required', array('required'=>'%s Harus diisi!'));

		$this->form_validation->set_rules('jml_kelurahan_tnhsareal', 'Jumlah Kelurahan Bogor Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_tps_tnhsareal', 'Jumlah TPS Bogor Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_laki_tnhsareal', 'Jumlah Pemilih Laki-Laki Bogor Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_perempuan_tnhsareal', 'Jumlah Pemilih Perempuan Bogor Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('jml_pemilih_lakiperempuan_tnhsareal', 'Jumlah Pemilih Laki-laki dan Perempuan Bogor Tanah Sareal', 'required', array('required'=>'%s Harus diisi!'));


		$this->form_validation->set_rules('total_jmlkelurahan', 'Total Jumlah Kelurahan', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('total_jmltps', 'Total Jumlah TPS', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('total_jmlpemilihlaki', 'Total Jumlah Pemilih Laki', 'required', array('required'=>'%s Harus diisi!'));
		$this->form_validation->set_rules('total_jmlpemilihperempuan', 'Total Jumlah Pemilih Perempuan', 'required', array('required'=>'%s Harus diisi!'));
    $this->form_validation->set_rules('total_jmlpemilihlakiperempuan', 'Total Jumlah Pemilih Laki dan Perempuan', 'required', array('required'=>'%s Harus diisi!'));

    if ($this->form_validation->run() == TRUE) {
      $data = [
        'tahun' => $this->input->post('tahun'),
				'jml_kelurahan_bgrbarat' => $this->input->post('jml_kelurahan_bgrbarat'),
				'jml_tps_bgrbarat' => $this->input->post('jml_tps_bgrbarat'),
				'jml_pemilih_laki_bgrbarat' => $this->input->post('jml_pemilih_laki_bgrbarat'),
				'jml_pemilih_perempuan_bgrbarat' => $this->input->post('jml_pemilih_perempuan_bgrbarat'),
				'jml_pemilih_lakiperempuan_bgrbarat' => $this->input->post('jml_pemilih_lakiperempuan_bgrbarat'),
				'ket_bogorbarat' => $this->input->post('ket_bogorbarat'),

				'jml_kelurahan_bgrselatan' => $this->input->post('jml_kelurahan_bgrselatan'),
				'jml_tps_bgrselatan' => $this->input->post('jml_tps_bgrselatan'),
				'jml_pemilih_laki_bgrselatan' => $this->input->post('jml_pemilih_laki_bgrselatan'),
				'jml_pemilih_perempuan_bgrselatan' => $this->input->post('jml_pemilih_perempuan_bgrselatan'),
				'jml_pemilih_lakiperempuan_bgrselatan' => $this->input->post('jml_pemilih_lakiperempuan_bgrselatan'),
				'ket_bogorselatan' => $this->input->post('ket_bogorselatan'),

				'jml_kelurahan_bgrtengah' => $this->input->post('jml_kelurahan_bgrtengah'),
				'jml_tps_bgrtengah' => $this->input->post('jml_tps_bgrtengah'),
				'jml_pemilih_laki_bgrtengah' => $this->input->post('jml_pemilih_laki_bgrtengah'),
				'jml_pemilih_perempuan_bgrtengah' => $this->input->post('jml_pemilih_perempuan_bgrtengah'),
				'jml_pemilih_lakiperempuan_bgrtengah' => $this->input->post('jml_pemilih_lakiperempuan_bgrtengah'),
				'ket_bogortengah' => $this->input->post('ket_bogortengah'),

				'jml_kelurahan_bgrtimur' => $this->input->post('jml_kelurahan_bgrtimur'),
				'jml_tps_bgrtimur' => $this->input->post('jml_tps_bgrtimur'),
				'jml_pemilih_laki_bgrtimur' => $this->input->post('jml_pemilih_laki_bgrtimur'),
				'jml_pemilih_perempuan_bgrtimur' => $this->input->post('jml_pemilih_perempuan_bgrtimur'),
				'jml_pemilih_lakiperempuan_bgrtimur' => $this->input->post('jml_pemilih_lakiperempuan_bgrtimur'),
				'ket_bogortimur' => $this->input->post('ket_bogortimur'),

				'jml_kelurahan_bgrutara' => $this->input->post('jml_kelurahan_bgrutara'),
				'jml_tps_bgrutara' => $this->input->post('jml_tps_bgrutara'),
				'jml_pemilih_laki_bgrutara' => $this->input->post('jml_pemilih_laki_bgrutara'),
				'jml_pemilih_perempuan_bgrutara' => $this->input->post('jml_pemilih_perempuan_bgrutara'),
				'jml_pemilih_lakiperempuan_bgrutara' => $this->input->post('jml_pemilih_lakiperempuan_bgrutara'),
				'ket_bogorutara' => $this->input->post('ket_bogorutara'),

				'jml_kelurahan_tnhsareal' => $this->input->post('jml_kelurahan_tnhsareal'),
				'jml_tps_tnhsareal' => $this->input->post('jml_tps_tnhsareal'),
				'jml_pemilih_laki_tnhsareal' => $this->input->post('jml_pemilih_laki_tnhsareal'),
				'jml_pemilih_perempuan_tnhsareal' => $this->input->post('jml_pemilih_perempuan_tnhsareal'),
				'jml_pemilih_lakiperempuan_tnhsareal' => $this->input->post('jml_pemilih_lakiperempuan_tnhsareal'),
				'ket_tanahsareal' => $this->input->post('ket_tanahsareal'),

				'total_jmlkelurahan' => $this->input->post('total_jmlkelurahan'),
				'total_jmltps' => $this->input->post('total_jmltps'),
				'total_jmlpemilihlaki' => $this->input->post('total_jmlpemilihlaki'),
				'total_jmlpemilihperempuan' => $this->input->post('total_jmlpemilihperempuan'),
				'total_jmlpemilihlakiperempuan' => $this->input->post('total_jmlpemilihlakiperempuan'),
				'user_id' => $this->session->userdata('id_user'),
      ];

          $this->m_rekappartisipasi_tps->add($data);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <p> Data berhasil di simpan ! </p></div>');
          redirect('admin/rekap_partisipasi_tps');
        }
				  $data=array(
                                  'title' => 'KPU KOTA BOGOR',
                                  'title2' => 'Tambah Data Rekapitulasi Jumlah Pemilih Terdaftar dan Jumlah TPS',
                                  'error' => $this->upload->display_errors(),
                                  'jadwal_user' => $this->m_jadwal->jadwal_user(),
                                  'isi' => 'admin/rekappartisipasi_tps/tambah'
                          );
                        $this->load->view('admin/layout/v_wrapper', $data , FALSE);

      }

public function pdf($id)
	{
		$data['rekappartisipasi_tps_user'] = $this->m_rekappartisipasi_tps->pdf_data($id);
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

		 $data['rekappartisipasi_tps_user'] = $this->m_rekappartisipasi_tps->rekappartisipasi_tps_user();
		 $this->load->view('pdf/rekappartisipasi_tps', $data);
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Rekapitulasi Jumlah Pemilih Terdaftar dan Jumlah TPS';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Data Rekapitulasi Jumlah Pemilih Terdaftar dan Jumlah TPS - KPU KOTA BOGOR (Pilpres)';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "potrait";

				$html = $this->load->view('pdf/rekappartisipasi_tps', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}

/* End of file Rekap_partisipasi_tps.php */