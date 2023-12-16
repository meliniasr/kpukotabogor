<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select_model extends CI_Model {

function getdatakec(){
    $query =$this->db->query("SELECT * FROM kecamatan ORDER BY kecamatan ASC");
    return $query->result();
  }

function getdatakel($id_kecamatan){
    $query =$this->db->query("SELECT * FROM kelurahan WHERE id_kecamatan = '$id_kecamatan' ORDER BY kelurahan ASC");
    return $query->result();
  }

  function getdatageo($id_kelurahan){
    $query =$this->db->query("SELECT * FROM geojson WHERE id_kelurahan = '$id_kelurahan' ORDER BY geojson ASC");
    return $query->result();
  }

}

/* End of file Select_model.php */