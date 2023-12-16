<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Beranda extends CI_Controller {

  public function index(){
      $data=array(
      'title' => 'KPU KOTA BOGOR',
      'jadwal' => $this->m_jadwal->get_jadwal(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'isi' => 'arsip/v_home'
      );
      $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }


function pemilu_presiden($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'jadwal' => $this->m_jadwal->get_jadwal(),
      'jadwal_user' => $this->m_jadwal->jadwal_user(),
      'detail' => $this->m_jadwal->pilpres($id),
      'isi' => 'arsip/v_detail_jadwal'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

  function dasar_hukum($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'dasarhukum' => $this->m_dasarhukum->lists(),
      'dasarhukum_user' => $this->m_dasarhukum->dasarhukum_user(),
      'detail' => $this->m_dasarhukum->pilpres($id),
      'isi' => 'arsip/v_dasarhukum'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

    function logo_maskot($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'logomaskot' => $this->m_logomaskot->lists(),
      'logomaskot_user' => $this->m_logomaskot->logomaskot_user(),
      'detail' => $this->m_logomaskot->pilpres($id),
      'isi' => 'arsip/v_logomaskot'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

  function pasangan_calon($id){

		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'pasangancalon' => $this->m_pasangancalon->lists(),
      'pasangancalon_user' => $this->m_pasangancalon->pasangancalon_user(),
      'detail' =>$this->m_pasangancalon->pilpres($id),
      'detail2' => $this->m_logomaskot->pilpres($id),
      'foto'  => $this->m_partai->get_partai(),
      'detail3' =>$this->m_pasangancalon->detail2($id),
      'detail3' =>$this->m_pasangancalon->lists_foto($id),
      'pasangancalon_user' => $this->m_pasangancalon->pasangancalon_user(),
      'isi' => 'arsip/v_pasangancalon',
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

function rekaphasilsuarasah_kecamatan($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'rekapkecamatan' => $this->m_rekaphasilpemilu_kecamatan->lists(),
      'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
      'detail' => $this->m_rekaphasilpemilu_kecamatan->pilpres($id),
      'isi' => 'arsip/v_rekapkecamatan'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

  function rekaphasilsuarasah_provinsi($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'rekapprovinsi' => $this->m_rekaphasilsuarasah_provinsi->lists(),
      'rekapprovinsi_user' => $this->m_rekaphasilsuarasah_provinsi->rekapprovinsi_user(),
      'detail' => $this->m_rekaphasilsuarasah_provinsi->pilpres($id),
      'isi' => 'arsip/v_rekapprovinsi'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

    function perolehan_suarasah_kota($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'piechartkota' => $this->m_piechart_kota->lists(),
      'piechartkota_user' => $this->m_piechart_kota->piechartkota_user(),
      'detail' => $this->m_piechart_kota->pilpres($id),
      'isi' => 'arsip/v_piechart_kota'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }


   function perolehan_suarasah_provinsi($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'piechartprovinsi' => $this->m_piechart_provinsi->lists(),
      'piechartprovinsi_user' => $this->m_piechart_provinsi->piechartprovinsi_user(),
      'detail' => $this->m_piechart_provinsi->pilpres($id),
      'isi' => 'arsip/v_piechart_provinsi'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

     function perolehan_suarasah_nasional($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'piechartnasional' => $this->m_piechart_nasional->lists(),
      'piechartnasional_user' => $this->m_piechart_nasional->piechartnasional_user(),
      'detail' => $this->m_piechart_nasional->pilpres($id),
      'isi' => 'arsip/v_piechart_nasional'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

   function pelantikan($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'pelantikan' => $this->m_pelantikan->lists(),
      'pelantikan_user' => $this->m_pelantikan->pelantikan_user(),
      'detail' => $this->m_pelantikan->pilpres($id),
      'isi' => 'arsip/v_pelantikan'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

  function rekap_partisipasi_tps($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'rekappartisipasi_tps' => $this->m_rekappartisipasi_tps->lists(),
      'rekappartisipasi_tps_user' => $this->m_rekappartisipasi_tps->rekappartisipasi_tps_user(),
      'detail' => $this->m_rekappartisipasi_tps->pilpres($id),
      'isi' => 'arsip/v_partisipasi'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

    function rekap_partisipasi_pemungutan_suara($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
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

      'detail' => $this->m_datapemilih_dpt->pilpres($id),
      'detail' => $this->m_datapemilih_dptb->pilpres($id),
      'detail' => $this->m_datapemilih_dpk->pilpres($id),
      'detail' => $this->m_datapemilih_dpktb->pilpres($id),
      'detail' => $this->m_jumlahkeseluruhan_datapemilih->pilpres($id),
      'detail' => $this->m_hakpilih_dpt->pilpres($id),
      'detail' => $this->m_hakpilih_dptb->pilpres($id),
      'detail' => $this->m_hakpilih_dpk->pilpres($id),
      'detail' => $this->m_hakpilih_dpktb->pilpres($id),
      'detail' => $this->m_jumlahkeseluruhan_hakpilih->pilpres($id),

      'isi' => 'arsip/v_rekap_pemungutansuara'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

    function tingkat_partisipasi_pemilih($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'barchart_tingkatpartisipasi' => $this->m_barchart_tingkatpartisipasi->lists(),
      'barchart_tingkatpartisipasi_user' => $this->m_barchart_tingkatpartisipasi->barchart_partisipasi_user(),
      'detail' => $this->m_barchart_tingkatpartisipasi->pilpres($id),
      'isi' => 'arsip/v_barchart_partisipasi'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

    function surat_suara($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
     'barchart_suratsuara' => $this->m_barchart_suratsuara->lists(),
      'barchart_suratsuara_user' => $this->m_barchart_suratsuara->barchart_suratsuara_user(),
      'detail' => $this->m_barchart_suratsuara->pilpres($id),
      'isi' => 'arsip/v_barchart_suratsuara'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

   function peta_politik($id){
		$data=array(
      'title' => 'KPU KOTA BOGOR',
      'viewmap' => $this->m_viewmap->all_data('viewmap'),
      'kecamatan' => $this->m_viewmap->get_kecamatan(),
      'kelurahan' => $this->m_viewmap->get_kelurahan(),
      'geojson' => $this->m_viewmap->get_geojson(),
      'viewmap_user' => $this->m_viewmap->viewmap_user(),
      'piechartnasional' => $this->m_piechart_nasional->lists(),
      'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
      'pasangancalon_user' => $this->m_pasangancalon->pasangancalon_user(),
      'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
      'detail' => $this->m_viewmap->pilpres($id),
      'detail2' => $this->m_rekaphasilpemilu_kecamatan->pilpres($id),
      'isi' => 'arsip/v_petapolitik'
        );
		 $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }

}
/* End of file Beranda.php */