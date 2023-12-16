<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

  public function index(){
      $data=array(
      'title' => 'KPU KOTA BOGOR',
      'isi' => 'arsip/v_kontak'
      );
      $this->load->view('arsip/layout/v_wrapperhome', $data , FALSE);
  }


}

/* End of file Kontak.php */