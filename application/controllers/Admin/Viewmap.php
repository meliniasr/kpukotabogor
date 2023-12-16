<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewmap extends CI_Controller {

  public function __construct()
{
  parent::__construct();
  $this->load->model('m_viewmap');
}
   public function index()
  {
    $data=array(
      'title' => 'KPU KOTA BOGOR',
      'title2' => 'Viewmap',
      'isi' => 'admin/petapolitik/viewmap',
      'viewmap' => $this->m_viewmap->all_data('viewmap'),
      'kecamatan' => $this->m_viewmap->get_kecamatan(),
      'kelurahan' => $this->m_viewmap->get_kelurahan(),
      'geojson' => $this->m_viewmap->get_geojson(),
      'viewmap_user' => $this->m_viewmap->viewmap_user(),
      'piechartnasional' => $this->m_piechart_nasional->lists(),
      'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
      'pasangancalon_user' => $this->m_pasangancalon->pasangancalon_user(),
      'rekapkecamatan_user' => $this->m_rekaphasilpemilu_kecamatan->rekapkecamatan_user(),
    );
    $this->load->view('admin/layout/v_wrapper', $data , FALSE);
  }

}

/* End of file Viewmap.php */