<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_login
{
  protected $ci;
function cek_login()
{
  $CI = &get_instance();
  $tahun = $CI->session->tahun;

  if ($tahun == NULL) {
    $CI->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"><button style="color:white" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Maaf, Anda harus Login terlebih dahulu !</p></div>');
    redirect('auth');
  }

  function is_it()
  {
    $CI = &get_instance();
    $tipeuser = $CI->session->level_user;

    if ($tipeuser == '2') {
      return $tipeuser;
    }
    return null;
  }

}
}