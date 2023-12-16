<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index()
  {
 $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Dashboard',
      'isi' => 'admin/dashboard',
      'barchart_tingkatpartisipasi_user' => $this->m_barchart_tingkatpartisipasi->barchart_partisipasi_user(),
      'barchart_suratsuara_user' => $this->m_barchart_suratsuara->barchart_suratsuara_user(),
      'piechartkota_user' => $this->m_piechart_kota->piechartkota_user(),
       'piechartnasional_user' => $this->m_piechart_nasional->piechartnasional_user(),
       'piechartprovinsi_user' => $this->m_piechart_provinsi->piechartprovinsi_user(),
      'total_partai' => $this->m_partai->totaldata(),
      'total_dasarhukum' => $this->m_dasarhukum->totaldata(),
      'total_jadwal' => $this->m_jadwal->totaldata(),
      'total_logomaskot' => $this->m_logomaskot->totaldata(),
      'total_pasangancalon' => $this->m_pasangancalon->totaldata(),
      'total_viewmap' => $this->m_viewmap->totaldata(),
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

}

/* End of file Dashboard.php */